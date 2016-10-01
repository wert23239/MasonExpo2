<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 3/25/2016
 * Time: 11:23 PM
 */

namespace Site;
class HomeView extends DynamicView
{
    public function __construct(SiteManager $site)
    {

        parent:: __construct($site);
        $this->title="Home";

    }



    public function presentImages($type)
    {
        $Count=$this->connections->getCount();
        $html="";

        $html.="<div class='container Main'>";
        $html.="<div class='row'>";
        for ($i = 0; $i<$Count;$i++) {
            $Icon = $this->connections->getCodeIndex($i)->getIcon();
            $html .= <<<HTML
        <a href='page-post.php?id=$i&Display=1'>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="hovereffect">
                    <img class='img-responsive'  src='$Icon'/>
                    <div class="overlay">
                        <!--<h2>Hover effect 3</h2>-->
                        <a class="info" href='page-post.php?id=$i&Display=1'> Go to Event</a>
                    </div>
                </div>
        </div>
        </a>
HTML;
        }
        $html.="</div>";
        $html.="</div>";
        return $html;
    }

    public function presentTitle()
    {
        $html= <<<HTML

<div class="container-fluid">
  <div class="row">
    <div class="col-md-6 col-xs-8 text-left-cust fadeInLeft animated">June 24th</div>
    <div class="col-md-6 col-xs-4 text-right-cust fadeInRight animated">2017</div>
  </div>
</div>
<br>
<h1 class="modal-title lightSpeedIn animated">Outdoor Expo & More!</h1>
<a href="http://www.familydeal.com/"><img class='img-responsive center-block'  src='images/Logo/LaFontaine.png'/></a></div>

<br>
<h1 class="Events">Events:</h1>
<!--<pre >-->
<!--Sat June 27th 2017-->
<!--Ingham County Fairgrounds-->
<!--700 E Ash  Mason, MI 48854-->

<!--outdoorexpoandmore@gmail.com-->

<!--517-204-3854-->
<!--</pre>-->
<!--<div class="row">-->
    <!--<div class="col-lg-12">-->
        <!--<div class="intro-message">-->
                <!--<h1 class="special"></h1>-->
                <!--<h3>Entry Time: 10am - 5pm </h3>-->
                <!--<h3>Cost: $40</h3>-->
                <!--<h3><strong>Saturday, June 25, 2016</strong></h3>-->
                <!--<h3>Ingham County Fairgrounds 700 E Ash St. Mason, MI 48854</h3>-->
                <!--<h4> <strong>For more information, please call Jessy at 517-281-0092 or email to <a href="outdoorexpoandmore@gmail.com">outdoorexpoandmore@gmail.com</a></strong></h4>-->
        <!--</div>-->
    <!--</div>-->
<!--</div>-->
HTML;
        return $html;
    }



}