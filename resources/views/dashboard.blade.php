<x-app-layout>


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Map Locator') }}
        </h2>
    </x-slot>
    <div class="py-6">
        <div class="container mx-auto sm:px-6 lg:px-8">
            
        <div class='w-full' id='map'></div>
            @livewire('map')
        </div>
    </div>
</x-app-layout>