<!DOCTYPE html>
<html class="wide wow-animation scrollTo" lang="en">
  <head>
    <!-- Site Title-->
    
     <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="keywords" content="intense web design multipurpose template">
    <meta name="date" content="Dec 26">
    <link rel="icon" href="images/1525711039.png" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="./Contacts_files/css">
    <link rel="stylesheet" href="./Contacts_files/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0\css/font-awesome.min.css">
    <link href="MaterialDesign-Webfont-master\css\materialdesignicons.min.css" rel="stylesheet">
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="{{asset('easy.png')}}"/>

<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('labo/front_office/font-awesome-4.7.0\css/font-awesome.min.css')}}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('labo/front_office/bootstrap-3.3.7-dist/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('labo/front_office/MaterialDesign-Webfont-master\css\materialdesignicons.min.css')}}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('labo/front_office/css/style.css')}}">
<!--===============================================================================================-->
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
    <style>
    glyphicon {
    font-size: 50px;
    }
    </style>
    </head>
  <body>
    <!-- Page-->
    <div class="page text-center">
     <!-- Page Header-->
      <header class="page-head">
        <!-- RD Navbar Transparent-->
         <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-center" data-md-device-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-stick-up-offset="230" data-lg-auto-height="true" data-auto-height="false" data-md-layout="rd-navbar-static" data-lg-layout="rd-navbar-static" data-lg-stick-up="true">
            <div class="rd-navbar-inner">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap"><span></span></button>
                <h4 class="panel-title veil-md">Pages</h4>
                <!-- RD Navbar Right Side Toggle-->
                <button class="rd-navbar-top-panel-toggle veil-md" data-rd-navbar-toggle=".rd-navbar-top-panel"><span></span></button>
                <div class="rd-navbar-top-panel">
                  <div class="shell">
                    <div class="range range-md-center range-md-middle range-lg-around">
                      <div class="cell-md-3">
                        <div class="unit unit-horizontal unit-top unit-spacing-xs">
                          <div class="unit-left"><span class="icon fa fa fa-phone text-middle"></span></div>
                          <div class="unit-body"><a class="reveal-block" href="tel:#">1-800-1234-567,</a><a href="tel:#">1-800-6547-321</a></div>
                        </div>
                      </div>
                      <div class="cell-md-3 offset-top-0">
                        <!--Navbar Brand-->
                        <div class="rd-navbar-brand"><a class="reveal-block" href="index.html">
                            <div class="unit unit-xs-middle unit-spacing-xxs">
                              <div class="unit-left"><img width='170' height='172' src="{{asset('labo/front_office/img/1525711039.png')}}" alt=''/>
                              </div>
                              <div class="unit-body text-center">
                                <div class="rd-navbar-brand-title">LRIT</div>
                                <div class="rd-navbar-brand-slogan text-light">Tlemcen</div>
                              </div>
                            </div></a></div>
                      </div>
                      <div class="cell-md-3 offset-top-10 offset-md-top-0">
                        <div class="inset-md-left-50">
                          <div class="unit unit-horizontal unit-top unit-spacing-xs text-left">
                            <div class="unit-left"><span class="icon fa fa fa-map-marker text-middle"></span></div>
                            <div class="unit-body"><a href="#">2130 Fulton Street San Diego, CA 94117-1080 USA</a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="rd-navbar-menu-wrap clearfix">
                <div class="rd-navbar-nav-wrap">
                  <div class="rd-navbar-mobile-scroll">
                    <div class="rd-navbar-mobile-header-wrap">
                      <!--Navbar Brand Mobile-->
                      <div class="rd-navbar-mobile-brand"><a href="Home.html"><img width="136" height="138" src="{{asset('labo/front_office/img/dspace-logo-only.png')}}" alt=""></a></div>
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
                      
<li><a href="dashboard" ><span class=" fa-user-circle-o fa-2"></span></a>
                      </li>
                      
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
                <div class="rd-navbar-search"><a class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search" href="#"><span class="icon fa-shopping-cart"></span></a>
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

 <div class="page text-center">
   @yield('content')
       <footer class="page-footer">
        <div class="shell-wide">
          <div class="hr bg-gray-light"></div>
        </div>
        <div class="shell section-60">
          <div class="range range-lg-justify range-xs-center">
            <div class="cell-md-3 cell-lg-2">
              <!--Footer brand--><a class="reveal-inline-block" href="index.html"><img width='170' height='172' src="{{asset('labo/front_office/img/1525711039.png')}}" alt=''/>
                <div>
                  <h6 class="barnd-name text-bold offset-top-25">LRI</h6>
                </div>
                <div>
                  <p class="brand-slogan text-gray text-italic font-accent">Tlemcen</p>
                </div></a>
            </div>
            <div class="cell-xs-10 cell-md-5 cell-lg-4 text-lg-left offset-top-50 offset-md-top-0">
              <h6 class="text-bold">Contact us</h6>
              <div class="text-subline"></div>
              <div class="offset-top-30">
                <ul class="list-unstyled contact-info list">
                  <li>
                    <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                      <div class="unit-left"><span class="icon fa fa fa-phone text-middle icon-xs text-madison"></span></div>
                      <div class="unit-body"><a class="text-dark" href="tel:#">1-800-1234-567,</a> <a class="reveal-block reveal-md-inline-block text-dark" href="tel:#">1-800-6547-321</a>
                      </div>
                    </div>
                  </li>
                  <li class="offset-top-15">
                    <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                      <div class="unit-left"><span class="icon fa fa fa-map-marker text-middle icon-xs text-madison"></span></div>
                      <div class="unit-body text-left"><a class="text-dark" href="https://livedemo00.template-help.com/wt_prod-14585/contacts.html#">2130 Fulton Street San Diego, CA 94117-1080 USA</a></div>
                    </div>
                  </li>
                  <li class="offset-top-15">
                    <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                      <div class="unit-left"><span class="icon fa fa fa-envelope-open text-middle icon-xs text-madison"></span></div>
                      <div class="unit-body"><a href="mailto:#">info@demolink.org</a></div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="offset-top-15 text-left">
                <ul class="list-inline list-inline-xs list-inline-madison">
                  <li><a class="icon icon-xxs fa-facebook icon-circle icon-gray-light-filled" href="https://livedemo00.template-help.com/wt_prod-14585/contacts.html#"></a></li>
                  <li><a class="icon icon-xxs fa-twitter icon-circle icon-gray-light-filled" href="https://livedemo00.template-help.com/wt_prod-14585/contacts.html#"></a></li>
                  <li><a class="icon icon-xxs fa-google icon-circle icon-gray-light-filled" href="https://livedemo00.template-help.com/wt_prod-14585/contacts.html#"></a></li>
                  <li><a class="icon icon-xxs fa-instagram icon-circle icon-gray-light-filled" href="https://livedemo00.template-help.com/wt_prod-14585/contacts.html#"></a></li>
                </ul>
              </div>
            </div>
            <div class="cell-xs-10 cell-md-8 cell-lg-4 text-lg-left offset-top-50 offset-lg-top-0">
              <h6 class="text-bold">Newsletter</h6>
              <div class="text-subline"></div>
              <div class="offset-top-30 text-left">
                <p>Enter your email address to get the latest University news, special events and student activities delivered right to your inbox.</p>
              </div>
              <div class="offset-top-10">
                      <form class="rd-mailform form-subscribe" data-form-output="form-subscribe-footer" data-form-type="subscribe" method="post" action="https://livedemo00.template-help.com/wt_prod-14585/bat/rd-mailform.php" novalidate="novalidate">
                        <div class="form-group">
                          <div class="input-group input-group-sm">
                            <input class="form-control form-control-has-validation" placeholder="Your e-mail" type="email" name="email" data-constraints="@Required @Email" id="regula-generated-498701"><span class="form-validation"></span><span class="input-group-btn">
                              <button class="btn btn-sm btn-primary" type="submit">Subscribe</button></span>
                          </div>
                        </div>
                        <div class="form-output" id="form-subscribe-footer"></div>
                      </form>
              </div>
            </div>
          </div>
        </div>
        <div class="bg-madison context-dark">
          <div class="shell text-md-left section-5">
            <p>© <span id="copyright-year">2018</span> All Rights Reserved Terms of Use and <a href="https://livedemo00.template-help.com/wt_prod-14585/privacy.html">Privacy Policy</a></p>
          </div>
        </div>
      </footer>

</div>
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

<!--===============================================================================================-->
  <script src="{{asset('labo/front_office/js/core.min.js')}}"></script>
<!--===============================================================================================-->
  <script src="{{asset('labo/front_office/js/script.js')}}"></script>
<!--===============================================================================================-->
     <!-- Java script-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
  </html>