@extends("layouts.app")
@section("title","Hangszerpiac")
@section("content")

<div class="container">
  <div class="row">
    <div class="col-3">
        <div class = "bg-white p-4 rounded">

          <form class = "text-success" method="POST">

            <h1 class="text-center text-success hangszerpiacBetutipus">Keresés</h1>

            <label for="rendezes" class="form-label mt-3">Rendezés:</label>
            <select name="rendezes" id="rendezes" class="form-select">
              <option value="0" disabled selected>--Válassz--</option>
              <option value="1">Név szerint</option>
              <option value="2">Ár szerint növekvő</option>
              <option value="3">Ár szerint csökkenő</option>
            </select>
  
            <label for="nevInput" class= "form-label mt-3">Hangszer neve:</label>
            <input type="text" name="nevInput" id="nevInput" class= "form-control">
            
            <label for="arInput" class= "form-label mt-3">Ár:</label>
            <input type="range" name="arInput" id="arInput" class="form-range" min="3000" max="6000000" step="100" value="6000000">
            <p>
              Maximum ár: <span id="kiirtAr">6000000</span>Ft
            </p>
  
            <label for="telepulesInput" class = "form-label mt-3">Település:</label>
            <select class = "form-select text-success" name="telepulesInput" id="telepulesInput">
              @foreach ($telepules as $telepulesek )
                  <option value="{{$telepulesek->telepules}}">{{$telepulesek->telepules}}</option>
              @endforeach
            </select>
            <button type="submit" class="btn btn-success mt-3">Keresés</button>
            
          </form>
          <form method="POST">
            <button type="submit" class="btn btn-danger mt-3">Törlés</button>

          </form>

        </div>
    </div>
    <div class="col-9">
      <div class="container">
        <div class="row">
          @foreach ( $adat as $hangszer )
            <div class= "col-3">
            <div class="card " style="width:200px;">
              <img class="card-img-top" height= "200px" width="200px" src="{{$hangszer->kep}}" alt="hangszerkep">
              <div class="card-body">
                <h4 class="card-title text-center">{{$hangszer->nev}}</h4>
    
                <div class="card-text text-center">
                  <p>
                    Település: {{$hangszer->hely}}
                    
                  </p>
                  <p>
                    Ár: {{$hangszer->ar}}Ft
                  </p>
                  <a href="./informacio/{{$hangszer->id}}" class= "btn btn-success">Bővebb információ>></a>
                  
                </div>
              </div>
            </div>              
          </div>            
            @endforeach       
        </div>                
        </div>
    </div>
  </div>
</div>
<script>
  const ar = document.getElementById("arInput");
  const iras = document.getElementById("kiirtAr");
  ar.addEventListener("input", function(){
    iras.textContent= ar.value;
  });
</script>
@endsection