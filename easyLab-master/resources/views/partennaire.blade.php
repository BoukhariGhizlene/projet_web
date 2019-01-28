@extends('layouts.master')

@section('title','LRI | Liste des Partennaires')

@section('header_page')

      <h1>
        Liste Des Partennaires
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><a href="{{url('partennaires')}}">Partennaire</a></li>
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

       
        <li>
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

 <div class="row">
      <div class="col-md-12">
        <div class="box col-xs-12">
          <div class="container" style="padding-top: 30px">
          <div class="row" style="padding-bottom: 20px">
            <div class="box-header col-xs-9">
              <h3 class="box-title">Liste des partennaires</h3>
            </div>
          </div>
          </div>

<div class="box-body">
               @if(Auth::user()->role->nom != 'membre' )
              <div class=" pull-right">
                <a href="{{url('partennaires/partenaire_create')}}" type="button" class="btn btn-block btn-success btn-lg"><i class="fa fa-plus"></i> Nouveau Partennaitre</a>
              </div>
             @endif

             <div class="row">
      <div class="col-md-12">
    <p></p>
      </div>
      </div> 

<div class="row">
      <div class="col-md-12">
        <div class="box col-xs-12">
  <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nom</th>
                  <th>Type</th>
                  <th>Pays</th>
                  <th>Ville</th>
                  <th>Option</th>
                </tr>
                </thead>
                <tbody>
               
                @foreach($partennaires as $partennaire)
                <tr>
                    <td>{{ $partennaire->nom }}</td>
                    <td>{{ $partennaire->type }}</td>
                    <td>{{ $partennaire->pays }}</td>
                    <td>{{ $partennaire->ville }}</td>

            <td>  <div class="btn-group">
                  
                           <form action="{{ url('partennaires/'.$partennaire->id)}}" method="post">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}

                            <a href="{{ url('partennaires/'.$partennaire->id.'/details')}}" class="btn btn-info">
                              <i class="fa fa-eye"></i>
                            </a>  

                            @if(Auth::user()->role->nom != 'membre' )
                      <a href="{{ url('partennaires/'.$partennaire->id.'/edit')}}" class="btn btn-default">
                        <i class="fa fa-edit"></i>
                      </a>
                             @endif
              
                             <a href="#supprimer{{ $partennaire->id }}Modal" role="button" class="btn btn-danger" data-toggle="modal"><i class="fa fa-trash-o"></i></a>
                      <div class="modal fade" id="supprimer{{ $partennaire->id }}Modal" tabindex="-1" role="dialog" aria-labelledby="supprimer{{ $partennaire->id }}ModalLabel" aria-hidden="true">
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
                                      <form class="form-inline" action="{{ url('partennaires/'.$partennaire->id)}}"  method="POST">
                                          @method('DELETE')
                                          @csrf
                                      <button type="button" class="btn btn-light" data-dismiss="modal">Non</button>
                                          <button type="submit" class="btn btn-danger">Oui</button>
                                      </form>
                                  </div-->
                              </div>
                          </div>
                     </div></form>
                    </div></td>
                  
                </tr>
                
                    
                  
               
       
                    
                   @endforeach
                </tbody>
              
              <tfoot>
                 <tr>
                  <th>Nom</th>
                  <th>Type</th>
                  <th>Pays</th>
                  <th>Ville</th>
                  <th>Options</th>
                </tr>
                </tfoot>
                </table>
              </div>
            </div>
          </div>
          @endsection