<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 3/25/2016
 * Time: 11:23 PM
 */

namespace Site;
class ForumView extends View
{
    public function __construct(SiteManager $site)
    {
        $this->connections= $site;
        $this->id=$site->getId();
        $this->current=$this->connections->getCurrent();
        $this->title=$this->current->getDisplay();
        $this->forum=$this->current->getForum();
    }
    public function headadditional(){
        $check=$this->Title;
        $id=$this->id;
        $html=<<<HTML
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a responsive product landing page.">
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
        $id=$this->id;
        $Forum=$this->forum;
        $html=<<<HTML
    <div class="content-wrapper">
        <iframe src=$Forum scrolling="no" height="1700">
    </div>
HTML;
        return $html;
    }


private $download="";
    private $gitlink="";
    private $id="";
    private $connections="";
    private $current;
    private $forum="";
    private $title="";
    private $description="";
}