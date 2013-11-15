<div class="reveal">
    <div class="slides">
        <section>
            <h1>戴小枫的摄影小站</h1>
            <br />
            <h3>[ AARON-PHOTOGRAPHY ]</h3>
            <p><small>Created by <a href="#">Aaron Dai</a> / <a target="_blankcontrols" href="http://weibo.com/aaronlovequeena">@Aaron的兔子洞</a></small></p>
            <div style="position:relative; top: 200px; left: 500px; font-size: 20px;">关于我，点这里看看吧
                <img style="margin: 0 !important; border:0 !important; box-shadow: 0 0 0 !important;" src="/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/images/arrow.png" width="80px" height="30px"/>
            </div>
        </section>
        <section>
            <p>我是一个普通的程序员，在一家外资公司上班</p>
            <p>每天几乎都过着朝九晚五的办公室生活</p>
            <p>现在的人们都管我们这类人群叫作IT民工</p>
            <p>终日困在充斥着惨白灯光的封闭空间里，面对着电脑，设计各式各样的程序</p>
            <p>然后赚着吃不饱也饿不死的薪水，混混沌沌地过着日子</p>
            <p>……</p>
            <p>然而，这并不是我想要的生活!</p>
        </section>
        <section>
            <div style="float: left">
                <img style="margin: 0px 50px 0px 0px !important; border:0 !important; box-shadow: 0 0 0 !important;" src="/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/images/bbk.jpg" width="150px" height="350px"/>
            </div>
            <div style="float: left">
                <p>作为一个理科出生的男人，我的身上缺少了那一份文艺的气质</p>
                <p>但是我依旧知道，我的生活，不该如这般冰冷，它需要充满热情和希望</p>
                <p>……</p>
                <p>于是，我开始阅读和旅行</p>
                <p>读书，要么去旅行，身体和灵魂，总有一个要在路上</p>
                <p>追寻着这句话语，我踏上了人生新的旅途</p>
                <br />
                <p>而与此同时，我迷恋上另一件事儿 —— <strong style="font-size: 50px;">摄影</strong></p>
            </div>
        </section>
        <section>
            <div style="margin-top: 100px;">
                <p>当然用摄影这次词可能有点过了，我终究不过是个爱拍照的人而已</p>
                <p>没有好的器械，没有专业的知识，没有娴熟的技巧</p>
                <p>如果说真有什么的话，那便是这颗期待美好的心了</p>
                <p>眼睛所看到的世界，就是我的世界</p>
                <p>所以，用心发现美丽，然后用相机定格下来，这样我的世界就会充满温柔的力量</p>
            </div>
            <div>
                <img style="margin: 0 !important; border:0 !important; box-shadow: 0 0 0 !important;" src="/dxf/<?php echo drupal_get_path('theme', 'dxf') ?> /images/camera.jpg" width="300px" height="250px"/>
            </div>
        </section>
        <section>
            <div>
                <p>在钢筋水泥浇筑的都市丛林中生活，确实难免让人抑郁</p>
                <p>生活的压力往往令人窒息</p>
                <p>然而现实的枷锁不应该束缚我们追求梦想的脚步</p>
                <p>不要为生活所累，拼命地追赶着梦想</p>
                <p>是在追梦的路上跌倒更疼，还是在碌碌无为的过完一生后后悔不及更疼？</p>
                <p>……</p>
                <p>更多的记录下这世上令人感动的瞬间，这就是我的梦！</p>
                <p>一起走吧</p>
                <p>谁说不能让我此生自传，如同诗一般</p>
                <p>无论多远未来，读来依然一字一句一篇都灿烂</p>
            </div>
            <br />
            <div>
                <img style="margin: 0 !important; border:0 !important; box-shadow: 0 0 0 !important;" src="/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/images/sunraise.jpg" width="500px" height="150px"/>
            </div>
        </section>
    </div>
</div>

<script src="/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/lib/js/head.min.js"></script>
<script src="/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/js/reveal.min.js"></script>
<script>
    Reveal.initialize({
        controls: true,
        progress: true,
        history: true,
        center: true,
        theme: Reveal.getQueryHash().theme,
        transition: Reveal.getQueryHash().transition || "default",
        dependencies: [
            {src: "/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/lib/js/classList.js", condition: function() {
                    return !document.body.classList;
                }},
            {src: "/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>'/plugin/markdown/marked.js", condition: function() {
                    return !!document.querySelector("[data-markdown]");
                }},
            {src: "/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/plugin/markdown/markdown.js", condition: function() {
                    return !!document.querySelector("[data-markdown]");
                }},
            {src: "/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/plugin/highlight/highlight.js", async: true, callback: function() {
                    hljs.initHighlightingOnLoad();
                }},
            {src: "/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/plugin/zoom-js/zoom.js", async: true, condition: function() {
                    return !!document.body.classList;
                }},
            {src: "/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/plugin/notes/notes.js", async: true, condition: function() {
                    return !!document.body.classList;
                }},
        ]
    });
</script>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js" charset="utf-8"></script>
<script>
    function closeOverlay(){
        $("#mask").css('display', 'none');
    }
</script>
<div id="mask" style="top:0px;left:0px;background:#000;filter:alpha(opacity=80);opacity:0.8;position:absolute;z-index:999; width: 100%; height: 100%;">
    <div style="font-size: 40px; color: white; width: 1050px; margin-left: auto; margin-right: auto; margin-top: 150px; line-height: 60px;">如果你正在用IE或者IE内核的浏览器，请立即关闭此页面。本站点承受不了IE这类病毒的攻击……</div>
    <div style="margin-top: 20px; margin-left: 530px;"><img src="/dxf/<?php print drupal_get_path('theme', 'dxf')?>/images/no-ie.png"></div>
    <div style="font-size: 16px; color: white; margin-left: 1000px; cursor: pointer;" onclick="closeOverlay();">点击进入网站 （确定没用IE哦，亲）</div>
</div>