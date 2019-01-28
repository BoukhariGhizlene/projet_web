@extends('layouts.master')

@section('title','LRI | Liste des partennaire')

@section('header_page')

      <h1>
        Partennaires
        <small>Nouveau</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('dashboard')}}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li><a href="{{url('partennaires')}}">Partennaire</a></li>
        <li class="active">Ajouter</li>
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
            <li ><a href="{{url('membres')}}"><i class="fa fa-list"></i> Liste</a></li>
          </ul>
        </li>

         <li>
          <a href="{{url('theses')}}">
            <i class="fa fa-file-pdf-o"></i> 
            <span>Thèses</span>
          </a>
        </li>

         <li>
          <a href="{{url('articles')}}">
            <i class="fa fa-newspaper-o"></i> 
            <span>Articles</span></a>
          </li>

       
        <li >
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
          <li>
          <a href="{{url('parametre')}}">
            <i class="fa fa-gears"></i> 
            <span>Paramètres</span></a>
          </li>
          @endif

       @endsection






@section('content')

<div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Créer un nouveau contact !!</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
           
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
          
           <form action=" {{url('partennaires/novC')}} " method="post"  >
              {{ csrf_field() }}
            <div class="col-md-8">
              <!-- text input -->
             
                <div class="form-group">
                
                  <label  > Nom</label>
                  <input type="text"  name="nom" class="form-control" placeholder="Enter ...">

                </div>
                <div class="form-group">
                  <label> Prenom</label>
                   <input type="text"  name="prenom" class="form-control" placeholder="Enter ...">
                 </div>
                 <div class="form-group">
                  <label  > Fenction</label>
                   <input type="text"  name="fenction" class="form-control" placeholder="Enter ...">
                 </div>
                 <div class="form-group">
                  <label  > Nature_Coperation</label>
                   <input type="text"  name="Nature_Cooperation" class="form-control" placeholder="Enter ...">
                 </div>
                  <div class="form-group">
                  <label  > Mail</label>
                  <input type="text"  name="mail" class="form-control" placeholder="Enter ...">
                </div>
                  <div class="form-group">
                  <label  > Numero de Telephone</label>
                  <input type="text"  name="num_tel" class="form-control" placeholder="Enter ...">
                </div>
                  <div class="form-group">
                    
                    <input type="hidden"  name="idpart"  value="{{$partennaires}}">
                   
                        
</div> 
                <!-- textarea -->
              <!-- /.form-group -->
              <div class="col-md-8">
                 <div class="form-group">
                <button type="submit" class="btn btn-block btn-success btn-flat">Ajouter</button>
              </div>
              <!-- /.form-group -->
            </div></form>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      
      </div>

















    
  @endsection
