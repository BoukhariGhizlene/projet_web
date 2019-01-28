
@section('content')
@extends('layouts.Menu')


    <title>actualite</title>
    
     
      <!-- Classic Breadcrumbs-->
      <section class="breadcrumb-classic context-dark">
         <div class="swiper-container swiper-slider swiper-slider-3 swiper-container-horizontal swiper-container-true" data-height="2vh" data-loop="false" data-dragable="false" data-min-height="280px" data-slide-effect="true" style="height: 667px;">
            <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
              <div class="swiper-slide swiper-slide-active" data-slide-bg="{{asset('labo/front_office/img/actualite-vae.Gif')}}" style="background-position: 80% center; background-image: url(&quot;images/slide-01-1920x1000.jpg&quot;); background-size: cover; width: 1307px;">
                <div class="swiper-slide-caption header-transparent-slide-caption">
                  <div class="container">
                    <div class="range range-xs-center range-condensed">
                      <div class="cell-md-7 text-center cell-xs-10">
                       <div class="shell section-30 section-sm-top-70 section-sm-bottom-60">
          <h1 class="veil reveal-sm-block">Actualité </h1>
          <div class="offset-sm-top-35">
            <ul class="list-inline list-inline-lg list-inline-dashed p">
               <li><a href="/">Accueil</a></li>
              <li><a href="/actualité">actualité</a></li>
              <li></li>
            </ul>
          </div>
        </div>
                        
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
      
        <!--les nouvelle publication-->
       
      <section class="section-90 section-md-114  bg-catskilll ">
<div class="inset-left-11p inset-right-11p">
@foreach($actualite as $actualite)
                  <div class="post-news-modern ">
                    <div class="unit unit-sm unit-sm-horizontal unit-timeline unit-sm-inverse">
                      <div class="unit-body">
                        <article class="post-news post-news-wide"><a href=""> <img src="{{asset($actualite->photo)}}" width="800" height="350" alt=""></a>
                          <div class="post-news-body">
                            <h4 class="text-bold text-primary"><a href="">{{$actualite->titre}}</a></h4>
                            <p>
                              <br>
                           {{$actualite->contenu}}</p>
                            
                        </article>
                      </div>
                      <div class="unit-right text-center">
                        <div class="unit unit-horizontal unit-middle unit-spacing-xxs unit-sm unit-sm-vertical unit-sm-inverse">@foreach($users as $user)
                      @if($user->id==$actualite->user_id)
                          <div class="unit-left"><img class="img-responsive img-circle reveal-inline-block" src="{{asset($user->photo)}}" width="90" height="90" alt="">
                            <p class="text-primary">{{$user->name}}</p>
                          </div>
                          <div class="unit-body text-left text-sm-center">
                            <time datetime="2018-01-01"> {{$actualite->created_at}}</time>
                          </div>
                  @endif
                          @endforeach
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
               </div>
        </section>
       
      </main>
      <!-- Page Footer-->
     
 
@endsection