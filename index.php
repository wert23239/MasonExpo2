<?php
require 'lib/site.inc.php';
$view= new Site\HomeView($site);
?>
<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com -->
<!--  Last Published: Tue Dec 20 2016 23:51:54 GMT+0000 (UTC)  -->
<html data-wf-page="5858194bef5da2fa2160741a" data-wf-site="5858194bef5da2fa21607419">
<head>
    <meta charset="utf-8">
    <title>Mason Expo</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">
    <link href="style/normalize.css" rel="stylesheet" type="text/css">
    <link href="style/webflow.css" rel="stylesheet" type="text/css">
    <link href="style/mason-expo.webflow.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: ["Trocchi:regular","Lora:regular","Roboto Slab:regular", "Roboto Condensed:regular"]
            }
        });
    </script>
    <script src="js/modernizr.js" type="text/javascript"></script>
    <link href="images/Icon/M.png" rel="shortcut icon" type="image/x-icon">
    <link href="images/Icon/M.png" rel="apple-touch-icon">
</head>
<?php //echo $view->presenthead() ?>
<body class="main-body">>
<?php echo $view->presentTitle()?>
<?php echo $view->presentEvents() ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
<script src="style/js/webflow.js" type="text/javascript"></script>
<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>





