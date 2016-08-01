<?php
require 'lib/game.inc.php';
$view= new Site\ForumView($site);
?>
<!DOCTYPE html>
<html lang="en">
<?php echo $view->presenthead("") ?>

<body class="project">


<?php echo $view->presentheader();
?>
<?php
   echo $view->presentDisplay();
?>
</body>
</html>