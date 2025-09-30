<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\Contact;


Route::get('/', Home::class)->name('home');
Route::get('/contact', Contact::class)->name('contact');