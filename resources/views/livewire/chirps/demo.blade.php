<?php

use Livewire\Volt\Component;

new class extends Component {
    public $properti = 'Na"am';

}; ?>

<div>
    <x-primary-button class="mt-4">{{ $properti }}</x-primary-button>
</div>
