<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\RentCars;
use Illuminate\Http\Request;

class CategoryControler extends Controller
{
    // get
    public function category()
    {
        return Category::all();
    }
     //post

     public function storecategory()
     {
 
         return Category::create([
             'name'=>request('name'),
             'price'=>request('price'),
             'parent_id'=>request('parent_id'),
             
         ]);
     }

// update ide

     public function updatecategory(Category $cat)
    {
         $cat->update([
            'name'=>request('name'),
             'price'=>request('price'),
             'parent_id'=>request('parent_id'),
        ]);
        
    }

    // delete ide
    public function deletecategory(Category $cat)
    {
        $success = $cat->delete();

    return[
        'succes'=>$success,
    ];
    }

   







}
