<?php ?>
<div class="m-logbg" style="opacity: 1;">
    <img id="bg" src="/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/images/mc-login-bg.jpg" style="width: 1366px; height: auto; margin-left: 0px; margin-top: -255.61369047619047px; visibility: visible; opacity: 1;">
</div>
<div id="page-wrapper">
    <div id="page">
        <div id="main-wrapper" class="clearfix" style="width: 800px; margin: 0px auto; padding-top: 180px;">
            <div class="mc-login-title" style="width: 750px; margin: 0px auto;">点滴·记录·片刻·永恒</div><!-- <img src="/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/images/mc-login-title.png" width="600px" height="180px"/> -->
            <div id="main" class="clearfix" style="margin-top: 50px;">
                <div id="content" class="column">
                    <div class="section">
                        <?php print render($page['login_block']); ?>

                    </div>
                </div> <!-- /.section, /#content -->
            </div>
        </div> <!-- /#main, /#main-wrapper -->
    </div>
</div> <!-- /#page, /#page-wrapper -->
