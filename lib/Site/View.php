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
        $html.=<<<HTML
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
HTML;
        $html.=$this->headadditional();
        $html.="</head>";
$html.=<<<HTML
    <!-- Bootstrap -->
    <link href="node_modules/Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="style/navbar.css" rel="stylesheet">
    <link href="style/forms.css" rel="stylesheet">
    <link href="style/expos.css" rel="stylesheet">
    <link href="style/landing-page.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="style/font-awesome.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="jslib/header.js"></script>
    <script src="typed.js"></script>
 </head>
HTML;
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
                            <li><a href="vendors.html">Commercial Vendors</a></li>
HTML;


       for ($i = 0; $i<$Count;$i++)
       {
            $html.="<li ><a href='page-post.php?id=$i&Display=1'>";
            $html.=$this->connections->getCodeIndex($i)->getDisplay();
            $html.="</a ></li >";
       }

        $html.=<<<HTML

                            <li><a href="sponsors.html">Sponsors</a></li>
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
    private $Title;
    protected $connections;
}

