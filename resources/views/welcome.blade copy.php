@extends('layouts.app')
@section('title', "SzinténZenész")
@section('content')
<div class="container">
  <form method="GET">
    <div class="row">
      <div class="col-3">
        <div class="card">
            <img class="card-img-top" alt="Profil kép">
            <div class="card-body">
              <h4 class="card-title"></h4>
              <p class="card-text">Gitár tanár</p>
              <a href="#" class="btn btn-success">Írány a profil</a>
            </div>
          </div>
    </div>
    

      </form>
        <div class="col-3">
            <div class="card">
                <img class="card-img-top " src="{{ asset('img/arc2.jpg') }}" alt="Profil kép">
                <div class="card-body">
                  <h4 class="card-title">Kiss Márta</h4>
                  <p class="card-text">Zongora/Ének tanár</p>
                  <a href="#" class="btn btn-success">Írány a profil</a>
                </div>
              </div>
        </div>
        <div class="col-3">
            <div class="card">
                <img class="card-img-top" src="{{ asset('img/arc3.jpg') }}" alt="Profil kép">
                <div class="card-body">
                  <h4 class="card-title">Nagy Péter</h4>
                  <p class="card-text">Hegedű tanár</p>
                  <a href="#" class="btn btn-success">Írány a profil</a>
                </div>
              </div>
        </div>
        <div class="col-3">
            <div class="card">
                <img class="card-img-top" src="{{ asset('img/arc4.jpg') }}" alt="Profil kép">
                <div class="card-body">
                  <h4 class="card-title">Teszt Tamás</h4>
                  <p class="card-text">Basszus Gitár tanár</p>
                  <a href="#" class="btn btn-success">Írány a profil</a>
                </div>
              </div>
        </div>
    </div>
@endsection
