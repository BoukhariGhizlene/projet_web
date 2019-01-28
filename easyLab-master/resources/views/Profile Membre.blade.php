
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
    $req="SELECT * FROM users where id='$user' " ;
    $reponse = $bdd->prepare($req); // On récupère tout le contenu de la table 
    $reponse->execute();
     $row=$reponse->fetch();
     //while ($donnees = $reponse->fetch()) // On affiche chaque entrée une à une
//{
?>

    <title><?php echo $row['name']."  ".$row['prenom']  ?></title>
   
     
      <!-- Classic Breadcrumbs-->
      <section class="breadcrumb-classic context-dark">
         <div class="swiper-container swiper-slider swiper-slider-3 swiper-container-horizontal swiper-container-true" data-height="2vh" data-loop="false" data-dragable="false" data-min-height="280px" data-slide-effect="true" style="height: 667px;">
            <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
              <div class="swiper-slide swiper-slide-active" data-slide-bg="{{asset('labo/front_office/img/AllFaculty2016-17.jpg')}}" style="background-position: 80% center; background-image: url(&quot;images/slide-01-1920x1000.jpg&quot;); background-size: cover; width: 1307px;">
                <div class="swiper-slide-caption header-transparent-slide-caption">
                  <div class="container">
                    <div class="range range-xs-center range-condensed">
                      <div class="cell-md-7 text-center cell-xs-10">
                       <div class="shell section-30 section-sm-top-70 section-sm-bottom-60">
          <h1 class="veil reveal-sm-block">Profile de <?php echo $row['name']."  ".$row['prenom']  ?></h1>
          <div class="offset-sm-top-35">
            <ul class="list-inline list-inline-lg list-inline-dashed p">
               <li><a href="Home.html">Accueil</a></li>
              <li><a href="equipeGL.html">equipe</a></li>
              <li><a href="equipeGL.html">Genie logiciel</a></li>
              <li><?php echo $row['name']."  ".$row['prenom']  ?></li>
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
                <div class="inset-sm-right-30"><img class="img-responsive reveal-inline-block" src="<?php if($row['autorisation_public_photo']!=0) {echo (asset($row['photo']));}
               else {echo(asset('labo/front_office/img/membre1.jpg'));} ?>" width="340" height="340" alt="">
                  <div class="offset-top-15 offset-sm-top-30"><a class="btn btn-primary btn-block" href="" style="max-width: 340px; margin-left:auto; margin-right:auto;">voir profil</a></div>
                  <div class="offset-top-15 offset-sm-top-30">
                    <ul class="list list-unstyled">
                      <?php if($row['autorisation_public_date_naiss']!=0) { ?><li><span class="icon icon-xs fa fa-calendar text-middle text-madison"></span><a class="reveal-inline-block text-dark inset-left-10" href="tel:#"><?php echo $row['date_naissance'];  ?></a></li><?php } ?>
                      <?php if($row['autorisation_public_num_tel']!=0) { ?><li><span class="icon icon-xs fa fa-phone text-middle text-madison"></span><a class="reveal-inline-block text-dark inset-left-10" href="tel:#"><?php echo $row['num_tel'];  ?></a></li><?php } ?>
                      <li><span class="icon icon-xs fa fa-envelope-open text-middle text-madison"></span><a class="reveal-inline-block inset-left-10" href="mailto:info@demolink.org"><?php echo $row['email'];  ?></a></li>
                    </ul>
                  </div>
                  <div class="offset-top-15 offset-sm-top-30">
                    <ul class="list-inline list-inline-xs list-inline-madison">
                    <?php if($row['lien_linkedin']!=null) { ?>
                      <li><a class="icon icon-xxs fa-linkedin icon-circle icon-gray-light-filled" href="<?php echo $row['lien_linkedin'];  ?>"></a></li><?php } ?>
                      
                    </ul>
                  </div>
                </div>
              </div>
              <div class="cell-sm-8 text-left">
                <div>
                  <h2 class="text-bold"><?php echo $row['name']."  ".$row['prenom'];  ?></h2>
                </div>
                <p class="offset-top-5"><?php echo $row['grade'];  ?></p>
                <div class="offset-top-5 offset-sm-top-30">
                  <hr class="divider bg-madison hr-left-0">
                </div>
                <div class="offset-top-30 offset-sm-top-60">
                  <h4 class="text-bold"><u>These</u></h4>
                                   
       <div class="text-subline"></div>
                </div>
                <div class="offset-top-20">
                  <?php 
      
    $req="SELECT * FROM theses where user_id='$user'" ;
    $reponse = $bdd->prepare($req); // On récupère tout le contenu de la table 
    $reponse->execute();
     $row1=$reponse->fetch();
     //while ($donnees = $reponse->fetch()) // On affiche chaque entrée une à une
//{ /uploads/these/1525785786.pdf
?>
                  <h5><u>Details</u></h5>
                  <p><h6>Titre :</h6> <?php echo $row1['titre'];  ?></p>
                  <p><h6>Sujet :</h6> <?php echo $row1['sujet'];  ?></p>
                  <p><h6>Encadreur Interne :</h6> <?php 
                    if($row1['encadreur_int']<>null) 
                      {echo $row1['encadreur_int'];} 
                    else{echo "il n'a pas de Encadreur Interne ";}  
                    ?></p>
                  <p><h6>Encadreur Externe :</h6> <?php 
                    if($row1['encadreur_ext']<>null) 
                      {echo $row1['encadreur_ext'];} 
                    else{echo "il n'a pas de Encadreur Externe ";}  
                    ?></p>
                  <p><h6>Coencadreur Interne :</h6> 
                    <?php 
                    if($row1['coencadreur_int']<>null) 
                      {echo $row1['coencadreur_int'];} 
                    else{echo "il n'a pas de Coencadreur Interne ";}  
                    ?></p>
                  <p><h6>Coencadreur Externe :</h6><?php 
                    if($row1['coencadreur_ext']<>null) 
                      {echo $row1['coencadreur_ext'];} 
                    else{echo "il n'a pas de Coencadreur Externe ";}  
                    ?></p>
                  <p><h6>fichier :</h6> <?php 
                  if($row1['detail']<>null)
                    echo "<iframe src=" .(asset($row1['detail']))." width='600' height='800' align='middel'></iframe>";
                  else echo "y pas de fichier";
                  ?>
             <!--        <section class="section-bottom-70 section-lg-bottom-0">
         <h4 class="text-bold"><u>Les Encadreures</u></h4>
                      <div class="text-subline"></div>
                      <div class="range offset-top-50">
  
          <table align="center">
              <tr>
              <td> <!-- coencadreur int
                <div class="row row-lg-condensed">
            <div class="col-sm-5 col-lg-1-1">
              <div class="team-member"><img class="img-responsive reveal-inline-block" src="{{asset('labo/front_office/img/Membre.jpg')}}" width="584" height="500" alt="">
                <div class="team-member-body">
                  <div>
                    <h4 class="text-bold team-member-title"><a href="https://livedemo00.template-help.com/wt_prod-14585/team-member-profile.html">Encadreure1</a></h4>
                  </div>
                  <p class="offset-top-0">specialité</p><a class="btn btn-primary" href="Profile Membre.html">Profile</a>
                </div>
              </div>
              <h4>Encadreur Interne</h4>
            </div>
          </td>
              <td>
                 <!-- coencadreur int
                <div class="row row-lg-condensed">
            <div class="col-sm-5 col-lg-1-1">
              <div class="team-member"><img class="img-responsive reveal-inline-block" src="{{asset('labo/front_office/img/Membre.jpg')}}" width="584" height="500" alt="">
                <div class="team-member-body">
                  <div>
                    <h4 class="text-bold team-member-title"><a href="https://livedemo00.template-help.com/wt_prod-14585/team-member-profile.html">Encadreure1</a></h4>
                  </div>
                  <p class="offset-top-0">specialité</p><a class="btn btn-primary" href="Profile Membre.html">Profile</a>
                </div>
              </div>
              <h4>Encadreur Externe</h4>
            </div>
              </td>
            </tr>
            <tr>
              <td><br></td><td><br></td></tr>
             <tr>
              <td>
                 <!-- coencadreur int
                <div class="row row-lg-condensed">
            <div class="col-sm-5 col-lg-1-1">
              <div class="team-member"><img class="img-responsive reveal-inline-block" src="{{asset('labo/front_office/img/Membre.jpg')}}" width="584" height="500" alt="">
                <div class="team-member-body">
                  <div>
                    <h4 class="text-bold team-member-title"><a href="https://livedemo00.template-help.com/wt_prod-14585/team-member-profile.html">Encadreure1</a></h4>
                  </div>
                  <p class="offset-top-0">specialité</p><a class="btn btn-primary" href="Profile Membre.html">Profile</a>
                </div>
   
              </div>
                           <h4>Coencadreur Interne</h4>
            </div>
              </td>
              <td>
                 <!-- coencadreur 
                <div class="row row-lg-condensed">
            <div class="col-sm-5 col-lg-1-1">
              <div class="team-member"><img class="img-responsive reveal-inline-block" src="{{asset('labo/front_office/img/Membre.jpg')}}" width="584" height="500" alt="">
                <div class="team-member-body">
                  <div>
                    <h4 class="text-bold team-member-title"><a href="https://livedemo00.template-help.com/wt_prod-14585/team-member-profile.html">Encadreure1</a></h4>
                  </div>
                  <p class="offset-top-0">specialité</p><a class="btn btn-primary" href="Profile Membre.html">Profile</a>
                </div>
              </div>
              <h4>Coencadreur Externe</h4>
            </div>
              </td>
            </tr>
          </table>
            
            
            
           
          
      </div>
        </section>-->
 
                </div>
                <div class="offset-top-30 offset-sm-top-60">
                  <h4 class="text-bold"><u>Les Projets</u></h4>
                  <div class="text-subline"></div>
                </div>
                <div class="offset-top-15 offset-sm-top-30">
                   <section class="section-bottom-70 section-lg-bottom-0">
          
                      <div class="range offset-top-50">
            <?php 
      
    $req="SELECT * FROM projets,projet_user where  user_id='$user' and projets.id=projet_user.projet_id" ;
    $reponse = $bdd->prepare($req); // On récupère tout le contenu de la table 
    $reponse->execute();
    while ($projets = $reponse->fetch()) // On affiche chaque entrée une à une
{ 
?>
              <div class="row row-lg-condensed">
            <div class="col-sm-6 col-lg-1-3">
              <div class="team-member"><img class="img-responsive reveal-inline-block" src="{{asset('labo/front_office/images\projet.jpg')}}" width="584" height="500" alt="">
                <div class="team-member-body">
                  <div>
                    <h4 class="text-bold team-member-title"><a href="https://livedemo00.template-help.com/wt_prod-14585/team-member-profile.html"><?php echo $projets['intitule'];  ?></a></h4>
                  </div>
                  <p class="offset-top-0"><?php echo $projets['type'];  ?></p><a class="btn btn-primary" href="/projets/<?php echo $projets['projet_id'];  ?>/details"">Detail</a>
                </div>
              </div>
            </div>
            <?php 
          } ?>
            
           
          
      </div>
        </section>
        <!--les nouvelle publication-->
        <div class="offset-top-30 offset-sm-top-60">
                  <h4 class="text-bold"><u>Les Articles</u></h4>
                  <div class="text-subline"></div>
                </div>
        <section class="section-70 section-md-20 bg-catskilll">
  <?php 
      
    $req="SELECT * FROM articles,article_user where  user_id='$user' and articles.id=article_user.article_id" ;
    $reponse = $bdd->prepare($req); // On récupère tout le contenu de la table 
    $reponse->execute();
    while ($articles = $reponse->fetch()) // On affiche chaque entrée une à une
{ 
?>

                  <div class="post-news-modern">
                    <div class="unit unit-sm unit-sm-horizontal unit-timeline unit-sm-inverse">
                      <div class="unit-body">
                        <article class="post-news post-news-wide"><a href="https://livedemo00.template-help.com/wt_prod-14585/news-post-page.html"></a>
                          <div class="post-news-body">
                            <h4 class="text-bold text-primary"><a href="https://livedemo00.template-help.com/wt_prod-14585/news-post-page.html"><?php echo $articles['titre'];  ?></a></h4>
                            <p><h6><u>Type :</u> <?php echo $articles['type'];  ?></h6>
                              <br>
                           <?php echo $articles['resume'];  ?></p>
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
                      <div class="unit-right text-center">
                        <div class="unit unit-horizontal unit-middle unit-spacing-xxs unit-sm unit-sm-vertical unit-sm-inverse">
                          <div class="unit-left"><img class="img-responsive img-circle reveal-inline-block" src="<?php echo (asset($row['photo'])); ?>" width="90" height="90" alt="">
                            <p class="text-primary"><?php echo $row['name']."  ".$row['prenom'];  ?></p>
                            <p ><?php echo $articles['membres_ext'];  ?></p>
                            <?php 
     $artc_id=$articles['article_id'];
    $req1="
    SELECT name,prenom 
    FROM users,article_user 
    where users.id=user_id 
      and article_id='$artc_id'
       and users.id<>'$user'" ;
    $reponse1 = $bdd->prepare($req1); // On récupère tout le contenu de la table 
    $reponse1->execute();
    while ($particpant = $reponse1->fetch()) // On affiche chaque entrée une à une

{ 
?> <p ><?php echo $particpant['name']; ?></p>
<?php } ?>
                          </div>
                          <div class="unit-body text-left text-sm-center">
                            <time datetime="2018-01-01"><?php echo $articles['mois'].", ".$articles['annee'];  ?> <br> at 8:00 pm</time>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                 <?php } ?>
               
        </section>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Classic Skills Bars-->
        
      </main>
      <!-- Page Footer-->
      
@endsection