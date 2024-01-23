<x-layout>

    <div class="container mt-5">
        <div class="row justify-content-center">
                <div class="col-12 col-md-6 d-flex justify-content-center mb-5">
                    <div class="card p-5 shadow" style="width: 18rem;">
                      <img src="{{$element['img']}}" alt="{{$element['name']}}">
                        <div class="card-body">
                        <h5 class="card-title">{{$element['name']}}</h5>
                        <a href="{{route('welcome', ['id'=> $element['id']])}}" class="btn btn-primary">torna indietro</a>
                        </div>
                    </div>
                </div>
        </div>
    </div>
  
</x-layout>
