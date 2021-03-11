@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <a href="{{route('guests.index')}}">
        <button class='btn btn-dark'>Visualizza ristoranti</button>
    </a>
</div> --}}



    {{-- header-hero  --}}
        <header class="header">
             {{-- <div class="container  text-right">
                 <button class="btn btn-primary" data-toggle="modal" data-target="#cart">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="badge badge-light"></span>
                </button>
            </div> --}}

            <div class="hero">
                <img src="images/logo-2.png" alt="logo">
                <a href="{{route('guests.index')}}" class="hero-button pulsate">Visualizza Ristoranti</a>
            </div>

        </header>


        <!-- ABOUT US SECTION  -->
        <section id="about">
            <!-- TITLE -->
            <div>
                <h2 class="title-new">Consegna Fast</h2>
            </div>

        <div class="about-center">
             <!-- ARTICLES -->
            <article class="about">
                <div class="about-icon">
                    <i class="fas fa-cocktail"></i>
                </div>
                <div class="about-text">
                    <h2 class="about-subtitle">Drink</h2>
                    <p class="about-info">Frullati e Cocktail a casa tua! </p>
                </div>
            </article>

             <article class="about">
                <div class="about-icon">
                    <i class="fas fa-pizza-slice"></i>
                </div>
                <div class="about-text">
                    <h2 class="about-subtitle">Pizza</h2>
                    <p class="about-info">Pizza Napoletana e non solo. Ordina qui la migliore selezione al Taglio! </p>
                </div>
            </article>

             <article class="about">
                <div class="about-icon">
                    <i class="fas fa-mortar-pestle"></i>
                </div>
                <div class="about-text">
                    <h2 class="about-subtitle">Cucina Vegana</h2>
                    <p class="about-info">Prodotti Vegani e Vegetariani con verdue selezionte! </p>
                </div>
            </article>

             <article class="about">
                <div class="about-icon">
                    <i class="fas fa-hamburger"></i>
                </div>
                <div class="about-text">
                    <h2 class="about-subtitle">FastFood</h2>
                    <p class="about-info">I migliori Hamburger, con carne di prima scelta e fritto freschissimo! </p>
                </div>
            </article>

             <article class="about">
                <div class="about-icon">
                    <i class="fas fa-fish"></i>
                </div>
                <div class="about-text">
                    <h2 class="about-subtitle">Pesce</h2>
                    <p class="about-info">Pesce Frechissimo del mediterraneo, al forno, fritto e all'acqua pazza! </p>
                </div>
            </article>

             <article class="about">
                <div class="about-icon">
                    <i class="fas fa-pepper-hot"></i>
                </div>
                <div class="about-text">
                    <h2 class="about-subtitle">Piccante</h2>
                    <p class="about-info">Per le bocche forti, cibo orientale supe Spicy! </p>
                </div>
            </article>

        </div>
        </section>

            <!-- MENU SECTION  -->

        <section class="menu" id="menu">
            <article class="menu-image"></article>
            <article class="menu-text">
                <div class="menu-text-center">
                    <h1>I Nostri Menu</h1>
                    <p>I nostri Menu propongono una cucina che utilizza principalmente pesce,carne, verdure di stagione, pasta, dolci preparati dalle migliori pasticcerie, mozzarella freschissima, selezione vegana, cucina orientale, fastfood, pizzeria e friggitoria. Tutto lavorato, preparato e cucinato dai migliori produttori della città.
                    Su richiesta o prenotazione possiamo offrire anche menù completi a base di pesce freschissimo.
                    </p>
                    <a href="{{route('guests.index')}}">Esplora</a>
                </div>
            </article>
        </section>


     <!-- SOCIALS SECTION  -->

        <section id="social-icons">
            <a href="#"> <i class="fab fa-facebook facebook"></i></a>
            <a href="#"> <i class="fab fa-twitter twitter"></i></a>
            <a href="#"> <i class="fab fa-instagram instagram"></i></a>
            <a href="#"> <i class="fab fa-google-plus plus"></i></a>

        </section>

     <!-- NUMBER SECTION  -->

     <div>
         <h1 class="text-center">Dicono di noi...</h1>
     </div>

    <div class="container-cards" id="cards-team7">

        <div class="container2">
            <div class="card">
                <div class="imgBx">
                    <img src="images/ivan.jpg" alt="">
                </div>
                <div class="content">
                    <h2>Ivan</h2>
                    <p> Con Fast&Food posso finalmente ordinare i piatti della cucina sud-americana </p>
                </div>
            </div>
        </div>

         <div class="container2">
            <div class="card">
                <div class="imgBx">
                    <img src="images/giuli.jpg" alt="">
                </div>
                <div class="content">
                    <h2>Giulia</h2>
                    <p> Quando ho voglia di Pizza, Fast&Food e in un attimo è a casa mia!! </p>
                </div>
            </div>
        </div>

         <div class="container2">
            <div class="card">
                <div class="imgBx">
                    <img src="images/cheru.jpg" alt="">
                </div>
                <div class="content">
                    <h2>Cherubina</h2>
                    <p>Cortesia, puntualità, una garanzia!!! </p>
                </div>
            </div>
        </div>

         <div class="container2">
            <div class="card">
                <div class="imgBx">
                    <img src="images/fra.jpg" alt="">
                </div>
                <div class="content">
                    <h2>Francesco</h2>
                    <p> Un appuntamento settimanale che ormai si ripete da non so quanto tempo! </p>
                </div>
            </div>
        </div>

    </div>


    <!-- CARDS SECTIONS -->

    <section id="food">
        <div>
            <h1 class="text-center">I NOSTRI PIATTI COMODAMENTE A CASA</h1>
        </div>
        <div class="food-container">
            <!-- ARTICOLI -->
            <article class="food-card">
                <img src="images/hamburger-patatine.jpg" class="food-img" alt="">
                <div class="img-text">
                    <h1>Fast-food</h1>
                </div>
                <div class="img-footer">
                    <div class="footer-icon">

                    </div>
                    <div class="footer-btn">
                        <a href="{{route('guests.index')}}"><button type="button" class="food-btn">Ordina Adesso</button></a>
                    </div>
                </div>
            </article>

             <!-- ARTICOLI -->
            <article class="food-card">
                <img src="images/fish.jpg" class="food-img">
                <div class="img-text">
                    <h1>Pesce</h1>
                </div>
                <div class="img-footer">
                    <div class="footer-icon">

                    </div>
                    <div class="footer-btn">
                        <a href="{{route('guests.index')}}"><button type="button" class="food-btn">Ordina Adesso</button></a>
                    </div>
                </div>
            </article>

             <!-- ARTICOLI -->
            <article class="food-card">
                <img src="images/vegan.jpg" class="food-img">
                <div class="img-text">
                    <h1>Cucina Vegana</h1>
                </div>
                <div class="img-footer">
                    <div class="footer-icon">

                    </div>
                    <div class="footer-btn">
                        <a href="{{route('guests.index')}}"><button type="button" class="food-btn">Ordina Adesso</button></a>
                    </div>
                </div>
            </article>

        </div>
    </section>

        <!-- SECTION CARD 2  -->

    <section id="food">
        <div>
            <h2 class="text-center">FOOD FUSION</h2>
        </div>
        <div class="food-container">
            <!-- ARTICOLI -->
            <article class="food-card">
                <img src="images/misto7.jpg" class="food-img" alt="">
                <div class="img-text">
                    <h1>Spiedini di Carne</h1>
                </div>
                <div class="img-footer">
                    <div class="footer-icon">
                    </div>
                    <div class="footer-btn">
                        <a href="{{route('guests.index')}}"><button type="button" class="food-btn">Ordina Adesso</button></a>
                    </div>
                </div>
            </article>

             <!-- ARTICOLI -->
            <article class="food-card">
                <img src="images/delivery-box.jpg" class="food-img">
                <div class="img-text">
                    <h1>Sushi</h1>
                </div>
                <div class="img-footer">
                    <div class="footer-icon">
                    </div>
                    <div class="footer-btn">
                        <a href="{{route('guests.index')}}"><button type="button" class="food-btn">Ordina Adesso</button></a>
                    </div>
                </div>
            </article>

             <!-- ARTICOLI -->
            <article class="food-card">
                <img src="images/misto.jpg" class="food-img">
                <div class="img-text">
                    <h1>Cucina Orientale</h1>
                </div>
                <div class="img-footer">
                    <div class="footer-icon">
                    </div>
                    <div class="footer-btn">
                        <a href="{{route('guests.index')}}"><button type="button" class="food-btn">Ordina Adesso</button></a>
                    </div>
                </div>
            </article>

        </div>
    </section>

    <!-- COLLAGE GALLERY  -->
    <section id="collage">
        <div>
            <h2 class="text-center">I Nostri Prodotti</h2>
        </div>
            <section id="gallery-center">
             <article class="gallery-item">
                    <img src="images/misto.jpg" alt="">
            </article>

            <article class="gallery-item">
                <a href="images/misto.jpg">
                    <img src="images/misto2.jpg" alt="">
                </a>
            </article>

            <article class="gallery-item">
                <a href="images/misto3.jpg">
                    <img src="images/misto3.jpg" alt="">
                </a>
            </article>

            <article class="gallery-item">
                <a href="images/takeaway.jpg">
                    <img src="images/takeaway.jpg" alt="">
                </a>
            </article>

            <article class="gallery-item">
                <a href="images/misto6.jpg">
                    <img src="images/misto6.jpg" alt="">
                </a>
            </article>

            <article class="gallery-item">
                <a href="images/hamburger.jpg">
                    <img src="images/hamburger.jpg" alt="">
                </a>
            </article>

            <article class="gallery-item">
                <a href="images/pizza.jpg">
                    <img src="images/pizza.jpg" alt="">
                </a>
            </article>

            <article class="gallery-item">
                <a href="images/vegan.jpg">
                    <img src="images/vegan.jpg" alt="">
                </a>
            </article>

        </section>
    </section>




@endsection



<script src="{{asset('js/hamburger.js')}}"></script>
