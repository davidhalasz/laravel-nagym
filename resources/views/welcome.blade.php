<x-guest-layout>
    <div>
        <div class="bg-cover bg-center bg-[url('../../public/images/varosunk/nagymaros_banner-scaled.jpeg')] h-96 relative">
            <div class="w-9/12 bg-slate-900 bg-opacity-70 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 p-10">
                <p class="text-3xl md:text-[40px] text-white font-black text-center">
                    Polgárváros, királyi panorámával
                </p>
                <p class=" mt-4 text-xl text-white font-black text-center">
                    Nagymaros Hivatalos Weboldala
                </p>
                
            </div>
            <div class="grid grid-cols-7 gap-4 h-screen content-center">
                <a href="{{ route('latnivalok') }}"
                    class="font-black col-start-2 col-end-4 hover:shadow-[9px__9px_0px_rgb(34,197,94)] text-white text-center bg-slate-900 ease-out hover:translate-y-1 transition-all p-6 my-4">
                    <div>
                        <p>
                            Turizmus
                        </p>
                    </div>
                </a>
                <div class="col-start-4 col-end-4">
                    <img class="h-28 mx-auto" src="{{ asset('images/varosunk/logo-1-e1594975686447.png') }}"
                            alt="">
                </div>
                <a href="{{ route('koszonto') }}"
                    class="font-black col-end-7 col-span-2 hover:shadow-[9px__9px_0px_rgb(34,197,94)] text-white text-center bg-slate-900 ease-out hover:translate-y-1 transition-all p-6 my-4">
                    <div>
                        <p>
                            Önkormányzat
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</x-guest-layout>
