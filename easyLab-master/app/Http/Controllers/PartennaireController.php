<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Partenaires;
use App\Contacts;
use Auth;

use App\Parametre;

use Illuminate\Http\UploadedFile;
class PartennaireController extends Controller
{


public function Contdetails($id)
{

 $labo = Parametre::find('1');
  $cont = Contacts::find($id);

  return view('cont_detail')->with([
            'cont' => $cont,
           
            'labo'=>$labo,
        ]);;
    }

    public function Contstore(Request $request)
    {
       $labo = Parametre::find('1');
       $contacts = new Contacts();
    
     $contacts->nom = $request->input('nom');
     $contacts->prenom = $request->input('prenom');
    $contacts->fenction = $request->input('fenction');
    $contacts->Nature_Cooperation = $request->input('Nature_Cooperation');
    $contacts->mail = $request->input('mail');
    $contacts->num_tel = $request->input('num_tel');
    $contacts->partenaire_id=$request->input('idpart');
    
        $contacts->save();

        return redirect('partennaires/'.$contacts->partenaire_id.'/details');
 
    }
   public function __construct()
    {
        $this->middleware('auth');
    }

   public function index(){
        $partennaires = Partenaires::all();
        $labo = Parametre::find('1');
     
      $contacts= Contacts::all();
       return view('partennaire') ->with([
            'partennaires' => $partennaires,
            'labo' => $labo,
            'contacts' => $contacts,
          
            
        ]);;
        
    }
 /* public function ShowDetails($id)
    {
        return view('partennaire',['partenaires'=>$id]);
    } 

 */



    public function details($id)
    {
        $labo = Parametre::find('1');
        $par = Partenaires::find($id);
        $membres = Contacts::where('partenaire_id', $id)->get();
        //$membres = Partenaires::find($id)->contacts()->get();
        return view('par_detail')->with([
            'partennaire' => $par,
            'membres'=>$membres,
            'labo'=>$labo,
        ]);;
    }








public function create()
     {
        $labo =Parametre::find('1');
        if( Auth::user()->role->nom == 'admin')
            {
             
             
             $contacts=Contacts::All();
             $par = Partenaires::All();
      
             
        return view('partenaire_create', ['partennaires'=>$par],['labo'=>$labo],['contacts'=>$contacts]);
            }
            else{
                return view('errors.403',['labo'=>$labo]);
            }
        }



        public function ContactCreate($id)
     {
        $labo =Parametre::find('1');
        if( Auth::user()->role->nom == 'admin')
            {
             
             
             $contacts=Contacts::All();
             $par =  $id;

      
             
        return view('contact_create', ['partennaires'=>$par],['labo'=>$labo],['contacts'=>$contacts]);
            }
            else{
                return view('errors.403',['labo'=>$labo]);
            }
        }






//affichage de formulaire de creation d'un partennaire
public function store(Request $request)
    {
        $partennaire = new Partenaires();
        $labo = Parametre::find('1');
        if($request->hasFile('img')){
            $file = $request->file('img');
            $file_name = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('/uploads/photo'),$file_name);

        }
        else{
            $file_name="userDefault.png";
        }

            $partennaire->nom = $request->input('nom');
            $partennaire->achronym = $request->input('Achronymes');
            $partennaire->type = $request->input('type');
            $partennaire->pays = $request->input('pays');
           
            $partennaire->ville = $request->input('ville');
           
            $partennaire->logo = 'uploads/photo/'.$file_name;
            $partennaire->resume = $request->input('resume');
            $partennaire->description = $request->input('description');
           
            $partennaire->save();
       
// kont dayra hadi li raha dir prblm
        /*  $contacts = $request->input('contact');
        foreach ($contacts as $key => $value) {
            $contacts = new Contacts();
            $contacts->partenaire_id = $partennaire->id;
           
            $contacts->id = $value;
           $contacts->save();

         } */  
      return redirect('partennaires');

    }



   

     public function edit($id){

        $partennaire=Partenaires::find($id);
         
         $labo =  Parametre::find('1');
         $contacts= Contacts::all();
        // $this->authorize('update',  $partennaire);

        return view('part_edit')->with([
            ' $partennaire' =>  $partennaire,
             'contacts'=>$conacts,
            'labo'=>$labo,
        ]);;
        
    }

    //modifier et inserer
    public function update(Request $request , $id){
    
        $partennaire = Partenaires::find($id);
        $labo =  Parametre::find('1');

        

       
            $partennaire->nom = $request->input('nom');
            $partennaire->type = $request->input('type');
            $partennaire->pays = $request->input('pays');
           
            $partennaire->ville = $request->input('ville');
           
            $partennaire->logo = 'uploads/photo/'.$file_name;
            
            $partennaire->save();

         $contacts =  $request->input('contact');
        $contacts = Partenaires::where('contacts_id',$id);
        $contacts->delete();

        foreach ($contacts as $key => $value) {
            $contacts = new Contacts();
            $contacts->partenaire_id = $partenaire->id;
            $contacts->id = $value;
            $contacts->save();

         } 
 return redirect('partennaires');

    }

//supprimer un article
   
 
 public function destroy($id)
    {
        if( Auth::user()->role->nom == 'admin')
            {
       $partennaire = Partenaires::find($id);
        $partennaire->delete();
        return redirect('partennaires');
            }
    }

    public function Contdestroy($idP,$id)
    {
        if( Auth::user()->role->nom == 'admin')
            {
       $Contact = Contacts::find($id);
        $Contact->delete();
        return redirect('partennaires/'.$idP.'/details');
            }
    }

}





