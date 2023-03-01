<x-layout>
    <div class= "container-fluid ">

      <h1>Razze</h1>
      <div class="row justify-content-center">
          @foreach ($razza as $razze)
          <div class="card dimensionicard col-4">
            <h5 class="card-title">{{$razze['razza']}}</h5>
            <img src="{{$razze['foto']}}" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="{{route('razze-dettagli',['id'=>$razze['id']])}}"class="btn btn-primary">Clicca</a>
            </div>
          </div>
          @endforeach

      </div>
    </div>


</x-layout>