@extends('layouts.app')

@section('content')
@section('title','Belépés')
    

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Üzenet') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Sikeresen beléptél!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
