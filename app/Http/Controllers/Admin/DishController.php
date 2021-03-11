<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Dish;
use App\Restaurant;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dishes = Dish::orderBy('name', 'asc')->get();

        return view('admin.dishes.index', compact('dishes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('admin.dishes.create', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $data['slug'] = Str::slug($data['name'], '-');

        //$data['restaurant_id'] = Auth::id();
        // $data['restaurant_id'] =

        $data['available'] = ($data['available'] == 'true') ? 1 : 0;

        $data['gluten'] = ($data['gluten'] == 'true') ? 1 : 0;

        // IMG
        if(!empty($data['path_img'])){
            $data['path_img'] = Storage::disk('public')->put('images', $data['path_img']);
        }

        $newDish = new Dish();
        $newDish->fill($data);

        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'ingredients' => 'required',
            'description' => 'required',
            'price' => 'required',
            'gluten' => 'required',
            'available' => 'required',
            'path_img' => 'mimes:jpg,jpeg,png,bmp',
         ]);


        $saved = $newDish->save();

        if($saved) {
            return redirect()->route('admin.dishes.show', $data['restaurant_id']);
        } else {
            return redirect()->route('admin.dishes.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $restaurant = Restaurant::find($id);


        $dishes = Dish::where('restaurant_id', $id)->get();
        // $dishes = Dish::all();
        $restaurant_id = $id;

        // dd($dishes);
        // dump($dishes);
        return view('admin.dishes.show', compact('dishes', 'id'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dish = Dish::find($id);

        return view('admin.dishes.edit', compact('dish'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $data = $request->all();

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'ingredients' => 'required',
            'category' => 'required',
            'price' => 'required',
            'gluten' => 'required',
            'path_img' => 'mimes:jpg,jpeg,png,bmp',
        ]);

        $data['available'] = ($data['available'] == 'true') ? 1 : 0;

        $data['gluten'] = ($data['gluten'] == 'true') ? 1 : 0;

        $dish = Dish::find($id);

        // $restaurant_id = $dish->restaurant_id;

        $updated = $dish->update($data);
        if($updated) {
            return redirect()->route('admin.dishes.show', $dish->restaurant_id);
        } else {
            return redirect()->route('admin.dishes.edit');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dish $dish)
    {
        $name = $dish->name;

        $deleted = $dish->delete();

        if($deleted) {
            return redirect()->route('admin.dishes.index')->with('dish-deleted', $name);
        } else {
            'la cancellazione non è andata a buon fine';
        }
    }
}
