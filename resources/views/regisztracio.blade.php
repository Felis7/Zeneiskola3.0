@extends('layouts.app')
@section('title', "Regisztráció")

@section('content')
<div class="container">
  <div class="row">
    <div class="col-4"></div>
    <div class="col-4">
      <div class="bg-light p-5 rounded-2">
        <form method="POST">
          <label for="nevInput" class="form-label">Név:</label>
          <input type="text" class="form-control" id="nevInput" name="nevInput">

          <label for="kepInput" class="form-label">Profilkép:</label>
          <input type="file" class="form-control" id="kepInput" name="kepInput">

          <label for="leirasInput" class="form-label mt-3">Magadról:</label>
          <textarea name="leirasInput" id="leirasInput" cols="30" rows="3" class="form-control"></textarea>

          <label for="irszamInput" class="form-label mt-3">Irányítószám:</label>
          <input type="number" name="irszamInput" id="irszamInput" class="form-control">

          <label for="telepulesInput" class="form-label mt-3">Település:</label>
          <input type="text" name="telepulesInput" id="telepulesInput" class="form-control">

          <label for="cimInput" class="form-label mt-3">Cím:</label>
          <input type="text" name="cimInput" id="cimInput" class="form-control">

          <label for="telszamInput" class="form-label mt-3">Telefonszám:</label>
          <input type="tel" name="telszamInput" id="telszamInput" class="form-control">

          <label for="emailInput" class="form-label mt-3">E-mail:</label>
          <input type="text" name="emailInput" id="emailInput" class="form-control">

          <label for="oradijInput" class="form-label mt-3">Óradíj:</label>
          <input type="number" name="oradijInput" id="oradijInput" class="form-control">

          <div class="text-center">
            <button type="submit" class="btn btn-warning mt-5">Regisztrálás</button>
          </div>
        </form>
      </div>
    </div>
    <div class="col-4"></div>
  </div>
</div>
  
@endsection