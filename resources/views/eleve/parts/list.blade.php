@extends('layouts.template')

@section('title')
Liste des élèves
@endsection

@section('contenu')
<a style="margin-left: 20px;" class="btn shadow-1 rounded-1 small grey dark-5 uppercase" href="{{ route('eleve.create') }}">Ajouter un élève</a>

<main style="width: 50%; margin: 20px auto;">

    <div class="responsive-table-2">
        <table class="table">

            <thead>
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th></th>
                </tr>
            </thead>

            @foreach ($eleves as $eleve)
            <tbody>
                <tr>
                    <td>{{ $eleve['firstname'] }}</td>
                    <td>{{ $eleve['lastname'] }}</td>
                    <td>{{ $eleve['email'] }}</td>
                    <td>
                        <div style="display: flex;">
                            <a class="btn shadow-1 rounded-1 small grey dark-5 uppercase" href="{{ route('eleve.show', $eleve) }}">Details</a>
                            <a style="margin-left: 20px;" class="btn shadow-1 rounded-1 small grey dark-5 uppercase" href="{{ route('eleve.edit', $eleve) }}">Edit</a>
                            <form style="margin-left: 20px;" action="{{ route('eleve.destroy', $eleve) }}" method="POST">
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