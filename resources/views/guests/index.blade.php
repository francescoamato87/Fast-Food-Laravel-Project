@extends('layouts.app')

@section('content')
<div id="app" >
    <div class='index mt-3'>
        <div class="container pt-4 text-center">
             <h3 class="text-orange">Ricerca Ristorante</h3>

             <input class='ricerca rounded-pill border-0 p-1 mb-2 ' type="text" name="name" id="name"
             v-model="name" v-on:keyup="filterType">

             <h3 class='pt-4 text-orange'> Scegli Tipologia </h3>

                <div class='d-flex justify-content-center mt-3'>
                      @foreach ($types as $type)
                         <div class="form-check mr-2 mb-2">
                                <input class='form-check-input'
                             type="checkbox" id="{{$type->type}}"
                             value="{{$type->type}}"
                             v-on:change="filterType"
                             v-model="types"
                            >
                            <label for="{{$type->type}}">{{$type->type}}</label>
                            </div>
                      @endforeach
                </div>
        </div>
    </div>

    <div class='card-restaurant mt-6'>
        <div class=" container pb-4" v-if="restaurants.length > 0">
            <ul class="d-flex flex-wrap justify-content-center">
                <li class="food-card-restaurant" v-for="restaurant in restaurants">
                    <a class='font-4' :href="route(restaurant.id)">@{{restaurant.name}}</a>
                    <p> <strong> Indirizzo:</strong> @{{restaurant.address}} <br> <strong>Telefono:</strong>  @{{restaurant.phone}} </p>
                </li>

            </ul>
        </div>

        <h2 class="pb-4 no-restaurant" v-else>Non ci sono ristoranti che propongano questa cucina</h2>
    </div>



</div>



@endsection

<script src="{{asset('js/app.js')}}"></script>

