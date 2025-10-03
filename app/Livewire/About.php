<?php

namespace App\Livewire;

use Livewire\Component;

class About extends Component
{
    public $statistics = [
        ['number' => '170+', 'label' => 'Weather Stations Nationwide', 'icon' => 'location'],
        ['number' => '75+', 'label' => 'Years of Service', 'icon' => 'calendar'],
        ['number' => '24/7', 'label' => 'Round-the-Clock Monitoring', 'icon' => 'clock']
    ];

    public function render()
    {
        return view('livewire.about');
    }
}
