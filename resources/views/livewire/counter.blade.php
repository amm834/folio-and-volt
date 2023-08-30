<?php

use function Livewire\Volt\{state};

state(['count' => 0]);

$increment = fn() => $this->count++;
?>

<div>

    <div>
        Counter: {{ $count }}
    </div>
    <x-primary-button wire:click="increment">Upvote</x-primary-button>
</div>
