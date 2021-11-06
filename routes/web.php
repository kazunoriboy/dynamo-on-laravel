<?php

use App\Models\Item;
use Carbon\Carbon;
use Illuminate\Http\Request;
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
    $items = Item::all();
    return view('list', ['items' => $items]);
});

Route::get('item', function (Request $request) {
    $item = new Item;
    $item->id = rand(1, 100000);
    $item->release_date = Carbon::now()->format('Y-m-d');
    $item->name = $request->name;
    $item->save();
    return redirect('/');
})->name('store');
