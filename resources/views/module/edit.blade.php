@extends('layouts.template')

@section('title')
<h1>Modifier un module</h1> 
@endsection

@section('contenu')

<main style="width: 50%; margin: 20px auto;">

    <form action="{{ route('module.update', $module) }}" method="POST" >
        @csrf
        @method("PUT")
        <div class="grix xs1 sm2">
            <div class="form-field">
                <label for="firstname">Module name</label>
                <input type="text" id="module" name="module" class="form-control rounded-1" value="{{ $module['name'] }}" />
            </div>
            <div class="form-field">
                <label class="txt-right hide-xs" for="description">Description</label>
                <label class="txt-left hide-sm-up" for="description">Description</label>
                <input type="text" id="description" name="description" class="form-control rounded-1" value="{{ $module['description'] }}" />
            </div>
            <input class="btn shadow-1 rounded-1 small grey dark-5 uppercase" type="submit" value="EDIT">
        </div>
    </form>

</main>

@endsection