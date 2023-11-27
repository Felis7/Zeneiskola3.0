@extends('layouts.app')
@section('title', "SzinténZenész")
@section('content')
<div class="container-fluid">
  <div class="row">
    <?php $count = 0; ?>
    @foreach ($tanarok as $tanar)
      <div class="col-6 col-xl-2">
      <div class="card">
        <img class="card-img-top" src="{{asset('img/'.$tanar->tid . '.jpg')}}" alt="Profil kép">
        <div class="card-body">
          <h4 class="card-title">{{$tanar->user_details['name']}}</h4>
          <p class="card-text">
            Tantargy(ak):
            @foreach ($tanar->tanarok_tantargyai as $targy)
               {{$targy->nev}},
            @endforeach          
          </p>
          <a href="./tanarprofil/{{$tanar->tid}}" class="btn btn-success">Írány a profil</a>
          
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
@if (session()->has("error"))
  <div class="toast align-items-center position-fixed bottom-50 end-0 m-5" role="alert" aria-live="assertive" aria-atomic="true" style="display:inline-block">
    <div class="d-flex">
      <div class="toast-body text-center">
      {{session("error")}}
    </div>
    <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
</div>
  
@endif
@endsection
