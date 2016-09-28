<?php
require 'lib/game.inc.php';
$view= new Site\HomeView($site);
?>

<!doctype html>
<html lang='en'>

<?php echo $view->presenthead() ?>
<body>
<?php echo $view->presentheader() ?>
<!-- Header -->
    <!-- /.container -->
<?php echo $view->presentTitle() ?>
<?php echo $view->presentImages("events") ?>

</body>
</html>
