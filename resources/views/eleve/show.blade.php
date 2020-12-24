@extends('layouts.template')

@section('title')
<h1>Details</h1> 
@endsection

@section('contenu')


<main style="width: 50%; margin: 20px auto;">

    <div class="card shadow-1">
        <div class="card-header">
            <h2>{{ $eleve['firstname'] }} {{ $eleve['lastname'] }}</h2>
        </div>
        <div class="card-content">

            <h5> Email :</h5>
            <h6>{{ $eleve['email'] }}</h6>
            <h5>Promo :</h5>
            <h6>{{ $eleve->promos['name'] }} {{ $eleve->promos['specialty'] }}</h6>

            <h5>Modules :</h5>
            @foreach ($eleve->modules as $module)
            <li>{{$module->name}}</li>
            @endforeach
        </div>
        <div class="card-footer">
            <a class="btn shadow-1 rounded-1 small grey dark-5 uppercase" href="{{ route('module.index', ['eleve_id'=>$eleve->id]) }}">
                Ajouter des modules
            </a>
        </div>
    </div>

    <td></td>
    <td></td>
    <td></td>

</main>

@endsection