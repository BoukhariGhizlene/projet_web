 @extends('layouts.master')

 @section('title','LRI | Détails Partenneire')

@section('header_page')
 	<h1>
   Partennaire
    <small>Détails</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{url('dashboard')}}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
    <li><a href="{{url('articles')}}"> Partennaire</a></li>
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

          
           


          <li class="active">
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
                    <strong>Intitulé</strong>
                  </div>
                  <div class="col-md-9">
                    <p class="text-muted">
                      {{$partennaire->nom}}
                    </p>
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-md-3">
                    <strong>Type</strong>
                  </div>
                  <div class="col-md-9">
                    <p class="text-muted">
                      {{ $partennaire->type }}
                    </p>
                  </div>
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
                      {{ $partennaire->ville }}, {{ $partennaire->pays }}
                    </p>
                  </div>
                </div>

                  <strong><i class="margin-r-5"></i></strong>
                <hr>

                <div class="row">
                <div class="col-md-3">
                  <strong><i class="fa fa-calendar margin-r-5"></i>Date de creation</strong>                
                 </div>
                  <div class="col-md-9">
                    <p class="text-muted">
                      {{ $partennaire->created_at }}
                    </p>
                  </div>
                </div>


                  
                  
              
          
            <!-- /.box-body -->
          </div> <strong><i class="margin-r-5"></i></strong>
          <hr>
          <div class="row">
                  <div class="col-md-3">
                    <strong><i class="fa fa-user margin-r-5"></i> Liste des Contact</strong>
                  </div>
                  
                   <div class="col-md-9">
                    <p class="text-muted">
          <div class=" pull-right">
                <a href="{{url('partennaire/'.$partennaire->id.'/contacts/create')}}" type="button" class="btn btn-block btn-success btn-lg"><i class="fa fa-plus"></i>Nouveau Contact</a>
              </div>
            <div class="row">
      <div class="col-md-12">
        <div class="box col-xs-12">
  <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nom</th>
                  <th>Prenom</th>
                  <th>Fenction</th>
                  <th>Mail</th>
                  <th>Option</th>
                </tr>
                </thead>
                <tbody>
               
                @foreach($membres as $membre)
                <tr>
                    <td>{{ $membre->nom }}</td>
                    <td>{{ $membre->prenom }}</td>
                    <td>{{ $membre->fenction }}</td>
                    <td>{{ $membre->mail }}</td>

            <td>  <div class="btn-group">
                  
                           <form action="{{ url('partennaires/'.$partennaire->id.'/contacts/'.$membre->id)}}" method="post">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}

                            <a href="{{ url('contacts/'.$membre->id.'/details')}}" class="btn btn-info">
                              <i class="fa fa-eye"></i>
                            </a>  

                            @if(Auth::user()->role->nom != 'membre' )
                      <a href="{{ url('partennaires/'.$membre->id.'/edit')}}" class="btn btn-default">
                        <i class="fa fa-edit"></i>
                      </a>
                             @endif
              
                             <a href="#supprimer{{ $membre->id }}Modal" role="button" class="btn btn-danger" data-toggle="modal"><i class="fa fa-trash-o"></i></a>
                      <div class="modal fade" id="supprimer{{ $membre->id }}Modal" tabindex="-1" role="dialog" aria-labelledby="supprimer{{ $membre->id }}ModalLabel" aria-hidden="true">
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
                                      <form class="form-inline" action="{{ url('partennaires/'.$partennaire->id.'/contacts/'.$membre->id)}}"  method="POST">
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
          </p>
                  </div>
                </div>
         </div><!-- /.container -->

       </div>
      </div>

    



@endsection