<link rel="stylesheet" type="text/css" href="/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/css/topic.css" />
<link rel="stylesheet" type="text/css" href="/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/css/gridNavigation.css" />
<link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script type="text/javascript" src="/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/js/jquery.gridnav.js"></script>
<script type="text/javascript">
    $(function() {
        $("#tj_container").gridnav({
            type: {
                mode: "seqfade", // use def | fade | seqfade | updown | sequpdown | showhide | disperse | rows
                speed: 500,
                easing: "",
                factor: 100,
                reverse: ""
            }
        });
    });
</script>
<div class="topic_bg">
    <div id="topic_title" style="margin-left: 200px; font-weight:600; font-size: 32px; text-shadow: 0px 0px 6px rgba(0, 0, 0, 0.2);">
        FEATURED TOPIC
    </div>
    <div id="tj_container" class="tj_container" style="margin-top: 20px;">
        <div class="tj_nav">
            <span id="tj_prev" class="tj_prev">Previous</span>
            <span id="tj_next" class="tj_next">Next</span>
        </div>
        <div class="tj_wrapper">
            <ul class="tj_gallery">
                <?php print $topic_cover_images; ?>
            </ul>
        </div>
    </div>
</div>




