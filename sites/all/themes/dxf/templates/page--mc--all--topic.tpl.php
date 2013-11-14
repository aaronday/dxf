<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/css/upload/style.css">

        <script>
            function go_to_topic_edit(tId) {
                window.location.href = '/dxf/mc/topic/upload/' + tId;
            }
            function go_mc_home(){
                window.location.href = '/dxf/mc';
            }
        </script>
    </head>
    <body style="background-color:  white; background-image:  none; width: 100%; height: auto;">
        <div class="container">
            <h1>编辑作品</h1>
            <br>
            <?php print $page['content']['system_main']['main']['#markup']; ?>
        </div>
        <div style="position: absolute; left: 1050px; top: 90px; cursor: pointer;" onclick="go_mc_home();">
            <img src="/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/images/MB_0006_back.png" width="50px" height="50px"/>
        </div>
    </body> 
</html>
