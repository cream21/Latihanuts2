<?php
use App\Http\Controllers\RentalController;
use Illuminate\Support\Facades\Route;

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
Route::view('template', 'template/master-rental');

Route::get('data-rental',[RentalController::class, 'index']);
Route::get('add-rental',[RentalController::class, 'create']);
Route::post('save-rental',[RentalController::class, 'ambilData'])->name('rental.save-rental');
Route::delete('delete-rental/{id}',[RentalController::class, 'destroy'])->name('delete.rental');
//edit data
Route::get('edit-rental/{id}/edit', [RentalController::class, 'edit'])->name('edit.rental');
//proses update
Route::put('edit-rental/{id}', [RentalController::class, 'update'])->name('update.rental');

