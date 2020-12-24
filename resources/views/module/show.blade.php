@extends('layouts.template')

@section('title')
<h1>Details</h1> 
@endsection

@section('contenu')


<main style="width: 50%; margin: 20px auto;">

    <div class="card shadow-1">
        <div class="card-header">
            <h2>Module : {{ $module['name'] }}</h2>
            <h4>Description : {{ $module['description'] }}</h4>
        </div>
        <div class="card-content">
            <h5>Liste des promos</h5>

            @foreach ($module->promos as $promo)
            <li>{{$promo->name}} {{$promo->specialty}}</li>
            @endforeach

            <h5>Liste des élèves</h5>

            @foreach ($module->eleves as $eleve)
            <li>{{$eleve->firstname}} {{$eleve->lastname}}</li>
            @endforeach

        </div>
        <div class="card-footer">
            <a class="btn shadow-1 rounded-1 small grey dark-5 uppercase" href="{{ route('promo.index', ['module_id'=>$module->id]) }}">
                Ajouter des promos
            </a>
            <a class="btn shadow-1 rounded-1 small grey dark-5 uppercase" href="{{ route('eleve.index', ['module_id'=>$module->id]) }}">
                Ajouter des élèves
            </a>
        </div>
    </div>

    <td></td>
    <td></td>
    <td></td>

</main>

@endsection