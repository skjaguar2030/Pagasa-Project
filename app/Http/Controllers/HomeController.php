<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Example nav items array
        $navItems = [
            [
                'name' => 'Home', 
                'url' => route('home'), 
                'hasDropdown' => false
            ],

            [
                'name' => 'Features', 
                'url' => '#', 
                'hasDropdown' => true
            ],

            [
                'name' => 'Pricing', 
                'url' => '#', 
                'hasDropdown' => false
            ],
        ];

        return view('livewire.home', compact('navItems'));
    }
}