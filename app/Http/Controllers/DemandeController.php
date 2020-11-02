<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



use App\Models\Demande;




class DemandeController extends Controller
{   


    public function store(Request $request)
    {
        
        $input = $request->all();

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

        $user=Auth::user();
        $cp=$user->cp;

        $demandes=Demande::where('cp',$cp)->get();
        return view('list',compact('demandes'));
    }


}
