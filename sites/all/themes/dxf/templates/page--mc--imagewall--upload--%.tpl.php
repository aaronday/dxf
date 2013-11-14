<!DOCTYPE HTML>
<html lang="en">
    <head>
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
        <!-- Generic page styles -->
        <link rel="stylesheet" href="/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/css/upload/style.css">
        <!-- blueimp Gallery styles -->
        <link rel="stylesheet" href="http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
        <!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
        <link rel="stylesheet" href="/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/css/upload/jquery.fileupload-ui.css">
        <!-- CSS adjustments for browsers with JavaScript disabled -->
        <noscript><link rel="stylesheet" href="/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/css/upload/jquery.fileupload-ui-noscript.css"></noscript>
        <style>
            /* Hide Angular JS elements before initializing */
            .ng-cloak {
                display: none;
            }
        </style>
    </head>
    <body style="background-color:  white; background-image:  none; height: auto;">
        <div class="container">
            <h1>管理画廊</h1>
            <br>
            <form id="fileupload" action="" method="POST" enctype="multipart/form-data" data-ng-app="demo" data-ng-controller="DemoFileUploadController" data-file-upload="options" data-ng-class="{'fileupload-processing': processing() || loadingFiles}">
                <!-- Redirect browsers with JavaScript disabled to the origin page -->
                <noscript><input type="hidden" name="redirect" value="http://blueimp.github.io/jQuery-File-Upload/"></noscript>
                <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
                <div class="row fileupload-buttonbar">
                    <div class="col-lg-7">
                        <!-- The fileinput-button span is used to style the file input field as button -->
                        <span class="btn btn-success fileinput-button" ng-class="{disabled: disabled}">
                            <i class="glyphicon glyphicon-plus"></i>
                            <span>添加文件...</span>
                            <input type="file" name="files[]" multiple ng-disabled="disabled">
                            <input type="hidden" name="topic" value="<?php print $page['content']['system_main']['main']['#markup']; ?>" id="fileuploadtopic">
                        </span>
                        <button type="button" class="btn btn-primary start" data-ng-click="submit()">
                            <i class="glyphicon glyphicon-upload"></i>
                            <span>开始上传</span>
                        </button>
                        <button type="button" class="btn btn-warning cancel" data-ng-click="cancel()">
                            <i class="glyphicon glyphicon-ban-circle"></i>
                            <span>取消上传</span>
                        </button>
                        <!-- The loading indicator is shown during file processing -->
                        <div class="fileupload-loading"></div>
                    </div>
                    <!-- The global progress information -->
                    <div class="col-lg-5 fade" data-ng-class="{in: active()}">
                        <!-- The global progress bar -->
                        <div class="progress progress-striped active" data-file-upload-progress="progress()"><div class="progress-bar progress-bar-success" data-ng-style="{width: num + '%'}"></div></div>
                        <!-- The extended global progress information -->
                        <div class="progress-extended">&nbsp;</div>
                    </div>
                </div>
                <!-- The table listing the files available for upload/download -->
                <table class="table table-striped files ng-cloak">
                    <tr data-ng-repeat="file in queue">
                        <td data-ng-switch data-on="!!file.thumbnailUrl">
                            <div class="preview" data-ng-switch-when="true">
                                <a data-ng-href="{{file.url}}" title="{{file.name}}" download="{{file.name}}" data-gallery><img data-ng-src="{{file.thumbnailUrl}}" alt=""></a>
                            </div>
                            <div class="preview" data-ng-switch-default data-file-upload-preview="file"></div>
                        </td>
                        <td>
                            <p class="name" data-ng-switch data-on="!!file.url">
                                <span data-ng-switch-when="true" data-ng-switch data-on="!!file.thumbnailUrl">
                                    <a data-ng-switch-when="true" data-ng-href="{{file.url}}" title="{{file.name}}" download="{{file.name}}" data-gallery>{{file.name}}</a>
                                    <a data-ng-switch-default data-ng-href="{{file.url}}" title="{{file.name}}" download="{{file.name}}">{{file.name}}</a>
                                </span>
                                <span data-ng-switch-default>{{file.name}}</span>
                            </p>
                            <div data-ng-show="file.error"><span class="label label-important">Error</span> {{file.error}}</div>
                        </td>
                        <td>
                            <p class="size">{{file.size | formatFileSize}}</p>
                            <div class="progress progress-striped active fade" data-ng-class="{pending: 'in'}[file.$state()]" data-file-upload-progress="file.$progress()"><div class="progress-bar progress-bar-success" data-ng-style="{width: num + '%'}"></div></div>
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary start" data-ng-click="file.$submit()" data-ng-hide="!file.$submit">
                                <i class="glyphicon glyphicon-upload"></i>
                                <span>Start</span>
                            </button>
                            <button type="button" class="btn btn-warning cancel" data-ng-click="file.$cancel()" data-ng-hide="!file.$cancel">
                                <i class="glyphicon glyphicon-ban-circle"></i>
                                <span>Cancel</span>
                            </button>
                            <button data-ng-controller="FileDestroyController" type="button" class="btn btn-danger destroy" data-ng-click="file.$destroy()" data-ng-hide="!file.$destroy">
                                <i class="glyphicon glyphicon-trash"></i>
                                <span>Delete</span>
                            </button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <!-- The blueimp Gallery widget -->
        <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
            <div class="slides"></div>
            <h3 class="title"></h3>
            <a class="prev">‹</a>
            <a class="next">›</a>
            <a class="close">×</a>
            <a class="play-pause"></a>
            <ol class="indicator"></ol>
        </div>

        <div style="position: absolute; left: 1050px; top: 90px; cursor: pointer;" onclick="go_mc_home();">
            <img src="/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/images/MB_0006_back.png" width="50px" height="50px"/>
        </div>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.5/angular.min.js"></script>
        <!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
        <script src="/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/js/upload/vendor/jquery.ui.widget.js"></script>
        <!-- The Load Image plugin is included for the preview images and image resizing functionality -->
        <script src="http://blueimp.github.io/JavaScript-Load-Image/js/load-image.min.js"></script>
        <!-- The Canvas to Blob plugin is included for image resizing functionality -->
        <script src="http://blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
        <!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <!-- blueimp Gallery script -->
        <script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
        <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
        <script src="/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/js/upload/jquery.iframe-transport.js"></script>
        <!-- The basic File Upload plugin -->
        <script src="/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/js/upload/jquery.fileupload.js"></script>
        <!-- The File Upload processing plugin -->
        <script src="/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/js/upload/jquery.fileupload-process.js"></script>
        <!-- The File Upload image preview & resize plugin -->
        <script src="/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/js/upload/jquery.fileupload-image.js"></script>
        <!-- The File Upload audio preview plugin -->
        <script src="/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/js/upload/jquery.fileupload-audio.js"></script>
        <!-- The File Upload video preview plugin -->
        <script src="/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/js/upload/jquery.fileupload-video.js"></script>
        <!-- The File Upload validation plugin -->
        <script src="/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/js/upload/jquery.fileupload-validate.js"></script>
        <!-- The File Upload Angular JS module -->
        <script src="/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/js/upload/jquery.fileupload-angular.js"></script>
        <!-- The main application script -->
        <script src="/dxf/<?php echo drupal_get_path('theme', 'dxf') ?>/js/upload/app.js"></script>

        <script>
            function go_mc_home() {
                window.location.href = '/dxf/mc';
            }
        </script>
    </body> 
</html>
