<?php

use function Livewire\Volt\{state};

state('username', 'John Doe');

?>

<div>
    Hello {{ $username }}
</div>
