<?php
require 'lib/game.inc.php';
$view= new Site\MapView($site);
?>
<!DOCTYPE html>
<html lang="en">
<?php echo $view->presenthead() ?>

<body class="project">

<?php echo $view->presentDisplay(); ?>

<?php echo $view->presentGoBack(); ?>

</body>
</html>