<?php

include_once 'curl/curl_class.php';

function management_center_home_page_display() {
    $page_content = '';
    $page_content = _get_current_weather_content();

    return $page_content;
}

function management_center_login_page_display() {
    $page_content = '';
    $page_content .= '';

    return $page_content;
}

function management_center_topic_upload_page_display($topic_id) {
    return $topic_id;
}

function management_center_imagewall_upload_page_display($topic_id) {
    return $topic_id;
}

function management_center_footprint_edit_page_display($fp_id) {
    return $fp_id;
}

function all_topic() {
    $page_content = '';
    $topics = _get_all_topic();
    foreach ($topics as $key => $topic) {
        $randomNum = _random_number(1);
        $page_content .= '<div class="edit-footprint-item color' . $randomNum . '" onclick="go_to_topic_edit(' . $topic->id . ');">';
        $page_content .= '<div style="float: left; width: 110px;">';
        $page_content .= '<div class="footprint-title">';
        $page_content .= $topic->name;
        $page_content .= '</div>';
        $page_content .= '<div class="footprint-body">';
        $page_content .= $topic->description;
        $page_content .= '</div>';
        $page_content .= '</div>';
        $page_content .= '<div style="float: left; padding-top: 10px; padding-left: 30px;">';
        $image = _get_topic_cover_images($topic->id);
        $page_content .= '<img src="' . $image->url . '" width="100px" height="100px"/>';
        $page_content .= '</div>';
        $page_content .= '</div>';
    }
    return $page_content;
}

function all_footprint() {
    $page_content = '';
    $footprints = _get_all_footprint();
    foreach ($footprints as $key => $footprint) {
        $randomNum = _random_number(1);
        $page_content .= '<div class="edit-footprint-item color' . $randomNum . '" onclick="go_to_footprint_edit(' . $footprint->id . ');">';
        $page_content .= '<div class="footprint-title">';
        $page_content .= $footprint->title;
        $page_content .= '</div>';
        $page_content .= '<div class="footprint-body">';
        $page_content .= _strip_string($footprint->body);
        $page_content .= '</div>';
        $page_content .= '</div>';
    }
    return $page_content;
}

function generate_topic_id() {
    $randomStr = _random_number(10);
    while (_check_existing_topic_id($randomStr)) {
        $randomStr = _random_number(10);
    }
    _insert_topic($randomStr);
    echo $randomStr;
}

function generate_footprint_id() {
    $randomStr = _random_number(5);
    while (_check_existing_footprint_id($randomStr)) {
        $randomStr = _random_number(5);
    }
    _insert_footprint($randomStr);
    echo $randomStr;
}

function save_topic_name($topic_id, $name, $description) {
    $query = db_update('topics')
            ->fields(array(
                'name' => $name,
                'description' => $description,
            ))
            ->condition('id', $topic_id)
            ->execute();
}

function save_footprint($fp_id) {
    $title = $_POST['title'];
    $body = $_POST['body'];
    $query = db_update('footprints')
            ->fields(array(
                'title' => $title,
                'body' => $body,
            ))
            ->condition('id', $fp_id)
            ->execute();
    print $fp_id;
}

function _check_existing_topic_id($topic_id) {
    $existing = FALSE;
    $query = db_select('topics', 't');
    $query->fields('t');
    $query->condition('t.id', $topic_id);
    $count = $query->execute()->rowCount();
    if ($count != 0) {
        $existing = TRUE;
    }
    return $existing;
}

function _check_existing_footprint_id($fp_id) {
    $existing = FALSE;
    $query = db_select('footprints', 'f');
    $query->fields('f');
    $query->condition('f.id', $fp_id);
    $count = $query->execute()->rowCount();
    if ($count != 0) {
        $existing = TRUE;
    }
    return $existing;
}

function _insert_topic($topic_id) {
    $query = db_insert('topics')
            ->fields(array(
                'id' => $topic_id,
                'name' => NULL,
                'description' => NULL,
            ))
            ->execute();
}

function _insert_footprint($fp_id) {
    $query = db_insert('footprints')
            ->fields(array(
                'id' => $fp_id,
                'title' => NULL,
                'body' => NULL,
            ))
            ->execute();
}

function _random_string($length, $max = FALSE) {
    if (is_int($max) && $max > $length) {
        $length = mt_rand($length, $max);
    }
    $output = '';

    for ($i = 0; $i < $length; $i++) {
        $which = mt_rand(0, 2);

        if ($which === 0) {
            $output .= mt_rand(0, 9);
        } elseif ($which === 1) {
            $output .= chr(mt_rand(65, 90));
        } else {
            $output .= chr(mt_rand(97, 122));
        }
    }
    return $output;
}

function _random_number($length, $max = FALSE) {
    if (is_int($max) && $max > $length) {
        $length = mt_rand($length, $max);
    }
    $output = '';
    for ($i = 0; $i < $length; $i++) {
        $output .= mt_rand(1, 9);
    }
    return $output;
}

function _get_all_topic() {
    $query = db_select('topics', 't');
    $query->fields('t');
    $result = $query->execute()->fetchAll();
    return $result;
}

function _get_all_footprint() {
    $query = db_select('footprints', 'fp');
    $query->fields('fp');
    $result = $query->execute()->fetchAll();
    return $result;
}

function _strip_string($string) {
    $string = strip_tags($string);
    $string = substr($string, 0, 150);
    return $string . '……';
}

function _get_current_weather_content() {
    $curl = new CURL();
    $current_data = $curl->get('http://www.weather.com.cn/data/sk/101210101.html');
    $current_data = json_decode($current_data);
    $current_weather = $curl->get('http://www.weather.com.cn/data/cityinfo/101210101.html');
    $current_weather = json_decode($current_weather);
    $detail_data = $curl->get('http://m.weather.com.cn/data/101210101.html');
    $detail_data = json_decode($detail_data);

    $current_temp = $current_data->weatherinfo->temp;
    $current_city = $current_data->weatherinfo->city;
    $current_wind = $current_data->weatherinfo->WD;
    $current_weather = $current_weather->weatherinfo->weather;

    $today_temp_range = $detail_data->weatherinfo->temp1;
    $today_temp_range = str_replace('~', '/', $today_temp_range);
    $today_weather = $detail_data->weatherinfo->weather1;

    $tomorrow_temp_range = $detail_data->weatherinfo->temp2;
    $tomorrow_temp_range = str_replace('~', '/', $tomorrow_temp_range);
    $tomorrow_weather = $detail_data->weatherinfo->weather2;

    $content = '<div>';
    $content .= '<div style="margin-left: 20px; padding-top: 20px; font-size: 40px;">' . $current_temp . '℃</div>';
    $content .= '<div style="margin-left: 20px; margin-top: 5px; font-size: 16px;">' . $current_city . '（当地）</div>';
    $content .= '<div style="margin-left: 20px; margin-top: 5px; font-size: 16px;">' . $current_weather . ' ' . $current_wind . '</div>';
    $content .= '</div>';
    $content .= '<div style="padding-top: 30px; padding-left: 20px;">';
    $content .= '<div style="float: left;">';
    $content .= '<div>今天</div>';
    $content .= '<div>' . $today_temp_range . '</div>';
    $content .= '<div></div>';
    $content .= '</div>';
    $content .= '<div style="float: left; padding-left: 40px;">';
    $content .= '<div>明天</div>';
    $content .= '<div>' . $tomorrow_temp_range . '</div>';
    $content .= '<div></div>';
    $content .= '</div>';
    $content .= '<div style="clear: both;"></div>';
    $content .= '</div>';

    return $content;
}

function _get_topic_cover_images($topic_id) {
    $results = db_select('managed_images', 'mi')->fields('mi')->condition('mi.topic', $topic_id)->condition('mi.is_cover', 1)->execute()->fetchObject();
    return $results;
}

?>
