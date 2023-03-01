<x-layout>
  <div class="container my-5">
      <div class="row justify-content-center">   
        <div class="col-12 ">
          <div class="card">
              <img src="{{$razza['foto']}}" class="card-img-top" alt="...">
              <div class="card-body">
              <h5 class="card-title">{{$razza['razza']}}</h5>
              <p>{{$razza['classe']}}</p>
              <a href="{{route('razze')}}" class="btn btn-primary">Torna indietro</a>
              @endif
          </div>
        </div>
        </div> 
        </div>
  </div>
