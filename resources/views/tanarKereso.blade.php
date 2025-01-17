@extends('layouts.app')

@section('content')
@section('title','Tanárkereső')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-xl-3">
            <div class="p-3 bg-light border rounded">
                <form method="GET">
                <h1 class="text-center text-success">Tanárkereső</h1>
                <label for="hangszer" class="col-md-4 col-form-label text-md-end"></label>
                <p>Keresés név szerint:</p>
                <input type="text" class="form-control" name="nev" value="{{request('nev','')}}">
                <p>Hol keresel tanárt?</p>
                <select name="telepules" id="telepules" class="form-control">
                    <option value="">
                        Válassz
                    </option>
                    @foreach ($telepulesek as $telepules)
                    <option value="{{$telepules->telepules}}" {{request('telepules') == $telepules->telepules ? "selected" : ""}}>
                        {{$telepules->telepules}}
                    </option>
                @endforeach
            </select>
            <p>Milyen tanárt keresel?</p>
            <select name="tantargy_id" id="tantargy_id" class="form-control">
                <option value="">
                    Válassz
                </option>
                @foreach ($tantargyak as $tantargy)
                <option value="{{$tantargy->tantargy_id}}" {{request('tantargy_id') == $tantargy->tantargy_id ? "selected" : ""}}>
                    {{$tantargy->nev}}
                </option>
            @endforeach
        </select>
                <button type="submit" class="btn btn-success form-control mt-3 ">Keresés</button>
                <a href="{{route("kereso")}}" class="btn btn-danger w-100 mt-3">Keresés törlése</a>
            </form>
            </div>
        </div>
        <div class="col-12 col-xl-9">
            <div class="row">
            @foreach ($tanarok as $tanar)
      <div class="col-6 col-xl-2">
      <div class="card">
        <img class="card-img-top" src="{{asset('img/'.$tanar->tid . '.jpg')}}" alt="Profil kép">
        <div class="card-body">
          <h4 class="card-title">{{$tanar->user_details['name']}}</h4>
          <p class="card-text">
            Oktatott tantargy(ak):
            @foreach ($tanar->tanarok_tantargyai as $targy)
               {{$targy->nev}},
            @endforeach          
          </p>
          <a href="./tanarprofil/{{$tanar->tid}}" class="btn btn-success">Írány a profil</a>
        </div>
      </div>
    </div>
      @endforeach
      <div class="mt-3">
      {{$tanarok->links()}}
    </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>

<style>
    .pagination{
        text-align: center !important;
    }
</style>
@endsection