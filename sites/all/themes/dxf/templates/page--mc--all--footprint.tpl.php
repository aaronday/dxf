<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/css/upload/style.css">

        <script>
            function go_to_footprint_edit(fpId) {
                window.location.href = '/dxf/mc/footprint/edit/' + fpId;
            }
        </script>
    </head>
    <body style="background-color:  white; background-image:  none; width: 100%; height: auto;">
        <div class="container">
            <h1>编辑日志</h1>
            <br>
            <?php print $page['content']['system_main']['main']['#markup']; ?>
        </div>
    </body> 
</html>
