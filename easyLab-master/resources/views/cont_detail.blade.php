@extends('layouts.master')

 @section('title','LRI | Détails Partenneire')

@section('header_page')
  <h1>
   Contact
    <small>Détails</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{url('dashboard')}}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
    <li><a href="{{url('articles')}}">Contact</a></li>
    <li class="active">Détails</li>
  </ol>
@endsection

@section('asidebar')
      <li >
          <a href="{{url('dashboard')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        <li>
          <a href="{{url('equipes')}}">
            <i class="fa fa-group"></i> 
            <span>Equipes</span>
          </a>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Membres</span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="{{url('trombinoscope')}}"><i class="fa fa-id-badge"></i> Trombinoscope</a></li>
            <li class="active"><a href="{{url('membres')}}"><i class="fa fa-list"></i> Liste</a></li>
          </ul>
        </li>

         <li>
          <a href="{{url('theses')}}">
            <i class="fa fa-file-pdf-o"></i> 
            <span>Thèses</span>
          </a>
        </li>
      
         <li >
          <a href="{{url('articles')}}">
            <i class="fa fa-newspaper-o"></i> 
            <span>Articles</span></a>
          </li>

           <li>
          <a href="{{url('projets')}}">
            <i class="fa fa-folder-open-o"></i> 
            <span>Projets</span>
          </a>
        </li>
          <li>
          <a href="{{url('partennaires')}}">
            <i class="fa fa-address-book"></i> 
            <span>Partennaires</span>
          </a>
        </li>
          @if(Auth::user()->role->nom == 'admin' )
          <li>
          <a href="{{url('materiel')}}">
            <i class="fa fa-suitcase"></i> 
            <span>matériel</span></a>
          </li>

           <li class="active">
          <a href="{{url('partennaires')}}">
            <i class="fa fa-folder-open-o"></i> 
            <span>Partennaires</span>
          </a>
        </li>
           


          <li >
          <a href="{{url('parametre')}}">
            <i class="fa fa-gears"></i> 
            <span>Paramètres</span></a>
          </li>

          
          @endif
@endsection

@section('content')
<div class="row">
      <div class="col-md-12">
           <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Informations</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="box-body">
                <div class="row">
                  <div class="col-md-3">
                    <strong>Nom</strong>
                  </div>
                  <div class="col-md-9">
                    <p class="text-muted">
                     
                    </p>
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-md-3">
                    <strong>prénom</strong>
                  </div>
                  <div class="col-md-9">
                    <p class="text-muted">
                      {{ $cont->prenom }}
                    </p>
                  </div>
                </div>
                
                  <div class="row">
                  <div class="col-md-3">
                    <strong>Fonction</strong>
                  </div>
                  <div class="col-md-9">
                    <p class="text-muted">
                      {{ $cont->fenction }}
                    </p>
                  </div>
                </div>
                
                
                
         
                

                

                

                  <strong><i class="margin-r-5"></i></strong>
                  <hr>

                  <div class="row">
                  <div class="col-md-3">
                    <strong><i class="fa fa-map-marker  margin-r-5"></i>Lieu</strong>
                  </div>
                  <div class="col-md-9">
                    <p class="text-muted">
                      {{ $cont->ville }}, {{ $cont->pays }}
                    </p>
                  </div>
                </div>

                  <strong><i class="margin-r-5"></i></strong>
                <hr>

                <div class="row">
                <div class="col-md-3">
                  <strong><i class="fa fa-calendar margin-r-5"></i>E-mail</strong>                
                 </div>
                  <div class="col-md-9">
                    <p class="text-muted">
                      {{ $cont->mail }}
                    </p>
                  </div>
                </div>


                  <div class="row">
                <div class="col-md-3">
                  <strong><i class="fa fa-calendar margin-r-5"></i>Numero de telephone</strong>                
                 </div>
                  <div class="col-md-9">
                    <p class="text-muted">
                      {{ $cont->num_tel }}
                    </p>
                  </div>
                </div>
                  
              
          
            <!-- /.box-body -->
          </div>
          
         </div><!-- /.container -->
       </div>
      </div>
@endsection