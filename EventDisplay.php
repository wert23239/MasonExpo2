<?php
require 'lib/site.inc.php';
$view = new Site\EventView($site);
?>
<!DOCTYPE html>
<html lang="en">
<?php echo $view->presenthead() ?>

<body class="EventView">
<?php echo $view->presentGoBack() ?>
<?php echo $view->presentheader();
?>

<?php
echo $view->presentDisplay();
?>

</body>
</html>