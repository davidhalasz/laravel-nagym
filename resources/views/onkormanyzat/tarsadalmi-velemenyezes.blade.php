<x-varosunk>
    <div class="max-w-4xl mx-auto mb-6">
        <h1 class="text-3xl py-6">Társadalmi Véleményezés</h1>

        @foreach ($velemenyezesek as $velemenyezes)
        <div class="border border-slate-900 rounded-xl m-4 p-6">
            <p class="whitespace-pre-line mb-4">{{ $velemenyezes->description }}</p>
            <p class="mb-4">
                <a class="text-blue-500 hover:text-blue-700"
                    href="{{ url('/storage/velemenyezesek/' . $velemenyezes->filepath) }}">
                    {{ $velemenyezes->filename }}
                </a>
            </p>
        </div>
    @endforeach
    </div>
</x-varosunk>