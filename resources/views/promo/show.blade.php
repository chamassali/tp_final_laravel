@extends('layouts.template')

@section('title')
<h1>Details</h1> 
@endsection

@section('contenu')


<main style="width: 50%; margin: 20px auto;">

    <div class="card shadow-1">
        <div class="card-header"><h2>{{ $promo['name'] }} {{ $promo['specialty'] }}</h2></div>
        <div class="card-content">
            <h5>Liste des élèves</h5>

            @foreach ($promo->eleves as $eleve)
            <li>{{$eleve->firstname}} {{$eleve->lastname}}</li>
            @endforeach

            <h5>Liste des modules</h5>

            @foreach ($promo->modules as $module)
            <li>{{$module->name}}</li>
            @endforeach

        </div>
        <div class="card-footer">
            <a class="btn shadow-1 rounded-1 small grey dark-5 uppercase" href="{{ route('eleve.create', ['promo_id'=>$promo->id]) }}">
                Ajouter un élève
            </a>
            <a class="btn shadow-1 rounded-1 small grey dark-5 uppercase" href="{{ route('module.index', ['promo_id'=>$promo->id]) }}">
                Ajouter des modules
            </a>
        </div>
    </div>

    <td></td>
    <td></td>
    <td></td>

</main>

@endsection