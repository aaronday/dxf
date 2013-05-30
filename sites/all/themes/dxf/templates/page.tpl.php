<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">

        <title>Meny - A three dimensional and space efficient menu concept</title>

        <meta name="description" content="A three dimensional and space efficient menu created with JavaScript and CSS 3.">
        <meta name="author" content="Hakim El Hattab">

        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <link rel="stylesheet" href="<?php echo drupal_get_path('theme', 'dxf')?>/css/reveal.min.css">
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
    </head>

    <body>

        <div class="meny">
            <h2>戴小枫的摄影小站</h2>
            <ul>
                <li><a href="index.html">首页</a></li>
                <li><a href="index2.html">大师！大师！</a></li>
                <li><a href="http://lab.hakim.se/radar/">Radar</a></li>
                <li><a href="http://lab.hakim.se/forkit-js/">forkit.js</a></li>
                <li><a href="http://lab.hakim.se/scroll-effects/">stroll.js</a></li>
            </ul>
        </div>

        <div class="meny-arrow"></div>

        <div class="contents">
            <div class="reveal">

                <!-- Any section element inside of this container is displayed as a slide -->
                <div class="slides">

                    <section>
                        <h1>Reveal.js</h1>
                        <h3>HTML Presentations Made Easy</h3>
                        <p>
                            <small>Created by <a href="http://hakim.se">Hakim El Hattab</a> / <a href="http://twitter.com/hakimel">@hakimel</a></small>
                        </p>
                    </section>

                    <section>
                        <h2>Heads Up</h2>
                        <p>
                            reveal.js is a framework for easily creating beautiful presentations using HTML. You'll need a browser with
                            support for CSS 3D transforms to see it in its full glory.
                        </p>

                        <aside class="notes">
                            Oh hey, these are some notes. They'll be hidden in your presentation, but you can see them if you open the speaker notes window (hit 's' on your keyboard).
                        </aside>
                    </section>

                    <!-- Example of nested vertical slides -->
                    <section>
                        <section>
                            <h2>Vertical Slides</h2>
                            <p>
                                Slides can be nested inside of other slides,
                                try pressing <a href="#" class="navigate-down">down</a>.
                            </p>
                            <a href="#" class="image navigate-down">
                                <img width="178" height="238" src="https://s3.amazonaws.com/hakim-static/reveal-js/arrow.png" alt="Down arrow">
                            </a>
                        </section>
                        <section>
                            <h2>Basement Level 1</h2>
                            <p>Press down or up to navigate.</p>
                        </section>
                        <section>
                            <h2>Basement Level 2</h2>
                            <p>Cornify</p>
                            <a class="test" href="http://cornify.com">
                                <img width="280" height="326" src="https://s3.amazonaws.com/hakim-static/reveal-js/cornify.gif" alt="Unicorn">
                            </a>
                        </section>
                        <section>
                            <h2>Basement Level 3</h2>
                            <p>That's it, time to go back up.</p>
                            <a href="#/2" class="image">
                                <img width="178" height="238" src="https://s3.amazonaws.com/hakim-static/reveal-js/arrow.png" alt="Up arrow" style="-webkit-transform: rotate(180deg);">
                            </a>
                        </section>
                    </section>

                </div>

            </div>

<!--<a href="https://github.com/hakimel/meny"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://a248.e.akamai.net/camo.github.com/e6bef7a091f5f3138b8cd40bc3e114258dd68ddf/687474703a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f7265645f6161303030302e706e67" alt="Fork me on GitHub"></a>-->
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

    </body>
</html>