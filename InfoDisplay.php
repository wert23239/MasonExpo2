<?php
require 'lib/game.inc.php';
$view= new Site\InfoView($site);
?>
<!DOCTYPE html>
<html lang="en">
<?php echo $view->presenthead() ?>

<body class="project">
<?php echo $view->presentGoBack(); ?>
<?php echo $view->presentDisplay(); ?>


</body>
</html>