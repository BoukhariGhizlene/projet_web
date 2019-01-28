
@section('content')
@extends('layouts.Menu')
<!-- Site Title-->
    <title>Detail Organisme</title>
    
    



		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
		<![endif]-->
			
		
     
      <!-- Classic Breadcrumbs-->
      <section class="breadcrumb-classic context-dark">
         <div class="swiper-container swiper-slider swiper-slider-3 swiper-container-horizontal swiper-container-true" data-height="3vh" data-loop="false" data-dragable="false" data-min-height="380px" data-slide-effect="true" style="height: 767px;">
            <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
              <div class="swiper-slide swiper-slide-active" data-slide-bg="{{asset('labo/front_office/images/part.jpg')}}" style="background-position: 80% center; background-image: url(&quot;images/slide-01-1920x1000.jpg&quot;); background-size: cover; width: 1307px;">
                <div class="swiper-slide-caption header-transparent-slide-caption">
                  <div class="container">
                    <div class="range range-xs-center range-condensed">
                      <div class="cell-md-7 text-center cell-xs-10">
                       <div class="shell section-30 section-sm-top-70 section-sm-bottom-60">
          <h1 class="veil reveal-sm-block"> Partennaire</h1>
          <div class="offset-sm-top-35">
            <ul class="list-inline list-inline-lg list-inline-dashed p">
               <li><a href="Home.html">Accueil</a></li>
              <li><a href="equipeGL.html">equipe</a></li>
              <li><a href="equipeGL.html">Genie logiciel</a></li>
              <li>Partennaire</li>
            </ul>
          </div>
        </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        
      </section>
      <!-- Page Content-->
      <main class="page-content">
        <!--4 Columns Layout-->
        <section class="section-70 section-md-114">
          <div class="shell">
            <div class="range range-xs-center">
              <div class="cell-sm-4 text-sm-left">
                <div class="inset-sm-right-30"><img class="img-responsive reveal-inline-block" src="{{asset('labo/front_office/images/gsc.jpg')}}" width="340" height="340" alt="">

                  <div class="offset-top-15 offset-sm-top-30">
                    <div id="encadres"><!--  --><div class="encadre_fiche"><h2>Contacts</h2><div class="encadre_contenu">
            @foreach($membres as $membre)
                    <ul>
                        <li> <a href="{{url('contacts/'.$membre->id.'/details')}}">{{ $membre->nom }} {{ $membre->prenom }}</a></li>
                    </ul>
                    @endforeach
          </div><!-- .encadre_contenu -->
        </div><!-- .encadre_fiche --><!--  --></div>
                  </div>
          
           <div class="offset-top-15 offset-sm-top-30">
                    <div id="encadres"><!--  --><div class="encadre_fiche"><h2>Localisation</h2><div class="encadre_contenu">
            VILLE :<br /><br /> {{ $partennaire->ville }}</a><br /><br /><br />Pays<br /><br />{{ $partennaire->pays }}</a><br />
          </div><!-- .encadre_contenu -->
        </div><!-- .encadre_fiche --><!--  -->
                  </div>
          </div>
          
          
          
          
          
          
          
          
          
          
          
          
          
                  <div class="offset-top-15 offset-sm-top-30">
                    <ul class="list-inline list-inline-xs list-inline-madison">
                      <li><a class="icon icon-xxs fa-facebook icon-circle icon-gray-light-filled" href="https://livedemo00.template-help.com/wt_prod-14585/team-member-profile.html#"></a></li>
                      <li><a class="icon icon-xxs fa-twitter icon-circle icon-gray-light-filled" href="https://livedemo00.template-help.com/wt_prod-14585/team-member-profile.html#"></a></li>
                      <li><a class="icon icon-xxs fa-google icon-circle icon-gray-light-filled" href="https://livedemo00.template-help.com/wt_prod-14585/team-member-profile.html#"></a></li>
                      <li><a class="icon icon-xxs fa-instagram icon-circle icon-gray-light-filled" href="https://livedemo00.template-help.com/wt_prod-14585/team-member-profile.html#"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="cell-sm-8 text-left">
                <div>
                  <h2 class="text-bold">{{$partennaire->nom}}</h2>
                </div>
                <p class="offset-top-10">{{$partennaire->type}}</p>
                <div class="offset-top-15 offset-sm-top-30">
                  <hr class="divider bg-madison hr-left-0">
                </div>
                <div class="offset-top-30 offset-sm-top-60">
                  <h5 class="text-bold">A propos de  l'organisme</h5>
                  <div class="text-subline"></div>
                </div>
                <div class="offset-top-20">
                  <p>{{$partennaire->description}}</p>
                </div>
               
               
              </div>
            </div>
          </div>
        </section>
       
       
      </main>
      <!-- Page Footer-->
      
@endsection