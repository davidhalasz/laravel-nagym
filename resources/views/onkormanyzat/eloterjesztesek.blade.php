<x-varosunk>
    <div class="max-w-4xl mx-auto mb-6">
        <h1 class="text-3xl py-6">Előterjesztések</h1>
        @foreach ($cimek as $cim)
            <h2 class="text-2xl mb-4">
                {{ $cim->title }}
            </h2>
            @foreach ($eloterjesztesek as $eloterjesztes)
                @if ($cim->id == $eloterjesztes->title_id)
                    <a href="{{ url('/storage/eloterjesztesek/' . $eloterjesztes->filepath) }}">
                        <div
                            class="hover:shadow-[9px__9px_0px_rgb(34,197,94)] text-white bg-slate-900 ease-out hover:translate-y-1 transition-all p-4 my-4">
                            <p>
                                {{ $eloterjesztes->filename }}
                            </p>
                        </div>
                    </a>
                @endif
            @endforeach
        @endforeach
    </div>
</x-varosunk>