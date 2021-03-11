@extends('layouts.app')

@section('content')

   <section class="contact">
        <div class="title-content">
                <h2>CONTATTI</h2>
            </div>

        <div class="content">
            <p>Se desideri contattarci per eventuali informazioni riguardanti i servizi da noi offerti, puoi farlo inviando semplicemente una email al nostro portale e in breve tempo risponderemo alla richiesta. (tempo di risposta, solitamente entro 30 min.)</p>
        </div>
        <div class="container-about">
            <div class="contactInfo">

                <div class="box">
                    <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                    <div class="text">
                        <h3>Indirizzo</h3>
                        <p>Via Universale, 19 <br> Pistoia, Cologno Monzese, Milano , Sapri <br> ITALIA </p>
                    </div>
                </div>

                <div class="box">
                    <div class="icon"><i class="fas fa-phone"></i></div>
                    <div class="text">
                        <h3>Telefono</h3>
                        <p> 0567-456 45 67 </p>
                    </div>
                </div>

                <div class="box">
                    <div class="icon"><i class="far fa-envelope"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p> fast&food@gmail.com </p>
                    </div>
                </div>

            </div>

            <div class="contactForm">
                <form>
                    <h2>Invia un Messaggio</h2>
                    <div class="inputBox">
                        <input type="text" name="" required="rquired">
                        <span>Nome & Cognome</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="" required="rquired">
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <textarea required="required" ></textarea>
                        <span>Scrivi qui...</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" value="Invia">
                    </div>
                </form>
            </div>

        </div>
    </section>


@endsection
