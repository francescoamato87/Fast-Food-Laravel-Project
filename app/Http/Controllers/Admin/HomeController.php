<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Restaurant;
use App\Type;
use App\Dish;
use App\Order;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $restaurants = Restaurant::where('user_id', Auth::id())
        ->orderBy('created_at', 'desc')
        ->get();

        $dishes = Dish::all();
        return view('admin.home', compact('restaurants','dishes'));
    }
}
