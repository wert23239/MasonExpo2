<?php
require 'lib/site.inc.php';
$view = new Site\EventView($site);
?>
<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com -->
<!--  Last Published: Tue Dec 20 2016 23:51:54 GMT+0000 (UTC)  -->
<html data-wf-page="585884f8df2e0fca62203455" data-wf-site="5858194bef5da2fa21607419">
<?php //echo $view->presenthead() ?>
<head>
    <meta charset="utf-8">
    <title>Event</title>
    <meta content="Event" property="og:title">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">
    <link href="style/normalize.css" rel="stylesheet" type="text/css">
    <link href="style/webflow.css" rel="stylesheet" type="text/css">
    <link href="style/mason-expo.webflow.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: ["Trocchi:regular","Lora:regular","Roboto Slab:regular"]
            }
        });
    </script>
    <script src="style/js/modernizr.js" type="text/javascript"></script>
    <link href="https://daks2k3a4ib2z.cloudfront.net/img/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="https://daks2k3a4ib2z.cloudfront.net/img/webclip.png" rel="apple-touch-icon">
</head>
<body class="main-body no-overflow-body">
<?php //echo $view->presentGoBack() ?>
<div class="event-section">
    <div class="event-container main-container w-container">
        <ul class="event-objects w-list-unstyled">
            <li class="event-item left option-item">
                <div class="option-text">Contact</div>
            </li>
            <li class="event-item">
                <div class="event-title-div">
                    <div class="event-title-redo">Tractor Show</div>
                </div>
            </li>
            <li class="event-item left">
                <ul class="event-options-list w-clearfix w-list-unstyled">
                    <li class="option-item">
                        <a class="w-inline-block" href="index.html"><img class="home-icon" src="images/home-128.png">
                        </a>
                    </li>
                    <li class="option-item" data-ix="highlight-section">
                        <div class="option-text">Info</div>
                    </li>
                    <li class="option-item">
                        <div class="option-text">Sign-up</div>
                    </li>
                    <li class="option-item">
                        <div class="option-text">Map</div>
                    </li>
                </ul>
            </li>
            <li class="event-item"><img class="img-responsive" src="images/tractor.jpg">
            </li>
        </ul>
    </div>
</div>
<?php
//echo $view->presentDisplay();
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
<script src="style/js/webflow.js" type="text/javascript"></script>
<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>