@extends('layouts.template')

@section('title')
<h1>Modifier un élève</h1>
@endsection

@section('contenu')

<main style="width: 50%; margin: 20px auto;">

    <form action="{{ route('eleve.update', $eleve) }}" method="POST">
        @csrf
        @method("PUT")
        <div class="grix xs1 sm2">
            <div class="form-field">
                <label for="firstname">First name</label>
                <input type="text" id="firstname" name="firstname" class="form-control rounded-1" value="{{ $eleve['firstname'] }}" />
            </div>
            <div class="form-field">
                <label class="txt-right hide-xs" for="lastname">Last name</label>
                <label class="txt-left hide-sm-up" for="lastname">lastname</label>
                <input type="text" id="lastname" name="lastname" class="form-control rounded-1" value="{{ $eleve['lastname'] }}" />
            </div>
            <div class="form-field">
                <label class="txt-left hide-xs" for="email">Email</label>
                <label class="txt-left hide-sm-up" for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control rounded-1" value="{{ $eleve['email'] }}" />
            </div>
            <div class="form-field">
                <label class="txt-right hide-xs" for="search">Promo</label>
                <select class="form-control rounded-1" id="select" name="promo">
                    @foreach($promos as $promo)
                    <option value="{{ $promo->id }}" @if($promo->id == $eleve->promos['id'])
                        selected
                        @endif
                        >{{ $promo->name }} {{ $promo->specialty }}
                    </option>
                    @endforeach
                </select>
            </div>

            <input class="btn shadow-1 rounded-1 small grey dark-5 uppercase" type="submit" value="EDIT">
        </div>
    </form>

</main>

@endsection