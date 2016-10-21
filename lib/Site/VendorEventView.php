<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 3/25/2016
 * Time: 11:23 PM
 */

namespace Site;
class VendorEventView extends DynamicView
{


    public function presentDisplay()
    {
        $images = $this->image;
        $i = 0;
        $html="";
        $html.="<div class='container Main'>";
        foreach ($images as $logo)
        {
            $i += 1;
            $html .= <<<HTML
            <div class='col-xs-3 col-md-3'>
            <img class='img-responsive'  src='$logo'/></div>

HTML;
            $i += 1;

        }
        $html.="</div>";

        return $html;
    }
}