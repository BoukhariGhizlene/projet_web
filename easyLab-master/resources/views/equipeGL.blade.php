
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
        
        $req=" SELECT * from equipes where id='$equipe'" ;
$reponse = $bdd->prepare($req); // On récupère tout le contenu de la table 
$reponse->execute();
        $row=$reponse->fetch();
?>

    <title><?php echo $row['intitule']  ?></title>
    
  
      <!-- Classic Breadcrumbs-->
      <section class="breadcrumb-classic context-dark">
         <div class="swiper-container swiper-slider swiper-slider-3 swiper-container-horizontal swiper-container-true" data-height="2vh" data-loop="false" data-dragable="false" data-min-height="280px" data-slide-effect="true" style="height: 667px;">
            <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
              <div class="swiper-slide swiper-slide-active" data-slide-bg="{{asset('labo/front_office/images/syteme_reseau_intro-1.jpg')}}" style="background-position: 80% center; background-image: url(&quot;images/slide-01-1920x1000.jpg&quot;); background-size: cover; width: 1307px;">
                <div class="swiper-slide-caption header-transparent-slide-caption">
                  <div class="container">
                    <div class="range range-xs-center range-condensed">
                      <div class="cell-md-7 text-center cell-xs-10">
                       <div class="shell section-30 section-sm-top-70 section-sm-bottom-60">
          
          <h1 class="veil reveal-sm-block"><?php echo $row['intitule']  ?></h1>

          <div class="offset-sm-top-35">
            <ul class="list-inline list-inline-lg list-inline-dashed p">
              <li><a href="Home.html">Accueil</a></li>
              <li><a href="equipeGL.html">equipe</a></li>
              <li><?php echo $row['achronymes']  ?></li>
            </ul>
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
        <!-- vertical link Tabs-->
        <section class="section-90 section-md-114 section-md-bottom-190">
          <div class="shell">
            <!-- Responsive-tabs-->
            <div class="responsive-tabs responsive-tabs-classic vertical" data-type="vertical">
              <ul class="resp-tabs-list tabs-1 text-center tabs-lg-collapsed" data-group="tabs-lg-collapsed">
                <li>Presentation</li>
        <li>Membres</li>
                <li>Projets</li>
        <li>Publication</li>
        <li>Partenaires</li>
                
              </ul>
              <div class="resp-tabs-container text-sm-left tabs-lg-collapsed" data-group="tabs-lg-collapsed">
                
        <div>
                  <div class="inset-lg-left-60">
                    <h2 class="text-bold veil reveal-lg-block"><?php echo $row['intitule']  ?></h2>
                    <div class="hr divider bg-madison hr-sm-left-0 veil reveal-lg-block"></div>
          
                    
                    <div class="offset-top-30">
                     <img class="img-responsive reveal-inline-block" src="{{asset('labo/front_office/images/gl.jpg')}}" width="770" height="480" alt=""></div>
                    <div class="offset-lg-top-30">
              <!-- RD Search Form-->
              <form class="form-search rd-search" action="search-results.html" method="GET">
                <div class="form-group">
                  <input class="form-search-input form-control" type="text" name="s" autocomplete="off">
                </div>
                <button class="form-search-submit" type="submit"><span class="icon fa-search"></span></button>
              </form>
              <div class="offset-top-60">
                <div class="rd-search-results"></div>
              </div>
                     <h3 class="text-bold veil reveal-lg-block">Descriiption</h3>
                      <p><?php echo $row['resume']  ?></p>
                     
                      <br>
                      <br>
                     
                     <div align="center" class="col-sm-3 col-lg-1-1"> 
                      <div class="team-member"> <?php  
                      $req="SELECT users.id as user_id,name,prenom,grade,photo FROM equipes,users where equipes.chef_id=users.id and equipes.id='$equipe'" ;
$reponse = $bdd->prepare($req); // On récupère tout le contenu de la table 
$reponse->execute();
        $row=$reponse->fetch();
       $img_src= $row['photo'];
     //  echo "<img class='img-responsive reveal-inline-block' src='{{asset('labo/front_office/img/Membre.jpg')}}' width='500' height='100' alt=''>";

                    ?><!--<img class='img-responsive reveal-inline-block' src=<?php echo"'{{asset('".$img_src."')}}'" ?> width='500' height='100' alt=''>-->
                    <img class='img-responsive reveal-inline-block' src="<?php echo (asset($row['photo'])); ?>" width='500' height='100' alt=''>
                <div class="team-member-body">
                  <div>
                    
                    <h4 class="text-bold team-member-title"><a href="/membre/<?php echo $row['user_id'];  ?>">
                      <?php echo $row['name'];
                      echo ' '.$row['prenom'];
                        ?></a></h4>
                  </div>
                  <p class="offset-top-0"><?php echo $row['grade'];?></p><a class="btn btn-primary" href="/membre/<?php echo $row['user_id'];  ?>">Profile</a>
                </div>
              </div><br><h3 class="text-bold veil reveal-lg-block"><a href="/Acceuil/Equipe/GL/Membre">Chef De L'Equipe</a></h3></div>
                    </div>
        
                 
        </div>
        </div>
        
                  <div>
                  <div class="inset-lg-left-60">
                    <h2 class="text-bold veil reveal-lg-block">Membres</h2>
                    <div class="hr divider bg-madison hr-sm-left-0 veil reveal-lg-block"></div>
                  
                    <div class="offset-top-30"> <!-- Images-->
        <section class="section-bottom-70 section-lg-bottom-0">
          <h6 class="text-bold">Listes des Membres de l'equipe</h6>
                      <div class="text-subline"></div>
                      <div class="range offset-top-50">
          
            
            <div class="row row-lg-condensed">
              <!--Membre1--><?php  
                      $req="SELECT users.id,name,prenom,grade,photo FROM equipes,users where equipes.id=users.equipe_id and equipes.id='$equipe'" ;
$reponse = $bdd->prepare($req); // On récupère tout le contenu de la table 
$reponse->execute();
        while ($donnees = $reponse->fetch()) // On affiche chaque entrée une à une
{
?>
            <div class="col-sm-3 col-lg-1-4">
              <div class="team-member"><img class="img-responsive reveal-inline-block" src="<?php echo (asset($donnees['photo'])); ?>" width="384" height="500" alt="">
                <div class="team-member-body">
                  <div>
                    <h4 class="text-bold team-member-title"><a href="/membre/<?php echo $donnees['id'];  ?>">
                      <?php 
                      echo $donnees['name']; 
                      echo "  ".$donnees['prenom'];
                      ?></a></h4>
                  </div>
                  <p class="offset-top-0"><?php 
                      echo $donnees['grade']; 
                      ?></p><a class="btn btn-primary" href="/membre/<?php echo $donnees['id'];  ?>">Profile</a>
                </div>
              </div>
            </div>
            <!--Fin-->
            <?php
}
$reponse->closeCursor(); // Termine le traitement de la requête
?>
           
         </div>

      </div>
        </section></div>
                  </div>
                </div>
                <div>
                  <div class="inset-lg-left-60">
                    <h2 class="text-bold veil reveal-lg-block">Projets</h2>
                    <div class="hr divider bg-madison hr-sm-left-0 veil reveal-lg-block"></div>
                    
                    <div class="offset-top-30"><img class="img-responsive reveal-inline-block" src="{{asset('labo/front_office/images/academics-02-770x480.jpg')}}" width="770" height="480" alt=""></div>
                    <div class="offset-top-30">
                      <h6 class="text-bold">Listes des Projets Realiser par l'equipe</h6>
                      <div class="text-subline"></div>
                      <div class="offset-top-20">
                        <ul class="list list-unstyled list-marked">
                          <?php  
                      $req="SELECT projet_id,projets.intitule as nom FROM equipes,users,projet_user,projets where equipes.id=users.equipe_id and equipes.id='$equipe' and projet_user.user_id=users.id and projets.id=projet_user.projet_id" ;
$reponse = $bdd->prepare($req); // On récupère tout le contenu de la table 
$reponse->execute();
        $row=$reponse->fetch();
        while ($projet = $reponse->fetch()) // On affiche chaque entrée une à une
{
?>
                           <li><a href="/projets/<?php echo $projet['projet_id'];  ?>/details"><?php echo $projet['nom'];  ?></a></li>
<?php } ?>
                           
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="inset-lg-left-60">
                    <h2 class="text-bold veil reveal-lg-block">Article</h2>
                    <div class="hr divider bg-madison hr-sm-left-0 veil reveal-lg-block"></div>
                    <div class="offset-top-10">
                       <!-- Latest news-->

        <section class="section-70 section-md-20 bg-catskilll">







<?php 
      
    $req="SELECT * FROM articles,article_user,equipes,users 
    where  equipes.id='$equipe' 
      and articles.id=article_user.article_id 
      and users.id=article_user.user_id
      and equipes.id=users.equipe_id
    group by articles.id" ;
    $reponse = $bdd->prepare($req); // On récupère tout le contenu de la table 
    $reponse->execute();
    while ($articles = $reponse->fetch()) // On affiche chaque entrée une à une
{ 
?>
                  <div class="post-news-modern" style=" border: 2px gray solid ">
                    <div class="unit unit-sm unit-sm-horizontal unit-timeline unit-sm-inverse">
                      <div class="unit-body">
                        <article class="post-news post-news-wide">
                          <div class="post-news-body">
                            <h4 class="text-bold text-primary"><a href="https://livedemo00.template-help.com/wt_prod-14585/news-post-page.html"><?php echo $articles['titre'];  ?></a></h4>
                            <p><h6>Type : <?php echo $articles['titre'];  ?></h6>
                              <br>
                            <?php echo $articles['resume'];  ?></p>
                            <br>
                          <p>  <h6>Membre Interne :</h6>
                                    <?php 
     $artc_id=$articles['article_id'];
    $req1="
    SELECT name,prenom 
    FROM users,article_user 
    where users.id=user_id 
      and article_id='$artc_id'
       " ;
    $reponse1 = $bdd->prepare($req1); // On récupère tout le contenu de la table 
    $reponse1->execute();
    while ($particpant = $reponse1->fetch()) // On affiche chaque entrée une à une

{ 
?>  <?php if($particpant['name']!=null)echo "<p>".$particpant['name']." ".$particpant['prenom']."</p>";  ?>
<?php } ?>
                            </p>
                           
                             <?php 
                             if($articles['membres_ext']!=null)
                              echo " <p>  <h6>Membre Externe :</h6>".$articles['membres_ext']; 
                               ?>

                            </p>
                            <div class="post-news-meta offset-top-30">
                              <div class="tags-list group group-sm reveal-inline-block text-middle">
                                 <?php if($articles['lieu_ville']!=null)echo" <a class='btn btn-xs btn-primary text-italic' href='#'>
                                   ".$articles['lieu_ville']. "</a>";  ?>
                                   <?php if($articles['lieu_pays']!=null)echo" <a class='btn btn-xs btn-primary text-italic' href='#'>
                                   ".$articles['lieu_pays'] ."</a>";  ?>
                                   <?php if($articles['journal']!=null)echo" <a class='btn btn-xs btn-primary text-italic' href='#'>
                                   ".$articles['journal']." </a>";  ?>
                                   <?php if($articles['conference']!=null)echo" <a class='btn btn-xs btn-primary text-italic' href='#'>
                                   ".$articles['conference']." </a>";  ?>

                              </div>
                            </div>
                          </div>
                        </article>
                      </div>
                
                         
                 
                      
                    </div>
                  </div>
                  <?php } ?>
                  
               
        </section>
                    </div>
                    
                </div>
                
          </div>
      
      
      <div class="interieur" id="contenus_page">
    <div id="titre"><h3>La liste des  partenaires</h3>
    </br>
    </br>
    </div>


        
      
     <?php  
      $req="SELECT * FROM partenaires, partequipes where idE='$equipe' and idP=partenaires.id";
$reponse = $bdd->prepare($req); // On récupère tout le contenu de la table 
$reponse->execute();
        while ($donnees = $reponse->fetch()) // On affiche chaque entrée une à une
{
 ?>   

              <!--  <div class="colonne_deco"><div class="style_1">
                <h2 class="paragraphe__titre--1"><a href="/partennaire/<?php //echo $donnees['id']; ?>" ><?php 
                     // echo $donnees['nom']; 
                      ?></h2></a><div >
                <strong><?php 
                     // echo $donnees['type']; 
                      ?></strong>
              </div>< .paragraphe__contenu--1 .toolbox >
            </div>< ></div>< colonne_deco >
      < .colonne_1 >-->
       <div class="ligne_1"><div class="colonne_1">
     <div class="colonne_deco"><div class="style_1">
     
    
                <h2 class="paragraphe__titre--1"><?php 
                      echo $donnees['achronym']; 
                      ?></h2><div class="paragraphe__contenu--1 toolbox">
                <a href="paterne.html" ><strong><?php 
                      echo $donnees['nom']; 
                      ?></h2></strong></a><div style="text-align: center;"><a  href="/Acceuil/Partenaire/<?php echo $donnees['idP'];  ?>" ><img title="" alt="" style="width:320px;height:140px;margin : 10px 0px;" src="<?php echo (asset($donnees['logo'])); ?>" /></a></div><div style="text-align: justify;"><?php 
                      echo $donnees['resume']; 
                      ?></h2></div>
              </div><!-- .paragraphe__contenu--1 .toolbox -->
            </div><!-- paragraphe--1 --></div><!-- colonne_deco -->
      </div><!-- .colonne_1 --></div><!-- .ligne_1 -->
      
      
   <?php
}
$reponse->closeCursor(); // Termine le traitement de la requête
?> 

      

      </div>

      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
        </section>
      </main>
      <!-- Page Footer-->
     
  @endsection