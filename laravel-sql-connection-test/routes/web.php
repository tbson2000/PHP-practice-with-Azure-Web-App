<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatabaseConnectionTestController;

Route::get('/test-database-connection-form', function () {
    return view('/database_connection_test');
});

Route::get('/test-database-connection', [DatabaseConnectionTestController::class, 'showForm']);

Route::post('/test-database-connection', [DatabaseConnectionTestController::class, 'index'])->name('test-database-connection');

// Route for testing the database connection
// Route::get('app/http/controllers/test-database-connection', [DatabaseConnectionTestController::class, 'index']);

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
