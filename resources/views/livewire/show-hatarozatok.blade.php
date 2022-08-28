<div class="p-6 mx-auto">
    @foreach ($cimek as $cim)
        <div class="mb-6">
            <div class="bg-gray-200 w-full">
                <h2 class="text-lg text-center font-bold p-2">
                    {{ $cim->title }}
                </h2>
            </div>
            <table class="table table-bordered p-6 w-full">
                @foreach ($hatarozatok as $hatarozat)
                    @if ($hatarozat->title_id == $cim->id)
                        <tr>
                            <td class="border-b border-slate-300 py-4 px-6">
                                <a class="text-blue-500 hover:text-blue-700" href="{{ url('/storage/hatarozatok/'. $hatarozat->year.'/'.$hatarozat->filepath) }}">
                                    {{ $hatarozat->filename }}
                                </a> 
                            </td>
                            <td class="border-b border-slate-300 py-4 px-6 text-right">
                                <button wire:click="delete({{ $hatarozat->id }})"
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">Törlés</button>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </table>
        </div>
    @endforeach
</div>
