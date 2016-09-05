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
        $html="";
        $html.="<div class='container Main'>";
        foreach ($images as $logo)
        {
            //if($i%4==0)
            //{
            //    $html.="<div class='row Main'>";
            //}
            $html .= <<<HTML
            <div class='col-xs-3 col-md-3'>
            <img class='img-responsive'  src='$logo'/></div>
HTML;

            //if($i%4==3)
            //{
             //   $html.="</div>";
            //}
        }
        $html.="</div>";

        return $html;
    }
}