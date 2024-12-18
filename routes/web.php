<?php

use App\Models\Member;
use App\Models\Category;
use App\Models\PdtContent;
use App\Models\PdtImages;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
    // return Member::all();
});
