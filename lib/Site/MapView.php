<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 3/25/2016
 * Time: 11:23 PM
 */

namespace Site;
class MapView extends DynamicView
{

    public function presentDisplay()
    {
        $Map=$this->map;

        $html=<<<HTML
    <p><img src=$Map id="image" height="320px" class="img-responsive center-block"></p>
HTML;
        return $html;
    }


}