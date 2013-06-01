<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">

        <title>Aaron-photograph</title>

        <meta name="description" content="A three dimensional and space efficient menu created with JavaScript and CSS 3.">
        <meta name="author" content="Hakim El Hattab">

        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <link rel="stylesheet" href="<?php echo drupal_get_path('theme', 'dxf')?>/css/reveal.css">
        <link rel="stylesheet" href="<?php echo drupal_get_path('theme', 'dxf')?>/css/theme/default.css" id="theme">

        <!-- For syntax highlighting -->
        <link rel="stylesheet" href="<?php echo drupal_get_path('theme', 'dxf')?>/lib/css/zenburn.css">

        <!--<link href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic' rel='stylesheet' type='text/css'>-->

        <link rel="stylesheet" href="<?php echo drupal_get_path('theme', 'dxf')?>/css/style.css">

        <!-- If the query includes 'print-pdf', use the PDF print sheet -->
        <script>
            document.write('<link rel="stylesheet" href="<?php echo drupal_get_path('theme', 'dxf')?>/css/print/' + (window.location.search.match(/print-pdf/gi) ? 'pdf' : 'paper') + '.css" type="text/css" media="print">');
        </script>

        <!--[if lt IE 9]>
        <script src="lib/js/html5shiv.js"></script>
        <![endif]-->
        
        <link rel="stylesheet" type="text/css" href="<?php echo drupal_get_path('theme', 'dxf')?>/css/wallgallery.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo drupal_get_path('theme', 'dxf')?>/css/component.css" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="<?php echo drupal_get_path('theme', 'dxf')?>/js/modernizr.custom.js"></script>
    </head>

    <body>

        <div class="meny">
            <h2>[ AARON-PHOTOGRAPH ]</h2>
            <ul>
                <li><a href="home">HOME</a></li>
                <li><a href="imagewall">IMAGE GALLERY WALL</a></li>
            </ul>
        </div>

        <div class="meny-arrow"></div>

        <div class="contents">
            <?php print $page['content']['system_main']['main']['#markup']; ?>
        </div>

        <script src="<?php echo drupal_get_path('theme', 'dxf')?>/js/meny.min.js"></script>
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

        <script src="<?php echo drupal_get_path('theme', 'dxf')?>/lib/js/head.min.js"></script>
        <script src="<?php echo drupal_get_path('theme', 'dxf')?>/js/reveal.min.js"></script>

        <script>

            // Full list of configuration options available here:
            // https://github.com/hakimel/reveal.js#configuration
            Reveal.initialize({
                controls: true,
                progress: true,
                history: true,
                center: true,
                theme: Reveal.getQueryHash().theme, // available themes are in /css/theme
                transition: Reveal.getQueryHash().transition || 'default', // default/cube/page/concave/zoom/linear/fade/none

                // Optional libraries used to extend on reveal.js
                dependencies: [
                    {src: '<?php echo drupal_get_path('theme', 'dxf')?>/lib/js/classList.js', condition: function() {
                            return !document.body.classList;
                        }},
                    {src: '<?php echo drupal_get_path('theme', 'dxf')?>/plugin/markdown/marked.js', condition: function() {
                            return !!document.querySelector('[data-markdown]');
                        }},
                    {src: '<?php echo drupal_get_path('theme', 'dxf')?>/plugin/markdown/markdown.js', condition: function() {
                            return !!document.querySelector('[data-markdown]');
                        }},
                    {src: '<?php echo drupal_get_path('theme', 'dxf')?>/plugin/highlight/highlight.js', async: true, callback: function() {
                            hljs.initHighlightingOnLoad();
                        }},
                    {src: '<?php echo drupal_get_path('theme', 'dxf')?>/plugin/zoom-js/zoom.js', async: true, condition: function() {
                            return !!document.body.classList;
                        }},
                    {src: '<?php echo drupal_get_path('theme', 'dxf')?>/plugin/notes/notes.js', async: true, condition: function() {
                            return !!document.body.classList;
                        }}
                    // { src: 'plugin/search/search.js', async: true, condition: function() { return !!document.body.classList; } }
                    // { src: 'plugin/remotes/remotes.js', async: true, condition: function() { return !!document.body.classList; } }
                ]
            });

        </script>
        
        <script src="<?php echo drupal_get_path('theme', 'dxf')?>/js/wallgallery.js"></script>
        <script>
                $(function() {
                        Gallery.init( {
                                layout : [3,2,3,2]
                        } );
                });
        </script>

    </body>
</html>