<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\Contact;
use App\Livewire\About;


Route::get('/', Home::class)->name('home');
Route::get('/contact', Contact::class)->name('contact');
Route::get('/about', About::class)->name('about');