<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

// Redirect root URL to items.index
Route::get('/', function () {
    return redirect()->route('items.index');
});


Route::resource('items', ItemController::class);
