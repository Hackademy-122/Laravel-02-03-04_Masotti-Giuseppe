<?php

namespace App\Http\Controllers;

use Throwable;
use App\Models\Article;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Symfony\Component\Mime\Email;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function welcome() {
        $elements = [
            ['id'=>'1','name'=>'Basilicata ','img'=>'/img1/bas.jpeg' , 'p'=>"Scopri l'itinerario adatto per te. Che aspetti..."],
            ['id'=>'2','name'=>'Puglia','img'=>'/img1/pug.jpeg', 'p'=>"Scopri l'itinerario adatto per te. Che aspetti..."],
            ['id'=>'3','name'=>'Sardegna','img'=>'/img1/sard.jpeg', 'p'=>"Scopri l'itinerario adatto per te. Che aspetti..."],
            ['id'=>'4','name'=>'Toscana','img'=>'/img1/tosc.jpeg', 'p'=>"Scopri l'itinerario adatto per te. Che aspetti..."],
           ];
        return view('welcome', ['elements'=>$elements]);
    }

    public function schede($id) {
        $elements = [
                     ['id'=>'1','name'=>'Basilicata ','img'=>'/img1/bas.jpeg'],
                     ['id'=>'2','name'=>'Puglia','img'=>'/img1/pug.jpeg'],
                     ['id'=>'3','name'=>'Sardegna','img'=>'/img1/sard.jpeg'],
                     ['id'=>'4','name'=>'Toscana','img'=>'/img1/tosc.jpeg'],
                    ];
    
        foreach($elements as $element ){
            if($id == $element['id']){
                return view ('schede',['element'=> $element]);
            }
        }
    }

    public function card() {
        $articles = Article::all();
        return view('card',compact('articles'));
    }
    
    
    public function assicurazioni() {
        return view('assicurazioni');
    }
    public function contatti() {
        return view('contatti');
    }

  public function contactSubmit(Request $request){
    // dd($request);
    $email = $request->input('email');
    $name = $request->input('name');
    $text = $request->input('text');
    // dd($email, $name, $text);
    try{ 
        Mail::to($email)->send(new ContactMail($email,$name,$text));
    } catch (Throwable $e) {
        return redirect(route('sendmail'))->with('error', "C'è stato un errore imprevisto. Riprova più tardi");
    
  }
  return redirect(route('sendmail'))->with('message','Email inviata con successo. ');
  
  }

  public function sendmail() {
    return view('sendmail');
}


}