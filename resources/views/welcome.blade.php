<x-layout>

    <header class="container marghed">
        <h1 class="text-center ">BLOG VIAGGI<i class="fa-solid fa-plane-departure"></i></h1>
        <div class="row justify-content-around h-100">
            <div class="col-12 col-md-3 mt-5 imgheader">
                <img src="/img/header.webp" alt="" class="img-fluid ">
            </div>
            <div class="col-12 col-md-4 mt-4 text-dark  fw-bold par">

                 {{-- codice per lasciare un messaggio all'utente dopo l'invio o no della mail--}}
     
    {{-- successo --}}
    @if(session('error'))
    <div class="alert alert-success">
        {{session('error')}}
    </div>
    @endif 

    {{-- errore --}}
    @if(session('message'))
    <div class="alert alert-danger">
        {{session('message')}}
    </div>
    @endif 

                
                <p>Benvenuti nel blog di viaggi di Marco e Felicity (o travel blog), una guida virtuale che vi accompagnerà nel mondo dei viaggi e delle avventure in giro per il mondo! Qui troverete una vasta gamma di consigli di viaggio per le destinazioni più affascinanti d’Italia e del mondo.Sia che siate alla ricerca di un’esperienza esotica in una terra lontana o desideriate scoprire i tesori nascosti delle città italiane, siamo qui per fornirvi ispirazione e preziosi suggerimenti.</p>
            </div>
        </div>
    </header>

    <main>

        <div class="container ">
            <h2 class="mt-5 text-center fs-1 destinazioni">DESTINAZIONI</h2>
            <div class="row  mt-5">
                <div class="col-12 col-md-3">
                    <img src="/img/Africa-image.webp" alt="" class="img-fluid">
                </div>
                <div class="col-12 col-md-3">
                    <img src="/img/Medio-Oriente-foto.webp" alt="" class="img-fluid">
                </div>
                <div class="col-12 col-md-3">
                    <img src="/img/Oceania.webp" alt="" class="img-fluid">
                </div>
                <div class="col-12 col-md-3">
                    <img src="/img/Sud-America.webp" alt="" class="img-fluid">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row mt-5">
                <div class="col-12 col-md-3">
                    <img src="/img/Centro-America.webp" alt="" class="img-fluid">
                </div>
                <div class="col-12 col-md-3">
                    <img src="/img/Asia.webp" alt="" class="img-fluid">
                </div>
                <div class="col-12 col-md-3">
                    <img src="/img/Europa-2.webp" alt="" class="img-fluid">
                </div>
                <div class="col-12 col-md-3">
                    <img src="/img/Usa-e-Canada.webp" alt="" class="img-fluid">
                </div>
            </div>
        </div>



        <div class="container mt-5">
            <h2 class="mt-5 text-center fs-1 destinazioni">IDEE PER IL WEEKEND</h2>
            <div class="row justify-content-center mt-5">
                @foreach ($elements as $item)
                    <div class="col-12 col-md-3 d-flex justify-content-center mb-5">
                        <div class="card p-5 shadow" style="width: 18rem;">
                          <img src="{{$item['img']}}" alt="">
                            <div class="card-body">
                            <h5 class="card-title fw-bold fs-2 mt-3 text-center">{{$item['name']}}</h5>
                            <p class="text-center fw-bold ">{{$item['p']}}</p>
                            <a href="{{route('schede', ['id'=> $item['id']])}}" class="btn btn-primary mt-3 ml">ITINERARIO</a>
                            </div>
                        </div>
                    </div>
                 @endforeach
            </div>
        </div>








    </main>







</x-layout>
