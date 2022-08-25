<x-varosunk>
    <div class="max-w-4xl mx-auto mb-6">
        <h1 class="text-3xl py-6">Meghívók, előterjesztések, jegyzőkönyvek</h1>
        <div class="grid grid-cols-3 gap-4">
            <a href="{{ route('onkormanyzat-eloterjesztesek') }}">
                <div
                    class="hover:shadow-[9px__9px_0px_rgb(34,197,94)] text-white text-center bg-slate-900 ease-out hover:translate-y-1 transition-all p-6 my-4">
                    <p>
                        Előterjesztések
                    </p>
                </div>
            </a>
            <a href="{{ route('onkormanyzat-meghivok') }}">
                <div
                    class="hover:shadow-[9px__9px_0px_rgb(34,197,94)] text-white text-center bg-slate-900 ease-out hover:translate-y-1 transition-all p-6 my-4">
                    <p>
                        Meghívók
                    </p>
                </div>
            </a>
            <a href="{{ route('onkormanyzat-jegyzokonyvek') }}">
                <div
                    class="hover:shadow-[9px__9px_0px_rgb(34,197,94)] text-white text-center bg-slate-900 ease-out hover:translate-y-1 transition-all p-6 my-4">
                    <p>
                        Jegyzőkönyvek
                    </p>
                </div>
            </a>
        </div>
    </div>
</x-varosunk>