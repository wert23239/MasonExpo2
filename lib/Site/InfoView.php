<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 3/25/2016
 * Time: 11:23 PM
 */

namespace Site;
class InfoView extends DynamicView
{

    public function presentDisplay()
    {
        $id=$this->id;
        $Info=$this->info;
        $html=<<<HTML
    <p><img src=$Info id="image" height="320px" class="img-responsive center-block"></p>
HTML;
        return $html;
    }


}