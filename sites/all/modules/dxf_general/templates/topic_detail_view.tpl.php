<link rel="stylesheet" type="text/css" href="/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/css/jquery.jscrollpane.custom.css" />

<div class="container">
    <div style="background: white; width: 100%; height: 80px; margin-bottom: 20px;">
        <div style="width: 100%; height: 30px; background: #3c3636; font-size: 16px; text-shadow: 1px 1px 2px black;">
            <p style="padding: 8px 20px; color: white;">Canon 600D / Canon 15-85 IS</p>
        </div>
    </div>
    <div class="topic-main-area" style="height: 550px;">
        <?php print $topic_images; ?>
    </div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/js/jquery.mousewheel.js"></script>
<script src="/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/js/jquery.jscrollpane.min.js"></script>

<script>
    $(".topic-main-area").jScrollPane({verticalGutter : 0, hideFocus : true });
</script>