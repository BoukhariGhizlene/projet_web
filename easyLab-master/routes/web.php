<?php
use App\User;
use App\These;
use App\Projet;
use App\Article;
use App\Equipe;
use App\Parametre;
use Illuminate\Support\Facades\Input;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/Acceuil/login', function () {
    return view('auth/login');
});

Route::get('/Acceuil/contact', function () {
    return view('Contacts');
});
Route::get('/Acceuil/Equipe/GL/{achronymes}', function () {
    return view('equipeGL');
});

Route::get('/Acceuil/Membre', function () {
    return view('Profile Membre');
});
Route::get('/Acceuil/Partenaire', function () {
    return view('paterne');
});
Route::get('/Acceuil/Projet', function () {
    return view('projet');
});

Route::get('partennaires','PartennaireController@index');
Route::post('partennaires','PartennaireController@store');
Route::post('partennaires/novC','PartennaireController@Contstore');
Route::get('partennaires/{id}/details','PartennaireController@details');
Route::get('partennaires/partenaire_create','PartennaireController@create');

//Route::get('/partennaires/{id}/details','PartennaireController@ShowDetails');
Route::get('partennaires/{id}/edit','PartennaireController@edit');
Route::put('partennaires/{id}','PartennaireController@update');
Route::delete('partennaires/{id}','PartennaireController@destroy');


Route::delete('partennaires/{idP}/contacts/{id}','PartennaireController@Contdestroy');
Route::get('contacts/{id}/details','PartennaireController@Contdetails');
Route::get('partennaire/{id}/contacts/create','PartennaireController@ContactCreate');


Route::get('dashboard','dashController@index');
Route::get('parametre','ParametreController@create');
Route::post('parametre','ParametreController@store');

Route::post('actualite/{id}','ActualitesController@store');
Route::delete('{idM}/actualite/{id}','ActualitesController@destroy');

Route::get('materiel','MaterielController@index');
Route::get('materiel/create','MaterielController@create');
Route::post('materiel2','MaterielController@Catstore');
Route::post('materiel','MaterielController@store');
Route::put('materiel/{Mid}/{Aid}/{Affectation}','MaterielController@update');
Route::put('materiel/{Mid}/AffectationEquipe','MaterielController@storeAffectationEquipe');
Route::put('materiel/{Mid}/AffectationUser','MaterielController@storeAffectationUser');
Route::delete('materiel/{id}','MaterielController@destroy');
Route::get('materiel/{id}/details','MaterielController@details');
Route::get('materiel/{id}/editt','MaterielController@edit');

Route::get('theses','TheseController@index');
Route::get('theses/create','TheseController@create');
Route::post('theses','TheseController@store')->middleware('thesecond');
Route::get('theses/{id}/details','TheseController@details');
Route::get('theses/{id}/edit','TheseController@edit');
Route::put('theses/{id}','TheseController@update');
Route::delete('theses/{id}','TheseController@destroy');

Route::get('articles','ArticleController@index');
Route::get('articles/create','ArticleController@create');
Route::post('articles','ArticleController@store');
Route::get('articles/{id}/details','ArticleController@details');
Route::get('articles/{id}/edit','ArticleController@edit');
Route::put('articles/{id}','ArticleController@update');
Route::delete('articles/{id}','ArticleController@destroy');

Route::get('membres','UserController@index');
Route::get('membres/create','UserController@create');
Route::post('membres','UserController@store');
Route::get('membres/{id}/details','UserController@details');

Route::get('trombinoscope','UserController@trombi');
Route::get('membres/{id}/edit','UserController@edit');
Route::put('membres/{id}','UserController@update');
Route::delete('membres/{id}','UserController@destroy');


Route::get('test','EquipeController@index');

Route::get('equipes','EquipeController@index');
Route::get('equipes/create','EquipeController@create');
Route::post('equipes','EquipeController@store');
Route::get('equipes/{id}/details','EquipeController@details');
Route::put('equipes/{id}','EquipeController@update');
Route::delete('equipes/{id}','EquipeController@destroy');


Route::get('/presentation', function () {
    return view('presentation');
});
Route::get('projets','ProjetController@index');
Route::get('projets/create','ProjetController@create');
Route::post('projets','ProjetController@store');
Route::get('projets/{id}/detail','ProjetController@details');
Route::get('projets/{id}/edit','ProjetController@edit');
Route::put('projets/{id}','ProjetController@update');
Route::delete('projets/{id}','ProjetController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/Acceuil/Equipe/{achronymes}','FrontOfficeController@ShowEquipeDetails');
Route::get('/Acceuil/Partenaire/{id}','FrontOfficeController@ShowPartenaireDetails');
Route::get('/membre/{id}','FrontOfficeController@ShowUserDetails');
Route::get('/projets/{id}/details','FrontOfficeController@ShowProjetDetails');
Route::get('/actualité','FrontOfficeController@ShowActualiteDetails');
Route::get('/Acceuil/Presentation','FrontOfficeController@ShowPresentationDetails');
Route::get('/','FrontOfficeController@ShowHome');

Route::get('/statistics',function(){

	$year = date('Y');
	 $a1 = DB::table('articles')->distinct('id')->where('annee',$year)->count();
	 $a2 = DB::table('articles')->distinct('id')->where('annee',$year-1)->count();
	 $a3 = DB::table('articles')->distinct('id')->where('annee',$year-2)->count();
	 $a4 = DB::table('articles')->distinct('id')->where('annee',$year-3)->count();
	 $a5 = DB::table('articles')->distinct('id')->where('annee',$year-4)->count();
	 $a6 = DB::table('articles')->distinct('id')->where('annee',$year-5)->count();
	 $a7 = DB::table('articles')->distinct('id')->where('annee',$year-6)->count();

	 $b1 = DB::table('theses')->where(DB::raw("DATE_FORMAT(STR_TO_DATE(date_debut,'%m/%d/%Y'),'%Y')"),$year)->count();
	 $b2 = DB::table('theses')->where(DB::raw("DATE_FORMAT(STR_TO_DATE(date_debut,'%m/%d/%Y'),'%Y')"),$year-1)->count();
	 $b3 = DB::table('theses')->where(DB::raw("DATE_FORMAT(STR_TO_DATE(date_debut,'%m/%d/%Y'),'%Y')"),$year-2)->count();
	 $b4 = DB::table('theses')->where(DB::raw("DATE_FORMAT(STR_TO_DATE(date_debut,'%m/%d/%Y'),'%Y')"),$year-3)->count();
	 $b5 = DB::table('theses')->where(DB::raw("DATE_FORMAT(STR_TO_DATE(date_debut,'%m/%d/%Y'),'%Y')"),$year-4)->count();
	 $b6 = DB::table('theses')->where(DB::raw("DATE_FORMAT(STR_TO_DATE(date_debut,'%m/%d/%Y'),'%Y')"),$year-5)->count();
	 $b7 = DB::table('theses')->where(DB::raw("DATE_FORMAT(STR_TO_DATE(date_debut,'%m/%d/%Y'),'%Y')"),$year-6)->count();

	 //$date = new Carbon( $these->date_debut );  

	 //$t1 = DB::table('theses')->distinct('id')->where(,$year)->count();

    $annee = [$year-6,$year-5,$year-4,$year-3,$year-2,$year-1,$year];
    $article = [$a7, $a6, $a5,$a4,$a3,$a2,$a1];
    $these = [$b7, $b6, $b5,$b4,$b3,$b2,$b1];
  
	return response()->json(["annee"=>$annee,
							 "article"=> $article,
							 "these"=> $these
							]);
});

Route::any('/search',function(){

	$labo = Parametre::find('1'); 
    $q = Input::get ( 'q' );
    $membres = User::where('name','LIKE','%'.$q.'%')->orWhere('prenom','LIKE','%'.$q.'%')->orWhere('email','LIKE','%'.$q.'%')->get();
    $theses = These::where('titre','LIKE','%'.$q.'%')->orWhere('sujet','LIKE','%'.$q.'%')->get();
    $articles = Article::where('titre','LIKE','%'.$q.'%')->orWhere('resume','LIKE','%'.$q.'%')->orWhere('type','LIKE','%'.$q.'%')->get();
    $projets = Projet::where('intitule','LIKE','%'.$q.'%')->orWhere('resume','LIKE','%'.$q.'%')->orWhere('type','LIKE','%'.$q.'%')->get();
    $equipes = Equipe::where('intitule','LIKE','%'.$q.'%')->orWhere('resume','LIKE','%'.$q.'%')->orWhere('achronymes','LIKE','%'.$q.'%')->get();

        // return view('search')->withDetails($user)->withQuery ( $q );
        return view('search')->with([
            'membres' => $membres,
            'theses' => $theses,
            'articles' => $articles,
            'projets' => $projets,
            'equipes' => $equipes,
            'labo'=>$labo,
            
        ]);;

});
