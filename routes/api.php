<?php

use App\Http\Controllers\CarControler;
use App\Http\Controllers\CategoryControler;
use App\Models\RentCars;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// car
//ide get
Route::get('/cars/listing',[CarControler::class, 'index']);
//ide post
Route::post('/cars/create',[CarControler::class, 'store']);
// ide update
Route::put('/cars/update/{car}',[CarControler::class, 'update']);
//ide delete
Route::delete('/cars/delete/{car}',[CarControler::class, 'delete']);

// route za category


Route::get('/category/listing',[CategoryControler::class, 'category']);
Route::post('/category/create',[CategoryControler::class, 'storecategory']);
Route::put('/category/update/{cat}',[CategoryControler::class, 'updatecategory']);
Route::delete('/category/delete/{cat}',[CategoryControler::class, 'deletecategory']);


// route za search
// za brand
Route::get('search/brand/{brand}',[CarControler::class,'searchbrand']);
// za model
Route::get('search/model/{model}',[CarControler::class,'searchmodel']);
// za price range
Route::get('search/price/{from}-{to}',[CarControler::class,'searchrange']);
