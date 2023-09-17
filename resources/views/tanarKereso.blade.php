@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col"></div>
        <div class="col-4">
            <div class="p-3 bg-light border rounded">
                <h1 class="text-center text-success">Tanárkereső</h1>
                <label for="hangszer" class="col-md-4 col-form-label text-md-end"></label>
                <p></p>Milyen tanárt keresel?<input type="text" class="form-control">
                <button type="submit" class="btn btn-success form-control mt-2">Keresés</button>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
</div>


@endsection