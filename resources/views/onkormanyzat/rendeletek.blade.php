<x-varosunk>
    <div class="max-w-4xl mx-auto mb-6">
        <h1 class="text-3xl py-6">Rendeletek</h1>

        @foreach ($rendeletek as $rendelet)
            <a href="{{ url('/storage/rendeletek/'. $rendelet->year.'/' . $rendelet->filename) }}">
                <div
                    class="hover:shadow-[9px__9px_0px_rgb(34,197,94)] text-white bg-slate-900 ease-out hover:translate-y-1 transition-all p-4 my-4">
                    <p>
                        {{ $rendelet->title }}
                    </p>
                </div>
            </a>
        @endforeach
    </div>
</x-varosunk>
