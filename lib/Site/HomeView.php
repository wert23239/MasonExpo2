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

    public function presentDisplay()
    {
        $Count=$this->connections->getCount();
        $html="";

        $html.="<div class='container Main'>";
        for ($i = 0; $i<$Count;$i++)
        {
            if($i%4==0)
            {
                $html.="<div class='row Main'>";
            }
            $Icon=$this->connections->getCodeIndex($i)->getIcon();
            $html .= <<<HTML
            <div class='col-xs-3 col-md-3'><a href='page-post.php?id=$i&Display=1' class='thumbnail'>
            <img class='img-responsive box'  src='$Icon'/></a></div>
HTML;

            if($i%4==3)
            {
                $html.="</div>";
            }
        }
        $html.="</div>";
        return $html;
    }



}