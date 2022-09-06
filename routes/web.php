<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\GoodController;
use App\Http\Controllers\OutController;
use App\Http\Controllers\ReturController;
use App\Http\Controllers\ExpiredController;
use App\Http\Controllers\ConfirmController;
use App\Http\Controllers\LoginController;
use Illuminate\Routing\Route as RoutingRoute;

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

// Route::get('/', function () {
//     return view('auth/login');
// });

// Authentication route
Route::get('/cobaCC', function () {
    return view('auth.CC');
});

Route::get('/', [ViewController::class, 'login']);
Route::get('/register', [ViewController::class, 'register']);

// Website route
Route::get('/dashboard', [ViewController::class, 'dashboard']);
Route::get('/dashboardInven', [ViewController::class, 'Inven']);
Route::get('/myProfile', [ViewController::class, 'profile']);
Route::get('/editProfile', [ViewController::class, 'editprofile']);

// Employee route
Route::resource('employee', EmployeeController::class);
Route::get('/cobaHistoryPegawai', function () {
    return view('HR_Apps.kepegawaian.history');
});

// Inventory route
Route::resources([
    'product' => ProductController::class,
    'good' => GoodController::class,
    'out' => OutController::class,
    'retur' => ReturController::class,
    'expired' => ExpiredController::class,
    'confirm' => ConfirmController::class
]);

// Route::resource('confirms', ConfirmController::class);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);




// Division route
Route::get('/cobaDivisi', function () {
    return view('HR_Apps.divisi.divisi');
});

Route::get('/cobaTambahDivisi', function () {
    return view('HR_Apps.divisi.divisiCreate');
});

// Inventory Route
Route::get('/tableProductData', function () {
    return view('Inventory_Apps.inven.tableProductData');
});

Route::get('/tableGoodsData', function () {
    return view('Inventory_Apps.inven.tableGoodsData');
});

Route::get('/tableOutData', function () {
    return view('Inventory_Apps.inven.tableOutData');
});