<?php

function management_center_home_page_display() {
    $page_content = '';
    $page_content .= '';

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

function all_topic() {
    $page_content = '';
    $page_content .= '';

    return $page_content;
}

function all_footprint() {
    $page_content = '';
    $page_content .= '';

    return $page_content;
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
        $output .= mt_rand(0, 9);
    }
    return $output;
}

?>
