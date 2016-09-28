<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 3/25/2016
 * Time: 11:23 PM
 */

namespace Site;
class DynamicView extends View
{
    public function __construct(SiteManager $site)
    {
        $this->connections= $site;
        $this->id=$site->getId();
        $this->current=$this->connections->getCurrent();
        $this->title=$this->current->getDisplay();
        $this->form=$this->current->getForm();
        $this->image=$this->current->getSlideShow();
        $this->info=$this->current->getInfo();
        $this->logo=$this->current->getLogo();
        $this->logolink=$this->current->getLogoLink();
        $this->map=$this->current->getMap();
        var_dump($this->map);
    }
    public function headadditional()
    {
        return <<<HTML
    <link href="style/navbar.css" rel="stylesheet">
    <link href="style/forms.css" rel="stylesheet">
    <link href="style/expos.css" rel="stylesheet">
    <link href="style/landing-page.css" rel="stylesheet">
HTML;
    }

    public function presenthead()
    {
    $title=$this->title;
    $html="";
    $html.=<<<HTML
    <head>
    <title>MasonExpo | $title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Nothing quite like the Mason Expo.">
    <link href="node_modules/Bootstrap/css/bootstrap.min.css" rel="stylesheet">
HTML;
    $html.=$this->headadditional();
    $html.=<<<HTML
    <script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="jslib/header.js"></script>
    <script src="typed.js"></script>
<script>


$(function(){
    $('.image img').load(function(){
        var img = $(this);
        img.attr('width', img.width()).attr('height', img.height());
    });
});
</script>
<script>
		$(function() {

			$("#slideshow > div:gt(0)").hide();

			setInterval(function() {
			  $('#slideshow > div:first')
			    .fadeOut(1000)
			    .next()
			    .fadeIn(1000)
			    .end()
			    .appendTo('#slideshow');
			},  3000);

		});
</script>
</head>
HTML;

        return $html;
    }
    public function presentheader()
    {
        return parent::presentheader();
    }


    public function presentDisplay()
    {
        $html="";
        return $html;
    }


    protected $id="";
    protected $current;
    protected $form="";
    protected $title="";
    protected $info="";
    protected $image="";
    protected $logo="";
    protected $logolink="";
    protected $map="";
}