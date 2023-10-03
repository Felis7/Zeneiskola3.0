@extends('layouts.app')
@section('title', "SzinténZenész")
@section('content')
<div class="container">
  <div class="row">
    <?php $count = 0; ?>
    @foreach ($tanarok as $tanar)
      <?php if($count == 4) break; ?>
      <div class="col-3">
      <div class="card">
        <img class="card-img-top" src="{{$tanar->url_kep}}" alt="Profil kép">
        <div class="card-body">
          <h4 class="card-title">{{$tanar->nev}}</h4>
          <p class="card-text">{{ $tanar->leiras}}</p>
          <a href="#" class="btn btn-success">Írány a profil</a>
          <?php $count++; ?>
        </div>
      </div>
    </div>
      @endforeach
    <div class="container">
      <div class="row">
        <div class="col-12">
          <form action="POST" enctype="multipart/form-data">
          <input type="file" name="fajl" id="fajl">Fájl
          <button type="submit"></button>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
