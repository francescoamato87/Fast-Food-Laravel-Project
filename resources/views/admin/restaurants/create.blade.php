@extends('layouts.app')

@section('content')
<div class="container-dark">
    <div class="container">
        <h1 class='text-white pt-3 pb-3 text-center title-menu'>Crea nuovo ristorante</h1>

        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error )
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{route('admin.restaurants.store')}}" method="POST">
            @csrf
            @method('POST')

            <div class='form-group text-white'>
                <label for="name">Nome Ristorante</label>

                <input class='form-control' type="text" name="name" id="name" value="{{old('name')}}">
            </div>

            <div class='form-group text-white'>
                <label for="address">Indirizzo Ristorante</label>

                <input class='form-control' type="text" name="address" id="address" value="{{old('address')}}">
            </div>

            <div class='form-group text-white'>
                <label for="p_iva">Partita Iva</label>

                <input class='form-control' type="text" name="p_iva" id="p_iva" value="{{old('p_iva')}}">
            </div>

            <div class='form-group text-white'>
                <label for="phone">Numero di telefono</label>

                <input class='form-control' type="text" name="phone" id="phone" value="{{old('phone')}}">
            </div>

            {{-- check TYPE  --}}
             <div class='form-group text-white d-flex justify-content-sm-between'>
               @foreach ($types as $type)
                    <div class="form-check">
                        <input class='form-check-input' type="checkbox" name="types[]" id="type-{{$type->id}}" value="{{$type->id}}">
                        <label for="type-{{$type->id}}">{{$type->type}}</label>
                    </div>
               @endforeach
            </div>


            <input type="submit" class='btn btn-orange' value='Crea ristorante'>
        </form>

    </div>


</div>
    
@endsection
