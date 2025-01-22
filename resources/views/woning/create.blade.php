@extends('layouts.app')

@section('title', 'Nieuwe Woning Toevoegen')

@section('custom-css')
<style>
    .container {
        margin-top: 40px;
    }

    h1.display-3 {
        text-align: center;
        margin-bottom: 30px;
    }

    .form-group label {
        font-weight: bold;
    }

    .form-control {
        border-radius: 5px;
        padding: 10px;
    }

    button.btn.btn-primary {
        width: 100%;
        padding: 10px;
        font-size: 16px;
    }

    .alert-danger {
        margin-top: 20px;
    }
</style>
@endsection

@section('content')
<div class="container">
    <h1 class="display-3">Nieuwe Woning Toevoegen</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="/woning/store">
        @csrf
        <div class="form-group">
            <label for="naam">Woning naam:*</label>
            <input type="text" class="form-control" name="naam" required />
        </div>

        <div class="form-group">
            <label for="beschrijving">Beschrijving:*</label>
            <input type="text" class="form-control" name="beschrijving" required />
        </div>

        <div class="form-group">
            <label for="oppervlakte_m2">Oppervlakte (m²):*</label>
            <input type="number" class="form-control" name="oppervlakte_m2" required />
        </div>

        <div class="form-group">
            <label for="huur_per_week">Huur per week (€):*</label>
            <input type="number" class="form-control" name="huur_per_week" required />
        </div>

        <button type="submit" class="btn btn-primary">Voeg woning toe</button>
    </form>
</div>
@endsection