<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!]

    Route::controller(OrderController::class)->group(function () {
    Route::get('/orders/{id}', 'show');
    Route::post('/orders', 'store');
});
|
*/

Route::controller(AboutUsController::class)->group(function () {
    Route::get('/login', function() {return 'Login';})->name('site.login');
});

Route::controller(MainController::class)->group(function () {
    Route::get('/', 'main')->name('site.index');
});
Route::controller(AboutUsController::class)->group(function () {
    Route::get('/about-us', 'aboutUs')->name('site.about-us');
});

Route::controller(ContactController::class)->group(function () {
    Route::get('/contact', 'contact')->name('site.contact');
    Route::get('/contact/{email}', function (string $email) {
        echo 'Function from parameter route!! E-mail: ' . $email; // double quotes for intercalation od variables and strings
    });
});

Route::controller(TestController::class)->group(function () {
    Route::get('/test/{p1}/{p2}', 'test')->name('test');
});

// Route::get('/test/{p1}/{p2}', [TestController::class, 'test'])->name('test');

Route::prefix('/app')->group(function () {
    Route::get('/client', function () {return 'Client';})->name('app.client');
    Route::get('/product', function () {return 'Product';})->name('app.product');

    Route::controller(SupplierController::class)->group(function () {
        Route::get('/supplier', 'index')->name('app.supplier');
    });

});

Route::fallback(function () {
    echo 'Page not found. <a href=' . route('site.index') . '>Click here</a> to be redirected.';
});

 
//     //Optional Parameter
//     Route::get('/contact/{email}/{subject}/{name)/{message?}', function (string $email, string $subject, string $name, $message = 'message not informed.') {
//         echo 'Function from optionalparameter route!!';
//         echo "Email: $email \n Subject: $subject \n Message: $message";
//     });
//     //Regular Expressions
//     Route::get('/contact/{email}/{id_subject}', function (string $email, int $id_subject = 1) {
//         echo 'Function from optional parameter with RE route!!';
//         echo "Email: $email \n Subject: $id_subject ";
//     })->where('id_subject', '[0-9]+')->where('email', '[A-Za-z]+'); //forces email to be in letters and id to be number. both required
// });

