<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 3/25/2016
 * Time: 11:23 PM
 */

namespace Site;
class ForumView extends DynamicView
{

    public function presentDisplay()
    {
        $id=$this->id;
        $Forum=$this->forum;
        $html=<<<HTML
    <div class="content-wrapper">
        <iframe src=$Forum scrolling="no" height="1700">
    </div>
HTML;
        return $html;
    }

}