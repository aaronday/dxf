<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">

        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <link rel="stylesheet" href="/dxf/<?php echo drupal_get_path('theme', 'dxf')?>/css/reveal.css">
        <link rel="stylesheet" href="/dxf/<?php echo drupal_get_path('theme', 'dxf')?>/css/theme/default.css" id="theme">

        <!-- For syntax highlighting -->
        <link rel="stylesheet" href="/dxf/<?php echo drupal_get_path('theme', 'dxf')?>/lib/css/zenburn.css">

        <!--<link href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic' rel='stylesheet' type='text/css'>-->

        <link rel="stylesheet" href="/dxf/<?php echo drupal_get_path('theme', 'dxf')?>/css/style.css">

        <!-- If the query includes 'print-pdf', use the PDF print sheet -->
        <script>
            document.write('<link rel="stylesheet" href="/dxf/<?php echo drupal_get_path('theme', 'dxf')?>/css/print/' + (window.location.search.match(/print-pdf/gi) ? 'pdf' : 'paper') + '.css" type="text/css" media="print">');
        </script>

        <!--[if lt IE 9]>
        <script src="lib/js/html5shiv.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="/dxf/<?php echo drupal_get_path('theme', 'dxf')?>/css/forkit.css">
    </head>

    <body>

        <div class="meny">
            <h2>[ AARON-PHOTOGRAPHY ]</h2>
            <ul>
                <li><a href="/dxf/home">HOME</a></li>
                <li><a href="/dxf/imagewall">IMAGE GALLERY WALL</a></li>
                <li><a href="/dxf/topic">FEATURED TOPIC</a></li>
                <li><a href="/dxf/travel">FOOT PRINT</a></li>
            </ul>
        </div>

        <div class="meny-arrow"></div>

        <div class="contents">
            <?php print $page['content']['system_main']['main']['#markup']; ?>
            <a class="forkit" data-text="Follow Me" data-text-detached="Click On >" target="_blank" href="http://weibo.com/aaronlovequeena"><img style="position: absolute; top: 0; right: 0; border: 0;" src="/dxf/<?php echo drupal_get_path('theme', 'dxf')?>/images/forkit.png" alt=""></a>
            <script src="/dxf/<?php echo drupal_get_path('theme', 'dxf')?>/js/forkit.js"></script>
        </div>

        <script src="/dxf/<?php echo drupal_get_path('theme', 'dxf')?>/js/meny.min.js"></script>
        <script>
            // Create an instance of Meny
            var meny = Meny.create({
                // The element that will be animated in from off screen
                menuElement: document.querySelector('.meny'),
                // The contents that gets pushed aside while Meny is active
                contentsElement: document.querySelector('.contents'),
                // [optional] The alignment of the menu (top/right/bottom/left)
                position: Meny.getQuery().p || 'left',
                // [optional] The height of the menu (when using top/bottom position)
                height: 200,
                // [optional] The width of the menu (when using left/right position)
                width: 260,
                // [optional] Distance from mouse (in pixels) when menu should open
                threshold: 40
            });

            // API Methods:
            // meny.open();
            // meny.close();
            // meny.isOpen();

            // Events:
            // meny.addEventListener( 'open', function(){ console.log( 'open' ); } );
            // meny.addEventListener( 'close', function(){ console.log( 'close' ); } );

            // Embed an iframe if a URL is passed in
            if (Meny.getQuery().u && Meny.getQuery().u.match(/^http/gi)) {
                var contents = document.querySelector('.contents');
                contents.style.padding = '0px';
                contents.innerHTML = '<div class="cover"></div><iframe src="' + Meny.getQuery().u + '" style="width: 100%; height: 100%; border: 0; position: absolute;"></iframe>';
            }
        </script>

    </body>
</html>