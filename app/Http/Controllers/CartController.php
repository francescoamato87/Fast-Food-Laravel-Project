<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use App\Dish;

class CartController extends Controller
{
     public function cart() {
        // $data = $request->all();
        $restaurant = Restaurant::all();
        $dish = Dish::all();
        return view('guests.riepilogo', compact('restaurant', 'dish'));
    }
}
