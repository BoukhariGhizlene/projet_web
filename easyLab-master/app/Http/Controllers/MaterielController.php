<?php

namespace App\Http\Controllers;
use Illuminate\support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\materielRequest;
use App\Http\Requests\equipeRequest;
use App\Projet;
use App\User;
use App\Equipe;
use Auth;
use App\Materiels;
use App\Parametre;
use App\MaterielEquipes;
use App\MaterielUsers;
use App\CategorieMaterial;
use Illuminate\Http\UploadedFile;

class MaterielController extends Controller
{
    //
     public function __construct()
    {
        $this->middleware('auth');
    }

	

     public function index()
    {
        $labo = Parametre::find('1');
        $materiels = Materiels::all();
        $materielsEquipe = MaterielEquipes::all();
        $materielsUser = MaterielUsers::all();
        $membre = User::all();
        $equipes = Equipe::all();
        $categories = CategorieMaterial::All();

        return view('materiel.index') ->with([
            'materiels' => $materiels,
            'membre' => $membre,
            'equipes' => $equipes,
            'nbrME' => $materielsEquipe->count(),
            'nbrMU' => $materielsUser->count(),
            'labo'=>$labo,
            'categories' => $categories,
            'materielsEquipe' => $materielsEquipe,
            'materielsUser' => $materielsUser,
            
        ]);;
    }

     public function details($id)
    {
        $membre = User::all();
        $equipes = Equipe::all();
        $materiels = Materiels::find($id);
        $materielsEquipe = MaterielEquipes::orderBy('created_at', 'desc')->get();
        $materielsUser = MaterielUsers::orderBy('created_at', 'desc')->get();
        $labo = Parametre::find('1');
        $categories = CategorieMaterial::All();


        return view('materiel.details')->with([
            'users' => $membre,
            'equipes' => $equipes,
            'labo'=>$labo,
            'categories' => $categories,
            'materielsEquipe' => $materielsEquipe,
            'materielsUser' => $materielsUser,
            'materiels' => $materiels,
            
        ]);;
    } 



    public function create()
    {
        $labo = Parametre::find('1');
        if( Auth::user()->role->nom == 'admin')
            {
                
               $categories = CategorieMaterial::All();
                return view('materiel.create' , ['categories' => $categories],['labo'=>$labo]);
            }
            else{
                return view('errors.403',['labo'=>$labo]);
            }
    }
     public function Catstore(Request $request)
    {
       $labo = Parametre::find('1');
       $categories = new CategorieMaterial();

     $categories->libelle = $request->input('libelle');
       

        $categories->save();

        return redirect('materiel/create');
 
    }
    public function store(Request $request)
    {
       $labo = Parametre::find('1');
       $materiel = new Materiels();
 if($request->hasFile('img')){
            $file = $request->file('img');
            $file_name = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('/uploads/photo'),$file_name);

        }
        else{
            $file_name="m.jpg";
        }
     $materiel->nom = $request->input('nom');
     $materiel->description = $request->input('description');
     $materiel->cat_mat_id = $request->input('categorie');
     $materiel->photo = 'uploads/photo/'.$file_name;
        $materiel->save();

        return redirect('materiel');
 
    }

     //récuperer un article puis le mettre dans le formulaire
     public function edit($id){

        $Materiel = Materiels::find($id);
         $membres = User::all();
         $labo =  Parametre::find('1');

         $this->authorize('update', $Materiel);

        return view('materiel.edit')->with([
            'materiel' => $Materiel,
            'membres' => $membres,
            'labo'=>$labo,
        ]);;
        
    }

     public function storeAffectationEquipe(Request $request,$Mid)
    {
      
       
        $materielsEquipe = new MaterielEquipes();
       // $materielsUser = MaterielUsers::find($Aid);
        $labo = Parametre::find('1');
        $materielsEquipe->materiel_id = $Mid;
        $materielsEquipe->equipe_id = $request->input('equipe_id');
        $materielsEquipe->date_emprunter = $request->input('date_naissance');
       $materielsEquipe->save();
/*break;
       case "User": $materielsUser->date_rendu = $request->input('date_naissance');
       $materielsUser->save();
         break; }*/
        

        return redirect('materiel/'.$Mid.'/details');

    }
    public function storeAffectationUser(Request $request,$Mid)
    {
      
       
        $materielsUser = new MaterielUsers();
       // $materielsUser = MaterielUsers::find($Aid);
        $labo = Parametre::find('1');
        $materielsUser->materiel_id = $Mid;
        $materielsUser->user_id = $request->input('user_id');
        $materielsUser->date_emprunter = $request->input('date_naissance');
       $materielsUser->save();
/*break;
       case "User": $materielsUser->date_rendu = $request->input('date_naissance');
       $materielsUser->save();
         break; }*/
        

        return redirect('materiel/'.$Mid.'/details');

    }

     public function update(Request $request , $Mid,$Aid,$Affectation)
    {
      
       $membre = User::find($Aid);
        $materielsEquipe = MaterielEquipes::find($Aid);
        $materielsUser = MaterielUsers::find($Aid);
        $labo = Parametre::find('1');

        switch($Affectation){
       case "Equipe": $materielsEquipe->date_rendu = $request->input('date_naissance');
       $materielsEquipe->save();
       break;
       case "User": $materielsUser->date_rendu = $request->input('date_naissance');
       $materielsUser->save();
         break; }
        

        return redirect('materiel/'.$Mid.'/details');

    }

    




    
    public function destroy($id)
    {
        if( Auth::user()->role->nom == 'admin')
            {
        $materiel = Materiels::find($id);
        $materiel->delete();
        return redirect('materiel');
            }
    }

}
