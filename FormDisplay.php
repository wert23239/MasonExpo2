<?php
require 'lib/site.inc.php';
$view= new Site\FormView($site);
?>
<!DOCTYPE html>
<html lang="en">
<?php echo $view->presenthead("") ?>

<body class="project">



<?php
echo $view->presentGoBack();
echo $view->presentDisplay();
?>
</body>
</html>