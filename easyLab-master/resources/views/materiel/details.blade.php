@extends('layouts.master')

@section('title','LRI | Profil')

@section('header_page')

	  <h1>
        Materiel
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('dashboard')}}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li><a href="{{url('materiel')}}">materiel</a></li>
        <li class="active">materiel</li>
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

<div class="row">
        <div class="col-md-3">
           <?php $Affectation_id=0;
           $Affectation="rien";
            ?>   @foreach ($materielsUser as $materielUser)
                 @if(($materielUser->date_rendu == null))
                 <?php $Affectation_id=$materielUser->id; 
                 $Affectation="User";?>
                    @endif
                    @endforeach
 @foreach ($materielsEquipe as $materielEquipe)
                 @if(($materielEquipe->date_rendu == null))
                 <?php $Affectation_id=$materielEquipe->id;
                 $Affectation="Equipe"; ?>
                    @endif
                    @endforeach
                 
          
          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src=" {{asset($materiels->photo)}}" alt="User profile picture">

              <h3 class="profile-username text-center">{{$materiels->nom}}</h3>
      <div class="text-center">
                <div class="btn-group">
            

 <a href="#AffecterU{{ $materiels->id }}Modal" role="button" class="btn  btn-primary {{ ($Affectation_id != 0) ? 'disabled' : '' }}" data-toggle="modal"><i class="fa  fa-user"></i></a>
                      <div class="modal fade" id="AffecterU{{ $materiels->id }}Modal" tabindex="-1" role="dialog" aria-labelledby="AffecterU{{ $materiels->id }}ModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">ce materiel est {{$Affectation_id}}
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                      </button>
                                  </div>  

                                  <form class="well form-horizontal" action=" {{url('materiel/'. $materiels->id.'/AffectationUser') }} " method="post"  id="contact_form">

              <input type="hidden" name="_method" value="PUT">
              {{ csrf_field() }}
<?php $materiels->affecter="User";  
$materiels->save();?>
              <fieldset>

                     <div class="form-group"> 
                          <label class="col-md-3 control-label">user</label>
                            <div class="col-md-9 selectContainer ">
                              <div class="input-group"  style="width: 40%">
                                  <select name="user_id" class="form-control selectpicker">
                                   
                                    @foreach($users as $user)
                                     <option value="{{$user->id}}">{{$user->nom}}{{$user->prenom}}</option>
                                    @endforeach
                                  </select>
                                 
                              </div>
                            </div>
                      </div>
                    <div class="row">
                      <div class="col-md-7">
                       <div class="form-group">
                            <label class="col-md-6 control-label">date affectation</label>  
                            <div class="col-md-6 inputGroupContainer input-group Date">
                              <input name="date_naissance" type="text" class="form-control pull-right" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask id="datepicker" value=<?php date_default_timezone_set('UTC');
                              $date=date("d/m/y"); 
                              echo "".$date;  ?>>
                            </div>
                      </div>
                      </div>

                      
              </fieldset>

              <div style="padding-top: 30px; margin-left: 35%;">
              <a href="" class=" btn btn-lg btn-default"><i class="fa  fa-mail-reply"></i> &nbsp;Annuler</a>
               <button type="submit" class=" btn btn-lg btn-primary"><i class="fa fa-check"></i> Valider</button> 
                  </div>
            </form>
                              </div> 
                          </div>
                     </div>

              
                            <a href="#AffecterE{{ $materiels->id }}Modal" role="button" class="btn  btn-primary {{ ($Affectation_id != 0) ? 'disabled' : '' }}" data-toggle="modal"><i class="fa  fa-group "></i></a>
                      <div class="modal fade" id="AffecterE{{ $materiels->id }}Modal" tabindex="-1" role="dialog" aria-labelledby="AffecterE{{ $materiels->id }}ModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">ce materiel est {{$Affectation_id}}
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                      </button>
                                  </div>  

                                  <form class="well form-horizontal" action=" {{url('materiel/'. $materiels->id.'/AffectationEquipe') }} " method="post"  id="contact_form">

              <input type="hidden" name="_method" value="PUT">
              {{ csrf_field() }}

              <fieldset>
<?php $materiels->affecter="Equipe"; 
$materiels->save(); ?>
                     <div class="form-group"> 
                          <label class="col-md-3 control-label">Equipe</label>
                            <div class="col-md-9 selectContainer ">
                              <div class="input-group"  style="width: 40%">
                                  <select name="equipe_id" class="form-control selectpicker">
                                   
                                    @foreach($equipes as $equipe)
                                     <option value="{{$equipe->id}}">{{$equipe->intitule}}</option>
                                    @endforeach
                                  </select>
                                 
                              </div>
                            </div>
                      </div>
                    <div class="row">
                      <div class="col-md-7">
                       <div class="form-group">
                            <label class="col-md-6 control-label">date affectation</label>  
                            <div class="col-md-6 inputGroupContainer input-group Date">
                              <input name="date_naissance" type="text" class="form-control pull-right" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask id="datepicker" value=<?php date_default_timezone_set('UTC');
                              $date=date("d/m/y"); 
                              echo "".$date;  ?>>
                            </div>
                      </div>
                      </div>

                      
              </fieldset>

              <div style="padding-top: 30px; margin-left: 35%;">
              <a href="" class=" btn btn-lg btn-default"><i class="fa  fa-mail-reply"></i> &nbsp;Annuler</a>
               <button type="submit" class=" btn btn-lg btn-primary"><i class="fa fa-check"></i> Valider</button> 
                  </div>
            </form>
                              </div> 
                          </div>
                     </div>


 <a href="#Rendu{{ $materiels->id }}Modal" role="button" class="btn btn-success {{ ($Affectation_id == 0) ? 'disabled' : '' }}" data-toggle="modal"><i class="fa  fa-exchange"></i></a>
                      <div class="modal fade" id="Rendu{{ $materiels->id }}Modal" tabindex="-1" role="dialog" aria-labelledby="Rendu{{ $materiels->id }}ModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">ce materiel est {{$Affectation_id}}
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                      </button>
                                  </div>  

                                  <form class="well form-horizontal" action=" {{url('materiel/'. $materiels->id.'/'.$Affectation_id.'/'. $Affectation) }} " method="post"  id="contact_form">

              <input type="hidden" name="_method" value="PUT">
              {{ csrf_field() }}

              <fieldset>

                     
                    <div class="row">
                      <div class="col-md-7">
                       <div class="form-group">
                            <label class="col-md-6 control-label">rendu le:</label>  
                            <div class="col-md-6 inputGroupContainer input-group Date">
                              <input name="date_naissance" type="text" class="form-control pull-right" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask id="datepicker" value=<?php date_default_timezone_set('UTC');
                              $date=date("d/m/y"); 
                              echo "".$date;  ?>>
                            </div>
                      </div>
                      </div>

                      
              </fieldset>

              <div style="padding-top: 30px; margin-left: 35%;">
              <a href="" class=" btn btn-lg btn-default"><i class="fa  fa-mail-reply"></i> &nbsp;Annuler</a>
               <button type="submit" class=" btn btn-lg btn-primary"><i class="fa fa-check"></i> Valider</button> 
                  </div>
            </form>
                              </div> 
                          </div>
                     </div>




                </div>
              </div>
             
            </div>
            <!-- /.box-body -->
          </div>
    
        </div>
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">A propos</a></li>
             
              <li><a href="#timeline" data-toggle="tab">Historique</a></li>
            </ul>

            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <div class="box-body">
                 
                  <div class="row">
                  <div class="col-md-3">
                    <strong>Name</strong>
                  </div>
                  <div class="col-md-9">
                    <p class="text-muted">
                     {{$materiels->nom}}
                    </p>
                  </div>
              
                  </div>

                  
                  <div class="row" style="margin-top: 10px">
                  <div class="col-md-3">
                    <strong>Description</strong>
                  </div>
                  <div class="col-md-9">
                    <p class="text-muted">
                       {{$materiels->description}}
                    </p>
                  </div>
              	  </div>

                 

            

            </div>
              </div>



            
              <div class="tab-pane" id="timeline">
                 <div class="box-body" style="padding-top: 30px;">

                  
                   
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Affecter à</th>
                  <th>intitul</th>
                  <th>date d'affectation</th>
                  <th>date du rendu</th>
                </tr>
                </thead>
                <tbody>
                 @foreach ($materielsEquipe as $materielEquipe)
                 @if(($materielEquipe->materiel_id == $materiels->id))
                  <tr>
                    <td>Equipe</td>
                     @foreach ($equipes as $equipe)
                     @if($materielEquipe->equipe_id==$equipe->id)
                    <td>{{$equipe->intitule}}</td>
                    @endif
                    @endforeach
                    <td>{{$materielEquipe->date_emprunter}}</td>
                
                    <td>{{$materielEquipe->date_rendu}}</td>
                  
                  </tr>
                  @endif
                    @endforeach
                     @foreach ($materielsUser as $materielUser)
                 @if(($materielUser->materiel_id == $materiels->id))
                  <tr>
                    <td>User</td>
                     @foreach ($users as $user)
                     @if($materielUser->user_id==$user->id)
                    <td>{{$user->name}}  {{$user->prenom}}</td>
                    @endif
                    @endforeach
                    <td>{{$materielUser->date_emprunter}}</td>
                
                    <td>{{$materielUser->date_rendu}}</td>
                    
                  
                  </tr>
                  @endif
                    @endforeach

                 </tbody>
                <tfoot>
                <tr>
                 <th>Affecter à</th>
                 <th>intitul</th>
                  <th>date d'affectation</th>
                  <th>date du rendu</th>
                
                </tr>
                </tfoot>
              </table>
             
            </div>
              </div>





         

              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
      </div>

@endsection