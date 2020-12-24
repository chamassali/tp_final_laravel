@extends('layouts.template')

@section('title')
<h1>Ajouter un élève</h1>
@endsection

@section('contenu')

<main style="width: 50%; margin: 20px auto;">
    <form method="POST" action="{{ route('eleve.store') }}">
        @csrf
        <div class="grix xs1 sm2">
            <div class="form-field">
                <label for="firstname">First name</label>
                <input type="text" id="firstname" name="firstname" class="form-control rounded-1" placeholder="Your first name" />
            </div>
            <div class="form-field">
                <label class="txt-right hide-xs" for="lastname">Last name</label>
                <label class="txt-left hide-sm-up" for="lastname">lastname</label>
                <input type="text" id="lastname" name="lastname" class="form-control rounded-1" placeholder="Your last name" />
            </div>
            <div class="form-field col-sm2">
                <label class="txt-left hide-xs" for="email">Email</label>
                <label class="txt-left hide-sm-up" for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control rounded-1" placeholder="contact@example.com" />
            </div>



            <div class="form-field col-sm2">
                <input type="hidden" id="promo_id" name="promo_id" class="form-control rounded-1" value="{{ $promo_id }}" />
            </div>



            <input class="btn shadow-1 rounded-1 small grey dark-5 uppercase" type="submit" value="ADD">
        </div>
    </form>

</main>

@endsection