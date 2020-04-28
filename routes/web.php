<?php

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



Route::get('/', function () {
    return view('welcome');
});

// Route::get('/model', function () {
    //****active record
    // $products = \App\User::all(); //igual um select * from


    // return $products;

    //****mass assigment - atribuição em massa

    // $user = \App\User::create([
    //     'name' => 'Alquipo Neto',
    //     'email' => 'alquiponeto@tesste.com',
    //     'password'=> bcrypt('123456789')
    // ]);

    // return \App\User::all();
    
    //****mass update
    // $user = \App\User::find(83);
    // $user->update([
    //     'name'=> 'Atualizado'
    // ]);
    // return \App\User::all();


    //****como pego a loja de um usuario
    // $user = \App\User::find(4);

    // return $user->store; //o bjeto unico (store) se for collection de dados (objeto)
    
    //****criar uma loja para um usuario
    // $user = \App\User::find(10);
    // $store = $user->store()->create([
    //     'name' => 'Loja teste',
    //     'description' => 'loja teste de produto de informatica',
    //     'mobile_phone' => 'xx-xxxxx-xxxx',
    //     'phone' => 'xx-xxxxx-xxxx',
    //     'slug' => 'loja-teste'

    // ]);
    //****criar um produto para um loja
        // $store = \App\Store::find(41);
        // $product = $store->products()->create([
        //     'name'=>  'Notebook Dell',
        //     'description'=> 'core i5 10 gb',
        //     'body'=> 'qualquer coisa',
        //     'price'=>'2999.90',
        //     'slug'=>'notebook-dell',
        // ]);
    //****criar uma categoria
            // \App\Category::create([
            //     'name' => 'Games',
            //     'description' => null,
            //     'slug' => 'games'
            // ]);

            // \App\Category::create([
            //     'name' => 'Notebook',
            //     'description' => null,
            //     'slug' => 'notebook'
            // ]);

                // $product = \App\Product::find(41);
                
                // dd($product->categories()->sync([1, 2]));

           


    //****adicionar um produto para uma categoria ou vice versa
    
    
    
    // return \App\User::all();
// });

//Route::post('admin/stores/store', 'Admin\\StoreController@store'); exemplo sem o prefix

Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function(){

    // Route::prefix('stores')->name('stores.')->group(function(){

    //     Route::get('/', 'StoreController@index')->name('index');
    //     Route::get('/create', 'StoreController@create')->name('create');
    //     Route::post('/store', 'StoreController@store')->name('store');
    //     Route::get('/{store}/edit', 'StoreController@edit')->name('edit');
    //     Route::post('/update/{store}', 'StoreController@update')->name('update');
    //     Route::get('/destroy/{store}', 'StoreController@destroy')->name('destroy');
    //     //Route::post('admin/stores/store', 'Admin\\StoreController@store'); exemplo sem o prefix
    // });

    Route::resource('stores', 'StoreController');
    Route::resource('products', 'ProductController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
