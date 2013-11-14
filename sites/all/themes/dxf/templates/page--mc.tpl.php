<!DOCTYPE HTML>
<html lang="en">
    <head>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script type="text/javascript" src="/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/js/mc.js"></script>
    </head>
    <body style="background-color:  white; background-image:  none; width: 100%; height: 100%;">
        <div class="mc-container" style="width: 100%; height: 100%;">
            <div class="mc-header">
                <div class="mc-logo">

                </div>
                <div style="float: right; color: white; margin-top: 28px; margin-right: 250px; ">
                    欢迎回来，<?php Global $user; print $user->name; ?> | <a style="color: white;" href="/dxf/user/logout">登出</a>
                </div>
            </div>
            <div class="mc-content">
                <div class="mc-content-intr">
                    你想要干什么类……
                </div>
                <div class="mc-content-actions">
                    <div class="mc-full-column">
                        <div class="mc-full-item color1" onclick="create_topic();">
                            <div class="mc-item-icon">
                                <img width="60px" height="60px" src="/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/images/MB_0005_Camera.png" />
                            </div>
                            <div class="mc-item-text">
                                发布作品
                            </div>
                        </div>
                        <div class="mc-full-item color2" onclick="create_footprint();">
                            <div class="mc-item-icon">
                                <img width="60px" height="60px" src="/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/images/MB_0018_note1.png" />
                            </div>
                            <div class="mc-item-text">
                                发布日志
                            </div>
                        </div>
                        <div class="mc-full-item color3">
                            <div id="date" style="padding-left: 20px; padding-top: 10px; font-size: 18px;"></div>
                            <div id="day" style="padding-left: 20px; padding-top: 2px; font-size: 18px;"></div>
                            <div id="time" style="padding-left: 130px; padding-top: 2px; font-size: 40px;"></div>
                        </div>
                    </div>
                    <div class="mc-full-column">
                        <div class='mc-full-item color4' onclick="go_to_imagewall();">
                            <div class="mc-item-icon">
                                <img width="60px" height="60px" src="/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/images/MB_0012_landskape.png" />
                            </div>
                            <div class="mc-item-text">
                                管理画廊
                            </div>
                        </div>
                        <div class="mc-big-item color5">
<?php print $page['content']['system_main']['main']['#markup']; ?>
                        </div>
                    </div>
                    <div class="mc-full-column">
                        <div class="mc-full-item color6" onclick="go_to_managetopic();">
                            <div class="mc-item-icon">
                                <img width="60px" height="60px" src="/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/images/MB_0011_macro.png" />
                            </div>
                            <div class="mc-item-text">
                                管理作品
                            </div>
                        </div>
                        <div class="mc-full-item color7" onclick="go_to_managefootprint();">
                            <div class="mc-item-icon">
                                <img width="60px" height="60px" src="/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/images/MB_0017_note2.png" />
                            </div>
                            <div class="mc-item-text">
                                管理日志
                            </div>
                        </div>
                        <div class="mc-full-item color8"></div>
                    </div>
                    <div class="mc-semi-column">
                        <div class="mc-semi-item color9">
                            <div style="padding:30px;">
                                <img width="60px" height="60px" src="/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/images/MB_0021_tools.png"/>
                            </div>
                        </div>
                        <div class="mc-semi-item color10">
                            <div style="padding:30px;">
                                <img width="60px" height="60px" src="/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/images/MB_0018_help.png"/>
                            </div>
                        </div>
                        <div class="mc-semi-item color11">
                            <div style="padding:30px;">
                                <img width="60px" height="60px" src="/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/images/MB_0023_home2.png"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mc-footer">

            </div>
        </div>
    </body> 
</html>
