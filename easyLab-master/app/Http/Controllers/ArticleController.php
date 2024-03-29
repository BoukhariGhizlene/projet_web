<?php

namespace App\Http\Controllers;

use Illuminate\support\Facades\DB;
use Illuminate\Http\Request;
use App\Article;
use App\User;
use App\ArticleUser;
use App\Parametre;
use Auth;
use App\Http\Requests\articleRequest;
use Illuminate\Http\UploadedFile;



class ArticleController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }


	//permet de lister les articles
    public function index(){

    	$labo = Parametre::find('1');
    	$listarticle = Article::all();
        $var = \DB::table('articles') ->groupBy('type')
        ->select( \DB::raw('count(type) as total,type'))
         ->orderBy('annee')
        ->get();
  
        
    $var2 = \DB::table('articles') ->groupBy('annee','type')
        ->select( \DB::raw('count(type) as total,annee,type'))
         ->orderBy('annee')
        ->get();
     $vars = \DB::table('articles') ->groupBy('annee')
       ->select( \DB::raw('annee'))
        ->orderBy('annee')
        ->get();
         $var3 = \DB::table('article_user') ->groupBy ('annee','achronymes')
        
        ->join('users', 'article_user.user_id', '=', 'users.id')
        ->join('articles', 'articles.id', '=', 'article_user.article_id')
        ->join('equipes', 'users.equipe_id', '=', 'equipes.id')
        ->select( \DB::raw('count(annee)as total,annee ,achronymes'))
        ->get();
         $vars4 = \DB::table('article_user') ->groupBy ('annee')
        
        ->join('users', 'article_user.user_id', '=', 'users.id')
        ->join('articles', 'articles.id', '=', 'article_user.article_id')
        
        ->select( \DB::raw('annee '))
        ->get();

    	return view('article.index' )->with([
            'var' => $var,
            'var3' => $var3,
            'vars4' => $vars4,
            'articles' => $listarticle,
            'labo'=>$labo,
            'var2' => $var2,
            'vars' => $vars]);; 

    }

    public function details($id)
    {
    	$labo = Parametre::find('1');
	 	$article = Article::find($id);
	 	$membres = Article::find($id)->users()->orderBy('name')->get();

	 	return view('article.details')->with([
	 		'article' => $article,
	 		'membres'=>$membres,
	 		'labo'=>$labo,
	 	]);;
    }
   

    //affichage de formulaire de creation d'articles
	 public function create()
	 {
	 	$labo = Parametre::find('1');
	 	// if( Auth::user()->role->nom == 'admin')
            {
	 	$membres = User::all();
	 	$article = Article::all();

	 	return view('article.create',['membres'=>$membres],['labo'=>$labo]);
			 }
            // else{
            //     return view('errors.403');
            // }

    }

    //enregistrer un article
	 public function store(articleRequest $request){

	 	$article = new Article();
	 	$labo = Parametre::find('1');

	 	if($request->hasFile('detail')){

            $file = $request->file('detail');

            $file_name = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('/uploads/article'),$file_name);
            $article->detail = '/uploads/article/'.$file_name;

        }

	 	$article->type = $request->input('type');
	 	$article->titre = $request->input('titre');
	 	$article->resume = $request->input('resume');
	 	$article->lieu_ville = $request->input('ville');
	 	$article->lieu_pays = $request->input('pays');
	 	$article->conference = $request->input('conference');
	 	$article->journal = $request->input('journal');
	 	$article->ISSN = $request->input('issn');
	 	$article->ISBN = $request->input('isbn');
	 	$article->mois = $request->input('mois');
	 	$article->annee = $request->input('annee');
	 	$article->doi = $request->input('doi');
	 	$article->membres_ext = $request->input('membres_ext');
	 	$article->deposer = Auth::user()->id;
	 	
	 	
	 	$article->save();

        $members =  $request->input('membre');
        foreach ($members as $key => $value) {
	 		$article_user = new ArticleUser();
		 	$article_user->article_id = $article->id;
		 	$article_user->user_id = $value;
	 	    $article_user->save();

         } 

	 	return redirect('articles');

	 	//return response()->json(["arr"=>$request->input('membre')]);

    }

    //récuperer un article puis le mettre dans le formulaire
	 public function edit($id){

	 	$article = Article::find($id);
	 	$membres = User::all();
	 	$labo = Parametre::find('1');

	 	$this->authorize('update', $article);

	 	return view('article.edit')->with([
	 		'article' => $article,
	 		'membres'=>$membres,
	 		'labo'=>$labo,
	 	]);;
    }

    //modifier et inserer
    public function update(articleRequest $request ,$id){
    
    	$article = Article::find($id);
    	$labo = Parametre::find('1');

    	$article->type = $request->input('type');
	 	$article->titre = $request->input('titre');
	 	$article->resume = $request->input('resume');
	 	$article->lieu_ville = $request->input('ville');
	 	$article->lieu_pays = $request->input('pays');
	 	$article->conference = $request->input('conference');
	 	$article->journal = $request->input('journal');
	 	$article->ISSN = $request->input('issn');
	 	$article->ISBN = $request->input('isbn');
	 	$article->mois = $request->input('mois');
	 	$article->annee = $request->input('annee');
	 	$article->doi = $request->input('doi');

	 	if($request->hasFile('detail')){

            $file = $request->file('detail');
            $file_name = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('/uploads/article'),$file_name);

        $article->detail = '/uploads/article/'.$file_name;

        }
	 	
	 	$article->save();

	 	$members =  $request->input('membre');
        $article_user = ArticleUser::where('article_id',$id);
        $article_user->delete();
        
        foreach ($members as $key => $value) {
            $article_user = new ArticleUser();
            $article_user->article_id = $article->id;
            $article_user->user_id = $value;
            $article_user->save();

         } 

	 	

	 	return redirect('articles');
    }
    
    //supprimer un article
    public function destroy($id){

    	$article = Article::find($id);

	 	$this->authorize('delete', $article);

        $article->delete();
        return redirect('articles');

    }
}