<x-layout>

  <div class="container ">
    <div class="row ">
        <div class="col-12 ">
            <h1 ></h1>
        </div>
    </div>
</div>

    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-6">
          @if($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach($errors->all() as $error)
              <li>{{$error}}</li>
              @endforeach
            </ul>
          </div>
          @endif
                <form method="post" action="{{route('article_store')}}" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                      <label class="form-label">Nome destinazione</label>
                      <input name="name" type="text" class="form-control" value="{{old('name')}}" aria-describedby="emailHelp">
                    </div>
  
                    <div class="mb-3">
                      <label class="form-label">Prezzo</label>
                      <input name="price" type="text" class="form-control" value="{{old('price')}}"  aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                      <label class="form-label">immagine prodotto</label>
                      <input name="img" type="file" class="form-control" value="{{old('img')}}"  aria-describedby="emailHelp">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">+</button>
                  </form>
              </div>
          </div>
        </div>
  </x-layout>