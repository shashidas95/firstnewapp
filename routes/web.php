<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;

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

    //dd(app());
       return view('welcome');
});

//view route
//  Route::view('/about', 'about');



Route::get('/about', function () {
    return view('about');
});


// Route::get('/contact', function () {
//     return view('contact');
// });

//__Routed parameters__ required parameters__//

// Route::get('/contact/{id}', function ($id) {
//     return $id;
// });


//__named route__//


// Route::get('/about', function () {
//     return view('about');
// })->name('about');


// Route::get(md5('/contact'), function () {
//     return view('contact');
// })->name('contact');


// __laravel 7

//Route::get('/contact', 'FirstController@index')->name('contact');

//__laravel 8
Route::get('/contact', [FirstController::class, 'index'])->name('contact');



//__middleware use__//

Route::get('/country', function (){
    return view('country');
})->middleware('country');

// request response//

//Route::post('/contact-us', [FirstController::class, 'store'])->name('contact-us');

//__form validation__//

Route::post('/store/contact', [FirstController::class, 'store'])->name('store.contact');








//__for authentication login logout__//
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
