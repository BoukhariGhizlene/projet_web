<?php

namespace App\Http\Controllers;
use Illuminate\support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\equipeRequest;
use App\Parametre;
use App\Equipe;
use App\User;
use App\Actualites;
use App\Partenaires;
use App\Contacts;

class FrontOfficeController extends Controller
{
    //
    public function ShowEquipeDetails($achronymes)
    {
       // $labo = Parametre::find('1');
        $equipe = Equipe::find($achronymes);
       return view('equipeGL',['equipe'=>$achronymes]);/*->with([
           'equipe' => $equipe,
           'labo'=>$labo,
        ]);*/
    } 

 public function ShowPartenaireDetails($id){
      $labo = Parametre::find('1');
        $par = Partenaires::find($id);
        $membres = Contacts::where('partenaire_id', $id)->get();
        //$membres = Partenaires::find($id)->contacts()->get();
        return view('paterne')->with([
            'partennaire' => $par,
            'membres'=>$membres,
            'labo'=>$labo,
        ]);;

     }


     public function ShowPresentationDetails ()
    {
       $equipe = Equipe::all();
       $labo = Parametre::find(1);

        return view('presentation')->with([
            'equipes' => $equipe,
            'labo'=>$labo,
        ]);
    }

     public function ShowActualiteDetails(){
      $labo = Parametre::find('1');
       $membre = User::all();
       $actualite = Actualites::all();

        return view('actualite')->with([
            'actualite' => $actualite,
            'users' => $membre,
            'labo'=>$labo,
        ]);

     }
      public function ShowUserDetails($id)
    {
        
       return view('Profile Membre',['user'=>$id]);
    } 

    public function ShowProjetDetails($id)
    {
        return view('projet',['projets'=>$id]);
    } 
      public function ShowHome()
    {
      $labo = Parametre::find('1');
       $membre = User::all();
      // $actualite = Actualites::all();
 $actualite= DB::table('actualites')
             ->select( DB::raw('*'))
             ->orderBy('created_at','desc')
             ->get();
        return view('Acceuil')->with([
            'actualite' => $actualite,
            'users' => $membre,
            'labo'=>$labo,
        ]);
    } 
}
