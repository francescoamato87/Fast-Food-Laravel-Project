@extends('layouts.app')

@section('content')
<div class='container-dark'>
    <div class="container">

        <h1 class='text-white pt-3 pb-3 text-center title-menu'>Ristoranti</h1>

        @if ($restaurants->isEmpty())
            <p class="text-white text-center">Nono sono presenti ristoranti. Crea nuovo ristorante</p>
        @else
            <p class="text-white text-center pt-3">Lista ristoranti:</p>
        @endif

        @foreach ($restaurants as $restaurant)

            <h3 class='mt-4 text-white'>{{$restaurant->name}}</h3>
                <p class='text-white'>Indirizzo: {{$restaurant->address}} - Telefono: {{$restaurant->phone}} - Partita IVA: {{$restaurant->p_iva}}</p>
                <section class="type">
                    <h6 class='text-white'>TIPOLOGIA</h6>
                    @foreach ($restaurant->types as $type)
                        <ul>
                            <li class='text-white'>
                                {{$type->type}}
                            </li>
                        </ul>
                    @endforeach

                </section>

           <a href="{{route('admin.restaurants.edit', $restaurant->id)}}" ><input type="submit" class='btn btn-orange' value='Modifica'></a>

            <form class='d-inline' action="{{route('admin.restaurants.destroy', $restaurant->id)}}" method='POST'>
             @csrf
             @method('DELETE')

                <input type="submit" class='btn btn-delete' value='Elimina'>
            </form>
            
        @endforeach



    </div>




</div>
    
@endsection
