<?php

function home_page_display(){
    $page_content = '';
    $page_content .= '<div class="reveal">';
    $page_content .= '<div class="slides">';
    $page_content .= '<section>';
    $page_content .= '<h1>Reveal.js</h1>';
    $page_content .= '<h3>HTML Presentations Made Easy</h3>';
    $page_content .= '<p><small>Created by <a href="http://hakim.se">Hakim El Hattab</a> / <a href="http://twitter.com/hakimel">@hakimel</a></small></p>';
    $page_content .= '</section>';
    $page_content .= '</div>';
    $page_content .= '</div>';
    
    return $page_content;
}

function image_wall_display(){
    $page_content = '';
    $page_content .= '<div class="wall-bg">';
    $page_content .= '</div>';
    
    return $page_content;
}

?>
