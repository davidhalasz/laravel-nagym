<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form>
        <div class="form-group mb-4">
            <input type="text" placeholder="Cim megadasa" wire:model="title" class="w-1/2">
            @error('title')
                <br /><span class="text-red-800 error">{{ $message }}</span>
            @enderror
        </div>

        <div class="grid grid-cols-4 gap-2 add-input mb-4">

            <div class="form-group col-span-2">
                <input type="text" placeholder="hatarozat neve" wire:model="filename.0" class="w-full">
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
                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full"
                        wire:click.prevent="remove({{ $key }})">remove</button>
                </div>
            </div>
        @endforeach
        <div class="row">
            <div class="col-md-2">
                <button class="btn text-black btn-info btn-sm"
                    wire:click.prevent="add({{ $i }})">Add</button>
            </div>
            <div class="col-md-12">
                <button type="button" wire:click.prevent="submit()" class="btn btn-success btn-sm">Save</button>
            </div>
        </div>
    </form>
</div>
