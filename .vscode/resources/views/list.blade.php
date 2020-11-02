
@extends('layouts.app')

@section('content')



    @foreach($demandes as $d)  
        <div class="row justify-content-md-center">

            <table class="table table-sm table-dark table-dark col-6 ">
                <thead>
                <tr>

                    <th scope="col">CP</th>
                    <th scope="col">NOM</th>
                    <th scope="col">PRENOM</th>
                </tr>
                </thead>
                <tbody>
                    <td scope="col">{{$d->cp}}</td>
                    <td scope="col">{{$d->nom}}</td>
                    <td scope="col">{{$d->prenom}}</td>
                </tbody>
            </table>

        </div>
        <div class="row" style="padding-top: 15%">
            <p><h1>MES EQUIPEMENTS:</h1></p>
        </div>
        @if ($d->modele_pc1)
        <div class="row pad">

            <table class="table  table-striped ">
                <label>PC 1<label>
                <thead>
                <tr class="table-info">

                    <th scope="col">Modele</th>
                    <th scope="col">Windows</th>
                    <th scope="col">Ram</th>
                    <th scope="col">SSD</th>
                </tr>
                </thead>
                <tbody>
                    <td scope="col">{{$d->modele_pc1}}</td>
                    <td scope="col">{{$d->version_windows1}}</td>
                    <td scope="col">{{$d->version_ram1}}</td>
                    <td scope="col">{{$d->version_ssd1}}</td>
                </tbody>
            </table>


        </div>

        @endif
        @if ($d->modele_pc2)
        <div class="row pad">

            <table class="table  table-striped ">
                <label>PC 2<label>
                <thead>
                <tr class="table-info">

                    <th scope="col">Modele</th>
                    <th scope="col">Windows</th>
                    <th scope="col">Ram</th>
                    <th scope="col">SSD</th>
                </tr>
                </thead>
                <tbody>
                    <td scope="col">{{$d->modele_pc2}}</td>
                    <td scope="col">{{$d->version_windows2}}</td>
                    <td scope="col">{{$d->version_ram2}}</td>
                    <td scope="col">{{$d->version_ssd2}}</td>
                </tbody>
            </table>


        </div>

        @endif

        @if ($d->modele_pc3)
        <div class="row pad">

            <table class="table  table-striped ">
                <label>PC 3<label>
                <thead>
                <tr class="table-info">

                    <th scope="col">Modele</th>
                    <th scope="col">Windows</th>
                    <th scope="col">Ram</th>
                    <th scope="col">SSD</th>
                </tr>
                </thead>
                <tbody>
                    <td scope="col">{{$d->modele_pc3}}</td>
                    <td scope="col">{{$d->version_windows3}}</td>
                    <td scope="col">{{$d->version_ram3}}</td>
                    <td scope="col">{{$d->version_ssd3}}</td>
                </tbody>
            </table>


        </div>

        @endif






        
        @if ($d->marque_ecran1)
        <div class="row pad">

            <table class="table  table-striped ">
                <label>Ecran 1<label>
                <thead>
                <tr class="table-info">

                    <th scope="col">Marque</th>
                    <th scope="col">Taille</th>
                    <th scope="col">Quantité</th>
                    
                </tr>
                </thead>
                <tbody>
                    <td scope="col">{{$d->marque_ecran1}}</td>
                    <td scope="col">{{$d->taille_ecran1}}</td>
                    <td scope="col">{{$d->quantite_ecran1}}</td>
                    
                </tbody>
            </table>


        </div>

        @endif

        @if ($d->marque_ecran2)
        <div class="row pad">

            <table class="table  table-striped ">
                <label>Ecran 1<label>
                <thead>
                <tr class="table-info">

                    <th scope="col">Marque</th>
                    <th scope="col">Taille</th>
                    <th scope="col">Quantité</th>
                    
                </tr>
                </thead>
                <tbody>
                    <td scope="col">{{$d->marque_ecran2}}</td>
                    <td scope="col">{{$d->taille_ecran2}}</td>
                    <td scope="col">{{$d->quantite_ecran2}}</td>
                    
                </tbody>
            </table>


        </div>

        @endif



        @if ($d->quantite_souris1)
        <div class="row pad">

            <table class="table  table-striped ">
                <label>Souris sans_fil<label>
                <thead>
                <tr class="table-info">


                    <th scope="col">Quantité</th>
                    
                </tr>
                </thead>
                <tbody>
                   
                    <td scope="col">{{$d->quantite_souris1}}</td>
                    
                </tbody>
            </table>


        </div>

        @endif

        @if ($d->quantite_souris2)
        <div class="row pad">

            <table class="table  table-striped ">
                <label>Souris avec_fil<label>
                <thead>
                <tr class="table-info">


                    <th scope="col">Quantité</th>
                    
                </tr>
                </thead>
                <tbody>
                   
                    <td scope="col">{{$d->quantite_souris2}}</td>
                    
                </tbody>
            </table>


        </div>

        @endif

        @if ($d->base_marque)
        <div class="row pad">

            <table class="table  table-striped ">
                <label>Base<label>
                <thead>
                <tr class="table-info">


                    <th scope="col">Marque</th>
                    
                </tr>
                </thead>
                <tbody>
                   
                    <td scope="col">{{$d->base_marque}}</td>
                    
                </tbody>
            </table>


        </div>

        @endif



        @if ($d->marque_clavier)
        <div class="row pad">

            <table class="table  table-striped ">
                <label>Clavier<label>
                <thead>
                <tr class="table-info">


                    <th scope="col">Marque</th>
                    
                </tr>
                </thead>
                <tbody>
                   
                    <td scope="col">{{$d->marque_clavier}}</td>
                    
                </tbody>
            </table>


        </div>

        @endif


        @if ($d->quantite_casque1)
        <div class="row pad">

            <table class="table  table-striped ">
                <label>Casque sans_fil<label>
                <thead>
                <tr class="table-info">


                    <th scope="col">Quantité</th>
                    
                </tr>
                </thead>
                <tbody>
                   
                    <td scope="col">{{$d->quantite_casque1}}</td>
                    
                </tbody>
            </table>


        </div>

        @endif



        @if ($d->quantite_casque2)
        <div class="row pad">

            <table class="table  table-striped ">
                <label>Casque avec_fil<label>
                <thead>
                <tr class="table-info">


                    <th scope="col">Quantité</th>
                    
                </tr>
                </thead>
                <tbody>
                   
                    <td scope="col">{{$d->quantite_casque2}}</td>
                    
                </tbody>
            </table>


        </div>

        @endif

        @if ($d->modele_pieuvre)
        <div class="row pad">

            <table class="table  table-striped ">
                <label>Casque avec_fil<label>
                <thead>
                <tr class="table-info">


                    <th scope="col">Modele</th>
                    <th scope="col">Quantité</th>
                    
                </tr>
                </thead>
                <tbody>
                   
                    <td scope="col">{{$d->modele_pieuvre}}</td>
                    <td scope="col">{{$d->quantite_pieuvre}}</td>
                    
                </tbody>
            </table>


        </div>

        @endif



    @endforeach 



@endsection

              

