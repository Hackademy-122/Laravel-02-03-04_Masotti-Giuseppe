<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-7">
                <div class="row ">
                    <div class="ggcont ">
                        <h2 class="fw-bold mtcon ">Contatti</h2>
                    </div>
                <div class="col-12 col-md-6 ggcont1">
                    <p class="fs-5">Per qualsiasi richiesta di collaborazione, scrivete una email a <a href="">info@Blogviaggi.it</a>, oppure compilate la scheda qui di seguito.</p>
                    <form method="POST" action="{{route('contactSubmit')}}">
                        @csrf
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Email </label>
                          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputName" class="form-label">Nome e Cognome</label>
                          <input type="text" name="name" class="form-control" id="exampleInputName">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Messaggio </label>
                            <input type="text" name="text" class="form-control p-5" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                </div>
            </div>
        </div>
            <div class="col-12 col-md-3 mtimg">
                <div class="ggcont3">
                    <div class="mtcon1">
                        <h2 class="ltit fw-bold">Destinazioni</h2>
                    </div>
                    <div class="row ggcont2">
                        <div class="col-12 col-md-8 mt-3">
                            <img src="/img/Africa-image.webp" alt="" class="img-fluid" alt=""  class="img-fluid">
                        </div>
                        <div class="col-12 col-md-8   mt-3">
                            <img src="/img/Medio-Oriente-foto.webp" alt="" class="img-fluid">
                        </div>
                        <div class="col-12 col-md-8   mt-3">
                            <img src="/img/Sud-America.webp" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-layout>