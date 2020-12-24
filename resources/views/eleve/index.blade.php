@extends('layouts.template')

@section('title')
<div style="width: 30%; margin-left: 20px;">
<h1>Liste des élèves</h1> 

    <form>
        <div class="grix xs1 sm2">
            <div class="form-field">
                <input type="text" id="search" name="search" class="form-control rounded-1" placeholder="Search...." />
                <button style="margin-top: 10px;" type="submit" class="btn shadow-1 rounded-1 small grey dark-5 uppercase">
                    Chercher
                </button>
            </div>
        </div>
    </form>
</div>

@endsection

@section('contenu')

@if(isset($current_module_id))
    @include("eleve.parts.eleve_form_create")
@else
    @include("eleve.parts.list")
@endif

@endsection