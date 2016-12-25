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

        $html.="<div class='container Main' id='Events'> ";
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

    public function presentEvents()
    {
        $Count=$this->connections->getCount();
        $html="";
        $html .= <<<HTML
<div class="main-section">
    <div class="main-container w-container">
        <div class="event-div">
            <h2 class="event-heading">EVENTS</h2>
        </div>
        <ul class="event-list w-list-unstyled">
HTML;
        for ($i = 1; $i<$Count;$i++) {
            $Icon = $this->connections->getCodeIndex($i)->getIcon();
            $html .= <<<HTML
        <li class="event-list-item">
            <a class="w-inline-block HoverEffect" href='page-post.php?id=$i&Display=1'><img class="image-responsive" sizes="(max-width: 767px) 33vw, (max-width: 991px) 241.96875px, 312.625px" src='$Icon'>
            </a>
        </li>

HTML;
//            <a class="w-inline-block" href='page-post.php?id=$i&Display=1'><img class="event-image" sizes="(max-width: 767px) 33vw, (max-width: 991px) 241.96875px, 312.625px" src='$Icon'" srcset="images/Icon/carshow-p-500x358.jpeg 500w, images/Icon/carshow-p-800x572.jpeg 800w, images/Icon/carshow.jpg 1050w">

//            <a href='page-post.php?id=$i&Display=1'>
//        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
//                <div class="hovereffect">
//                    <img class='img-responsive'  src='$Icon'/>
//                    <div class="overlay">
//                        <!--<h2>Hover effect 3</h2>-->
//                        <a class="info" href='page-post.php?id=$i&Display=1'> Go to Event</a>
//                    </div>
//                </div>
//        </div>
//        </a>
        }
        $html.="</ul>";
        $html.="</div>";
        $html.="</div>";
        return $html;
    }

    public function presentTitle()
    {
        $html= <<<HTML
<div class="main-section">
    <div class="main-container w-container">
        <div class="date-div">
            <h2 class="date-left">June 24th</h2>
            <h2 class="date-right">2017</h2>
        </div>
        <h1 class="main-heading" data-ix="hide-section">OUTDOOR EXPO &amp; MORE!</h1><img class="main-logo" src="images/Logo/LaFontaine.png">
    </div>
</div>
<div class="hide-section main-section">
    <div class="info-container main-container w-container" data-ix="hide-section">
        <div class="event-div">
            <h2 class="click-heading event-heading" data-ix="hide-section">INFO</h2>
        </div>
        <div class="text-div">
            <div class="info-textblock" data-ix="hide-section">Entry Time: 10am - 5pm
                <br>The event is rain or shine. Sorry, no refunds.
                <br>Saturday, June 24, 2017 Ingham County Fairgrounds 700 E Ash St. Mason, MI 48854
                <br>For more information, please call Jessy at 517-281-0092 or email to&nbsp;trevleasure@aol.com</div>
            <div class="info-clickblock" data-ix="hide-section">Click For Information</div>
        </div>
    </div>
</div>
HTML;
        return $html;
    }



}