<?php

namespace App\Livewire;

use Livewire\Component;

class Contact extends Component
{
    public $inquiryType = '';
    public $firstName = '';
    public $lastName = '';
    public $email = '';
    public $phone = '';
    public $message = '';
    public $captchaVerified = false;
    public $submitSuccess = false;
    public $submitMessage = '';

    public $inquiryTypes = [
        'general' => 'General Inquiry',
        'weather' => 'Weather Information Request',
        'climate' => 'Climate Data Request',
        'research' => 'Research Collaboration',
        'media' => 'Media & Press Inquiry',
        'technical' => 'Technical Support',
        'emergency' => 'Emergency Weather Alert',
        'feedback' => 'Feedback & Suggestions',
    ];

    protected $rules = [
        'inquiryType' => 'required',
        'firstName' => 'required|min:2',
        'lastName' => 'required|min:2',
        'email' => 'required|email',
        'phone' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        'message' => 'required|min:10',
    ];

    protected $messages = [
        'inquiryType.required' => 'Please select an inquiry type.',
        'firstName.required' => 'First name is required.',
        'lastName.required' => 'Last name is required.',
        'email.required' => 'Email address is required.',
        'email.email' => 'Please enter a valid email address.',
        'phone.regex' => 'Please enter a valid phone number.',
        'message.required' => 'Please tell us how we can help you.',
        'message.min' => 'Message must be at least 10 characters.',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submitContact()
    {
        $this->validate();

        // Simulate captcha verification check
        if (!$this->captchaVerified) {
            $this->addError('captcha', 'Please verify that you are not a robot.');
            return;
        }

        // Simulate form submission (in real app, save to database or send email)
        $this->submitSuccess = true;
        $this->submitMessage = 'Thank you for contacting PAGASA! We have received your inquiry and will respond within 24-48 hours.';

        // Reset form
        $this->reset(['inquiryType', 'firstName', 'lastName', 'email', 'phone', 'message', 'captchaVerified']);
        
        // Emit success event
        $this->emit('contactSubmitted');
    }

    public function verifyCaptcha()
    {
        // Simulate captcha verification
        $this->captchaVerified = true;
    }

    public function render()
    {
        return view('livewire.contact');
    }
}
