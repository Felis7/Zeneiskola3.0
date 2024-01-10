@extends("layouts.app")
@section("title","Hangszerpiac")
@section("content")

<div class="container">
  <div class="row">
    <div class="col-md-4">
        <img src="{{asset("img/hangszer/".$adat->kep)}}" alt="A hangszer képe" class = "img-fluid">
    </div>
    <div class="col-md-8 bg-white rounded text-success">
      
      <h1 class="text-center mt-3">{{$adat->nev}}</h1>
      <h4 class="text-center mt-3 mb-0"><u>Leírás</u></h4>
      <p class="text-center">{{$adat->leiras}}</p>
      <h4 class="text-center"><u>Elérhetőség</u></h4>
      <p class="text-center mb-0">{{$adat->email}}</p>
      <p class="text-center mt-0">+36{{$adat->telefonszam}}</p>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h4 class="text-center"><u>Település</u></h4>
            <p class="text-center">{{$adat->hely}}</p>
          </div>
          <div class="col-md-6">
            <h4 class="text-center"><u>Ár</u></h4>
            <p class="text-center">{{$adat->ar}} Ft</p>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>


@endsection