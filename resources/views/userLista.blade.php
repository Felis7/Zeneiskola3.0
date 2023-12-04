@extends('layouts.app')

@section('content')
@section('title','Felhasználó lista')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-xl-3">
            <div class="p-3 bg-light border rounded">
                <form method="GET">
                <h1 class="text-center text-success">Szűrés</h1>
                <label for="hangszer" class="col-md-4 col-form-label text-md-end"></label>
                <p>Szűrés név szerint:</p>
                <input type="text" class="form-control" name="nev" value="{{request('nev','')}}">
                <p>Szűrés email szerint:</p>
                <input type="text" class="form-control" name="email" value="{{request('email','')}}">
                <button type="submit" class="btn btn-success form-control mt-3 ">Szűrés</button>
                <a href="{{route("kereso")}}" class="btn btn-danger w-100 mt-3">Szűrők törlése</a>
            </form>
            </div>
        </div>
        <div class="col-12 col-xl-9">
            <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Név</th>
                    <th>Email</th>
                    <th>Admin</th>
                    <th>Műveletek</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                <th>{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td> <input type="checkbox" name="" id="" @if ($user->admin_vertificated == '1')
                    checked
                @endif> </td>
                <td>
                    <button class="btn btn-danger deleteButton" data-userid="{{ $user->id }}">Törlés</button>
                </td>
            </tr>
                @endforeach
            </tbody>
            </table>
            {{$users->links()}}
    </div>
    </div>
</div>


<script>
   document.querySelectorAll('.deleteButton').forEach(function(button) {
    button.addEventListener('click', function() {
        var userId = this.getAttribute('data-userid');

        fetch('./delete-user', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ userId: userId })
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            console.log(data.message);
        })
        .catch(error => {
            console.error('Hiba:', error);
        });
    });
});
</script>
@endsection