<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 3/25/2016
 * Time: 11:23 PM
 */

namespace Site;
class EventView extends DynamicView
{


    public function presentDisplay()
    {
        $Display = $this->title;
        $id = $this->id;
        $images = $this->image;
        $logo = $this->logo;
        $logolink= $this->logolink;
        shuffle($images);


        $html = "";


        $html .= <<<HTML

    <div class="event-section">
    <div class="event-container main-container w-container">
    <ul class="event-objects w-list-unstyled">
        <li class="event-item left option-item">
            <div class="option-text">Contact</div>
        </li>
        <li class="event-item">
            <div class="event-title-div">
                <div class="event-title-redo">$Display</div>
            </div>
        </li>
        <li class="event-item left">
            <ul class="event-options-list w-clearfix w-list-unstyled">
                <li class="option-item">
                    <a class="NoStyle" target="Tab" class="w-inline-block" href="index.php"><div class="option-text icon" data-icon="S"></div>
                    </a>
                </li>
                <li class="option-item" data-ix="highlight-section">
                    <a target="Tab" class="NoStyle" href="page-post.php?id=$id&Info=1">
                    <div class="option-text">Info</div>
                    </a>
                </li>
                <li class="option-item">
                    <a target="TabForum" class="NoStyle" href=$this->form>
                    <div class="option-text">Sign-up</div>
                    </a>
                </li>
                <li class="option-item">
                    <a target="Tab" class="NoStyle" href="page-post.php?id=$id&Map=1">
                    <div class="option-text">Map</div>
                    </a>
                </li>
            </ul>
        </li>
HTML;
    if($logolink!="" and $logo!="")
    {
       // $html .= "<a href='$logolink'><img src='$logo'></a>";
    }
    $html.= <<<HTML
    <li class="event-item"><img class="img-responsive" src="$images[0]">
    </li>
</ul>
</div>
</div>
HTML;
//    $html.="</div>";
//
//
//
//        $html .= "<div class='col-md-8' id='page-slideshow'>";
//        $html .= "<div id='slideshow'>";
//        foreach ($images as $image) {
//            $html .= <<<HTML
//            <div>
//            <img src="$image" height="400px" width="600px">
//            </div>
//HTML;
//        }
//        $html .= "</div>";
//        $html .= "</div>";
//        $html .= "</div>";
//        $html.="</div>";
        return $html;
    }
}