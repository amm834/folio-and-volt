<x-guest-layout :isShowLogo="false">
    <livewire:counter/>
    <a href="{{ route('login') }}">Login</a>
    <a href="{{ route('register') }}">Register</a>
</x-guest-layout>
