@extends('layouts.master')

@section('title','LRI | Liste des projets')

@section('header_page')

      <h1>
        matériel
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Materiels</a></li>
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

       
        <li class=" active">
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

    
                <legend><center><h2><b>

                	<div class="box-body">
              <p>Listes des mteriels</p>

              

   
                </b></h2></center></legend><br>






                   <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <p><div class="input-group margin">
                <div class="input-group-btn">
                  <button type="button" class="btn bg-navy dropdown-toggle" data-toggle="dropdown">Categorie
                    <span class="fa fa-caret-down"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
                <!-- /btn-group -->
                
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
              </div></p>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <div class="tab-pane" id="timeline">
                 <div class="box-body" style="padding-top: 30px;">
              <table  id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>nom</th>
                  <th>categorie</th>
                  <th>option</th>
                </tr>
                </thead>
                <tbody>
                   @foreach($materiels as $materiel)
                
                <tr>
                  <td>{{$materiel->nom}}</td>
                     @foreach($categories as $categorie)
                    @if($materiel->cat_mat_id == $categorie->id)
                  <td>{{$categorie->libelle}}</td>
                  @endif
                   @endforeach

                  
                     
                  <td>  <div class="btn-group">
                        
                        <form action="{{ url('materiel/'.$materiel->id)}}" method="post">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}

                            <a href="{{ url('materiel/'.$materiel->id.'/details')}}" class="btn btn-info">
                              <i class="fa fa-eye"></i>
                            </a>
                            
                             <a href="{{ url('materiel/'.$materiel->id.'/editt')}}" class="btn btn-default">
                        <i class="fa fa-edit"></i>
                      </a>
                           
                            
                            <!-- <button  type="submit" class="btn btn-danger ">
                                <i class="fa fa-trash-o"></i>
                            </button> -->

                             <a href="#supprimer{{ $materiel->id }}Modal" role="button" class="btn btn-danger" data-toggle="modal"><i class="fa fa-trash-o"></i></a>
                      <div class="modal fade" id="supprimer{{ $materiel->id }}Modal" tabindex="-1" role="dialog" aria-labelledby="supprimer{{ $materiel->id }}ModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                      </button>
                                  </div>
                                  <div class="modal-body text-center">
                                      Voulez-vous vraiment effectuer la suppression ? 
                                  </div>
                                  <div class="modal-footer">
                                      <form class="form-inline" action="{{ url('materiel/'.$materiel->id)}}"  method="POST">
                                          @method('DELETE')
                                          @csrf
                                      <button type="button" class="btn btn-light" data-dismiss="modal">Non</button>
                                          <button type="submit" class="btn btn-danger">Oui</button>
                                      </form>
                                  </div>
                              </div>
                          </div>
                     </div></form>
                    </div></td>
                  
                </tr>
                
               @endforeach
               
                </tbody>
                <tfoot>
                <tr>
                  <th>nom</th>
                  <th>categorie</th>
                  <th>option</th>
                </tr>
                
                </tfoot>
              </table></div></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
 @if(Auth::user()->role->nom == 'admin' )
              <div class=" pull-right">
                <a href="{{url('materiel/create')}}" type="button" class="btn btn-block btn-success btn-lg"><i class="fa fa-user-plus"></i> Nouveau materiel</a>
              </div>
               @endif
    @endsection