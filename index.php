<?php
require 'lib/game.inc.php';
$view= new Site\View($site);
?>

<!doctype html>
<html lang='en'>

<?php echo $view->presenthead() ?>
<body>
<?php echo $view->presentheader() ?>
<!-- Header -->
<a name="about"></a>
<div class="intro-header-home">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="intro-message">
                    <h1 class="special"></h1>
                    <h3>Entry Time: 10am - 5pm </h3>
                    <h3>Cost: $40</h3>
                    <h3>The event is rain or shine. Sorry, no refunds.</h3>
                    <h3><strong>Saturday, June 25, 2016</strong></h3>
                    <h3>Ingham County Fairgrounds 700 E Ash St. Mason, MI 48854</h3>
                    <h4> <strong>For more information, please call Jessy at 517-281-0092 or email to <a href="mailto:trevleasure@aol.com">trevleasure@aol.com</a></strong></h4>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

<div class="container Main">
        <div class="row Main">
            <div class="col-xs-3 col-md-3"><a href="http://www.linkedin.com/in/alexlambert52" class="thumbnail" target="_blank"><img class="img-responsive box"  src="images/in.png"/></a></div>
            <div class="col-xs-3 col-md-3"><a href="http://devpost.com/wert23239" class="thumbnail" target="_blank"><img class="img-responsive box"  src="images/devpost.jpg"/></a></div>
            <div class="col-xs-3 col-md-3"><a href="http://github.com/wert23239" class="thumbnail" target="_blank"><img class="img-responsive box" src="images/github.png"/></a></div>
            <div class="col-xs-3 col-md-3"><a href="mailto:lambe168@msu.edu"  class="thumbnail" target="_top"><img class="img-responsive box"  src="images/gmail.png"/></a></div>
        </div>
</div>

</div>
<div class="container center">
    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2937.992162726055!2d-84.4317368842811!3d42.57668882938543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8822daaf2ac49175%3A0x2d6d7874783cfc91!2s700+E+Ash+St%2C+Mason%2C+MI+48854!5e0!3m2!1sen!2sus!4v1463348312880" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

</body>
</html>
