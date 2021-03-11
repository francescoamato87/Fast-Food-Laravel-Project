<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Restaurant;
use App\Dish;
use Illuminate\Support\Facades\DB;



class ApiController extends Controller
{
    public function filter(Request $request) {

        $data = $request->all();

        $name = !empty($data['name']) ? $data['name'] : '';

        //RICERCA RISTORANTI NOME/TIPOLOGIA
        if(empty($data['name']) && empty($data['types'])) {
            //Otteniamo tutti i ristoranti perchè i campi delle ricerche sono vuoti
            $search = DB::table('restaurants')
                    ->select('restaurants.id', 'restaurants.name', 'restaurants.address', 'restaurants.phone')
                    ->get();
        }
        elseif(!empty($data['name']) && empty($data['types'])) {
             //Ricerca del ristorante attraverso il nome
             $search = Restaurant::where('name', 'like', "%$name%")
                    ->select('restaurants.id', 'restaurants.name','restaurants.address', 'restaurants.phone')
                    ->get();
        }
        //Ricerca del ristorante solo per tipologiaa
        elseif(empty($data['name']) && !empty($data['types'])) {

         //Chiamata al DB in cui selezioniamo i ristoranti in base alla tipologia, usando condizione "OR"(whereIn)
         $search = DB::table('restaurants')
                 ->join('restaurant_type', 'restaurants.id', '=', 'restaurant_type.restaurant_id')
                 ->join('types', 'types.id', '=','restaurant_type.type_id')
                 ->whereIn('types.type', $data['types'])->select('restaurants.id', 'restaurants.name','restaurants.address', 'restaurants.phone')
                 ->distinct()
                 ->get();
        }
        else {
            //Ricerca del ristorante per nome e per tipologia
            $search = DB::table('restaurants')
                 ->join('restaurant_type', 'restaurants.id', '=', 'restaurant_type.restaurant_id')
                 ->join('types', 'types.id', '=','restaurant_type.type_id')
                 ->where('name', 'like', "%$name%")
                 ->whereIn('types.type', $data['types'])
                 ->select('restaurants.id', 'restaurants.name','restaurants.address', 'restaurants.phone')
                 ->distinct()
                 ->get();
        }

         return response()->json($search);
    }

    public function dishesFilter(Request $request) {
        $data = $request->all();

        $dishes_search = DB::table('dishes')
        ->where('restaurant_id', '=', $data['id'])
        ->select('dishes.id', 'dishes.name', 'dishes.restaurant_id', 'dishes.description', 'dishes.ingredients','dishes.path_img', 'dishes.price', 'dishes.available')
        ->orderBy('dishes.name')
        ->get();

        //dd($dishes_search);


        //dd($dishes_search);

        return response()->json($dishes_search);

        // SELECT `dishes`.`name`, `dishes`.`restaurant_id`, `restaurants`.`id`, `restaurants`.`name`
        // FROM `dishes`
        // INNER JOIN `restaurants`
        // ON `dishes`.`restaurant_id` = `restaurants`.`id`

    }
}
