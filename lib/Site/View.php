<?php

namespace Site;

class View
{
    /** Constructor
     */
    public function __construct(SiteManager $site)
    {
        $this->connections= $site;
    }

    public function headeradditional(){
        return "";
    }
    public function headadditional(){
        return "<title>MasonExpo</title>";
    }

    public function presenthead(){
        $html="";
        return $html;
    }




    public function presentheader(){


        $Count=$this->connections->getCount();
        $html=<<<HTML

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <!-- add header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Outdoor Expo & More</a>
            </div>
            <!-- menu items -->

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
HTML;

        for ($i = 0; $i<$Count;$i++)
        {
            $html.="<li ><a href='page-post.php?id=$i&Display=1'>";
            $html.=$this->connections->getCodeIndex($i)->getDisplay();
            $html.="</a ></li >";
        }
        $html.=<<<HTML
                        </ul>

                <div class="social">
            <ul class="nav navbar-nav pull-left">
                <li><a href="https://www.facebook.com/Outdoor-Expo-More-1504734093129863/?ref=aymt_homepage_panel"><i class="fa fa-lg fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-lg fa-twitter"></i></a></li>
            </ul>
                </div>
            </div>

        </div>
HTML;
        $html.=$this->headeradditional();

        $html.=<<<HTML
</nav>
HTML;





        return $html;
    }

    public function presentGoBack(){
        $html = '<a href="javascript:history.back()">Go Back</a>';

        return $html;
    }


    private $Title;
    protected $connections;
}
?>
