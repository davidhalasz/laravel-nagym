<div>
    @if (session()->has('message'))
        <div
            class="alert alert-success bg-emerald-300 text-white 
        rounded-lg focus:ring-blue-500 focus:border-blue-500 block mx-auto p-2.5 w-1/2 text-center font-bold mb-6">
            {{ session('message') }}
        </div>
    @endif


    <form wire:submit.prevent="submit">
        <div class="grid grid-cols-3 gap-4">
            <div class="col-span-3 form-group mb-4 text-black">
                <label for="title" class="block mb-2 text-sm font-medium text-black">Leírás</label>
                <textarea id="description" rows="4" wire:model="description"
                    class="bg-gray-50 block p-2.5 w-full text-sm rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"></textarea>
                @error('description')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-span-2 form-group mb-4 text-black">
                <label for="filename" class="block mb-2 text-sm font-medium text-black">Tervezet címe</label>
                <input type="text" id="filename" wire:model="filename"
                    class="bg-gray-50 border border-gray-300 text-base 
                rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                @error('filename')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="custom-file my-auto mb-4">
                <label class="custom-file-label" for="chooseFile">
                    <input type="file" name="filepath" class="custom-file-input" id="chooseFile"
                        wire:model="filepath">
                    <span class="file-custom"></span>
                </label><br/>
                @error('filepath')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="w-full">
            <button type="submit"
                class="px-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Feltöltés</button>
        </div>

    </form>
</div>
