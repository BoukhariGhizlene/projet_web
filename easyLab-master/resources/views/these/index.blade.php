@extends('layouts.master')

@section('title','LRI | Liste des thèses')

@section('header_page')
  <style>   table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 10px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color:#f5f5f5;}
</style>

<?php
   $i=0;$i2=0;$i3=0;$i4=0;$i1=0;
    foreach($soutnounce as $va)
    {
        $i++;
    }
     foreach($theseencours as $va)
    {
        $i2++;
    }
    
        while($i4<$i2 || $i3<$i)
        {
            if($i>$i3 && $soutnounce[$i3]->date_d!=null &&($i4==$i2|| $soutnounce[$i3]->date_d< $theseencours[$i4]->date_s ||$theseencours[$i4]->date_s==null)){
         $date[$i1]=$soutnounce[$i3]->date_d;
                $i1++;
                $i3++;
            }
            if($i2>$i4 && $theseencours[$i4]->date_s!=null &&($i3==$i|| $soutnounce[$i3]->date_d > $theseencours[$i4]->date_s|| $theseencours[$i4]->date_s==null)){
            $date[$i1]=$theseencours[$i4]->date_s ; 
                $i1++;
                $i4++;
                }
        }
     
    ?>
<script type="text/javascript">
  window.onload = function () {
        
      var chartpppp = new CanvasJS.Chart("chartContainer1",
    {
      title:{
        text: "le thèses en cours /soutenues"
      }, 
       
		data: [
		


 {
              	type: "bar",
			dataPoints: [<?php $m=0;?> 
             @for($j=0;$j<$i1;$j++)  
            @if($i>$m && $soutnounce[$m]->date_d==$date[$j])
            {  y: {{$soutnounce[$m]->total}} , label:"le thèses en cours {{$soutnounce[$m]->date_d}}" },
             <?php $m++; ?>
            @else
                 {  y: 0 , label:"{{$date[$j]}}" },
                @endif
            @endfor                             
                                         
            ]  
		},{
              	type: "bar",
			dataPoints: [ 
                <?php $m1=0;?>
             @for($j=0;$j<$i1;$j++)  
            @if( $i2>$m1 && $theseencours[$m1]->date_s==$date[$j])
            {  y: {{$theseencours[$m1]->total}} , label:"soutenues {{$theseencours[$m1]->date_s}}" },
               <?php $m1++; ?>
            @else
                 {  y: 0 , label:"{{$date[$j]}}" },
                @endif
            @endfor                             
                                         
            ]  
		},{
              	type: "bar",
			dataPoints: [ 
                <?php $m1=0;?>
             @for($j=0;$j<$i1;$j++)  
                 {  y: 0 , label:"{{$date[$j]}}" },
            @endfor                             
                                         
            ]  
		}
		]
	});
     

chartpppp.render();
}
</script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
      <h1>
        Thèses
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><a href="{{url('theses')}}">Thèses</a></li>
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
            <li><a href="{{url('trombinoscope')}}"><i class="fa fa-id-badge"></i> Trombinoscope</a></li>
            <li><a href="{{url('membres')}}"><i class="fa fa-list"></i> Liste</a></li>
          </ul>
        </li>
         <li class="active">
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
              <h3 class="box-title">Liste des thèses</h3>
            </div>
            
          </div>
          </div>
            
            <!-- /.box-header -->
            <div class="box-body">
              @if(Auth::user()->role->nom == 'admin' )
              <div class=" pull-right">
              <a href="{{url('theses/create')}}" type="button" class="btn btn-block btn-success btn-lg"><i class="fa fa-plus"></i> Nouvelle thèse</a>
            </div>
            @endif
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Titre</th>
                  <th>Sujet</th>
                  <th>Doctorant</th>
                  <th>Encadreur</th>
                  <th>CoEncadreur</th>
                  <th>Date Soutenance</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($theses as $these)
                  <tr>
                    <td>{{$these->titre}}</td>
                    <td>{{$these->sujet}}</td>
                    <td>{{$these->user->name}} {{$these->user->prenom}}</td>
                    <td>{{$these->encadreur_int}}{{$these->encadreur_ext}}</td>
                    <td>{{$these->coencadreur_int}}{{$these->coencadreur_ext}}</td>
                    <td>{{$these->date_soutenance}}</td>
                    <td>
                      
                      <form action="{{ url('theses/'.$these->id)}}" method="post"> 

                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                      <a href="{{ url('theses/'.$these->id.'/details')}}" class="btn btn-info">
                        <i class="fa fa-eye"></i>
                      </a>
                      @if(Auth::id() == $these->user->id || Auth::user()->role->nom == 'admin' )
                      <a href="{{ url('theses/'.$these->id.'/edit')}}" class="btn btn-default">
                        <i class="fa fa-edit"></i>
                      </a>
                      @endif
                       @if(Auth::id() != $these->user->id && Auth::user()->role->nom != 'membre' )
                      <!-- <button type="submit" class="btn btn-danger">
                        <i class="fa fa-trash-o"></i>
                      </button> -->

                       <a href="#supprimer{{ $these->id }}Modal" role="button" class="btn btn-danger" data-toggle="modal"><i class="fa fa-trash-o"></i></a>
                      <div class="modal fade" id="supprimer{{ $these->id }}Modal" tabindex="-1" role="dialog" aria-labelledby="supprimer{{ $these->id }}ModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                    <!--   <h5 class="modal-title" id="supprimer{{ $these->id }}ModalLabel">Supprimer</h5> -->
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                      </button>
                                  </div>
                                  <div class="modal-body text-center">
                                      Voulez-vous vraiment effectuer la suppression ? 
                                  </div>
                                  <div class="modal-footer">
                                      <form class="form-inline" action="{{ url('theses/'.$these->id)}}"  method="POST">
                                          @method('DELETE')
                                          @csrf
                                      <button type="button" class="btn btn-light" data-dismiss="modal">Non</button>
                                          <button type="submit" class="btn btn-danger">Oui</button>
                                      </form>
                                  </div>
                              </div>
                          </div>
                      </div>
                      @endif
                      </form>
                    </div>
                    </td>
                  </tr>
                  @endforeach
                 </tbody>
                <tfoot>
                <tr>
                  <th>Titre</th>
                  <th>Sujet</th>
                  <th>Doctorant</th>
                  <th>Encadreur</th>
                  <th>CoEncadreur</th>
                  <th>Date_Soutenance</th>
                  <th>Actions</th>
                </tr>
                </tfoot>
        </div>
</div>
              </table>
<br><br><br><br>
 <div class="box box-success">
    <div class="box-header with-border">
      <h3 class="box-title">le thèses en cours /soutenues</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
      </div>
    </div>
     <br><br><br>
     <table>
         <tr><th>l'année des  thèses en cours </th><th>total</th></tr>
          @foreach($soutnounce as $va)
         <tr><td>{{$va->date_d}}</td><td>{{$va->total}}</td></tr>
         @endforeach
     </table>
     <br><br><br>
     <table>
         <tr><th>l'année des soutenues </th><th>total</th></tr>
         @foreach($theseencours as $va)
         <tr><td>{{$va->date_s}}</td><td>{{$va->total}}</td></tr>
         @endforeach
     </table>
     <br><br><br>
    <div id="chartContainer1" style="height: 300px; width: 100%;">
    </div>
     
            </div>
            <!-- /.box-body -->
          </div>
        
      </div>
      
    </div>
    
 @endsection