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
        $Display=$this->title;
        $id=$this->id;
        $Image=$this->image;
        $html=<<<HTML

    <h1 class="CodeB"><strong>$Display</strong></h1>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="page-post.php?id=$id&Info=1">Info</a></li>
                            <li><a href="page-post.php?id=$id&Forum=1">Sign-up</a></li>
                            <li><a href="page-post.php?id=$id&Map=1">Map</a></li>
                        </ul>

    </div>

HTML;
        return $html;
    }
}