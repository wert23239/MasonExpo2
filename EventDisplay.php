<?php
require 'lib/game.inc.php';
$view= new Site\EventView($site);
?>
<!DOCTYPE html>
<html lang="en">
<?php echo $view->presenthead() ?>

<body class="project">


<?php echo $view->presentheader();
?>
<div class="jumbotron CodeA">
<?php
   echo $view->presentDisplay();
?>
</div>
</body>
</html>