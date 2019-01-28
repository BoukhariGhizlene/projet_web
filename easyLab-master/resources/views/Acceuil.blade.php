@extends('layouts.FrontOffice')

@section('content')
<!DOCTYPE html>
<html class="wide wow-animation scrollTo" lang="en">
<head>
    <!-- Site Title-->
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="keywords" content="intense web design multipurpose template">
    <meta name="date" content="Dec 26">
    <link rel="icon" href="images/1525711039.png" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,700%7CMerriweather:400,300,300italic,400italic,700,700italic">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="font-awesome-4.7.0\css/font-awesome.min.css">
    <link href="MaterialDesign-Webfont-master\css\materialdesignicons.min.css" rel="stylesheet">
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="https://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Page-->
    <div class="page text-center">
      <!-- Page Header-->
       <header class="page-head" style="position:absolute; left:0; right:0;top:0;">
        <!-- RD Navbar Transparent-->
        <div class="rd-navbar-wrap" style="height: 95px;">
          <nav class="rd-navbar rd-navbar-transparent rd-navbar-static" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-stick-up-offset="40" data-lg-auto-height="true" data-auto-height="false" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-stick-up="true" data-md-focus-on-hover="false">
            <div class="rd-navbar-inner">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap"><span></span></button>
                <h4 class="panel-title veil-lg">Home</h4>
              </div>
              <div class="rd-navbar-menu-wrap clearfix">
                <!--Navbar Brand-->
                <div class="rd-navbar-brand"><a class="reveal-inline-block" href="/">
                    <div class="unit unit-xs-middle unit-lg unit-lg-horizontal unit-spacing-xxs">
                      <div class="unit-left">
                        <div class="wrap"><img width="170" height="172" src="{{asset('labo/front_office/img/1525711039.png')}}" alt="">
                        </div>
                      </div>
                      <div class="unit-body text-lg-left">
                        <div class="rd-navbar-brand-title"><img width="170" height="172" src="{{asset('labo/front_office/img/1525711333.png')}}" alt=""></div>
                        <div class="rd-navbar-brand-title text-light">Tlemcen</div>
                      </div>
                    </div></a></div>
                <div class="rd-navbar-nav-wrap">
                  <div class="rd-navbar-mobile-scroll">
                    <div class="rd-navbar-mobile-header-wrap">
                      <!--Navbar Brand Mobile-->
                      <div class="rd-navbar-mobile-brand"><a href="/"><img width="136" height="138" src="{{asset('labo/front_office/img/1525711039.png')}}" alt=""></a></div>
                    </div>
                <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">

                     <li ><a href="/">Accueil</a>
                      </li>
                        <li ><a href="/actualité">Actualité</a>
                      </li>
                      <li><a href="/Acceuil/Presentation">Presentation</a>
                      </li>
                      <li class="rd-navbar--has-dropdown rd-navbar-submenu" class="active"><a>Equipes</a>
                        <ul class="rd-navbar-dropdown" >
                          <?php

try
{// On se connecte à MySQL
$bdd = new PDO('mysql:host=localhost;dbname=lrit;charset=utf8', 'root', '');
}
catch(Exception $e)
{// En cas d'erreur, on affiche un message et on arrête tout
die('Erreur : '.$e->getMessage());
} // Si tout va bien, on peut continuer
$reponse = $bdd->query('SELECT * FROM equipes'); // On récupère tout le contenu de la table 
while ($donnees = $reponse->fetch()) // On affiche chaque entrée une à une
{
?>

                          <li><a href="/Acceuil/Equipe/<?php echo $donnees['id']; ?>"><?php echo $donnees['achronymes']; ?></a>
                          </li>
                          <?php
}
$reponse->closeCursor(); // Termine le traitement de la requête
?>
                          
                        </ul>
                      <span class="rd-navbar-submenu-toggle"></span></li>
                     <li><a href="/Acceuil/login">login</a>
                      </li>
                      <li><a href="/Acceuil/contact">Contacts</a>
                      </li>
                      </li>
                      </li>
<li><a href="dashboard" ><span class=" fa-user-circle-o fa-2"></span></a>
                      </li>
                      <li><a class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search" href="#"><span class="icon fa-shopping-cart"></span></a>
                      
                    </ul>
                    <!--RD Navbar Mobile Search-->
                    <div class="rd-navbar-search-wrap" id="rd-navbar-search-wrap">
                      <form class="rd-navbar-search-form search-form-icon-right rd-search" action="search-results.html" method="GET">
                        <div class="form-group">
                          <label class="form-label" for="rd-navbar-mobile-search-form-input">Search...</label>
                          <input class="rd-navbar-search-form-input form-control form-control-gray-lightest" id="rd-navbar-mobile-search-form-input" type="text" name="s" autocomplete="off"/>
                        </div>
                        <button class="icon fa-search rd-navbar-search-button" type="submit"></button>
                      </form>
                    </div>
                  </div>
                </div>
                <!--RD Navbar Search-->
                <div class="rd-navbar-search">
                  <form class="rd-navbar-search-form search-form-icon-right rd-search" action="search-results.html" data-search-live="rd-search-results-live" method="GET">
                    <div class="form-group">
                      <label class="form-label" for="rd-navbar-search-form-input">Search</label>
                      <input class="rd-navbar-search-form-input form-control form-control-gray-lightest" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off"/>
                      <div class="rd-search-results-live" id="rd-search-results-live"></div>
                    </div>
                  </form>
                </div>
                <!--RD Navbar shop-->
               
              </div>
            </div>
          </nav>
        </div>
      </header>


      <!-- Page Content-->
      <main class="page-content">
        <section>
          <!-- Swiper-->
          <div class="swiper-container swiper-slider swiper-slider-3 swiper-container-horizontal swiper-container-true" data-height="100vh" data-loop="false" data-dragable="false" data-min-height="480px" data-slide-effect="true" style="height: 667px;">
            <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
              <div class="swiper-slide swiper-slide-active" data-slide-bg="{{asset('labo/front_office/images/slide-02-1920x1000.jpg')}}" style="background-position: 80% center; background-image: url(&quot;images/slide-01-1920x1000.jpg&quot;); background-size: cover; width: 1307px;">
                <div class="swiper-slide-caption header-transparent-slide-caption">
                  <div class="container">
                    <div class="range range-xs-center range-condensed">
                      <div class="cell-md-7 text-center cell-xs-10">
                        <div data-caption-animate="fadeInUp" data-caption-delay="100" data-caption-duration="1700" class="fadeInUp animated">
                          <h1 class="text-bold">{{$labo->nom}}</h1>
                        </div>
                        <div class="offset-top-20 offset-xs-top-40 offset-xl-top-60 fadeInUp animated" data-caption-animate="fadeInUp" data-caption-delay="150" data-caption-duration="1700">
                          <h5 class="text-regular font-default">{{$labo->resume}}</h5>
                        </div>
                        <div class="offset-top-20 offset-xl-top-40 fadeInUp animated" data-caption-animate="fadeInUp" data-caption-delay="400" data-caption-duration="1700">
                          <div class="inset-xs-left-30 reveal-lg-inline-block"><a class="btn btn-primary btn-ellipse veil reveal-lg-inline-block" href="/Acceuil/Presentation">Lire plus</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide swiper-slide-next" data-slide-bg="{{asset('labo/front_office/img/data-entry-services-a-boon-corporates.jpg')}}" style="background-position: 80% center; background-image: url(&quot;images/slide-02-1920x1000.jpg&quot;); background-size: cover; width: 1307px;">
                <div class="swiper-slide-caption header-transparent-slide-caption">
                  <div class="container">
                    <div class="range range-xs-center range-lg-left range-condensed">
                      <div class="cell-md-7 text-md-left cell-xs-10">
                        <div data-caption-animate="fadeInUp" data-caption-delay="100" data-caption-duration="1700" class="not-animated">
                          <h1 class="text-bold">l'actualité</h1>
                        </div>
                        <div class="offset-top-20 offset-xs-top-40 offset-xl-top-60 not-animated" data-caption-animate="fadeInUp" data-caption-delay="150" data-caption-duration="1700">
                          <h5 class="text-regular font-default">At Modern University, you can succeed in lots of research areas and invest in your education as well as gain skills that will help you become an experienced and demanded specialist.</h5>
                        </div>
                        <div class="offset-top-20 offset-xl-top-40 not-animated" data-caption-animate="fadeInUp" data-caption-delay="400" data-caption-duration="1700">
                          <div class="inset-xs-left-30 reveal-lg-inline-block"><a class="btn btn-ellipse btn-primary veil reveal-lg-inline-block" href="/actualité">Lire plus</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide" data-slide-bg="{{asset('labo/front_office/img/home2.jpg')}}" style="background-position: 80% center; background-image: url(&quot;images/slide-03-1920x1000.jpg&quot;); background-size: cover; width: 1307px;">
                <div class="swiper-slide-caption header-transparent-slide-caption">
                  <div class="container">
                    <div class="range range-xs-center range-lg-right range-condensed">
                      <div class="cell-md-6 text-md-left cell-xs-10">
                        <div data-caption-animate="fadeInUp" data-caption-delay="100" data-caption-duration="1700" class="not-animated">
                          <h1 class="text-bold">Contactez nous!</h1>
                        </div>
                        <div class="offset-top-20 offset-xs-top-40 offset-xl-top-60 not-animated" data-caption-animate="fadeInUp" data-caption-delay="150" data-caption-duration="1700">
                          <h5 class="text-regular font-default">Take part in numerous amazing activities that will develop you as a person and help you make new friends that will undoubtedly become a part of your student life.</h5>
                        </div>
                        <div class="offset-top-20 offset-xl-top-40 not-animated" data-caption-animate="fadeInUp" data-caption-delay="400" data-caption-duration="1700">
                          <div class="inset-xs-left-30 reveal-lg-inline-block"><a class="btn btn-ellipse btn-primary veil reveal-lg-inline-block" href="/Acceuil/contact">Contact</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Swiper Pagination-->
            <div class="swiper-pagination swiper-pagination-clickable"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span></div>
          </div>
        </section>
        <!-- A Few Words About the University-->
        <section class="section-70 section-md-114 bg-index-body">
          <div class="shell">
            <div class="range text-sm-left range-sm-justify">
              <div class="cell-sm-7 view-animate fadeInRightSm delay-04">
                <div class="img-wrap-2">
                  <figure><span class="icon mdi fa-play" data-toggle="modal" data-target="#myModal"></span><img class="img-responsive reveal-inline-block" src="{{asset('labo/front_office/img/apropos.jpg')}}" width="620" height="350" alt=""></figure>
                </div>
              </div>
              <div class="cell-sm-5 offset-top-50 offset-sm-top-0">
                <h2 class="home-headings-custom text-bold view-animate fadeInLeftSm delay-06"><span class="first-word">Apropo de </span>notre laboratoire</h2>
                <div class="offset-top-35 offset-md-top-60 view-animate fadeInLeftSm delay-08">
                  <p>{{$labo->resume}}</p>
                </div>
                <div class="offset-top-30 view-animate fadeInLeftSm delay-1"><a class="btn btn-ellipse btn-icon btn-icon-right btn-default" href="/Acceuil/Presentation"><span class="icon fa-arrow-right"></span><span>Lire plus</span></a></div>
              </div>
            </div>
          </div>
        </section>
      
      
        
        <!-- Testimonials-->
        <section class="context-dark parallax-container position-relative" data-parallax-img="{{asset('labo/front_office/images/parallax-03.jpg')}}">
          <div class="parallax-content">
            <div class="shell section-70 section-xl-114">
            
                <h2 class="text-bold text-white view-animate fadeInUpSmall delay-04"> Actualités Récente</h2>
            <div class="range offset-top-60 text-left range-xs-center">
              <?php $nbr=0; ?>
             @foreach($actualite as $A)
             <?php if($nbr<3){ ?>
              <div class="cell-sm-6 cell-md-4">
                <article class="post-news post-news-mod-1 view-animate fadeInLeftSm delay-04"><a href=""><img class="img-responsive img-fullwidth" src="{{asset($A->photo)}}" width="370" height="240" alt=""></a>
                  <div class="post-news-body">
                    <h6><a href="">{{$A->titre}}</a></h6>
                    <div class="offset-top-20">
                      <p>{{$A->resumer}}…</p>
                    </div>
                    <div class="post-news-meta offset-top-20"><p><span class="icon icon-xs mdi fa-calendar text-middle text-madison"></span><span class="text-middle inset-left-10 text-italic ">{{$A->created_at}}</p></span></div>
                  </div>
                </article>
              </div> <?php $nbr++; } ?>@endforeach
              
            </div>
            <div class="offset-top-50 view-animate fadeInUpSmall"><a class="btn btn-ellipse btn-primary" href="/actualité">voir plus</a></div>
                 
          
            </div>
          </div>
        </section>
        
         <!-- Google map-->
        <section>
          <!-- RD Google Map-->
          <div class="rd-google-map">
            <div class="rd-google-map__model" id="rd-google-map" data-zoom="14" data-x="-73.9874068" data-y="40.643180" data-styles="[{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#444444&quot;}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f2f2f2&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi.business&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:45}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#b4d4e1&quot;},{&quot;visibility&quot;:&quot;on&quot;}]}]"></div>
            <ul class="rd-google-map__locations">
              <li data-x="-73.9874068" data-y="40.643180">
                <p>9870 St Vincent Place, Glasgow</p>
              </li>
            </ul>
          </div>
        </section>
       
        
      </main>
      <!-- Modal-->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button class="close mdi mdi-window-close" type="button" data-dismiss="modal"></button>
            </div>
            <div class="modal-body">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="{{asset('labo/front_office/img/v.mp4')}}"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Corporate footer-->
      <footer class="page-footer">
        <div class="shell section-60 section-bottom-20">
          <div class="range range-xs-center">
            <div class="cell-md-3 cell-lg-2">
              <!--Footer brand--><a class="reveal-inline-block view-animate zoomInSmall delay-06" href="/"><img width="65" height="65" src="{{asset('labo/front_office/img/1525711039.png')}}" alt="">
                <div>
                  <h6 class="barnd-name text-bold offset-top-12">LRI</h6>
                </div>
                <div>
                  <p class="brand-slogan text-gray text-italic font-accent">Tlemcen</p>
                </div></a>
            </div>
            <div class="cell-xs-12 offset-top-15 offset-sm-top-40 text-center">
              <ul class="list-inline list-inline-xs list-inline-madison">
                <li><a class="icon icon-xxs fa-facebook icon-circle icon-gray-light-filled view-animate zoomInSmall delay-04" href="/"></a></li>
                <li><a class="icon icon-xxs fa-twitter icon-circle icon-gray-light-filled view-animate zoomInSmall delay-06" href="/"></a></li>
                <li><a class="icon icon-xxs fa-google icon-circle icon-gray-light-filled view-animate zoomInSmall delay-08" href="/"></a></li>
                <li><a class="icon icon-xxs fa-instagram icon-circle icon-gray-light-filled view-animate zoomInSmall delay-1" href="/"></a></li>
              </ul>
            </div>
            <div class="cell-xs-12 text-center offset-top-20 offset-sm-top-45">
              <p>© <span id="copyright-year">2018</span>  </p>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- PhotoSwipe Gallery-->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="pswp__bg"></div>
      <div class="pswp__scroll-wrap">
        <div class="pswp__container">
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
          <div class="pswp__top-bar">
            <div class="pswp__counter"></div>
            <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
            <button class="pswp__button pswp__button--share" title="Share"></button>
            <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
            <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
            <div class="pswp__preloader">
              <div class="pswp__preloader__icn">
                <div class="pswp__preloader__cut">
                  <div class="pswp__preloader__donut"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
            <div class="pswp__share-tooltip"></div>
          </div>
          <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
          <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
          <div class="pswp__caption">
            <div class="pswp__caption__center"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Java script-->
   <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>

	<!--LIVEDEMO_00 -->

	<script type="text/javascript">
   var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-7078796-5']);
    _gaq.push(['_trackPageview']);
    (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'https://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();</script>
  

  
  </body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>
   @endsection