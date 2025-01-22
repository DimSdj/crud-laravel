@extends('layouts.app')

@section('title', 'Woningen Overzicht')

@section('custom-css')
<style>
    .container {
        margin-top: 40px;
    }

    h1.display-3 {
        text-align: center;
        margin-bottom: 30px;
    }

    table.table {
        margin-top: 20px;
        width: 100%;
        border-collapse: collapse;
    }

    table.table th, table.table td {
        padding: 12px;
        text-align: center;
        border: 1px solid #ddd;
    }

    .btn {
        font-size: 14px;
    }

    .btn-primary {
        width: 100%;
        padding: 10px;
    }
</style>
@endsection

@section('content')
<div class="container">
    <h1 class="display-3">Woningen Overzicht</h1>

    <div>
        <a href="/woning/create" class="btn btn-primary mb-3">Voeg woning toe</a>
    </div>

    <table class="table">
        <thead class="thead-light">
            <tr>
                <th>ID</th>
                <th>Naam</th>
                <th>Oppervlakte in m2</th>
                <th>Huur per week</th>
                <th>Updated at</th>
                <th>Updaten</th>
                <th>Verwijderen</th>
                <th>Beschrijving</th>
            </tr>
        </thead>
        <tbody>
            @foreach($woning as $woning)
                <tr>
                    <td>{{ $woning->id }}</td>
                    <td>{{ $woning->naam }} </td>
                    <td>{{ $woning->oppervlakte_m2 }}</td>
                    <td>{{ $woning->huur_per_week }}</td>
                    <td>{{ $woning->updated_at }}</td>
                    <td><a href="/woning/edit/{{ $woning->id }}" class="btn btn-primary">Updaten</a></td>
                    <td>
                        <form action="/woning/destroy/{{ $woning->id }}" method="post">
                            @csrf
                            <button onclick="return confirm('Are you sure?')" class="btn btn-danger" type="submit">Verwijderen</button>
                        </form>
                    </td>
                    <td>
                        <a href="/woning/{{ $woning->id }}/beschrijving" class="btn btn-info">Beschrijving</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
