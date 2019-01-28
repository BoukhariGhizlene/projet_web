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
<li >
          <a href="{{url('partennaires')}}">
            <i class="fa fa-folder-open-o"></i> 
            <span>Partennaire</span>
          </a>
        </li>
          
       @if(Auth::user()->role->nom == 'admin' )
       

          <li>
          <a href="{{url('parametre')}}">
            <i class="fa fa-gears"></i> 
            <span>Paramètres</span></a>
          </li>
          @endif

       @endsection






@section('content')


    <div class="row" style="padding-top: 30px">
      <div class="col-xs-12">
        <div class="box">
            
          <div class="container col-xs-12">

            <form class="well form-horizontal" action="{{url('partennaires')}}" method="post"  id="contact_form" enctype="multipart/form-data">
              {{ csrf_field() }}

              <fieldset>

                <!-- Form Name--> 
                <legend><center><h2><b>Nouveau partennaire</b></h2></center></legend><br>

                  <div class="form-group ">
                        <label class="col-xs-3 control-label">Nom(*)</label>  
                        <div class="col-xs-9 inputGroupContainer @if($errors->get('nom')) has-error @endif">
                          <div style="width: 70%">
                            <input  name="nom" class="form-control" placeholder="Nom" type="text" value="{{old('nom')}}">
                            <span class="help-block">
                                @if($errors->get('nom'))
                                  @foreach($errors->get('nom') as $message)
                                    <li> {{ $message }} </li>
                                  @endforeach
                                @endif
                            </span>
                          </div>
                        </div>
                  </div>  

                 <div class="form-group ">
                        <label class="col-xs-3 control-label">Achronymes (*)</label>  
                        <div class="col-xs-9 inputGroupContainer">
                          <div style="width: 70%">
                            <input  name="Achronymes" class="form-control"  type="text" >
                          </div>
                        </div>
                  </div> 


                        <div class="form-group ">
                        <label class="col-xs-3 control-label">Type (*)</label>  

                        <div class="col-xs-9 inputGroupContainer ">
                          <div style="width: 70%">
                            <select name='type' class="form-control select" >
                              <option></option>
                              <option>Laboratoire</option>
                              <option>Hopital</option>
                              <option>Entreprise</option>
                               
                            </select>
                            
                          </div>
                        </div>
                  </div> 


                  <div class="form-group ">
                        <label class="col-xs-3 control-label">logo</label>  
                        <div class="col-xs-9 inputGroupContainer">
                          <div style="width: 70%">
                            <input  name="img" class="form-control"  type="file" >
                          </div>
                        </div>
                  </div> 


                  <div class="form-group ">
                        <label class="col-xs-3 control-label">Pays (*)</label>  
                        <div class="col-xs-9 inputGroupContainer">
                          <div style="width: 70%">
                            <input  name="pays" class="form-control" placeholder="Pays" type="text" value="{{old('pays')}}">
                          </div>
                        </div>
                  </div> 
                  <div class="form-group ">
                        <label class="col-xs-3 control-label">Ville (*)</label>  
                        <div class="col-xs-9 inputGroupContainer">
                          <div style="width: 70%">
                            <input  name="ville" class="form-control" placeholder="Pays" type="text" value="{{old('pays')}}">
                          </div>
                        </div>
                  </div> 

                 <div class="form-group">
                      <label class="col-md-3 control-label">Resume (*)</label>
                      <div class="col-md-9 inputGroupContainer @if($errors->get('ville')) has-error @endif">
                        <div style="width: 70%">
                          <textarea class="form-control" name="resume" rows="3" placeholder="resume">
                          </textarea>
                         
                        </div>
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-md-3 control-label">description (*)</label>
                      <div class="col-md-9 inputGroupContainer @if($errors->get('ville')) has-error @endif">
                        <div style="width: 70%">
                          <textarea class="form-control" name="description" rows="7" placeholder="description">
                          </textarea>
                          
                        </div>
                      </div>
                  </div>


                  

              </fieldset>

              <div class="row" style="padding-top: 30px; margin-left: 35%;">
              
               <button type="submit" class=" btn btn-lg btn-primary">Valider</button> 
                  </div>
            </form>
          </div>
         </div>
       </div>
      </div>
    
  @endsection
