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
        shuffle($images);


        $html = "";

        $html .= <<<HTML
        
    <div class="container">    
    <div class="row">
    <div class='col-md-4' id="page-header">
    <h1><strong>$Display</strong></h1>
                        <ul class="page-list">
                            <li><a href="page-post.php?id=$id&Info=1">Info</a></li><br/>
                            <li><a href="page-post.php?id=$id&Form=1">Sign-up</a></li><br/>
                            <li><a href="page-post.php?id=$id&Map=1">Map</a></li>
                        </ul>

    </div>

HTML;

        $html .= "<div class='col-md-8' id='page-slideshow'>";
        $html .= "<div id='slideshow'>";
        foreach ($images as $image) {
            $html .= <<<HTML
            <div>
            <img src="$image" height="400px" width="600px">
            </div>
HTML;
        }
        $html .= "</div>";
        $html .= "</div>";
        $html .= "</div>";
        $html .= "</div>";
        return $html;
    }
}