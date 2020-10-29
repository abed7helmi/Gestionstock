
@extends('layouts.app')

@section('content')
<table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">CP</th>
        <th scope="col">Nom</th>
        <th scope="col">Prenom</th>
        <th scope="col">Status</th>
        <th scope="col">PC</th>
        <th scope="col">Souris</th>
        <th scope="col">Ecran</th>
        
        <th scope="col">Casque</th>
        
        <th scope="col">Base</th>



        </tr>
    </thead>
    <tbody>
    @foreach($demandes as $d)  
        <tr>
        <th>{{$d->id}}</th>
        <td>{{$d->cp}}</td>
        <td>{{$d->nom}}</td>
        <td>{{$d->prenom}}</td>
        <td>{{$d->statut}}</td>
        
        <td>
        {{$d->modele_pc}};windows {{$d->version_windows}};{{$d->version_ssd}};{{$d->version_ram}};
        </td>
        <td>
        @if($d->souris)
          Souris sans fil
        @else
        Pas de souris
        @endif
        </td>
        <td>
        @if ($d->eran =="Oui")
            {{$d->marque_ecran}};{{$d->quantite_ecran}}
        @else
        Pas d'écran
        @endif
        </td>
        
        <td>
            @if ($d->casque =="Oui")
            Casque sans fil;{{$d->quantite_casque}}
            @else
            Casque avec fil;{{$d->quantite_casque}}
            @endif
        </td>
        
        <td>
         @if ($d->base )
            {{$d->base}}
            @else
            Pas de base
        @endif
        </td>
 
        </tr>
    @endforeach
        
    </tbody>
    </table>

@endsection

              

