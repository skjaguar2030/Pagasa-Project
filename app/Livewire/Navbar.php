<?php

namespace App\Livewire;

use Livewire\Component;

class Navbar extends Component
{
      public $activeItem = 'home';
    public $cartCount = 3;
    
    public $navItems = [
        [
            'key' => 'home',
            'label' => 'Home',
            'url' => '/',
            'icon' => 'home'
        ],
        [
            'key' => 'about',
            'label' => 'About',
            'url' => '/about',
            'icon' => 'user'
        ],
        [
            'key' => 'services',
            'label' => 'Services',
            'url' => '/services',
            'icon' => 'briefcase'
        ],
        [
            'key' => 'contact',
            'label' => 'Contact',
            'url' => '/contact',
            'icon' => 'mail'
        ]
    ];

    public function setActive($item)
    {
        $this->activeItem = $item;
        $this->emit('navItemChanged', $item);
    }

    public function incrementCart()
    {
        $this->cartCount++;
    }

    public function render()
    {
        return view('livewire.navbar');
    }
}
