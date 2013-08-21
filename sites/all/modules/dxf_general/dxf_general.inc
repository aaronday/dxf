<?php

function home_page_display() {
    $page_content = '';
    $page_content .= '<div class="reveal">';
    $page_content .= '<div class="slides">';
    $page_content .= '<section>';
    $page_content .= '<h1>戴小枫的摄影小站</h1>';
    $page_content .= '<br />';
    $page_content .= '<h3>[ AARON-PHOTOGRAPHY ]</h3>';
    $page_content .= '<p><small>Created by <a href="#">Aaron Dai</a> / <a target="_blankcontrols" href="http://weibo.com/aaronlovequeena">@Aaron的兔子洞</a></small></p>';
    $page_content .= '<div style="position:relative; top: 200px; left: 500px; font-size: 20px;">关于我，点这里看看吧';
    $page_content .= '<img style="margin: 0 !important; border:0 !important; box-shadow: 0 0 0 !important;" src="' . drupal_get_path('theme', 'dxf') . '/images/arrow.png" width="80px" height="30px"/>';
    $page_content .= '</div>';
    $page_content .= '</section>';
    $page_content .= '<section>';
    $page_content .= '<p>我是一个普通的程序员，在一家外资公司上班</p>';
    $page_content .= '<p>每天几乎都过着朝九晚五的办公室生活</p>';
    $page_content .= '<p>现在的人们都管我们这类人群叫作IT民工</p>';
    $page_content .= '<p>终日困在充斥着惨白灯光的封闭空间里，面对着电脑，设计各式各样的程序</p>';
    $page_content .= '<p>然后赚着吃不饱也饿不死的薪水，混混沌沌地过着日子</p>';
    $page_content .= '<p>……</p>';
    $page_content .= '<p>然而，这并不是我想要的生活!</p>';
    $page_content .= '</section>';
    $page_content .= '<section>';
    $page_content .= '<div style="float: left">';
    $page_content .= '<img style="margin: 0px 50px 0px 0px !important; border:0 !important; box-shadow: 0 0 0 !important;" src="' . drupal_get_path('theme', 'dxf') . '/images/bbk.jpg" width="150px" height="350px"/>';
    $page_content .= '</div>';
    $page_content .= '<div style="float: left">';
    $page_content .= '<p>作为一个理科出生的男人，我的身上缺少了那一份文艺的气质</p>';
    $page_content .= '<p>但是我依旧知道，我的生活，不该如这般冰冷，它需要充满热情和希望</p>';
    $page_content .= '<p>……</p>';
    $page_content .= '<p>于是，我开始阅读和旅行</p>';
    $page_content .= '<p>读书，要么去旅行，身体和灵魂，总有一个要在路上</p>';
    $page_content .= '<p>追寻着这句话语，我踏上了人生新的旅途</p>';
    $page_content .= '<br />';
    $page_content .= '<p>而与此同时，我迷恋上另一件事儿 —— <strong style="font-size: 50px;">摄影</strong></p>';
    $page_content .= '</div>';
    $page_content .= '</section>';
    $page_content .= '<section>';
    $page_content .= '<div style="margin-top: 100px;">';
    $page_content .= '<p>当然用摄影这次词可能有点过了，我终究不过是个爱拍照的人而已</p>';
    $page_content .= '<p>没有好的器械，没有专业的知识，没有娴熟的技巧</p>';
    $page_content .= '<p>如果说真有什么的话，那便是这颗期待美好的心了</p>';
    $page_content .= '<p>眼睛所看到的世界，就是我的世界</p>';
    $page_content .= '<p>所以，用心发现美丽，然后用相机定格下来，这样我的世界就会充满温柔的力量</p>';
    $page_content .= '</div>';
    $page_content .= '<div>';
    $page_content .= '<img style="margin: 0 !important; border:0 !important; box-shadow: 0 0 0 !important;" src="' . drupal_get_path('theme', 'dxf') . '/images/camera.jpg" width="300px" height="250px"/>';
    $page_content .= '</div>';
    $page_content .= '</section>';
    $page_content .= '<section>';
    $page_content .= '<div>';
    $page_content .= '<p>在钢筋水泥浇筑的都市丛林中生活，确实难免让人抑郁</p>';
    $page_content .= '<p>生活的压力往往令人窒息</p>';
    $page_content .= '<p>然而现实的枷锁不应该束缚我们追求梦想的脚步</p>';
    $page_content .= '<p>不要为生活所累，拼命地追赶着梦想</p>';
    $page_content .= '<p>是在追梦的路上跌倒更疼，还是在碌碌无为的过完一生后后悔不及更疼？</p>';
    $page_content .= '<p>……</p>';
    $page_content .= '<p>更多的记录下这世上令人感动的瞬间，这就是我的梦！</p>';
    $page_content .= '<p>一起走吧</p>';
    $page_content .= '<p>谁说不能让我此生自传，如同诗一般</p>';
    $page_content .= '<p>无论多远未来，读来依然一字一句一篇都灿烂</p>';
    $page_content .= '</div>';
    $page_content .= '<br />';
    $page_content .= '<div>';
    $page_content .= '<img style="margin: 0 !important;  !important; border:0 !important; box-shadow: 0 0 0 !important;" src="' . drupal_get_path('theme', 'dxf') . '/images/sunraise.jpg" width="500px" height="150px"/>';
    $page_content .= '</div>';
    $page_content .= '</section>';

    $page_content .= '</div>';
    $page_content .= '</div>';

    $page_content .= '<script src="' . drupal_get_path('theme', 'dxf') . '/lib/js/head.min.js"></script>';
    $page_content .= '<script src="' . drupal_get_path('theme', 'dxf') . '/js/reveal.min.js"></script>';
    $page_content .= '<script>';
    $page_content .= 'Reveal.initialize({';
    $page_content .= 'controls: true,';
    $page_content .= 'progress: true,';
    $page_content .= 'history: true,';
    $page_content .= 'center: true,';
    $page_content .= 'theme: Reveal.getQueryHash().theme,';
    $page_content .= 'transition: Reveal.getQueryHash().transition || "default",';
    $page_content .= 'dependencies: [';
    $page_content .= '{src: "' . drupal_get_path('theme', 'dxf') . '/lib/js/classList.js", condition: function() {';
    $page_content .= 'return !document.body.classList;';
    $page_content .= '}},';
    $page_content .= '{src: "' . drupal_get_path('theme', 'dxf') . '/plugin/markdown/marked.js", condition: function() {';
    $page_content .= 'return !!document.querySelector("[data-markdown]");';
    $page_content .= '}},';
    $page_content .= '{src: "' . drupal_get_path('theme', 'dxf') . '/plugin/markdown/markdown.js", condition: function() {';
    $page_content .= 'return !!document.querySelector("[data-markdown]");';
    $page_content .= '}},';
    $page_content .= '{src: "' . drupal_get_path('theme', 'dxf') . '/plugin/highlight/highlight.js", async: true, callback: function() {';
    $page_content .= 'hljs.initHighlightingOnLoad();';
    $page_content .= '}},';
    $page_content .= '{src: "' . drupal_get_path('theme', 'dxf') . '/plugin/zoom-js/zoom.js", async: true, condition: function() {';
    $page_content .= 'return !!document.body.classList;';
    $page_content .= '}},';
    $page_content .= '{src: "' . drupal_get_path('theme', 'dxf') . '/plugin/notes/notes.js", async: true, condition: function() {';
    $page_content .= 'return !!document.body.classList;';
    $page_content .= '}}';
    $page_content .= ']';
    $page_content .= '});';
    $page_content .= '</script>';

    return $page_content;
}

function image_wall_display() {
    $page_content = '';
    $page_content .= '<link rel="stylesheet" type="text/css" href="' . drupal_get_path('theme', 'dxf') . '/css/wallgallery.css" />';
    $page_content .= '<link rel="stylesheet" type="text/css" href="' . drupal_get_path('theme', 'dxf') . '/css/component.css" />';
    $page_content .= '<script src="' . drupal_get_path('theme', 'dxf') . '/js/modernizr.custom.js"></script>';
    $page_content .= '<div class="container">	';
    $page_content .= '<div style="width: 100%; height: 30px; background: #3c3636; font-size: 16px; text-shadow: 1px 1px 2px black;">';
    $page_content .= '<p style="padding: 8px 20px; color: white;">IMAGE GALLERY WALL</p>';
    $page_content .= '</div>';


    $page_content .= '<div id="gr-gallery" class="gr-gallery">';
    $page_content .= '<div class="gr-main">';
    for ($i = 1; $i <= 20; $i++) {
        $page_content .= '<figure>';
//        $page_content .= '<div><img src="' . drupal_get_path('theme', 'dxf') . '/images/xiaohei.jpg" alt="img01" /></div>';
        $page_content .= '<div><img src="' . 'http://localhost/dxf/sites/default/files/photography/GalleryWall/' . $i . '_副本.JPG" alt="img' . $i . '" /></div>';
        $page_content .= '<figcaption>';
        $page_content .= '<h2><span>' . $i . '</span></h2>';
        $page_content .= '<div><p>Hangzhou, 2013, by <a href="http://weibo.com/aaronlovequeena">Aaron Dai</a></p></div>';
        $page_content .= '</figcaption>';
        $page_content .= '</figure>';
    }
    $page_content .= '</div>';
    $page_content .= '</div>';
    $page_content .= '</div>';

    $page_content .= '<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>';
    $page_content .= '<script src="' . drupal_get_path('theme', 'dxf') . '/js/wallgallery.js"></script>';
    $page_content .= '<script>';
    $page_content .= '$(function() {';
    $page_content .= 'Gallery.init( {';
    $page_content .= 'layout : [5,5,5,5]';
    $page_content .= '} );';
    $page_content .= '});';
    $page_content .= '</script>';

    return $page_content;
}

function featured_topic_display() {
    $page_content = '';
    $page_content .= '<link rel="stylesheet" type="text/css" href="' . drupal_get_path('theme', 'dxf') . '/css/topic.css" />';
    $page_content .= '<link rel="stylesheet" type="text/css" href="' . drupal_get_path('theme', 'dxf') . '/css/gridNavigation.css" />';
    $page_content .= '<link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet" type="text/css" />';
    $page_content .= '<link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css" />';
    $page_content .= '<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>';
    $page_content .= '<script type="text/javascript" src="' . drupal_get_path('theme', 'dxf') . '/js/jquery.easing.1.3.js"></script>';
    $page_content .= '<script type="text/javascript" src="' . drupal_get_path('theme', 'dxf') . '/js/jquery.mousewheel.js"></script>';
    $page_content .= '<script type="text/javascript" src="' . drupal_get_path('theme', 'dxf') . '/js/jquery.gridnav.js"></script>';
    $page_content .= '<script type="text/javascript">';
    $page_content .= '$(function() {';
    $page_content .= '$("#tj_container").gridnav({';
    $page_content .= 'type: {';
    $page_content .= 'mode: "seqfade",'; // use def | fade | seqfade | updown | sequpdown | showhide | disperse | rows
    $page_content .= 'speed: 500,';
    $page_content .= 'easing: "",';
    $page_content .= 'factor: 100,';
    $page_content .= 'reverse: ""';
    $page_content .= '}';
    $page_content .= '});';
    $page_content .= '});';
    $page_content .= '</script>';
    $page_content .= '<div class="topic_bg">';
    $page_content .= '<div id="topic_title" style="margin-left: 200px; font-weight:600; font-size: 32px; text-shadow: 0px 0px 6px rgba(0, 0, 0, 0.2);">';
    $page_content .= 'FEATURED TOPIC';
    $page_content .= '</div>';
    $page_content .= '<div id="tj_container" class="tj_container" style="margin-top: 20px;">';
    $page_content .= '<div class="tj_nav">';
    $page_content .= '<span id="tj_prev" class="tj_prev">Previous</span>';
    $page_content .= '<span id="tj_next" class="tj_next">Next</span>';
    $page_content .= '</div>';
    $page_content .= '<div class="tj_wrapper">';
    $page_content .= '<ul class="tj_gallery">';
    for ($i = 1; $i <= 3; $i++) {
            $page_content .= '<li><a href="#"><img src="http://localhost/dxf/sites/default/files/photography/FeaturedTopic/' . $i . '/cover_副本.JPG" alt="" width="190px" height="190px"/></a></li>';
    }
    $page_content .= '</ul>';
    $page_content .= '</div>';
    $page_content .= '</div>';
    $page_content .= '</div>';

    return $page_content;
}

?>
