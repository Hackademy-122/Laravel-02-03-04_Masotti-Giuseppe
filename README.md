## Form
- Per funzionare lato backend ha bisogno di 2 elementi fondamentali
- Method: accetta GET o POST, POST è il tipo di richiesta che mi serve se voglio inviare dati al mio backend
- Action: la rotta che deve scattare al submit

Per utilizzare i dati del form all'interno di una funzione, dobbiamo catturare la richiesta http, come? Inserendo all'interno delle tonde
di una funzione come parametro un oggetto di classe Request (Request $request)

Ricordati di inserire anche il @csrf token!
è un sistema di sicurezza per bloccare csrf attack!

Inoltre ogni input deve avere un attributa name, serve per far riconoscere gli input a laravel. Senza name i dati non vengono passati al mio backend

Per accedere agli input all'interno della request, facciamo cosi:
$request->input('nomeInput') cioè vai a prendere all'interno della request l'input che ha nome nomeInput

## Mail
Per inviare una mail in laravel, ci serve un Mailable.
Per creare un mailable: php artisan make:mail NomeMail
Configura il mailable con i dati che ti servono (oggetto, mittente, e contenuto)
NB. Nella vista del contenuto NON PUOI fare riferemento a link esterni come al tuo css
per inviare una mail:
Mail::to($email)->send(new NomeMailable);

Per portare nella mail dei dati, sfrutto il fatto che il Mailable è una classe PHP, parametrizzando il costruttore.

# DATABASE
- Step 1. Collegare un database 
- Step 2
    Per strutturare il mio db in laravel, si utilizzano le migrazioni
    NB. Le migrazioni non applicano cambiamenti in tempo reale al mio db, ma le devo LANCIARE
    **php artisan migrate** lancia le migrazioni. Tecnicamente esegue la funzione up di tutte le migrazioni

    **php artisan migrate:rollback** torna indietro delle ultime migrazioni fatte. Tecnicamente lancia la funzione down di tutte le migrazioni

    per creare una nuova migrazione: **php artisan make:migration nome_migrazione**
    NB. il nome di una migrazione è importantissimo
- Step 3.
  Per comunicare con il database Laravel usa Eloquent. Un sistema che tramite dei "modelli" è in grado di interagire con il database
  Per creare un modello **php artisan make:model**
  All'interno del modellop devo spiegare a Laravel come è fatto il mio oggetto.
  Metto un array $fillable, con all'interno tutti i campi che io voglio poter compilare
  NB. Se un campo non è nel fillable, non potrò scriverci all'interno nel database
- Step 4.
  Per creare un articolo, utilizziamo il Mass Assignment:
  $article = Article::create([
    "nome campo del fillable" => $request->campo form,
    ecc. ecc
  ])
- Step 5.
  Ora che i nostri articoli sono nel database, possiamo tranquillamente prenderceli quando ne abbiamo bisogno.
  Per esempio, per prenderli tutti, possiamo fare cosi:
  $articles = Article::all();

  Ora non ci resta che passarli nella vista, possiamo utilizzare la compact()

  return view('nome.vista', compact('articles'))


## Salvare dei File nel progetto (es. Immagini)

1. Il form deve avere: enctype="multipart/form-data"
2. NB. Il file in se non viene salvato nel DB, ma nel DB salviamo solamente il suo percorso.
3. Ora devo struttura il mio DB aggiungendo una colonna:
    php artisan make:migration add_img_column_to_articles_table
4. Devo aggiornare il mio modello
5. Aggiorno la funzione Article::create
6. php artisan storage:link
7. Nelle mie viste, mostro l'immagine: Storage::url($article->img)

**Consistenza Dei Dati**

## Validazione
1. Creo una request personalizzata
2. Inserisco true nella funziona authorize()
3. Inserisco le regole nella funzione rules()
4. se voglio personalizzare i messaggi di errore, creo una funzione messages() in cui imposto i messaggi di errore
5. per visualizzare gli errori, uso gli snippet che trovo nella documentazione (laravel -> validation -> displaying the validation errors)