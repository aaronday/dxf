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

function generate_topic_id(){
    $randomStr =  _random_number(20);
    while(_check_existing_topic_id($randomStr)){
        $randomStr =  _random_number(20);
    }
    _insert_topic($randomStr);
    echo $randomStr;
}

function save_topic_name($topic_id, $name, $description){
    $query = db_update('topics')
            ->fields(array(
                'name' => $name,
                'description' => $description,
            ))
            ->condition('id', $topic_id)
            ->execute();
}

function _check_existing_topic_id($topic_id){
    $existing = FALSE;
    $query = db_select('topics', 't');
    $query->fields('t');
    $query->condition('t.id', $topic_id);
    $count = $query->execute()->rowCount();
    if($count !=0){
        $existing = TRUE;
    }
    return $existing;
}

function _insert_topic($topic_id){
    $query = db_insert('topics')
            ->fields(array(
                'id' => $topic_id,
                'name' => NULL,
                'description' => NULL,
            ))
            ->execute();
}

function _random_string($length, $max=FALSE)
{
  if (is_int($max) && $max > $length)
  {
    $length = mt_rand($length, $max);
  }
  $output = '';
  
  for ($i=0; $i<$length; $i++)
  {
    $which = mt_rand(0,2);
    
    if ($which === 0)
    {
      $output .= mt_rand(0,9);
    }
    elseif ($which === 1)
    {
      $output .= chr(mt_rand(65,90));
    }
    else
    {
      $output .= chr(mt_rand(97,122));
    }
  }
  return $output;
}

function _random_number($length, $max=FALSE){
    if (is_int($max) && $max > $length)
    {
      $length = mt_rand($length, $max);
    }
    $output = '';
    for ($i=0; $i<$length; $i++)
    {
        $output .= mt_rand(0,9);
    }
    return $output;
}

?>
