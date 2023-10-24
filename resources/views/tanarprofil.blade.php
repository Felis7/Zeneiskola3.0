@extends('layouts.app')

@section('content')
<div class="container-fluid bg-light" id="profilTitle">
    <div class="row">
        <div class="col-12 col-md-3 "><img src="{{asset('img/'.$profil->tanar_id . '.jpg')}}" alt="Profilkep" class="img-fluid">
        </div>
        <div class="col-12 col-md-9">
            <div>
                Név: {{$profil->nev}} <br>
                Magamról: <br>
                {{$profil->leiras}} <br>
                Oktatás helye: <br>
                Irányítószám: {{$profil->irsz}} <br>
                Település: {{$profil->telepules}} <br>
                Cím: {{$profil->cim}} <br>
                E-mail: {{$profil->email}} <br>
                Telefonszám: +36{{$profil->telefonszam}} <br>
                Óradíj: {{$profil->oradij}}
            </div>
        </div>
    
</div>
</div>











@endsection