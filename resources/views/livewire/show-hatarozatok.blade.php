<div class="p-6 mx-auto">
    @foreach ($cimek as $cim)
    <h2 class="text-lg">
        {{ $cim->title }}
    </h2>
        <table class="table table-bordered p-6 mx-auto">
            <tr class="p-6">
                <th class="border-b border-slate-300  text-center">Határozat neve</th>
                <th class="border-b border-slate-300  text-center"></th>
            </tr>
            @foreach ($hatarozatok as $hatarozat)
                @if ($hatarozat->title_id == $cim->id)
                    <tr>
                        
                        <td class="border-b border-slate-300 py-4 px-6">{{ $hatarozat->filename }}</td>
                        <td class="border-b border-slate-300 py-4 px-6 text-center">
                            <button wire:click="delete({{ $hatarozat->id }})"
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">Törlés</button>
                        </td>
                    </tr>
                @endif
            @endforeach
        </table>
    @endforeach
</div>
