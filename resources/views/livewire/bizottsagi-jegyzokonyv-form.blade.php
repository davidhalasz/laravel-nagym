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
            <div class="col-span-2 form-group mb-6 text-black">
                <label for="title" class="block mb-2 text-sm font-medium text-black">Jegyzőkönyv neve</label>
                <input type="text" id="title" wire:model="title"
                    class="bg-gray-100 border border-gray-300 text-base 
            rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                @error('title')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="custom-file my-auto">
                <label class="custom-file-label" for="chooseFile">
                    <input type="file" name="filename" class="custom-file-input" id="chooseFile"
                        wire:model="filename">
                    <span class="file-custom"></span>
                </label><br />
                @error('filename')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="year" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Válassz
                    évet</label>
                <select id="year"
                    class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    wire:model="year">
                    <option value="{{ $currentYear }}" selected>{{ $currentYear }}</option>
                    @foreach (range($currentYear - 1, 2019, -1) as $y)
                        <option value="{{ $y }}">{{ $y }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="w-full">
            <button type="submit"
                class="px-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Feltöltés</button>
        </div>
    </form>

</div>
