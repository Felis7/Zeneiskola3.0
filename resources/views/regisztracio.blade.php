@extends('layouts.app')
@section('title', "Regisztráció")

@section('content')



<div class="container-fluid">
  <div class="row">
    <div class="col-12 col-md-4">
      <div class="bg-light p-3 rounded">
        <form method="POST">
            <label for="kepInput" class="form-label">Profilkép:</label>
            <input type="image" class="form-control" id="kepInput" name="kepInput" value="{{old('kepInput')}}">
            @error('kepInput')
            <div class="alert alert-danger">
              {{$message}}
            </div>            
            @enderror
                
            <button type="submit" class="btn btn-primary mt-5">Csere</button>
            <button type="submit" class="btn btn-danger mt-5">Törlés</button>
        </form>     
      </div>
    </div>
    <div class="col-12 col-md-4">
      <div class="bg-light p-3 rounded">
        <form method="POST">
          <label for="nevInput" class="form-label">Név:</label>
          <input type="text" class="form-control" id="nevInput" name="nevInput" placeholder="pl.:Minta Mária">

          @error('nevInput')
            <div class="alert alert-danger">
              {{$message}}
            </div>            
          @enderror

          <label for="leirasInput" class="form-label mt-3">Magadról:</label>        
          <textarea name="leirasInput" id="leirasInput" cols="30" rows="3" class="form-control"></textarea>

          @error('leirasInput')
          <div class="alert alert-danger">
            {{$message}}
          </div>            
          @enderror        

          <label for="irszamInput" class="form-label mt-3">Irányítószám:</label>        
          <input type="number" name="irszamInput" id="irszamInput" class="form-control" placeholder="pl.:1234">
          
          @error('irszamInput')
          <div class="alert alert-danger">
            {{$message}}
          </div>            
          @enderror

          <label for="telepulesInput" class="form-label mt-3">Település:</label>        
          <input type="text" name="telepulesInput" id="telepulesInput" class="form-control" placeholder="pl.:Budapest">
          
          @error('telepulesInput')
          <div class="alert alert-danger">
            {{$message}}
          </div>            
          @enderror

          <label for="cimInput" class="form-label mt-3">Cím:</label>        
          <input type="text" name="cimInput" id="cimInput" class="form-control" placeholder="pl.:Sima utca 1.">
          
          @error('cimInput')
          <div class="alert alert-danger">
            {{$message}}
          </div>            
          @enderror

          <label for="telszamInput" class="form-label mt-3">Telefonszám:</label>        
          <input type="tel" name="telszamInput" id="telszamInput" class="form-control" placeholder="pl.: 06/30 123-4567">

          @error('telefonszamInput')
          <div class="alert alert-danger">
            {{$message}}
          </div>            
          @enderror
       

          <label for="oradijInput" class="form-label mt-3">Óradíj:</label>        
          <input type="number" name="oradijInput" id="oradijInput" class="form-control" placeholder="1000Ft">
          
          @error('oradijInput')
          <div class="alert alert-danger">
            {{$message}}
          </div>            
          @enderror

          <button type="submit" class="btn btn-warning mt-5 mb-3">Mentés</button>                
        </form>        
      </div>
    </div>
    <div class="col-12 col-md-4">
      <div class="bg-light p-3 rounded">
        <form method="POST">
          <label for="emailInput" class="form-label mt-3">E-mail:</label>        
          <input type="email" name="emailInput" id="emailInput" class="form-control" placeholder="mintamaria@gmail.com">
          
          @error('emailInput')
          <div class="alert alert-danger">
            {{$message}}
          </div>            
          @enderror

          <label for="ujJelszoInput"class="form-label mt-3">Új jelszó:</label>        
          <input type="password" name="ujJelszoInput" id="ujJelszoInput" class="form-control">        

          <label for="ujJelszoIsmInput"class="form-label mt-3">Új jelszó megismétlése:</label>        
          <input type="password" name="ujJelszoIsmInput" id="ujJelszoIsmInput" class="form-control">        

          <label for="jelenlegiJelszoInput"class="form-label mt-3">Jelenlegi jelszó:</label>        
          <input type="password" name="jelenlegiJelszoInput" id="jelenlegiJelszoInput" class="form-control">        

          <button type="submit" class="btn btn-warning mt-5">Mentés</button>        
        </form>          
      </div>
    </div>
  </div>
</div>



  
@endsection