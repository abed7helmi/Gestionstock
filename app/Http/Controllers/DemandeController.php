<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use App\Models\Demande;


class DemandeController extends Controller
{   


    public function store(Request $request)
    {
        
        $input = $request->all();
        
        $data=request()->validate([         
            'nom'=>'required|min:3|regex:/^[A-Za-z\é\è\ê\-]+$/',
            'prenom'=>'required|min:3|regex:/^[A-Za-z\é\è\ê\-]+$/',
            'cp'=>'required|min:3'
            ]);
        
        
         if(!Demande::where('cp', $input['cp'])->first()){
            $demande = new Demande(); 
        } else {
            $demande =  Demande::where('cp', $input['cp'])->first();
        }
        
        foreach ($input as $key => $value) {
            if($key !='_token'){
                switch ($key) {
                    case 'pc':
                        if($key==NULL){
                            $demande->$key = "Non";
                        }else{
                            $demande->$key = "Oui";
                        }
                        break;
                    case 'souris':
                        if($key==NULL){
                            $demande->$key = "Non";
                        }else{
                            $demande->$key = "Oui";
                        }
                        break;
                    case 'ecran':
                        if($key==NULL){
                            $demande->$key = "Non";
                        }else{
                            $demande->$key = "Oui";
                        }
                        break;
                    case 'casque':
                        if($key==NULL){
                            $demande->$key = "Non";
                        }else{
                            $demande->$key = "Oui";
                        }
                        break;
                    case 'commentaire':
                        if($key==NULL){
                            $demande->$key = "Pas de commentaires";
                        }
                        break;
                    
                    default:
                        $demande->$key  = $value;
                        break;
                }
                

            }
                
        }

        $demande->save();

        return redirect()->route('list');
    }


    public function list(){
        $demandes=Demande::all();
        return view('list',compact('demandes'));
    }


}
