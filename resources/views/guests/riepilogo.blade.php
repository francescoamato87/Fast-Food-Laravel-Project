@extends('layouts.app')
@section('content')
<div id="dish">
    <div class='header-menu d-flex justify-content-around align-items-center mt-3'>
         <div class="btn-group d-block">
            <div class="d-flex p-3 align-items-center">
                <h4 class="text-orange mr-3">Riepilogo Ordine</h4>
                <button class="btn btn-cart text-right" data-toggle="modal" data-target="#cart">
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
                                <button data-dismiss="modal" class="btn btn-primary">Checkout</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <ul class="text-center">
            <li class='dish-list' v-for="(dishCarrello, index) in carrello">
                <h2 class='pt-3 pb-3 pl-3 title_riepilogo'>@{{dishCarrello.dish.name}}</h2>
                <div class='list-item mt-3 mb-3'>
                   <img v-bind:src="'http://127.0.0.1:8000/storage/' + dishCarrello.dish.path_img" width="300" alt="">
                </div>
                <p class="font-weight-bold">Prezzo: @{{dishCarrello.quantita * dishCarrello.dish.price}} € </p>
            </li>
            <p class="font-weight-bold">Quantità: @{{quantitaTotale}}</p>
            <p class="riepilogo_totale"><strong> Totale: </strong> @{{carrelloTotale}} €</p>
        </ul>
    </div>
</div>
@endsection
<script src="{{asset('js/dish.js')}}"></script>
