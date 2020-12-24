@extends('layouts.template')

@section('title')
<h1>Ajouter un module</h1>
@endsection

@section('contenu')

<main style="width: 50%; margin: 20px auto;">
    <form method="POST" action="{{ route('module.store') }}">
        @csrf
        <div class="grix xs1 sm2">
            <div class="form-field">
                <label for="firstname">Nom du module</label>
                <input type="text" id="module" name="module" class="form-control rounded-1" placeholder="Nom du module" />
            </div>
            <div class="form-field">
                <label class="txt-right hide-xs" for="description">Description</label>
                <label class="txt-left hide-sm-up" for="description">Description</label>
                <input type="text" id="description" name="description" class="form-control rounded-1" placeholder="Decription du module" />
            </div>
            <input class="btn shadow-1 rounded-1 small grey dark-5 uppercase" type="submit" value="ADD">
        </div>
    </form>

</main>

@endsection