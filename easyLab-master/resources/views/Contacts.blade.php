

@section('content')
@extends('layouts.Menu')
<title>Contact</title>
      <!-- Page Header-->
      
      <!-- Classic Breadcrumbs-->
      <section class="breadcrumb-classic context-dark">
         <div class="swiper-container swiper-slider swiper-slider-3 swiper-container-horizontal swiper-container-true" data-height="2vh" data-loop="false" data-dragable="false" data-min-height="280px" data-slide-effect="true" style="height: 667px;">
            <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
              <div class="swiper-slide swiper-slide-active" data-slide-bg="{{asset('labo/front_office/img/knowledge_280115-17.jpg')}}" style="background-position: 80% center; background-image: url(&quot;images/slide-01-1920x1000.jpg&quot;); background-size: cover; width: 1307px;">
                <div class="swiper-slide-caption header-transparent-slide-caption">
                  <div class="container">
                    <div class="range range-xs-center range-condensed">
                      <div class="cell-md-7 text-center cell-xs-10">
                       <div class="shell section-30 section-sm-top-70 section-sm-bottom-60">
          <h1 class="veil reveal-sm-block">Contact</h1>
          <div class="offset-sm-top-35">
            <ul class="list-inline list-inline-lg list-inline-dashed p">
              <li><a href="https://livedemo00.template-help.com/wt_prod-14585/index.html">Home</a></li>
              <li>contact</li>
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
        <section class="section-70 section-md-114">
          <div class="shell">
            <div class="range range-xs-center">
              <div class="cell-xs-10 cell-md-8 text-md-left">
                <h2 class="text-bold">Contact</h2>
                <hr class="divider bg-madison hr-sm-left-0">
                <div class="offset-top-30 offset-md-top-60">
                  <p>You can contact us any way that is convenient for you. We are available 24/7 via fax or email. You can also use a quick contact form below or visit our office personally. We would be happy to answer your questions.</p>
                </div>
                <div class="offset-top-30">
                  <form class="rd-mailform text-left" data-form-output="form-output-global" data-form-type="contact" method="post" action="https://livedemo00.template-help.com/wt_prod-14585/bat/rd-mailform.php" novalidate="novalidate">
                    <div class="range">
                      <div class="cell-lg-6">
                        <div class="form-group">
                          <label class="form-label form-label-outside rd-input-label" for="contact-me-name" > &emsp;&emsp;<spam style="font-size:1.5em; color: #00e600" class="glyphicon glyphicon-user" ></spam>&emsp;&emsp;First name</label>
                          <input class="form-control form-control-has-validation form-control-last-child" id="contact-me-name" type="text" name="name" data-constraints="@Required" placeholder="First Name"><span class="form-validation"></span>
                        </div>
                      </div>
                      <div class="cell-lg-6 offset-top-12 offset-lg-top-0">
                        <div class="form-group">
                          <label class="form-label form-label-outside rd-input-label" for="contact-me-last-name">&emsp;&emsp;<spam style="font-size:1.5em; color: #00e600" class="glyphicon glyphicon-user" ></spam>&emsp;&emsp;Last name</label>
                          <input class="form-control form-control-has-validation form-control-last-child" id="contact-me-last-name" type="text" name="last-name" data-constraints="@Required" placeholder="Last Name"><span class="form-validation"></span>
                        </div>
                      </div>
                      <div class="cell-lg-6 offset-top-12">
                        <div class="form-group">
                          <label class="form-label form-label-outside rd-input-label" for="contact-me-email">&emsp;&emsp;<spam style="font-size:1.5em; color: #00e600" class="glyphicon glyphicon-envelope " ></spam>&emsp;&emsp;E-mail</label>
                          <input class="form-control form-control-has-validation form-control-last-child" id="contact-me-email" type="email" name="email" data-constraints="@Required @Email" placeholder="E-mail"><span class="form-validation"></span>
                        </div>
                      </div>
                      <div class="cell-lg-6 offset-top-12">
                        <div class="form-group">
                          <label class="form-label form-label-outside rd-input-label" for="contact-me-phone">&emsp;&emsp;<spam style="font-size:1.5em; color: #00e600"class="glyphicon glyphicon-erase" ></spam>&emsp;&emsp;Phone</label>
                          <input class="form-control form-control-has-validation form-control-last-child" id="contact-me-phone" type="text" name="phone" data-constraints="@Required @IsNumeric" placeholder="Phone"><span class="form-validation"></span>
                        </div>
                      </div>
                      <div class="cell-lg-12 offset-top-12">
                        <div class="form-group">
                          <label class="form-label form-label-outside rd-input-label" for="contact-me-message" >&emsp;&emsp;<spam  style="font-size:1.5em; color:#00e600"  class="glyphicon glyphicon-pencil"></spam >&emsp;&emsp;Message</label>
                          <textarea class="form-control form-control-has-validation form-control-last-child" id="contact-me-message" name="message" data-constraints="@Required" style="height: 220px;" placeholder="Message ..... "></textarea><span class="form-validation"></span>
                        </div>
                      </div>
                    </div>
                    <div class="text-center text-lg-left offset-top-20">
                      <button class="btn btn-primary" type="submit" style="width: 100%;">Send Message</button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="cell-xs-10 cell-md-4 offset-top-65 offset-md-top-0 text-left">
                <div class="inset-md-left-30">
                  <h6 class="text-bold">Socials</h6>
                  <div class="hr bg-gray-light offset-top-10"></div>
                  <ul class="list-inline list-inline-xs list-inline-madison">
                    <li><a class="icon icon-xxs fa-facebook icon-circle icon-gray-light-filled"  href="https://livedemo00.template-help.com/wt_prod-14585/contacts.html#"></a></li>
                    <li><a class="icon icon-xxs fa-twitter icon-circle icon-gray-light-filled" href="https://livedemo00.template-help.com/wt_prod-14585/contacts.html#"></a></li>
                    <li><a class="icon icon-xxs fa-google icon-circle icon-gray-light-filled" href="https://livedemo00.template-help.com/wt_prod-14585/contacts.html#"></a></li>
                    <li><a class="icon icon-xxs fa-instagram icon-circle icon-gray-light-filled" href="https://livedemo00.template-help.com/wt_prod-14585/contacts.html#"></a></li>
                  </ul>
                  <div class="offset-top-30 offset-md-top-60">
                    <h6 class="text-bold">Phones</h6>
                    <div>
                      <div class="hr bg-gray-light offset-top-10"></div>
                    </div>
                    <div class="offset-top-15">
                      <ul class="list list-unstyled">
                        <li><span class="icon icon-xs text-madison fa fa-phone text-middle"></span><a class="text-middle inset-left-10 text-dark" href="tel:1-800-1234-567">1-800-1234-567</a></li>
                        <li><span class="icon icon-xs text-madison fa fa-phone text-middle"></span><a class="text-middle inset-left-10 text-dark" href="tel:1-800-6547-321">1-800-6547-321</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="offset-top-30 offset-md-top-60">
                    <h6 class="text-bold">E-mail</h6>
                    <div>
                      <div class="hr bg-gray-light offset-top-10"></div>
                    </div>
                    <div class="offset-top-15">
                      <ul class="list list-unstyled">
                        <li><span class="icon icon-xs text-madison fa fa-envelope-open text-middle"></span><a class="text-primary text-middle inset-left-10" href="mailto:info@demolink.org">info@demolink.org</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="offset-top-30 offset-md-top-60">
                    <h6 class="text-bold">Address</h6>
                    <div>
                      <div class="hr bg-gray-light offset-top-10"></div>
                    </div>
                    <div class="offset-top-15">
                      <div class="unit unit-horizontal unit-spacing-xs">
                        <div class="unit-left"><span class="icon icon-xs fa fa-map-marker text-madison"></span></div>
                        <div class="unit-body">
                          <p><a class="text-dark" href="https://livedemo00.template-help.com/wt_prod-14585/contacts.html#">2130 Fulton Street San Diego, CA 94117-1080 USA</a></p>
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



        <!--<section class="bg-madison">
          <!-- RD Google Map>
          <div class="rd-google-map">
            <div class="rd-google-map__model" id="rd-google-map" data-zoom="14" data-x="-73.9874068" data-y="40.643180" data-styles="[{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#444444&quot;}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f2f2f2&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi.business&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:45}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#b4d4e1&quot;},{&quot;visibility&quot;:&quot;on&quot;}]}]"></div>
            <ul class="rd-google-map__locations">
              <li data-x="-73.9874068" data-y="40.643180">
                <p>9870 St Vincent Place, Glasgow</p>
              </li>
            </ul>
          </div>
        </section>-->
      </main>

      <!-- Page Footer-->
      <!-- Corporate footer-->
     
 @endsection
