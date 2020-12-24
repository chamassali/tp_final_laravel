@extends('layouts.template')

@section('title')
<h1>Modifier la promo</h1>
@endsection

@section('contenu')

<main style="width: 50%; margin: 20px auto;">

    <form action="{{ route('promo.update', $promo) }}" method="POST" >
        @csrf
        @method("PUT")
        <div class="grix xs1 sm2">
            <div class="form-field">
                <label for="firstname">Promo name</label>
                <input type="text" id="promo" name="promo" class="form-control rounded-1" value="{{ $promo['name'] }}" />
            </div>
            <div class="form-field">
                <label class="txt-right hide-xs" for="specialty">Specialty</label>
                <label class="txt-left hide-sm-up" for="specialty">Specialty</label>
                <input type="text" id="specialty" name="specialty" class="form-control rounded-1" value="{{ $promo['specialty'] }}" />
            </div>
            <input class="btn shadow-1 rounded-1 small grey dark-5 uppercase" type="submit" value="EDIT">
        </div>
    </form>

</main>

@endsection