@extends('layouts.template')

@section('contenu')
<a style="margin-left: 20px;" class="btn shadow-1 rounded-1 small grey dark-5 uppercase" href="{{ route('module.create') }}">Ajouter un module</a>

<main style="width: 50%; margin: 20px auto;">
    <div class="responsive-table-2">
        <table class="table">

            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description </th>
                    <th></th>
                </tr>
            </thead>

            @foreach ($modules as $module)
            <tbody>
                <tr>
                    <td>{{ $module['name'] }}</td>
                    <td>{{ $module['description'] }}</td>
                    <td>
                        <div style="display: flex;">
                            <a class="btn shadow-1 rounded-1 small grey dark-5 uppercase" href="{{ route('module.show', $module) }}">Details</a>
                            <a style="margin-left: 20px;" class="btn shadow-1 rounded-1 small grey dark-5 uppercase" href="{{ route('module.edit', $module) }}">Edit</a>
                            <form style="margin-left: 20px;" action="{{ route('module.destroy', $module) }}" method="POST">
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