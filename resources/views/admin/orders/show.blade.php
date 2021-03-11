@extends('layouts.app')

@section('content')
<div class="container-dark">
    <div class="container">

        <h1 class='text-white pt-3 pb-3 text-center title-menu'>Ordini</h1>

         <ul class="mb-0">
            @foreach ($orders as $order)
                
            <li class="text-white">
                <h3>{{$order->client_name}}</h3> 
                <h3>{{$order->client_lastname}}</h3>
                <p>{{$order->client_address}} </p>
                <p>{{$order->client_phone}}</p>
                <p> {{$order->tot_price}} €</p>
            </li>
            <hr>

            @endforeach 
        </ul>
        

    </div>
</div>
    
@endsection
