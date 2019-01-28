
@section('content')
@extends('layouts.Menu')

    <!-- Site Title-->
    <title>Presentation</title>
    
      <!-- Classic Breadcrumbs-->
      <section class="breadcrumb-classic context-dark">
         <div class="swiper-container swiper-slider swiper-slider-3 swiper-container-horizontal swiper-container-true" data-height="2vh" data-loop="false" data-dragable="false" data-min-height="280px" data-slide-effect="true" style="height: 667px;">
            <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
              <div class="swiper-slide swiper-slide-active" data-slide-bg="{{asset('labo/front_office/img/adacore-projet-hi-lite.jpg')}}" style="background-position: 80% center; background-image: url(&quot;images/slide-01-1920x1000.jpg&quot;); background-size: cover; width: 1307px;">
                <div class="swiper-slide-caption header-transparent-slide-caption">
                  <div class="container">
                    <div class="range range-xs-center range-condensed">
                      <div class="cell-md-7 text-center cell-xs-10">
                       <div class="shell section-30 section-sm-top-70 section-sm-bottom-60">
          <h1 class="veil reveal-sm-block">Presentation</h1>
          <div class="offset-sm-top-35">
            <ul class="list-inline list-inline-lg list-inline-dashed p">
              <li><a href="https://livedemo00.template-help.com/wt_prod-14585/index.html">Home</a></li>
              <li>Presentation
              </li>
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
        <!--A Meeting of Minds-->
        <section class="section-70 section-md-114">
          <div class="shell">
            <div class="range">
              
              <div class="cell-sm-8 cell-sm-push-1 offset-top-50 offset-sm-top-0 text-sm-left">
                <h2 class="text-bold">{{$labo->nom}}</h2>
                <hr class="divider bg-madison hr-sm-left-0">
                <div class="offset-top-30 offset-sm-top-60">
                  <p>{{$labo->presentation}}</p>
                </div>
                <p>An initial pledge of $600,000 (roughly $16 million in today's currency) from oil magnate Sam Peterson, along with contributions by the American Baptist Education Society, helped to found the University. The University's land was donated by Marshall Field, owner of the historic Chicago department store that bore his name.</p>
                <p>Christopher Smith, the University's first president, envisioned a university that was "bran splinter new, yet as solid as the ancient hills" - a modern research university, combining an English-style undergraduate college and a German-style graduate research institute. The Modern University fulfilled Christopher's dream, quickly becoming a national leader in higher education and research: an institution of scholars unafraid to cross boundaries, share ideas, and ask difficult questions.</p>
              </div>
            </div>
          </div>
        </section>
        <!-- Images-->
        <section>
          <div class="shell-wide">
            <div class="range">
              <div class="cell-sm-4"><img class="img-responsive reveal-inline-block" src="{{asset('labo/front_office/History_files/history-01-570x370.jpg')}}" width="570" height="370" alt=""></div>
              <div class="cell-sm-4"><img class="img-responsive reveal-inline-block" src="{{asset('labo/front_office/History_files/history-02-570x370.jpg')}}" width="570" height="370" alt=""></div>
              <div class="cell-sm-4"><img class="img-responsive reveal-inline-block" src="{{asset('labo/front_office/History_files/history-03-570x370.jpg')}}" width="570" height="370" alt=""></div>
            </div>
          </div>
        </section>
        <!--A Meeting of Minds-->
   
      </main>
      <!-- Page Footer-->
    
@endsection