<?php

namespace Site;

class View
{
    /** Constructor
     */
    public function __construct()
    {

    }

    public function headeradditional(){
    return "";
}
    public function headadditional(){
       return "";
    }

    public function presenthead($Title){
        $this->Title=$Title;
        $html="";
        $html.=<<<HTML
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Mason Expo | Crafters</title>

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
    <script>
//        $(document).ready(function() {
//            new TypeName("Welcome");
//        });
    </script>
HTML;
        $html.=$this->headadditional();
        $html.="</head>";
        return $html;
    }




    public function presentheader(){

        define('VISUALCITYNUM', SiteManager::VisualCityNum);
        define('VISUALTREENUM', SiteManager::VisualTreeNum);
        define('VIRTUALEVOLUTIONNUM', SiteManager::MarkovBrainNum);
        define('EMITTERNUM', SiteManager::EmitterNum);
        define('VANIANUM', SiteManager::VaniaNum);
        define('STEAMPUNKEDNUM', SiteManager::SteamPunkedNum);
        define('EMPLOYFAINUM', SiteManager::EmployfaiNum);
        define('SHADOWSNUM', SiteManager::ShadowsNum);
        define('ALPHABETNUM', SiteManager::VirtualAlphaNum);
        define('COMPILENUM', SiteManager::CompilerNum);
        $cname = 'constant'; // if you want to use a function in heredoc, you must save function name in variable

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
                            <li class="active"><a href="oldind.html">Home <span class="sr-only">(current)</span></a></li>
                            <li><a href="vendors.html">Commercial Vendors</a></li>
                            <li><a href="crafters.html">Crafters</a></li>
                            <li><a href="cars.html">Car Show</a></li>
                            <li><a href="motorcycles.html">Motorcycle Show</a></li>
                            <li><a href="tractors.html">Tractor Show</a></li>
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
 protected $Title;
}

