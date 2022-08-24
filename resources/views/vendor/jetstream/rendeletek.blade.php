<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h1 class="p-6 text-center text-2xl">Rendeletek szerkesztese</h1>
                <div class="card-body p-6">
                    @livewire('rendeletek-form')
                </div>
                <h1 class="p-6 text-center text-xl">Feltoltott rendeletek</h1>
                @livewire('show-rendeletek') 
                @livewireScripts
                
                
            </div>
        </div>
    </div>
</x-app-layout>