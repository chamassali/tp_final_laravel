@extends('layouts.template')

@section('title')
Liste des promos
@endsection

@section('contenu')
<a style="margin-left: 20px;" class="btn shadow-1 rounded-1 small grey dark-5 uppercase" href="{{ route('promo.create') }}">Add a promo</a>
<main style="width: 50%; margin: 20px auto;">

    <div class="responsive-table-2">
        <table class="table">

            <thead>
                <tr>
                    <th>Name</th>
                    <th>Specialty</th>
                    <th></th>
                </tr>
            </thead>


            @foreach ($promos as $promo)
            <tbody>
                <tr>
                    <td>{{ $promo['name'] }}</td>
                    <td>{{ $promo['specialty'] }}</td>
                    <td>
                        <div style="display: flex;">
                            <a class="btn shadow-1 rounded-1 small grey dark-5 uppercase" href="{{ route('promo.show', $promo) }}">Details</a>
                            <a style="margin-left: 20px;" class="btn shadow-1 rounded-1 small grey dark-5 uppercase" href="{{ route('promo.edit', $promo) }}">Edit</a>
                            <form style="margin-left: 20px;" action="{{ route('promo.destroy', $promo) }}" method="POST">
                                @csrf
                                @method("DELETE")
                                <input class="btn shadow-1 rounded-1 small grey dark-5 uppercase" type="submit" value="Delete">
                            </form>
                        </div>


                    </td>

                </tr>
            </tbody>
            @endforeach

        </table>
    </div>

</main>

@endsection