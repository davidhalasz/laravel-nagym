<x-varosunk>
    <div class="max-w-4xl mx-auto mb-6">
        <h1 class="text-3xl py-6">Határozatok</h1>
        @foreach ($hatarozatCimek as $cim)
            <h2 class="text-2xl mb-4">
                {{ $cim->title }}
            </h2>
            @foreach ($hatarozatok as $hatarozat)
                @if ($cim->id == $hatarozat->title_id)
                    <a href="{{ url('/storage/hatarozatok/'. $hatarozat->year.'/' . $hatarozat->filepath) }}">
                        <div
                            class="hover:shadow-[9px__9px_0px_rgb(34,197,94)] text-white bg-slate-900 ease-out hover:translate-y-1 transition-all p-4 my-4">
                            <p>
                                {{ $hatarozat->filename }}
                            </p>
                        </div>
                    </a>
                @endif
            @endforeach
        @endforeach
    </div>
</x-varosunk>
