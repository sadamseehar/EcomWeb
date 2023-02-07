<?php

use App\Http\Controllers\carController;
use App\Http\Controllers\customerController;
use App\Http\Controllers\productController;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\testController;
use App\Http\Controllers\testResourceController;
use App\Http\Controllers\userController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

route :: get('',function(){
    return view('home');
});

route::get('wel', function(){

return view('welcome');


});

route::get('h',function(){

return view('home');    

});



route::get('adminHome',[testController::class,'home']);

route :: get ('adminWel' , [testController::class , 'abc']);




route::get('layout',function(){

    return view('adminPages.layout');
});



route::get('userFetch',[testController::class,'userFetchFunc']);




route::get('delete/{id}',[testController::class,'delete']);

route::get('edit/{id}',[testController::class,'edit']);
// route::get('addProduct',[productController::class,'product']);

route::post('updateUserPost',[testController::class,'update']);

// route::post('addProductPost',[productController::class,'addProductFunction']);


route::get('userData',[testController::class,'userData']);




route::get('productList',[productController::class,"productList"]);






route::resource('customer',customerController::class);




route::resource('car',carController::class);





route::post('search',[testController::class,'searchFunc']);



route::get('more/{id}',[testController::class,'morePics']);









route::resource('test',testResourceController::class);


route::get('testing',[testResourceController::class,'testing']);



route::get('mainWeb',function()
{
    return view("main.layout");
});



route::get('mainHome',[testController::class,'index']);






route::get('userRegister',[userController::class,'register']);


route::post('userRegisterPost',[userController::class,'registerPost']);
route::get('userLogin',[userController::class,'login']);

route::post('loginPost',[userController::class,'loginPost']);
route::get('/logout',[userController::class,'logout']);



Route::group(['middleware'=>'admin_check'], function(){
    
    route::get('addProduct',[productController::class,'product']);
    route::post('addProductPost',[productController::class,'addProductFunction']);
    route::get('user',function(){
    
        return view('adminPages.addUser');
    });
    
    route::post('addUserPost',[testController::class,'addUserFunc']);


    
});




// Route::group(['middleware'=>'admin_auth'],function(){
// });
