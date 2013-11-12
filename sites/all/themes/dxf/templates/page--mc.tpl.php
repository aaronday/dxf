<!DOCTYPE HTML>
<html lang="en">
    <head>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script>
            function create_topic(){
                $.ajax({
                    type: 'post',
                    url: '/dxf/mc/generatetopicid',
                    success: function(msg){
                        window.location.href='/dxf/mc/topic/upload/'+msg;
                    },
                    error: function(){
                        alert('fail');
                    }
                })
            }
            
            function go_to_imagewall(){
                window.location.href='/dxf/mc/imagewall/upload/1000';
            }
        </script>
    </head>
    <body style="background-color:  white; background-image:  none; width: 100%; height: 100%;">
        <div class="mc-container" style="width: 100%; height: 100%;">
            <div class="mc-header">
                <div class="mc-logo">

                </div>
            </div>
            <div class="mc-content">
                <div class="mc-content-intr">
                    你想要干什么类……
                </div>
                <div class="mc-content-actions">
                    <div class="mc-full-column" onclick="create_topic();">
                        <div class='mc-full-item color1'>
                            发布作品
                        </div>
                        <div class='mc-full-item color2'>
                            
                        </div>
                        <div class='mc-full-item color3'></div>
                    </div>
                    <div class="mc-full-column">
                        <div class='mc-full-item color4' onclick="go_to_imagewall();">
                            上传画廊照片
                        </div>
                        <div class='mc-big-item color5'></div>
                    </div>
                    <div class="mc-full-column">
                        <div class='mc-full-item color6'></div>
                        <div class='mc-full-item color7'></div>
                        <div class='mc-full-item color8'></div>
                    </div>
                    <div class="mc-semi-column">
                        <div class='mc-semi-item color9'></div>
                        <div class='mc-semi-item color10'></div>
                        <div class='mc-semi-item color11'></div>
                    </div>
                </div>
            </div>
            <div class="mc-footer">

            </div>
        </div>
    </body> 
</html>
