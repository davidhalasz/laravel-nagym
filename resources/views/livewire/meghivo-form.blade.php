<form wire:submit.prevent="submit">
    <div class="grid grid-cols-3 gap-4">
        <div class="col-span-2 form-group mb-6 text-black">
            <label for="title" class="block mb-2 text-sm font-medium text-black">Meghívó neve</label>
            <input type="text" id="title" wire:model="title"
                class="bg-gray-100 border border-gray-300 text-base 
            rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            @error('title')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="custom-file my-auto">
            <label class="custom-file-label" for="chooseFile">
                <input type="file" name="filename" class="custom-file-input" id="chooseFile" wire:model="filename">
                <span class="file-custom"></span>
              </label>
        </div>
    </div>

    <div class="w-full">
        <button type="submit"
            class="px-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Feltöltés</button>
    </div>

</form>
