@extends('layouts.app')

@section('content')
<div class="container-fluid bg-light" id="profilTitle">
    <div class="row">
        <div class="col-12 col-md-3 "><img src="{{asset('img/'.$profil->tanar_id . '.jpg')}}" alt="Profilkep" class="img-fluid">
        </div>
        <div class="col-12 col-md-9">
                <table class="table table-success table-striped mt-3">
                <tr>
                    <th>
                        Név:
                    </th>
                    <td>{{$profil->nev}}</td>
                </tr>
                <tr>
                    <th> 
                        Magamról:
                    </th>
                    <td> {{$profil->leiras}}</td>
                </tr>
                <tr> 
                    <th>
                        Oktatás helye:
                    </th>
                   <td> {{$profil->irsz}} {{$profil->telepules}} {{$profil->cim}}</td></tr>
                <tr>
                    <th>
                        E-mail:
                    </th>
                    <td> {{$profil->email}}</td>
                </tr>
                <tr>
                    <th>
                        Telefonszám:
                    </th>
                    <td> +36{{$profil->telefonszam}}</td>
                </tr>
                <tr>
                    <th>
                        Óradíj:
                    </th>
                    <td> {{$profil->oradij}}</td>
                </tr>
                </table>
        </div>
    </div>
</div>











@endsection