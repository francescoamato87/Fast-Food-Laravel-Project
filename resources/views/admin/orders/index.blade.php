@extends('layouts.app')

@section('content')
<div class="container-dark">
    <div class="container">

        <h1 class='text-white pt-3 pb-3 text-center title-menu'>Ordini cliente</h1>

         <ul class="mb-0">
            @foreach ($orders as $order)
                        
            <li class="text-white">
                <a href="{{route('admin.orders.show', $order->id)}}">{{$order->client_name}} - {{$order->tot_price}}</a>
            </li>

            @endforeach 
        </ul>
        

    </div>
</div>
    
@endsection
