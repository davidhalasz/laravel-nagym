<div>
    @if (session()->has('message'))
        <div class="alert alert-success bg-emerald-400 border border-emerald-800 text-white 
        rounded-lg focus:ring-blue-500 focus:border-blue-500 block mx-auto p-2.5 w-1/2 text-center font-bold mb-6">
            {{ session('message') }}
        </div>
    @endif

    <form>
        

        <div class="grid grid-cols-4 gap-2 add-input mb-4">
            <div class="col-span-2 form-group mb-6 text-black">
                <label for="year" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Cím</label>
                <input type="text" placeholder="Cím megadása" wire:model="title" class="bg-gray-100 border border-gray-300 text-base 
                rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                @error('title')
                    <br /><span class="text-red-800 error">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-6">
                <label for="year" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Válassz
                    évet</label>
                <select id="year"
                    class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    wire:model="year">
                    <option selected>Válassz évet</option>
                    @foreach (range($currentYear, 2019, -1) as $y)
                        <option value="{{ $y }}">{{ $y }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-span-2">
                <input type="text" placeholder="Határozat neve" wire:model="filename.0" class="bg-gray-100 border border-gray-300 text-base 
                rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 w-full">
                @error('filename.0')
                    <br /><span class="text-red-800 error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group my-auto">
                <label class="custom-file-label" for="chooseFile.0">
                    <input type="file" name="filename.0" class="custom-file-input" id="chooseFile.0"
                        wire:model="filepath.0">
                    @error('filepath.0')
                        <br /><span class="text-red-800 error">{{ $message }}</span>
                    @enderror
                </label>
            </div>
        </div>


        @foreach ($inputs as $key => $value)
            <div class="grid grid-cols-4 gap-2 add-input mb-4">
                <div class="form-group col-span-2">
                    <input type="text" placeholder="Hatarozat neve"
                        wire:model="filename.{{ $value }}" class="w-full">
                    @error('filename.' . $value)
                        <br /><span class="text-red-800 error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group my-auto">
                    <label class="custom-file-label" for="chooseFile.{{ $value }}">
                        <input type="file" name="filename.{{ $value }}" class="custom-file-input" id="chooseFile.{{ $value }}"
                        wire:model="filepath.{{ $value }}">
                        @error('filepath.' . $value)
                            <br /><span class="text-red-800 error">{{ $message }}</span>
                        @enderror
                    </label>
                </div>
                <div class="ml-6">
                    <button class="px-4 text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800"
                        wire:click.prevent="remove({{ $key }})">Törlés</button>
                </div>
            </div>
        @endforeach
        <div class="row">
            <div class="col-md-2">
                <button class="px-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                    wire:click.prevent="add({{ $i }})">Új fájl hozzáadása</button>
            </div>
            <div class="col-md-12 text-right">
                <button type="button" wire:click.prevent="submit()" class="px-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Feltöltés</button>
            </div>
        </div>
    </form>
</div>
