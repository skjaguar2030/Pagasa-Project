<?php

namespace App\Livewire;

use Livewire\Component;

class AlerTicker extends Component
{
      // Hardcoded alerts for now (title + url)
       public array $alerts = [
        [
            'title' => 'Immigration alert: New EU work permit rules announced',
            'date'  => '2024-09-15',
            'url'   => '#',
        ],
        [
            'title' => 'Visa processing delays expected in Canada this fall',
            'date'  => '2024-09-15',
            'url'   => '#',
        ],
        [
            'title' => 'US H1B lottery 2026 – registration window confirmed',
            'date'  => '2024-09-15',
            'url'   => '#',
        ],
    ];
    
    public function render()
    {
        return view('livewire.aler-ticker');
    }
}
