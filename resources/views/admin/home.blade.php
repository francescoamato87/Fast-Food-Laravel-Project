@extends('layouts.app')

@section('content')
<div class='container-dark'>
<div class="container ">
    <div class="row justify-content-center min-height">

        <div class="col-md-8">
          {{--   <div class="card mt-3">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div> --}}
            <div class="mt-5 mb-5">
                <h2 class="text-orange text-center">
                    Ciao! Benvenuto su Fast&Food!
                </h2>
                <a class='nav-link text-orange text-center' href="{{route('admin.restaurants.create')}}">Crea il tuo ristorante</a>
            </div>

            <div class="d-flex justify-content-center ">
                {{-- <a  href="{{route('admin.dishes.index')}}" >
                    <input type="submit" class='btn btn-orange mt-5 ' value='Vedi menu'>
                </a> --}}

                {{-- <a class="mr-2 ml-2" href="{{route('admin.dishes.create')}}" >
                    <input type="submit" class='btn btn-orange mt-5 text-center' value='Nuovo piatto'>
                </a> --}}

                {{-- <a  href="{{route('admin.orders.index')}}">
                    <input type="submit" class='btn btn-orange mt-5 text-center' value='Ordini'>
                </a> --}}
            </div>


        @if(session('restaurant-deleted'))
                <div class = "alert alert-success mt-5">
                     Restaurant '{{session('restaurant-deleted')}}' é stato cancellato con successo
                </div>
         @endif

         @foreach ($restaurants as $restaurant)
        <div class='restaurant-create mt-3'>
        <h2 class='mt-3'>{{$restaurant->name}}</h2>
              <p> <strong>Indirizzo:</strong>    {{$restaurant->address}} - <strong>Telefono:</strong>    {{$restaurant->phone}} - <strong>Partita IVA:</strong>    {{$restaurant->p_iva}}</p>
             <section class="type">
                    <h6>TIPOLOGIA</h6>
                 @foreach ($restaurant->types as $type)
                      <ul>
                         <li>
                              {{$type->type}}
                         </li>
                        </ul>
                 @endforeach

             </section>

         <a href="{{route('admin.restaurants.edit', $restaurant->id)}}" ><input type="submit" class='btn btn-orange d-inline' value='Modifica Ristorante'></a>
         <a href="{{route('admin.dishes.show', $restaurant->id)}}" ><input type="submit" class='btn btn-orange d-inline' value='Vedi Menu'></a>
         {{-- <a class="mr-2 ml-2" href="{{route('admin.dishes.create', $restaurant->id)}}" >
            <input type="submit" class='btn btn-orange mt-5 text-center' value='Nuovo piatto'>
        </a> --}}


            <form class='d-inline' action="{{route('admin.restaurants.destroy', $restaurant->id)}}" method='POST'>
            @csrf
            @method('DELETE')

            <input type="submit" class='btn btn-orange' value='Elimina'>
            </form>

        </div>

        @endforeach


      </div>
    </div>


</div>
</div>

@endsection
