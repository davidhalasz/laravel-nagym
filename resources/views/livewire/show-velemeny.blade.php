<div class="p-6 mx-auto">
    @foreach ($velemenyezesek as $velemenyezes)
        <div class="bg-slate-900 text-white rounded-xl m-4 p-6">
            <p class="whitespace-pre-line mb-4">{{ $velemenyezes->description }}</p>
            <p class="mb-4">
                <a class="text-blue-500 hover:text-blue-700"
                    href="{{ url('/storage/velemenyezesek/' . $velemenyezes->filepath) }}">
                    {{ $velemenyezes->filename }}
                </a>
            </p>
            <div class="w-full text-right">
                <button wire:click="delete({{ $velemenyezes->id }})"
                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">Törlés</button>
            </div>
            
        </div>
    @endforeach
</div>
