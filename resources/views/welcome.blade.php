

@extends('layouts.app')

@section('content') 
    <p></p>
   
    @csrf
    <form  action="/demandes" method='POST'>
        @csrf
        <div class="form-group">
            <label ><h1>Nom :</h1></label>
            <input type="text" class="form-control"
            value="{{Auth::user()->name}}" disabled>
            <input type="hidden" name="nom"  value="{{Auth::user()->name}}">

        </div>
        <div class="form-group">
            <label><h1>Prenom :</h1></label>
            <input type="text" class="form-control"  value="{{Auth::user()->prenom}}" disabled>
            <input type="hidden" name="prenom"  value="{{Auth::user()->prenom}}">
            
        </div>
        <div class="form-group">
            <label ><h1>Code CP :</h1></label>
            <input type="text" class="form-control" value="{{Auth::user()->cp}}" disabled>
            <input type="hidden" name="cp"  value="{{Auth::user()->cp}}">

        </div>
        <div class="form-group" name="nom">
            <label ><h1>Statut :</h1></label>
            <select class="custom-select mr-sm-2"  disabled>
                
                <option value="{{Auth::user()->statut}}" selected>{{Auth::user()->statut}}</option>
                
                
            </select>
            <input type="hidden" name="statut"  value="{{Auth::user()->statut}}">
        </div>








        <div><h1>Equipement :</h1></div>
        <div class="form-group align-items-center" >
                <div class="jumbotron " id="tableactplan" >
                    <div class="row justify-content-md-center">
                    <div class="form-check form-check-inline" >
                        <input class="form-check-input" type="checkbox" name="pc" id="testpc">
                        <label class="form-check-label" >PC</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="ecran" id="testecran">
                        <label class="form-check-label" >Ecran</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="souris" id="testsouris" >
                        <label class="form-check-label" >Souris</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="casque" id="testcasque">
                        <label class="form-check-label" >Casque</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="clavier" id="testclavier">
                        <label class="form-check-label" >Clavier</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="base" id="testbase" >
                        <label class="form-check-label" >Base</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="base" id="testpieuvre" >
                        <label class="form-check-label" >Pieuvre</label>
                    </div>
                </div>
                </div>







                <div  class="form-group marge_block align-items-center" id="pcform">
                    <div class="row">
                        <p class="text_equipement">Vos PC :</p>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label>Modele PC1</label>
                            <select class="form-control" name="modele_pc1">
                                <option  value="">choisir le modele ...</option>
                                <option  value="L380">L380</option>
                                <option  value="L390">L390</option>
                                <option  value="L470">L470</option>
                                <option  value="X270">X270</option>
                                <option  value="X260">X260</option>
                                <option  value="TOUR">TOUR</option>
                            </select>
                        </div>
                        <div class="col">
                        <label>Windows</label>
                            <select class="form-control" name="version_windows1">
                                <option selected value="">choisir le modele du windows ...</option>
                                <option  value="8">8</option>
                                <option  value="9">9</option>
                                <option  value="10">10</option>
                                
                            </select>
                        </div>
                    
                    
                        <div class="col">
                            <label>SSD</label>
                            <select class="form-control" name="version_ssd1">
                                <option selected value="">choisir le SSD ...</option>
                                <option  value="250GB">250 GB</option>
                                <option  value="500GB">500 GB</option>
                                <option  value="1TO">1 TO</option>
                            </select>
                        </div>
                        <div class="col">
                            <label>RAM</label>
                            <select class="form-control" name="version_ram1">
                                <option selected value="">choisir la RAM...</option>
                                <option  value="4GB">4 GB</option>
                                <option  value="8GB">8 GB</option>
                                <option  value="12GB">12 GB</option>
                                <option  value="16GO">16 GB</option>
                                <option  value="32GO">32 GB</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <label>Modele Pc2</label>
                            <select class="form-control" name="modele_pc2">
                                <option selected value="">choisir le modele ...</option>
                                <option  value="L380">L380</option>
                                <option  value="L390">L390</option>
                                <option  value="L470">L470</option>
                                <option  value="X270">X270</option>
                                <option  value="X260">X260</option>
                                <option  value="TOUR">TOUR</option>
                            </select>
                        </div>
                        <div class="col">
                        <label>Windows</label>
                            <select class="form-control" name="version_windows2">
                                <option selected value="">choisir le modele du windows ...</option>
                                <option  value="8">8</option>
                                <option  value="9">9</option>
                                <option  value="10">10</option>
                                
                            </select>
                        </div>
                    
                    
                        <div class="col">
                            <label>SSD</label>
                            <select class="form-control" name="version_ssd2">
                                <option selected value="">choisir le SSD ...</option>
                                <option  value="250GB">250 GB</option>
                                <option  value="500GB">500 GB</option>
                                <option  value="1TO">1 TO</option>
                            </select>
                        </div>
                        <div class="col">
                            <label>RAM</label>
                            <select class="form-control" name="version_ram2">
                                <option selected value="">choisir la RAM...</option>
                                <option  value="4GB">4 GB</option>
                                <option  value="8GB">8 GB</option>
                                <option  value="12GB">12 GB</option>
                                <option  value="16GO">16 GB</option>
                                <option  value="32GO">32 GB</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <label>Modele Pc3</label>
                            <select class="form-control" name="modele_pc3">
                                <option selected value="">choisir le modele ...</option>
                                <option  value="L380">L380</option>
                                <option  value="L390">L390</option>
                                <option  value="L470">L470</option>
                                <option  value="X270">X270</option>
                                <option  value="X260">X260</option>
                                <option  value="TOUR">TOUR</option>
                            </select>
                        </div>
                        <div class="col">
                        <label>Windows</label>
                            <select class="form-control" name="version_windows3">
                                <option selected value="">choisir le modele du windows ...</option>
                                <option  value="8">8</option>
                                <option  value="9">9</option>
                                <option  value="10">10</option>
                                
                            </select>
                        </div>
                    
                    
                        <div class="col">
                            <label>SSD</label>
                            <select class="form-control" name="version_ssd3">
                                <option selected value="">choisir le SSD ...</option>
                                <option  value="250GB">250 GB</option>
                                <option  value="500GB">500 GB</option>
                                <option  value="1TO">1 TO</option>
                            </select>
                        </div>
                        <div class="col">
                            <label>RAM</label>
                            <select class="form-control" name="version_ram3">
                                <option selected value="">choisir la RAM...</option>
                                <option  value="4GB">4 GB</option>
                                <option  value="8GB">8 GB</option>
                                <option  value="12GB">12 GB</option>
                                <option  value="16GO">16 GB</option>
                                <option  value="32GO">32 GB</option>
                            </select>
                        </div>
                    </div>
                </div>








                <div  class="form-group marge_block" id="ecranform" >
                    <div class="row">
                        <p class="text_equipement">Vos Ecrans :</p>
                    </div>
                    <div id="listecran">
                        <div class="row" id="unecran">
                            <div class="col">
                                <label>Marque</label>
                                <select class="form-control" name="marque_ecran1">
                                    <option selected value="">choisir la marque...</option>
                                    <option  value="philips">PHILIPS</option>
                                    <option  value="sumsung">SUMSUNG</option>
                                </select>
                            </div>
                            <div class="col">
                                <label>Taille</label>
                                <select class="form-control" name="taille_ecran1">
                                    <option selected value="">choisir la taille...</option>
                                    <option  value="14">14"</option>
                                    <option  value="15">17"</option>
                                    <option  value="20">20"</option>
                                    <option  value="22">22"</option>
                                </select>
                            </div>
                            <div class="col">
                                <label>Quantité</label>
                                <select class="form-control" name="quantite_ecran1">
                                    <option selected value="">choisir ...</option>
                                    <option  value="1">1</option>
                                    <option  value="2">2</option>
                                    <option  value="3">3</option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="row" id="unecran">
                            <div class="col">
                                <label>Marque</label>
                                <select class="form-control" name="marque_ecran2">
                                    <option selected value="">choisir la marque...</option>
                                    <option  value="philips">PHILIPS</option>
                                    <option  value="sumsung">SUMSUNG</option>
                                </select>
                            </div>
                            <div class="col">
                                <label>Taille</label>
                                <select class="form-control" name="taille_ecran2">
                                    <option selected value="">choisir la taille...</option>
                                    <option  value="14">14"</option>
                                    <option  value="15">17"</option>
                                    <option  value="20">20"</option>
                                    <option  value="22">22"</option>
                                </select>
                            </div>
                            <div class="col">
                                <label>Quantité</label>
                                <select class="form-control" name="quantite_ecran2">
                                    <option selected value="">choisir ...</option>
                                    <option  value="1">1</option>
                                    <option  value="2">2</option>
                                    <option  value="3">3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>







                <div  class="form-group marge_block" id="sourisform">
                    <div class="row">
                        <p class="text_equipement">Souris :</p>
                    </div>
                    <div class="row">
                        
                        <div class="col">
                            <label>Quantité souris Sans fil</label>
                            <select class="form-control" name="quantite_souris1">
                                <option selected value="0">choisir ...</option>
                                <option  value="1">1</option>
                                <option  value="2">2</option>
                                <option  value="3">3</option>
                            </select>
                        </div>
                        <div class="col">
                            <label>Quantité souris avec fil</label>
                            <select class="form-control" name="quantite_souris2">
                                <option selected value="0">choisir ...</option>
                                <option  value="1">1</option>
                                <option  value="2">2</option>
                                <option  value="3">3</option>
                            </select>
                        </div>
                    </div>
                </div>





                <div  class="form-group marge_block" id="casqueform">
                    <div class="row">
                        <p class="text_equipement">Casque :</p>
                    </div>
                    <div class="row">
                        

                        <div class="col">
                            <label>Quantité casque sans fil</label>
                            <select class="form-control" name="quantite_casque1">
                                <option selected value="">choisir ...</option>
                                <option  value="1">1</option>
                                <option  value="2">2</option>
                                <option  value="3">3</option>
                            </select>
                        </div>
                        <div class="col">
                            <label>Quantité casque avec fil</label>
                            <select class="form-control" name="quantite_casque2">
                                <option selected value="">choisir ...</option>
                                <option  value="1">1</option>
                                <option  value="2">2</option>
                                <option  value="3">3</option>
                            </select>
                        </div>
                    </div>
                    

                    
                        
            
                        
                

                </div>








                <div  class="form-group marge_block" id="clavierform">
                    <div class="row">
                        <p class="text_equipement">Clavier :</p>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label>Marque</label>
                            <select class="form-control" name="marque_clavier">
                                <option selected value="">choisir la marque ...</option>
                                <option  value="hp">HP</option>
                                <option  value="logitech">LOGITECH</option>
                                <option  value="lenovo">LENOVO</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div  class="form-group marge_block" id="baseform">
                    <div class="row">
                        <p class="text_equipement">Base :</p>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label>Marque</label>
                            <select class="form-control" name="base_marque">
                                <option selected value="">choisir la marque ...</option>
                                <option  value="targus">TARGUS</option>
                                <option  value="hp">HP</option>
                            </select>
                        </div>
                    </div>
                </div>






                <div  class="form-group marge_block" id="pieuvreform">
                    <div class="row">
                        <p class="text_equipement">Pieuvre :</p>
                    </div>
                    <div class="row">
                        
                        <div class="col">
                            <label>Modele</label>
                            <select class="form-control" name="modele_pieuvre">
                                <option selected value="">choisir le modele ...</option>
                                <option  value="sony">sony</option>
                                <option  value="jbl">jbl</option>

                            </select>
                        </div>
                        <div class="col">
                            <label>Quantité</label>
                            <select class="form-control" name="quantite_pieuvre">
                                <option selected value="">choisir ...</option>
                                <option  value="1">1</option>
                                <option  value="2">2</option>
                                <option  value="3">3</option>
                            </select>
                        </div>
                    </div>
       
                </div>





                <div class="form-group">
                    <label><h1>Commentaire :</h1></label>
                    <textarea class="form-control" rows="5" name="commentaire" placeholder="Tapez votre commentaire ici..."></textarea>
                </div>
            </div>
        <button type="submit" class="btn btn-dark">Envoyer</button>
        <button type="reset" class="btn btn-danger">Annuler</button>
        </form>
@endsection        


