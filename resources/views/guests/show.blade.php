@extends('layouts.app')

@section('content')
<div id="dish">

    <input type="hidden" value="{{$restaurant->id}}" id="restaurantId">


           {{-- CARRELLO  --}}
    <div class='header-menu d-flex justify-content-around align-items-center mt-3'>
            <h1 class='p-3'>{{$restaurant->name}}</h1>

         <div class="btn-group d-block text-right ">
            <div class="dropdown">
                <button class="btn btn-cart" data-toggle="modal" data-target="#cart">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="badge badge-light">@{{quantitaTotale}}</span>
                </button>
                <div class="modal fade" id="cart">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Il tuo Carrello</h5>
                                <button class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <table class="table table-striped text-left">
                                    <tbody>
                                        <tr v-for="(dishCarrello, index) in carrello">
                                            <td width="100">
                                                <input type="number" min="0" max="20" class="form-control" v-model.number="dishCarrello.quantita">
                                            </td>
                                            <td>@{{dishCarrello.dish.name}}</td>
                                            <td>@{{dishCarrello.quantita * dishCarrello.dish.price}} €</td>
                                            <td width="60">
                                                <button v-on:click="rimuovereCarrello(index)" class="btn btn-danger btn-sm">
                                                    <i class="fas fa-window-close"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                                Totale: @{{carrelloTotale}} €
                               <a href="{{ route('riepilogo') }}">
                                    <button type="submit" class="btn btn-primary">Checkout</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ...................................................  --}}

        <div class="wrapper-piatti">
            <div class="title-piatti">
                <img src="../images/menu.png" alt="">
            </div>

            <ul class="menu-piatti">

                <li class="single-menu-piatti"  v-for="dish in dishes" v-show="dish.available == 1">
                    <img v-bind:src="'http://127.0.0.1:8000/storage/' + dish.path_img" alt="">
                    <div class="menu-content-piatti">
                        <h4>@{{dish.name}}<span>@{{dish.price}}€</span></h4>
                        <p> @{{dish.description}}</p>
                        <p> @{{dish.ingredients}}</p>
                         <button class="btn btn-darkorange pt-2 pb-2 mb-4"
                            v-on:click="aggiungereCarrello(dish)"
                         >
                        Aggiungi al carrello
                        </button>
                    </div>
                </li>

            </ul>
        </div>







{{-- <div>
               <ul class='menu-list mt-3 p-3'>
                   <div class='d-flex justify-content-center'>
                        <img class='logo-menu pb-3' src="../images/menu.png" alt="">
                   </div>
                    <li class='dish-list' v-for="dish in dishes" v-show="dish.available == 1">
                         <h2 class='pt-3 pb-3 pl-3'>@{{dish.name}}</h2>
                        <div class='list-item mt-3 mb-3'>
                            <p> <strong>Descrizione:</strong>  @{{dish.description}}</p>
                            <p> <strong> Ingredienti:</strong>  @{{dish.ingredients}}</p>
                            <img v-bind:src="'http://127.0.0.1:8000/storage/' + dish.path_img" width="300" alt="">
                            <p> <strong> Prezzo: </strong>   @{{dish.price}}€</p>
                        </div>
                         <button class="btn btn-darkorange pt-2 pb-2 mb-4"
                            v-on:click="aggiungereCarrello(dish)"
                         >
                        Aggiungi al carrello
                        </button>
                    </li>
                </ul>
          </div> --}}





    </div>

    </div>
</div>

   {{-- @foreach($dishes as $dish)
        <h3>{{ $dish->name}}</h3>
   @endforeach --}}

@endsection

<script src="{{asset('js/dish.js')}}"></script>

