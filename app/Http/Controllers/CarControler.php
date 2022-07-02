<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\RentCars;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CarControler extends Controller
{
    // get
    public function index()
    {
        return RentCars::all();
    }

    //post

    public function store()
    {

       

        return RentCars::create([
            'registration_license'=>request('registration_license'),
            'brand'=> request('brand'),
            'model'=>request('model'),
            'manufacture_date'=>request('manufacture_date'),
            'description'=>request('description'),
            'category_id'=>request('category_id'),
            'properties'=>request('properties')
           
            
        ]);
    }

    // ide update
    public function update(RentCars $car)
    {
         $car->update([
            'registration_license'=>request('registration_license'),
            'brand'=>request('brand'),
            'model'=>request('model'),
            'manufacture_date'=>request('manufacture_date'),
            'description'=>request('description'),
            'category_id'=>request('category_id'),
            'properties'=>request('properties')
            
        ]);
        
    }

    // ide delete
    public function delete(RentCars $car)
    {
        $success = $car->delete();

    return[
        'succes'=>$success,
    ];
    }

    // ide search za brand,model i price



    public function searchbrand($brand)
    {
        $car = RentCars::where('brand',$brand)->get();
        return $car;
       
    }
    public function searchmodel($model)
    {
        $cart = RentCars::where('model',$model)->get();
        return $cart;
       
    }

    // za price

    public function searchrange($to,$from)
    {
      $price = Category::where('price' , '>=' , $to)
      ->where('price' , '<=' , $from)
      ->get();
      return $price;
    }

}
