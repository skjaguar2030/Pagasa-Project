<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Livewire\Home;


Route::get('/', Home::class)->name('home');