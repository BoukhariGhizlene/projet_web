<?php

namespace App\Http\Controllers;
use Illuminate\support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\equipeRequest;
use App\Parametre;
use App\Equipe;
use App\User;
use Auth;
use App\Partenaires;
use App\Partequipes;

class EquipeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {  
    $labo = Parametre::find('1'); 
    $equipes = Equipe::all();
     // $nbr = DB::table('users')
     //            ->groupBy('equipe_id')
     //            ->count('equipe_id');

    $nbr = DB::table('users')
             ->select( DB::raw('count(*) as total,equipe_id'))
             ->groupBy('equipe_id')
             ->get();
 $g = \DB::table('users')  ->groupBy('achronymes')
        ->join('equipes', 'users.equipe_id', '=', 'equipes.id')
        ->select( \DB::raw('count(achronymes) as total,achronymes '))
        ->get();
        
        return view('equipe.index')->with([
             'g'=>$g,
            'equipes' => $equipes,
            'nbr' => $nbr,
            'labo'=>$labo,
        ]);;
    }

    public function create()
    {
        $labo = Parametre::find('1');
        if( Auth::user()->role->nom == 'admin')
            {
                $membres = User::all(); 
                $Partenaires = Partenaires::all();
                //return view('equipe.create', ['membres' => $membres] ,['labo'=>$labo]);
                return view('equipe.create')->with([
            'Partenaires'=>$Partenaires,
           'membres' => $membres,
            'labo'=>$labo,
        ]);
            }
            else{
                return view('errors.403' ,['labo'=>$labo]);
            }
    }

    public function details($id)
    {
        $labo = Parametre::find('1');
        $equipe = Equipe::find($id);
        $Partenaires = /*DB::table('partenaires')
             ->select( DB::raw('DISTINCT partenaires.id ,nom,idP,idE,equipes.id'))
             ->join('partequipes', 'partequipes.idP', '=', 'partenaires.id')
             ->join('equipes', 'partequipes.idE', '=', 'equipes.id')
             //->where('partequipes.idE', '!=', $id)

             ->get();*/Partenaires::all();
        $membres = User::where('equipe_id', $id)->get();
        
        $var = \DB::table('articles') ->groupBy('type')
            ->join('article_user','article_user.article_id','=','articles.id')
        ->join('users','article_user.user_id','=','users.id')
        ->select( \DB::raw('count(type) as total,type'))
            ->where('equipe_id', '=', $id)
         ->orderBy('annee')
        ->get();
  
        
    $var2 = \DB::table('articles') ->groupBy('annee','type')
        ->join('article_user','article_user.article_id','=','articles.id')
        ->join('users','article_user.user_id','=','users.id')
        ->select( \DB::raw('count(type) as total,annee,type'))
        ->where('equipe_id', '=', $id)
         ->orderBy('annee')
        ->get();
     $vars = \DB::table('articles') ->groupBy('annee')
             ->join('article_user','article_user.article_id','=','articles.id')
        ->join('users','article_user.user_id','=','users.id') 
       ->select( \DB::raw('annee'))
         ->where('equipe_id', '=', $id)// ->where('votes', '=', 100)
        ->orderBy('annee')
        ->get();
        
         $vars4 = \DB::table('article_user') ->groupBy ('annee')
        
        ->join('users', 'article_user.user_id', '=', 'users.id')
        ->join('articles', 'articles.id', '=', 'article_user.article_id')
        ->select( \DB::raw('annee '))
        ->where('equipe_id', '=', $id)
        ->get();
         $soutnounce= \DB::table('theses')->groupBy ('date_d')
             ->join('users', 'theses.user_id', '=', 'users.id')
           ->select( \DB::raw('year(date_debut) as date_d , count(*) as total '))
             ->where('equipe_id', '=', $id)
          ->orderBy('date_d')
         ->get();
         $theseencours= \DB::table('theses')->groupBy ('date_s')
              ->join('users', 'theses.user_id', '=', 'users.id')
            ->select( \DB::raw('year(date_soutenance) as date_s, count(*) as total '))
             ->where('equipe_id', '=', $id)
             ->whereNotNull('date_soutenance')
             ->orderBy('date_s')
             ->get();


        return view('equipe.details')->with([
            'Partenaires'=>$Partenaires,
            'equipe' => $equipe,
            'membres' => $membres,
            'labo'=>$labo,
            'var' => $var,
            'vars4' => $vars4,
            'var2' => $var2,
            'vars' => $vars,
        'soutnounce'=> $soutnounce,
        'theseencours'=>$theseencours
        ]);
    } 


    public function store(equipeRequest $request)
    {
        $labo = Parametre::find('1');
        $equipe = new equipe();

        $equipe->intitule = $request->input('intitule');
        $equipe->resume = $request->input('resume');
        $equipe->achronymes = $request->input('achronymes');
        $equipe->axes_recherche = $request->input('axes_recherche');
        $equipe->chef_id = $request->input('chef_id');

        $equipe->save();
         $Partenaires =  $request->input('Partenaire');
        foreach ($Partenaires as $key => $value) {
            $Partequipes = new Partequipes();
            $Partequipes->idE = $equipe->id;
            $Partequipes->idP = $value;
            $Partequipes->save();

         } 

        return redirect('equipes');

    }

    public function update(equipeRequest $request,$id)
    {
        $labo = Parametre::find('1');
        $equipe = Equipe::find($id);

        if( Auth::user()->role->nom == 'admin')
            {

            $equipe->intitule = $request->input('intitule');
            $equipe->resume = $request->input('resume');
            $equipe->achronymes = $request->input('achronymes');
            $equipe->axes_recherche = $request->input('axes_recherche');
            $equipe->chef_id = $request->input('chef_id');

            $equipe->save();
            $Partenaires =  $request->input('Partenaire');
        $Partenaires_E = Partequipes::where('idE',$id);
        $Partenaires_E->delete();
            
        foreach ($Partenaires as $key => $value) {
            $Partenaires_E = new Partequipes();
            $Partenaires_E->idE = $equipe->id;
            $Partenaires_E->idP = $value;
            $Partenaires_E->save();

         } 

            return redirect('equipes/'.$id.'/details');
            }   
        else{
                return view('errors.403',['labo'=>$labo]);
            }

    }

    public function destroy($id)
    {
        if( Auth::user()->role->nom == 'admin')
            {
        $equipe = Equipe::find($id);
        $equipe->delete();
        return redirect('equipes');
        }
    }

}