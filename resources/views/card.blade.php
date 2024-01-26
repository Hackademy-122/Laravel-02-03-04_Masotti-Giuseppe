<x-layout>
    
    
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            @if(session('message'))
            <div class="alert alert-success">
             {{session('message')}}
            </div>
             @endif 
            
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row">
        @foreach($articles as $article)
            <div class="col-3 my-3">
                <div class="card" >
                    <img src="{{Storage::url($article->img)}}" class=" card-img-custom " alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$article->name}}</h5>
                      <p class="card-text">{{$article->price}}</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
            </div>
        @endforeach
    </div>
</div>

</x-layout>