@extends('layouts.app')

@section('content')

  <div class="title-gadget mt-3">
        <h1>I Nostri Gadget</h1>
    </div>

<div class="container-gadget ">

    <div class="wrapper-gadget">

        <div class="card-gadget">
            <img src="../images/maglietta.jpg" alt="">
            <div class="info-gadget">
                <h1>T-Shirt Fast</h1>
                <p>Acquista una delle nostre T-Shirt firmate Fast&Food</p>
                <a href="#" class="btn">Ordina Adesso</a>
            </div>
        </div>

          <div class="card-gadget">
            <img src="../images/cappello.jpg" alt="">
            <div class="info-gadget">
                <h1>Berretto Fast</h1>
                <p>Acquista un il nostro berretto firmato Fast&Food</p>
                <a href="#" class="btn">Ordina Adesso</a>
            </div>
        </div>

          <div class="card-gadget">
            <img src="../images/chef.jpg" alt="">
            <div class="info-gadget">
                <h1>Chef Fast</h1>
                <p>Acquista uno nostri cappelli da Chef firmati Fast&Food</p>
                <a href="#" class="btn">Ordina Adesso</a>
            </div>
        </div>
    </div>


</div>



@endsection
