<link rel="stylesheet" type="text/css" href="/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/css/wallgallery.css" />
<link rel="stylesheet" type="text/css" href="/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/css/component.css" />
<script src="/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/js/modernizr.custom.js"></script>
<div class="container">
    <div style="width: 100%; height: 30px; background: #3c3636; font-size: 16px; text-shadow: 1px 1px 2px black;">
        <p style="padding: 8px 20px; color: white;">IMAGE GALLERY WALL</p>
    </div>

    <div id="gr-gallery" class="gr-gallery">
        <div class="gr-main">
                <?php print $wall_images; ?>
        </div>
    </div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/js/wallgallery.js"></script>
<script>
    $(function() {
        Gallery.init({
            <?php print $wall_layout; ?>
        });
    });
</script>