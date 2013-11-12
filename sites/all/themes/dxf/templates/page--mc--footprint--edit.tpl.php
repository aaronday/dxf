<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        
        <link type="text/css" rel="stylesheet" href="/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/css/jquery-te/jquery-te-1.4.0.css">
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
        
        <script type="text/javascript" src="http://code.jquery.com/jquery.min.js" charset="utf-8"></script>
        <script type="text/javascript" src="/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/js/jquery-te/jquery-te-1.4.0.min.js" charset="utf-8"></script>
        
        <script>
            function saveFootprint(){
                var title = $("#title").val();
                var body = $("#body").val();
            }
        </script>
    </head>
    <body style="background-color:  white; background-image:  none; width: 100%; height: auto;">
        <div style="padding-top: 20px; margin: 20px 100px;">
            <div>题目：</div>
            <input id="title" name="title" value="" style="height: 24px; width: 300px; margin-top:10px; border:#333 1px solid; border-radius:3px; -webkit-border-radius:3px; -moz-border-radius:3px"/>
            <div style="width: 100%; height: 20px;"></div>
            <div>正文：</div>
            <textarea id="body" name="textarea" class="jqte-test"></textarea>
            <br/>
            <button type="button" class="btn btn-primary start" onclick="saveFootprint();" style="background-color: #d64f44; border-color: #d71345;">保存</button>
        </div>
        <script>
	$('.jqte-test').jqte();
	// settings of status
	var jqteStatus = true;
	$(".status").click(function()
	{
                        jqteStatus = jqteStatus ? false : true;
                        $('.jqte-test').jqte({"status" : jqteStatus})
	});
        </script>
</body> 
</html>
