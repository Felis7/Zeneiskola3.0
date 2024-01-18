@extends("layouts.app")
@section("title","Hangszerpiac")
@section("content")

<div class="container">
  <div class="row">
    <div class="col-12 col-xl-3">
        <div class = "bg-white p-4 rounded">

          <form class = "text-success" method="POST">
            @csrf
            @auth
              <div class = "text-center">
              <a href="{{route('hangszerfeltoltes')}}" class="btn btn-success mb-3 ">Hangszerfeltöltés  <i class="bi bi-upload"></i></a>
            </div>
            @endauth
            
              

            <h1 class="text-center text-success hangszerpiacBetutipus">Keresés</h1>

            <label for="rendezes" class="form-label mt-3">Rendezés:</label>
            <select name="rendezes" id="rendezes" class="form-select">
              <option value="0" selected>--Válassz--</option>
              <option value="1">Név szerint</option>
              <option value="2">Ár szerint növekvő</option>
              <option value="3">Ár szerint csökkenő</option>
            </select>
  
            <label for="nevInput" class= "form-label mt-3">Hangszer neve:</label>
            <input type="text" name="nevInput" id="nevInput" class= "form-control">
            
            <label for="arInput" class= "form-label mt-3">Ár:</label>
            <input type="range" name="arInput" id="arInput" class="form-range" min="{{$min}}" max="{{$max}}" step="100" value = "{{$max}}">
            <p>
              Maximum ár: <span id="kiirtAr">{{$max}}</span>Ft
            </p>
  
            <label for="telepulesInput" class = "form-label mt-3">Település:</label>
            <select class = "form-select text-success" name="telepulesInput" id="telepulesInput">
              @foreach ($telepules as $telepulesek )
                  <option value="{{$telepulesek->telepules}}">{{$telepulesek->telepules}}</option>
              @endforeach
            </select>
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                      <button type="submit" class="btn btn-success form-control mt-3">Keresés</button>
                </div>
                <div class="col-12">
                      <a href="{{route("hangszerpiac")}}" class="btn btn-danger w-100 mt-3">Törlés</a>
                </div>
              </div>
            </div>
            
            
            
          </form>
          

        </div>
    </div>
    <div class="col-12 col-xl-9">
      <div class="container">
        <div class="row">
          
            @foreach ( $adat as $hangszer )
            
            <div class="card mt-3 container-fluid col-12 col-md-6 col-xl-3" >
              <img class="card-img-top" src="{{asset("img/hangszer/".$hangszer->kep)}}" alt="hangszerkep">
              <div class="card-footer">
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
                      
            @endforeach
           
            
                   
        </div>                
        </div>
    </div>
  </div>
<div class="d-flex justify-content-end">
                <div>
                  {{$adat->links()}}
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
<style>
  .page-link {
      color: #28a745; /* Bootstrap's .text-success color */
  }
  </style>
@endsection