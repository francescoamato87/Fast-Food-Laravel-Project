@extends('layouts.app')

@section('content')
<div class="container-dark">
    <div class="container">
        <h1 class='text-white pt-3 pb-3 text-center title-menu'>Modifica ristorante</h1>

        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error )
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{route('admin.restaurants.update', $restaurant->id)}}" method="POST">
            @csrf
            @method('PATCH')

            <div class='form-group text-white'>
                <label for="name">Nome Ristorante</label>

                <input class='form-control' type="text" name="name" id="name" value="{{old('name', $restaurant->name) }}">
            </div>

            <div class='form-group text-white'>
                <label for="address">Indirizzo Ristorante</label>

                <input class='form-control' type="text" name="address" id="address" value="{{old('address', $restaurant->address)}}">
            </div>

            <div class='form-group text-white'>
                <label for="p_iva">Partita Iva</label>

                <input disabled class='form-control' type="text" name="p_iva" id="p_iva" value="{{old('p_iva', $restaurant->p_iva)}}">
            </div>

            <div class='form-group text-white'>
                <label for="phone">Numero di telefono</label>

                <input class='form-control' type="text" name="phone" id="phone" value="{{old('phone', $restaurant->phone)}}">
            </div>

             {{-- check TYPE  --}}
             <div class='form-group text-white d-flex justify-content-sm-between'>
               @foreach ($types as $type)
                    <div class="form-check">
                        <input class='form-check-input' type="checkbox" name="types[]" id="type-{{$type->id}}" value="{{$type->id}}"
                        @if ($restaurant->types->contains($type->id))
                            checked
                        @endif
                        >
                        <label for="type-{{$type->id}}">{{$type->type}}</label>
                    </div>
               @endforeach
            </div>

            <a href="{{route('admin.restaurants.update', $restaurant->id)}}">
                <input type="submit" class='btn btn-orange' value='Salva modifica ristorante'>
            </a>

        </form>

    </div>



</div>
    
@endsection
