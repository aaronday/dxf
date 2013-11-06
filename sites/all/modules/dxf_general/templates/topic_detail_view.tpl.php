<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script type="text/javascript" src="/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/js/jquery.orbit-1.2.3.min.js"></script>
<link rel="stylesheet" href="/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/css/orbit-1.2.3.css">
<script type="text/javascript">
    $(window).load(function() {
        $("#featured").orbit({animation: "fade"});
    });
</script>
<div style="width: 100%; height: 30px; background: #3c3636; font-size: 16px; text-shadow: 1px 1px 2px black;">
    <p style="padding: 8px 20px; color: white;">Canon 600D / Canon 15-85 IS</p>
</div>
<div id="imgSilde" style="margin-left: 220px; margin-top: 30px;">
    <div id="featured" >
        <?php print $topic_images; ?>
    </div>
</div>
