<div>
    @if (session()->has('message'))
        <div
            class="alert alert-success bg-emerald-400 border border-emerald-800 text-white 
        rounded-lg focus:ring-blue-500 focus:border-blue-500 block mx-auto p-2.5 w-1/2 text-center font-bold mb-6">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="submit">
        <div class="grid grid-cols-2 gap-4 mb-6">
            <div class="relative mr-10">
                <div class="absolute right-0 w-fit">
                    <label for="meeting-time">Esemény kezdete</label><br />

                    <input type="text" id="startDate" name="startDate"
                        class="flatpickr myFlatpickr border border-gray-300 text-base 
                    rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5"
                        wire:model="startDate" placeholder="Válassz időpontot">
                    @error('startDate')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

            </div>

            <div class="">
                <label for="meeting-time">Esemény vege</label><br />

                <input type="text" id="endDate" name="endDate"
                    class="flatpickr myFlatpickr border border-gray-300 text-base 
                rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5"
                    wire:model="endDate" placeholder="Válassz időpontot">
                @error('endDate')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <script>
                flatpickr(".myFlatpickr", {
                    enableTime: true,
                    time_24hr: true,
                    dateFormat: "Y-m-d H:i"
                });
            </script>

            <div class="form-group mb-6 text-black">
                <label for="title" class="block mb-2 text-sm font-medium text-black">Esemeny neve</label>
                <input type="text" id="title" wire:model="title"
                    class="bg-gray-100 border border-gray-300 text-base 
        rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                @error('title')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="custom-file my-auto">
                <label class="custom-file-label" for="chooseFile">
                    <input type="file" name="filepath" class="custom-file-input" id="chooseFile"
                        wire:model="filepath">
                    <span class="file-custom"></span>
                </label><br />
                @error('filepath')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="w-full">
                <button type="submit"
                    class="px-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Feltöltés</button>
            </div>
        </div>
    </form>
</div>
