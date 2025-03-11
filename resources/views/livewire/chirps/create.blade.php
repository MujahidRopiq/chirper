<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Validate;

new class extends Component {
    #[Validate('required|string|max:255')]
    public string $message = '';

    public function store(): void { 
        $validated = $this->validate(); 

        auth()->user()->chirps()->create($validated);

        $this->message= '';

        $this->dispatch('chirp-created');
    }
}; ?>

<div>
    
<form action="" wire:submit='store'>
    <textarea name="" wire:model='message' 
    placeholder="{{ __('Whats on your mind?') }}"
    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"></textarea>
    <x-input-error :messages='$errors->get("message")' class="mt-2"></x-input-error>
    <x-primary-button class="mt-4">{{ __('chirp') }}</x-primary-button>
</form>
</div>
