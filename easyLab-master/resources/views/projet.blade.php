
@section('content')
@extends('layouts.Menu')

<?php
 try
{// On se connecte à MySQL

        $bdd = new PDO('mysql:host=localhost;dbname=lrit;charset=utf8', 'root', '');

        }
        catch(Exception $e)
        {
                die('Erreur : ' . $e->getMessage());
        }  
    $req="SELECT * FROM projets where id='$projets' " ;
    $reponse = $bdd->prepare($req); // On récupère tout le contenu de la table 
    $reponse->execute();
     $projet=$reponse->fetch();
     //while ($donnees = $reponse->fetch()) // On affiche chaque entrée une à une
//{
?>
  <!-- Site Title-->
    <title><?php echo $projet['intitule'];?></title>
    
    
    <style>
        div.gallery {
    border: 1px solid #ccc;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}

* {
    box-sizing: border-box;
}

.responsive {
    padding: 0 6px;
    float: left;
    width: 24.99999%;
}

@media only screen and (max-width: 700px) {
    .responsive {
        width: 49.99999%;
        margin: 6px 0;
    }
}

@media only screen and (max-width: 500px) {
    .responsive {
        width: 100%;
    }
}

.clearfix:after {
    content: "";
    display: table;
    clear: both;
}

    </style>
 
      <!-- Classic Breadcrumbs-->
      <section class="breadcrumb-classic context-dark">
         <div class="swiper-container swiper-slider swiper-slider-3 swiper-container-horizontal swiper-container-true" data-height="2vh" data-loop="false" data-dragable="false" data-min-height="280px" data-slide-effect="true" style="height: 667px;">
            <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
              <div class="swiper-slide swiper-slide-active" data-slide-bg="{{asset('labo/front_office/img/businessman-3213659__340.jpg')}}" style="background-position: 80% center; background-image: url(&quot;images/slide-01-1920x1000.jpg&quot;); background-size: cover; width: 1307px;">
                <div class="swiper-slide-caption header-transparent-slide-caption">
                  <div class="container">
                    <div class="range range-xs-center range-condensed">
                      <div class="cell-md-7 text-center cell-xs-10">
                       <div class="shell section-30 section-sm-top-70 section-sm-bottom-60">
          <h1 class="veil reveal-sm-block">Projet</h1>
          <div class="offset-sm-top-35">
            <ul class="list-inline list-inline-lg list-inline-dashed p">
               <li><a href="Home.html">Accueil</a></li>
              <li><a href="equipeGL.html">equipe</a></li>
              <li><a href="equipeGL.html">Genie logiciel</a></li>
              <li>Projet</li>
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
        <!--4 Columns Layout-->
        <section class="section-70 section-md-114">
          <div class="shell">
            <div class="range range-xs-center">
              <div class="cell-sm-4 text-sm-left">
                <div class="inset-sm-right-30"><img class="img-responsive reveal-inline-block" src="{{asset('labo/front_office/images\triangle-3125882__340.jpg')}}" width="340" height="340" alt="">
                  <div class="offset-top-15 offset-sm-top-30"><a class="btn btn-primary btn-block" href="" style="max-width: 340px; margin-left:auto; margin-right:auto;">voir la déscription de projet </a></div>
                  <div class="offset-top-15 offset-sm-top-30">
                    <ul class="list list-unstyled">
                     
                      <li><span class="icon icon-xs fa fa-link text-middle text-madison"></span><a class="reveal-inline-block inset-left-10" href="<?php echo $projet['lien'];?>">LIEN</a></li>
                    </ul>
                  </div>
                 
                </div>
              </div>
              <div class="cell-sm-8 text-left">
                <div>
                  <h2 class="text-bold"><?php echo $projet['intitule'];?></h2>
                </div>
                <p class="offset-top-10"><?php echo $projet['type'];?></p>
                <div class="offset-top-15 offset-sm-top-30">
                  <hr class="divider bg-madison hr-left-0">
                </div>
                <div class="offset-top-30 offset-sm-top-60">
                  <h5 class="text-bold">apropos de projet</h5>
                  <div class="text-subline"></div>
                </div>
                
                <div class="offset-top-20">
                  <h6><u>resume</u></h6>
                  <p><?php echo $projet['resume'];?></p>
                </div>
                <h6><u>Details</u></h6> <?php 
                  if($projet['detail']<>null)
                    echo "<iframe src=" .(asset($projet['detail']))." width='600' height='800' align='middel'></iframe>";
                  else echo "y pas de fichier";
                  ?>
                <div class="offset-top-30 offset-sm-top-60">
                  <h5 class="text-bold">Membre</h5>
                   
                  <div class="text-subline"></div>
                </div>
                   <br>
                 <div class="row row-lg-condensed">
<!--Membre1--><?php  
                      $req="SELECT * FROM users,projet_user where projet_id='$projets' and users.id=user_id " ;
    $reponse = $bdd->prepare($req); // On récupère tout le contenu de la table 
    $reponse->execute();
     while ($membre = $reponse->fetch()) // On affiche chaque entrée une à une
{
?>
            <div class="col-sm-3 col-lg-1-1">
              <div class="team-member"><img class="img-responsive reveal-inline-block" src="<?php echo (asset($membre['photo'])); ?>" width="384" height="500" alt="">
                <div class="team-member-body">
                  <div>
                    <h4 class="text-bold team-member-title"><a href="/membre/<?php echo $membre['id'];  ?>">
                      <?php 
                      echo $membre['name']; 
                      echo "  ".$membre['prenom'];
                      ?></a></h4>
                  </div>
                  <p class="offset-top-0"><?php 
                      echo $membre['grade']; 
                      ?></p><a class="btn btn-primary" href="/membre/<?php echo $membre['id'];  ?>">Profile</a>
                </div>
              </div>
            </div>
            <!--Fin-->
            <?php
}
$reponse->closeCursor(); // Termine le traitement de la requête
?></div>



 

<div class="clearfix"></div>

<div style="padding:6px;">
  
</div>



									
    </div>
 </div>
              
              
            </div>
          </section>
        </main>
          </div>
        </section>
        <!-- Classic Skills Bars-->
      </main>
      <!-- Page Footer-->
      
 @endsection