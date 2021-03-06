@extends('layouts.app')

@section('content')
<div class='container-dark'>
    <div class="container">
        <h1 class='text-white pt-3 pb-3 text-center title-menu'>Modifica piatto</h1>

        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error )
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{route('admin.dishes.update', $dish->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class='form-group text-white'>
                <label for="name">Nome Piatto</label>

                <input class='form-control' type="text" name="name" id="name" value="{{old('name', $dish->name)}}">
            </div>

            <div class='form-group text-white'>

                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="category" id="category">
                    <option selected>Seleziona una categoria</option>
                    <option value="antipasto">Antipasto</option>
                    <option value="primo">Primo</option>
                    <option value="secondo">Secondo</option>
                    <option value="contorno">Contorno</option>
                    <option value="dolce">Dolce</option>
                </select>

            </div>

            <div class='form-group text-white'>
                <label for="ingredients">Ingredienti</label>

                <input class='form-control' type="text" name="ingredients" id="ingredients" value="{{old('ingredients', $dish->ingredients)}}">
            </div>

            <div class='form-group text-white'>
                <label for="description">Descrizione</label>

                <textarea class="form-control" name="description" id="description" type="text" placeholder="scrivi qui">{{old('description', $dish->description)}}</textarea>

            </div>

            <div class='form-group text-white'>
                <label for="price">Prezzo</label>

                <input class='form-control' type="text" name="price" id="price" value="{{old('price', $dish->price)}}">
            </div>

            <label class="text-white">Glutine:</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gluten" id="gluten1" value="true" checked>
                <label class="form-check-label text-white" for="gluten1">
                  S??
                </label>
            </div>
            <div class="form-check text-white">
                <input class="form-check-input" type="radio" name="gluten" id="gluten2" value="false" checked>
                <label class="form-check-label text-white" for="gluten2">No</label>
            </div>


            <label class="text-white">Disponibilit??:</label>
            <div class="form-check text-white">
                <input class="form-check-input" type="radio" name="available" id="available1" value="true" checked>
                <label class="form-check-label text-white" for="available1">S??</label>
            </div>
            <div class="form-check text-white">
                <input class="form-check-input" type="radio" name="available" id="available2" value="false" checked>
                <label class="form-check-label text-white" for="available2">No</label>
            </div>

            {{-- <div class='form-group text-white'>
                <label for="path_img">Modifica immagine</label>
                <input class="form-control" type="file" name="path_img" id="path_img" accept="image/*">
            </div> --}}

            <a href="{{route('admin.dishes.update', $dish->id)}}"><input type="submit" class='btn btn-orange' value='Salva modifica'></a>

        </form>

    </div>
</div>

@endsection
