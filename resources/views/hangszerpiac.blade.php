@extends("layouts.app")
@section("title","Hangszerpiac")
@section("content")

<div class="container">
  <div class="row">
    <div class="col-3">
        <div class = "bg-white p-4 rounded">

          <form method="POST">

            <h1 class="text-center text-success hangszerpiacBetutipus">Keresés</h1>
  
            <label for="nevInput" class= "form-label mt-3">Hangszer neve:</label>
            <input type="text" name="nevInput" id="nevInput" class= "form-control">
            
            <label for="minArInput" class= "form-label mt-3">Minimum ár:</label>
            <input type="number" name="minArInput" id="minArInput" class="form-control">

            <label for="maxArInput" class= "form-label mt-3">Maximum ár:</label>
            <input type="number" name="maxArInput" id="maxArInput" class="form-control">
  
            <label for="telepulesInput" class = "form-label mt-3">Település:</label>
            <input type="text" name="telepulesInput" id="telepulesInput" class="form-control">
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
            <div class="card col-3" style="width:200px;">
              <img class="card-img-top" height= "200px" width="200px" src="{{asset("img/verseny-zongora.jpg")}}" alt="hangszerkep">
              <div class="card-body">
                <h4 class="card-title text-center">Zongora</h4>
    
                <div class="card-text text-center">
                  <p>
                    Település
                    
                  </p>
                  <p>
                    Ár
                  </p>
                  <a href="#" class= "btn btn-success">Bővebb információ>></a>
                  
                </div>
              </div>
            </div>
            <div class="card col-3" style="width:200px;">
              <img class="card-img-top" height= "200px" width="200px" src="{{asset("img/verseny-zongora.jpg")}}" alt="hangszerkep">
              <div class="card-body">
                <h4 class="card-title text-center">Zongora</h4>
    
                <div class="card-text text-center">
                  <p>
                    Település
                    
                  </p>
                  <p>
                    Ár
                  </p>
                  <a href="#" class= "btn btn-success">Bővebb információ>></a>
                  
                </div>
              </div>
            </div>
            <div class="card col-3" style="width:200px;">
              <img class="card-img-top" height= "200px" width="200px" src="{{asset("img/verseny-zongora.jpg")}}" alt="hangszerkep">
              <div class="card-body">
                <h4 class="card-title text-center">Zongora</h4>
    
                <div class="card-text text-center">
                  <p>
                    Település
                    
                  </p>
                  <p>
                    Ár
                  </p>
                  <a href="#" class= "btn btn-success">Bővebb információ>></a>
                  
                </div>
              </div>
            </div>
            <div class="card col-3" style="width:200px;">
              <img class="card-img-top" height= "200px" width="200px" src="{{asset("img/verseny-zongora.jpg")}}" alt="hangszerkep">
              <div class="card-body">
                <h4 class="card-title text-center">Zongora</h4>
    
                <div class="card-text text-center">
                  <p>
                    Település
                    
                  </p>
                  <p>
                    Ár
                  </p>
                  <a href="#" class= "btn btn-success">Bővebb információ>></a>
                  
                </div>
              </div>
            </div>
            <div class="card col-3" style="width:200px;">
              <img class="card-img-top" height= "200px" width="200px" src="{{asset("img/verseny-zongora.jpg")}}" alt="hangszerkep">
              <div class="card-body">
                <h4 class="card-title text-center">Zongora</h4>
    
                <div class="card-text text-center">
                  <p>
                    Település
                    
                  </p>
                  <p>
                    Ár
                  </p>
                  <a href="#" class= "btn btn-success">Bővebb információ>></a>
                  
                </div>
              </div>
            </div>
            <div class="card col-3" style="width:200px;">
              <img class="card-img-top" height= "200px" width="200px" src="{{asset("img/verseny-zongora.jpg")}}" alt="hangszerkep">
              <div class="card-body">
                <h4 class="card-title text-center">Zongora</h4>
    
                <div class="card-text text-center">
                  <p>
                    Település
                    
                  </p>
                  <p>
                    Ár
                  </p>
                  <a href="#" class= "btn btn-success">Bővebb információ>></a>
                  
                </div>
              </div>
            </div>
            <div class="card col-3" style="width:200px;">
              <img class="card-img-top" height= "200px" width="200px" src="{{asset("img/verseny-zongora.jpg")}}" alt="hangszerkep">
              <div class="card-body">
                <h4 class="card-title text-center">Zongora</h4>
    
                <div class="card-text text-center">
                  <p>
                    Település
                    
                  </p>
                  <p>
                    Ár
                  </p>
                  <a href="#" class= "btn btn-success">Bővebb információ>></a>
                  
                </div>
              </div>
            </div>
            <div class="card col-3" style="width:200px;">
              <img class="card-img-top" height= "200px" width="200px" src="{{asset("img/verseny-zongora.jpg")}}" alt="hangszerkep">
              <div class="card-body">
                <h4 class="card-title text-center">Zongora</h4>
    
                <div class="card-text text-center">
                  <p>
                    Település
                    
                  </p>
                  <p>
                    Ár
                  </p>
                  <a href="#" class= "btn btn-success">Bővebb információ>></a>
                  
                </div>
              </div>
            </div>
            <div class="card col-3" style="width:200px;">
              <img class="card-img-top" height= "200px" width="200px" src="{{asset("img/verseny-zongora.jpg")}}" alt="hangszerkep">
              <div class="card-body">
                <h4 class="card-title text-center">Zongora</h4>
    
                <div class="card-text text-center">
                  <p>
                    Település
                    
                  </p>
                  <p>
                    Ár
                  </p>
                  <a href="#" class= "btn btn-success">Bővebb információ>></a>
                  
                </div>
              </div>
            </div>
            <div class="card col-3" style="width:200px;">
              <img class="card-img-top" height= "200px" width="200px" src="{{asset("img/verseny-zongora.jpg")}}" alt="hangszerkep">
              <div class="card-body">
                <h4 class="card-title text-center">Zongora</h4>
    
                <div class="card-text text-center">
                  <p>
                    Település
                    
                  </p>
                  <p>
                    Ár
                  </p>
                  <a href="#" class= "btn btn-success">Bővebb információ>></a>
                  
                </div>
              </div>
            </div>


          </div>
        </div>
    </div>
  </div>
</div>
@endsection