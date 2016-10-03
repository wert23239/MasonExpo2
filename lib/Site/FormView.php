<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 3/25/2016
 * Time: 11:23 PM
 */

namespace Site;
class FormView extends DynamicView
{



    public function presentDisplay()
    {
        $id=$this->id;
        $form=$this->form;
        $html=<<<HTML
    <div class="content-wrapper">
        <iframe src=$form scrolling="no" height="1700">
    </div>
HTML;
        return $html;
    }

}