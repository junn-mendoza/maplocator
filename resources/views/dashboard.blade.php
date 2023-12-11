<x-app-layout>


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Map Locator') }}
        </h2>
    </x-slot>
    <div class="py-0">
        <div class="container mx-auto sm:px-6 lg:px-8">
            
        <div class='w-full' id='map'></div>
            @livewire('map')
        </div>
        <script>
            const elem_start_date = document.querySelector('input[name="start_date"]');
            const datepicker1 = new Datepicker(elem_start_date, {
            // ...options
            }); 

            const elem_end_date = document.querySelector('input[name="end_date"]');
            const datepicker2 = new Datepicker(elem_end_date, {
            // ...options
            }); 

        </script>
    </div>
</x-app-layout>