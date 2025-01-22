@extends('layouts.app')

@section('title', 'Bewerk Woning')

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
</style>
@endsection

@section('content')
<div class="container">
    <h1 class="display-3">Bewerk Woning</h1>

    <form method="post" action="/woning/update/{{$woning->id}}">
        @csrf
        <div class="form-group">
            <label for="naam">Woning naam:*</label>
            <input type="text" class="form-control" name="naam" value="{{ $woning->naam }}" required />
        </div>

        <div class="form-group">
            <label for="beschrijving">Beschrijving:*</label>
            <input type="text" class="form-control" name="beschrijving" value="{{ $woning->beschrijving }}" required />
        </div>

        <div class="form-group">
            <label for="oppervlakte_m2">Oppervlakte (m²):*</label>
            <input type="number" class="form-control" name="oppervlakte_m2" value="{{ $woning->oppervlakte_m2 }}" required />
        </div>

        <div class="form-group">
            <label for="huur_per_week">Huur per week (€):*</label>
            <input type="number" class="form-control" name="huur_per_week" value="{{ $woning->huur_per_week }}" required />
        </div>

        <button type="submit" class="btn btn-primary">Updaten</button>
    </form>
</div>
@endsection
