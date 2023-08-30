<?php

use function Livewire\Volt\{state};

state(['count' => 0]);

$increment = fn() => $this->count++;
?>

<div>
    <p>
        Counter: {{ $count }}
    </p>
    <x-primary-button wire:click="increment">Upvote</x-primary-button>
</div>
