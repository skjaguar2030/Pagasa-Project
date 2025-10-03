<?php

namespace App\Livewire;

use Livewire\Component;

class ImageSlider extends Component
{
    public $currentSlide = 0;

    public $teamImages = [
        [
            'url' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=800&h=600&fit=crop',
            'title' => 'Weather Monitoring Team',
            'description' => 'Our meteorologists at work'
        ],
        [
            'url' => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=800&h=600&fit=crop',
            'title' => 'Climate Research',
            'description' => 'Analyzing climate data'
        ],
        [
            'url' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=800&h=600&fit=crop',
            'title' => 'Technology Center',
            'description' => 'State-of-the-art equipment'
        ],
        [
            'url' => 'https://images.unsplash.com/photo-1551836022-d5d88e9218df?w=800&h=600&fit=crop',
            'title' => 'Field Operations',
            'description' => 'On-site data collection'
        ],
        [
            'url' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?w=800&h=600&fit=crop',
            'title' => 'Collaboration',
            'description' => 'Working together for accuracy'
        ]
    ];

      public function nextSlide()
    {
        $this->currentSlide = ($this->currentSlide + 1) % count($this->teamImages);
    }

    public function previousSlide()
    {
        $this->currentSlide = ($this->currentSlide - 1 + count($this->teamImages)) % count($this->teamImages);
    }

    public function goToSlide($index)
    {
        $this->currentSlide = $index;
    }
    
    public function render()
    {
        return view('livewire.image-slider');
    }
}
