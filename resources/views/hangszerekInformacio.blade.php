@extends("layouts.app")
@section("title","Hangszerpiac")
@section("content")

<div class="container">
  <div class="row">
    <div class="col-md-4">

    </div>
    <div class="col-md-8 bg-white rounded text-success">
      
      <h1 class="text-center">{{$adat->nev}}</h1>
      <h4 class="text-center mt-3 mb-0">Leírás</h4>
      <p class="text-center">{{$adat->leiras}}</p>
      <h4 class="text-center">Elérhetőség</h4>
      <p class="text-center mb-0">{{$adat->email}}</p>
      <p class="text-center mt-0">+36{{$adat->telefonszam}}</p>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h4 class="text-center">Település</h4>
            <p class="text-center">{{$adat->hely}}</p>
          </div>
          <div class="col-md-6">
            <h4 class="text-center">Ár</h4>
            <p class="text-center">{{$adat->ar}} Ft</p>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>


@endsection