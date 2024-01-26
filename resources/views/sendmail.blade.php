<x-layout>

    <header class="container marghed">
        <h1 class="text-center ">BLOG VIAGGI<i class="fa-solid fa-plane-departure"></i></h1>
               {{-- codice per lasciare un messaggio all'utente dopo l'invio o no della mail--}}
        <div class="d-flex -justify-content-center">
            {{-- successo --}}
            @if(session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
            @endif 

            {{-- errore --}}
            @if(session('error'))
            <div class="alert alert-danger">
                {{session('error')}}
            </div>
            @endif 
        </div> 
       
        <div class="row justify-content-around h-100">
           
        </div>
    </header>

    
</x-layout>