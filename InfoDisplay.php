<?php
require 'lib/site.inc.php';
$view= new Site\InfoView($site);
?>
<!DOCTYPE html>
<html lang="en">
<?php echo $view->presenthead() ?>

<body class="main-body">
<?php //echo $view->presentGoBack(); ?>
<?php echo $view->presentDisplay(); ?>


</body>
</html>