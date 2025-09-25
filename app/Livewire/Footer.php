<?php

namespace App\Livewire;

use Livewire\Component;

class Footer extends Component
{
    public $email = '';
    public $subscriptionMessage = '';
    public $isSubscribed = false;
    public $showContactModal = false;

    /**
     * Handle newsletter subscription
     */
    public function subscribe()
    {
        // validate email
        $this->validate([
            'email' => 'required|email',
        ]);

        // (Fake subscription logic for demo purposes)
        // In real case: save to DB or send to mailing service
        $this->isSubscribed = true;
        $this->subscriptionMessage = "You are now subscribed with {$this->email}";

        // reset email input
        $this->reset('email');
    }

    /**
     * Open contact modal
     */
    public function openContactModal()
    {
        $this->showContactModal = true;
    }

    /**
     * Close contact modal
     */
    public function closeContactModal()
    {
        $this->showContactModal = false;
    }

    public function render()
    {
        return view('livewire.footer');
    }
}
