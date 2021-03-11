@extends('layouts.app')

@section('content')
<div class='container-dark'>
    <div class="container">

        <h1 class='text-white pt-3 pb-3 text-center title-menu'>Menu</h1>

        @if(session('dish-deleted'))
            <div class = "alert alert-success mt-5">
                Il piatto '{{session('dish-deleted')}}' é stato cancellato con successo
            </div>
        @endif

        @if ($dishes->isEmpty())
            <p class="text-white text-center">Aggiungi nuovo piatto al menù</p>
        @else
            <p class="text-white text-center pt-3">Elenco piatti</p>
        @endif

        <a class="mr-2 ml-2 " href="{{route('admin.dishes.create', $id)}}" >
            <input type="submit" class='btn btn-orange mt-5 text-center' value='Aggiungi piatto'>
        </a>

        @foreach ($dishes as $dish)

            <h3 class='mt-4 text-white'>{{$dish->name}}</h3>
                <p class='text-white'><strong>Categoria: </strong>  {{$dish->category}}</p>
                <p class='text-white'><strong>Ingredienti: </strong>  {{$dish->ingredients}}</p>
                <p class='text-white'><strong>Descrizione: </strong>  {{$dish->description}}</p>
                <p class='text-white'><strong>Prezzo: </strong>  {{$dish->price}} €</p>
                {{-- <p>{{$dish->gluten}}</p>
                <p>{{$dish->available}}</p> --}}

            <div>
                @if (!empty($dish->path_img))
                    <img class="mb-3" width="250" src="{{asset('storage/' . $dish->path_img)}}" alt="{{$dish->name}}">
                @else
                    <img class="mb-3" width="250" src="{{asset('../images/food-placeholder.jpg')}}" alt="{{$dish->name}}">
                @endif
            </div>

            {{-- <section class="type">
                <h6>TIPOLOGIA</h6>
                @foreach ($restaurant->types as $type)
                    <ul>
                        <li>
                            {{$type->type}}
                        </li>
                    </ul>
                @endforeach

            </section> --}}

            <a href="{{route('admin.dishes.edit', $dish->id)}}" ><input type="submit" class='btn btn-orange' value='Modifica Piatto'></a>


            <form class='d-inline' action="{{route('admin.dishes.destroy', $dish->id)}}" method='POST'>
                @csrf
                @method('DELETE')

                <input type="submit" class='btn btn-delete ml-2' value='Elimina Piatto'>
            </form>
            <hr>
        @endforeach

    </div>
</div>
 @endsection
