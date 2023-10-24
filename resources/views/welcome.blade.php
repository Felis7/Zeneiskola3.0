@extends('layouts.app')
@section('title', "SzinténZenész")
@section('content')
<div class="container-fluid">
  <div class="row">
    <?php $count = 0; ?>
    @foreach ($tanarok as $tanar)
      <div class="col-6 col-xl-2">
      <div class="card">
        <img class="card-img-top" src="{{asset('img/'.$tanar->tanar_id . '.jpg')}}" alt="Profil kép">
        <div class="card-body">
          <h4 class="card-title">{{$tanar->nev}}</h4>
          <p class="card-text">
            Tantargy(ak):
            @foreach ($tanar->tanarok_tantargyai as $targy)
               {{$targy->nev}},
            @endforeach          
          </p>
          <a href="./tanarprofil/{{$tanar->tanar_id}}" class="btn btn-success">Írány a profil</a>
          
        </div>
      </div>
    </div>
      @endforeach
    <div class="container">
      <div class="row">
        <div class="col-12">
          
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
