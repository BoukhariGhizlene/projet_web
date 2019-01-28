@extends('layouts.master')

@section('title','LRI | Ajouter un membre')

@section('header_page')

      <h1>
        Materiel
        <small>Nouveau</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('dashboard')}}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li><a href="{{url('materiel')}}">materiel</a></li>
        <li class="active">New</li>
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
        
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-user"></i> <span>Membres</span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('trombinoscope')}}"><i class="fa fa-id-badge"></i> Trombinoscope</a></li>
            <li><a href="{{url('membres')}}"><i class="fa fa-list"></i> Liste</a></li>
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

          <li>
          <a href="{{url('parametre')}}">
            <i class="fa fa-gears"></i> 
            <span>Paramètres</span></a>
          </li>
          @endif
     @endsection

@section('content')

 <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Categorie</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
           
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
          
            <!-- /.col --> <form action=" {{url('materiel2')}} " method="post"  >
              {{ csrf_field() }}
            <div class="col-md-6">
              <!-- text input -->
                <div class="form-group">
                
                  <label  class="col-sm-2 control-label"> Libille</label>
 
                  <div class="col-sm-10">
                    <input type="text"  name="libelle" class="form-control" placeholder="Enter ...">
                  </div>
                </div>
</div> 
                <!-- textarea -->
              <!-- /.form-group -->
              <div class="col-md-6">
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
      <!-- /.box -->


<!-- /.box -->
          <!-- general form elements disabled -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">General Elements</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form action=" {{url('materiel')}} " role="form" method="post"  >
              {{ csrf_field() }}
                  <div class="row">
                <div class="col-md-6">
                <!-- text input -->
                <div class="form-group">
                  <label>Nom:</label>
                  <input type="text" name="nom" class="form-control" placeholder="Enter ...">
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>description:</label>
                  <textarea class="form-control" name="description" rows="3" placeholder="Enter ..."></textarea>
                </div>
</div>
<div class="col-md-6">
                 <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" name="img" id="exampleInputFile">

                  <p class="help-block">Example block-level help text here.</p>
                </div>

                    <div class="form-group">
                <label>Categorier</label> 
                <select name="categorie" class="form-control select2" style="width: 100%;">
                 @foreach($categories as $categorie) <option selected="selected" value="{{$categorie->id}}">{{$categorie->libelle}}</option>@endforeach
                 
                </select>
              </div>
              </div>
            </div>
                 <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
   

              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          @endsection