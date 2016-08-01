<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 3/25/2016
 * Time: 11:23 PM
 */

namespace Site;
class EventView extends View
{
    public function __construct(SiteManager $site)
    {
        $this->connections= $site;
        $this->id=$site->getId();
        $this->current=$this->connections->getCurrent();
        $this->title=$this->current->getDisplay();
        $this->image=$this->current->getSlideShow();
    }
    public function headadditional(){
        $title=$this->Title;
        $id=$this->id;
        $html=<<<HTML
    <title>MasonExpo | $title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Nothing quite like the Mason Expo.">
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="style/landing-page.css">
<script>


$(function(){
    $('.image img').load(function(){
        var img = $(this);
        img.attr('width', img.width()).attr('height', img.height());
    });
});
</script>

HTML;

        return $html;
    }


    public function presenthead($Title)
    {
        return parent::presenthead($this->title);
    }

    public function presentDisplay()
    {
        $Prev=$this->connections->getPrevious();
        $Next=$this->connections->getNext();
        //var_dump("hey");
        //var_dump($Prev);
        $NamePre=$Prev->getName();
        $NameAft=$Next->getName();
        $Display=$this->title;
        $id=$this->id;
        $Second=$this->color."2";
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


private $download="";
    private $gitlink="";
    private $id="";
    private $current;
    private $title="";
    private $connections;
    private $color="";
    private $image="";
    private $description="";
}