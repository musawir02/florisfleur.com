<?php
if (isset($pgenme)==false) { $pgenme= ""; }
if (isset($pgenmestr)==false) { $pgenmestr= "welcome"; }
if (isset($catName)==false) { $catName= ""; }

$subpage="";
$pgheading="";
$subpage = @trim(stripslashes($_GET['i'])); 
$pginnerbgclsname="hb-innerbanner";




switch  ($pgenme) {
	case "about":
        $pgheading="ABOUT US";
        $pginnerbgclsname="inside_topbanner01.jpg";		
		break;    
	case "contact":
        $pgheading="CONTACT US";
        $pginnerbgclsname="inside_topbanner02.jpg";
		break; 
  	case "products":
        $pgheading="OUR PRODUCTS";
        $pginnerbgclsname="inside_topbanner04.jpg";
		break;   
	case "testimonials":   
        $pgheading="TESTIMONIALS";
        $pginnerbgclsname="inside_topbanner05.jpg";
        break;
    case "gallery":
        $pgheading="GALLERY";
        $pginnerbgclsname="inside_topbanner06.jpg";
        break;  		
	default:
        $pgheading="ABOUT US";
        $pginnerbgclsname="inside_topbanner01.jpg";
		break;
	}		

if ($catName!="") {
     $pgheading=$catName;
}

?>
 
  
 
<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">     
    <meta name="keywords" content="flower shop Al Barsha, flower delivery Dubai, bouquet delivery UAE, premium rose bouquets Dubai, exotic flower delivery in Dubai, flower delivery Al Barsha Dubai, best florist in Al Barsha Dubai, flower shop in Al Barsha 1 / 2 / 3, ​florist in Al Barsha Dubai, ​flower delivery Al Barsha south, ​best flower shop near Al Barsha Mall, ​flowers near Barsha Heights, ​florist near Dubai Hills Estate, same day flower delivery Al Barsha, ​60 minute flower delivery Dubai (A major 2026 trend), ​online flower delivery Al Barsha, ​fresh flower bouquets Dubai delivery, ​affordable flower shop Al Barsha" />
    <meta name="description" content="Buy fresh flowers from the best flower shop in Al Barsha, Dubai. Same-day delivery available across Dubai, florist in Al Barsha Dubai, ​flower delivery Al Barsha south, ​best flower shop near Al Barsha Mall, ​flowers near Barsha Heights, ​florist near Dubai Hills Estate, ​60 minute flower delivery Dubai (A major 2026 trend), ​online flower delivery Al Barsha, ​fresh flower bouquets Dubai delivery, ​affordable flower shop Al Barsha">
    <meta name="author" content="Floris Fleur Flowers">
    <link rel="canonical" href="https://florisfleur.com/products_detail.php" />
    <link rel="home" href="https://florisfleur.com/" />
    <link rel="alternate" href="https://florisfleur.com/" hreflang="x-default" />
    <meta name="author" content="Floris Fleur Flowers">
    <title><?php echo $pgheading;?> - Floris Fleur Flowers Trading LLC</title>
    
    
    <link href="css/bootstrap.css" rel="stylesheet">
    
    <link href="css/font-awesome.css" rel="stylesheet">
    
    <link href="css/flaticon.css" rel="stylesheet">
   
    <link href="css/animate.css" rel="stylesheet">
    
    <link href="css/slick.css" rel="stylesheet">
    <link href="css/slick-theme.css" rel="stylesheet">
    
    <link href="css/jquery.fancybox.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/dark-theme.css" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="css/revolution/settings.css">
    <link rel="stylesheet" type="text/css" href="css/revolution/layers.css">
    <link rel="stylesheet" type="text/css" href="css/revolution/navigation.css">

    
    <link rel="shortcut icon" href="images/favicon/favicon.ico"  type="image/x-icon" />
    <link rel="icon" href="images/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="images/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
<link rel="icon" type="image/svg+xml" href="images/favicon/favicon.svg" />
<link rel="manifest" href="images/favicon/manifest.json">

<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">





    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body class="home header-sticky header-v1 hide-topbar-mobile">
    <div id="page" class="hfeed site">

        
        <div class="preloader"></div>

        
        <header id="masthead" class="site-header">
            <div class="header-main clearfix">
                <div class="container">
                    <div class="row menu-row">
                        <div class="site-logo col-lg-3 col-xs-9">
                            <a href="index.php" class="logo"><img src="images/logo_white.png" alt="Floris Fleur" class="Floris Fleur logo"></a>
                            <h1 class="site-title"><a href="#">Floris Fleur</a></h1>
                            <h2 class="site-description">Floris Fleur</h2>
                        </div>
                        <div class="header-content col-lg-9 col-md-12 col-xs-12 pull-right">
                            
                            <div id="topbar" class="topbar ">
                                <div class="topbar-widgets clearfix">
                                    <div class="widget">
                                        <ul class="socials">
                                            <li> <a href="https://www.instagram.com/florisfleur.ae/" target="_blank"><i class="fa fa-instagram"></i></a></li></li>
                                            <li> <a href="#"><i class="fa fa-skype"></i></a></li>
                                            <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li> <a href="#"><i class="fa fa-facebook"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="widget">
                                        <div class="pull-left"><span class="svg-icon"><i class="flaticon-call-answer"></i></span></div>
                                        <div class="pull-right">
                                            <div>Call Us</div>
                                            <div><a href="tel:+971523641716">+971 52 364 1716</a> | <a href="tel:+97145858645">+971 4 585 8645</a></div>
                                        </div>
                                    </div>
                                     <div class="widget">
                                        <div class="pull-left"><span class="svg-icon"><i class="fa fa-whatsapp fa-3x" style="font-size: 22px;"></i></span></div>
                                        <div class="pull-right">
                                            <div>WhatsApp</div>
                                            <div><a target="_blank" href="https://wa.me/971523641716?text=Hi!%20I'm%20interested%20in%20your%20services%20and%20would%20love%20to%20know%20more%20about%20it.%20Could%20you%20please%20send%20me%20more%20information?%20Thank%20you!">+971 52 364 1716</a></div>
                                        </div>
                                    </div>
                                    
                                    <div class="menu-block-right"></div>
                                </div>
                            </div>
                            
                            <div class="site-menu">
                                <nav id="site-navigation" class="main-nav primary-nav nav">
                                    <ul class="menu">
                                        
                                        <li ><a href="index.php" >Home</a></li>
                                        <li <?php if ($pgenme=="about") { echo " class='active' ";} ?>" ><a href="about.php" >About Us</a></li>
                                        <li <?php if ($pgenme=="products") { echo " class='active' ";} ?>" class="has-children"><a href="#" class="dropdown-toggle">Products</a>
                                            <ul class="sub-menu">
                                                  <li><a href="products_detail.php?cid=1"> Bouquets</a></li>
                                                <li><a href="products_detail.php?cid=2"> Baskets</a></li>
                                                <li><a href="products_detail.php?cid=3"> Box Flowers</a></li>
                                                 
                                            </ul>
                                        </li>
                                        <li <?php if ($pgenme=="gallery") { echo " class='active' ";} ?>" ><a href="gallery.php">Gallery</a></li>
                                        <li <?php if ($pgenme=="testimonials") { echo " class='active' ";} ?>" ><a href="testimonials.php">Testimonials</a></li>                                       
                                        <li <?php if ($pgenme=="contact") { echo " class='active' ";} ?>" ><a href="contact.php">Contact</a></li>
                                        <li id="mf-active-menu" class="mf-active-menu"></li>
                                    </ul>
                                </nav>
                                
                            </div>
                        </div>
                        <div class="navbar-toggle col-xs-3">
                            <span id="mf-navbar-toggle" class="navbar-icon"> <span class="navbars-line"></span> </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        

     
        <div class="page-header  parallax has-image">
            <div class="page-header-content">
                <div class="featured-image"></div>
                <div class="container">
                    <div class="header-box">
                        <div class="page-title">
                            <h1><?=$pgheading?></h1></div>
                        <div class="header-breadcrumb">
                            <nav class="breadcrumbs"><a class="home" href="index.php"><span>Home</span></a>
                             <?php
                             if ($catName!="") { echo " - <a class='home' href='products.php'><span>Products</span></a> ";}
                             ?>
                            - <?=$pgheading?>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div> 