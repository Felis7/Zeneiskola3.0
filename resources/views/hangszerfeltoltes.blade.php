@extends("layouts.app")
@section("title","Hangszerpiac")
@section("content")

<div class="container">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <form method = "POST" class="text-center bg-light p-5 text-success rounded" enctype="multipart/form-data">
        @csrf
        @error("hanszernevInput")
          hangszernevInput
        @enderror

        @error("helyInput")
          helyInput
        @enderror

        @error("arInput")
          arInput
        @enderror

        @error("telszamInput")
          telszamInput
        @enderror

        @error("emailInput")
          emailInput
        @enderror

        @error("kepInput")
          kepInput
        @enderror

        <h1>Hangszerfeltöltés</h1>

        <label for="hangszernevInput" class="form-label mt-3">Hangszer neve:</label>
        <input type="text" name="hangszernevInput" id="hangszernevInput" class= "form-control">

        <label for="helyInput" class="form-label mt-3">Település:</label>
        <input class = "form-control text-success" name="helyInput" id="helyInput">
          
        

        <label for="arInput" class="form-label mt-3">Ára:</label>
        <div class="input-group">       
          <input type="number" name="arInput" id="arInput" class="form-control" placeholder="pl: 1000">
          <span class="input-group-text">Ft</span>
        </div>

        <label for="leirasInput" class="form-label mt-3">Leírás:</label>
        <textarea name="leirasInput" id="leirasInput" class= "form-control"></textarea>

        <label for="telszamInput" class="form-label mt-3">Telefonszám:</label>
        <div class="input-group">
          <span class="input-group-text">+36</span>       
          <input type="number" name="telszamInput" id="telszamInput" class="form-control" placeholder="pl.: 301234567">
        </div>

        <label for="emailInput" class="form-label mt-3">E-mail cím:</label>
        <input type="text" name="emailInput" id="emailInput" class= "form-control">

        <label for="kepInput" class="form-label mt-3">Kép a hangszerről:</label>
        <input type="file" name="kepInput" id="kepInput" class= "form-control">

        <div class="container mt-5">
          <div class="row">
            <div class="col-6">
              <button class="btn btn-success">Mentés</button>
            </div>
            <div class="col-6">
              <a href="{{route('hangszerpiac')}}" class="btn btn-danger">Mégsem</a>
            </div>

          </div>
        </div>
        


      </form>
    </div>
    <div class="col-md-4"></div>
  </div>
</div>

@endsection