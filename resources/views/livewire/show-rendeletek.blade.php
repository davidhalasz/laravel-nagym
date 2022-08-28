<div class="p-6 mx-auto">
    <table class="table table-bordered p-6 w-full">
        <tr>
            <th class="border-b border-slate-300 py-4 px-6 text-left">Cím</th>
            <th class="border-b border-slate-300 py-4 px-6 text-left">Fájlnév</th>
            <th class="border-b border-slate-300 py-4 px-6 text-left"></th>
        </tr>
        @foreach ($rendeletek as $rendelet)
        <tr>
            <td class="border-b border-slate-300 py-4 px-6 ">{{ $rendelet->title }}</td>
            <td class="border-b border-slate-300 py-4 px-6">
                <a class="text-blue-500 hover:text-blue-700" href="{{ url('/storage/rendeletek/'. $rendelet->year.'/'.$rendelet->filename) }}">
                    {{ $rendelet->filename }}
                </a>
            </td>
            <td class="border-b border-slate-300 py-4 px-6 text-center">
                <button wire:click="delete({{ $rendelet->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">Törlés</button>
            </td>
        </tr>
        @endforeach
      </table>
</div>