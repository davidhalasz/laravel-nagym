<x-varosunk>
    <div class="max-w-4xl mx-auto mb-6">
        <h1 class="text-3xl py-6">Eseménynaptár</h1>
        @foreach ($esemenyek as $esemeny)
            @php
                $explodedStart = explode(' ', $esemeny->startDate);
                $explodedEnd = explode(' ', $esemeny->endDate);
                setlocale(LC_ALL, 'hu_HU');
                $startMonth = strftime('%B', strtotime($explodedStart[0]));
                $startDay = strftime('%e', strtotime($explodedStart[0]));

                $startDate = strftime('%B %e', strtotime($esemeny->startDate)) . ' ' . $explodedStart[1];
                $endDate = strftime('%B %e', strtotime($esemeny->endDate)) . ' ' . $explodedEnd[1];
            @endphp
            <div class="flex gap-4 mb-4">
                <div class="flex h-28 w-28 bg-slate-900 rounded-xl">
                    <div class="m-auto text-white font-bold text-center">
                        {{ $startMonth }}<br />
                        {{ $startDay }}
                    </div>
                </div>
                <div class="flex-1">
                    <p>
                        {{ $startDate }} - {{ $endDate }}
                    </p>
                    <a href="{{ url('/storage/esemenyek/' . $esemeny->filepath) }}">
                        <div class="w-full">
                            <p class="font-bold text-lg">
                                {{ $esemeny->title }}
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</x-varosunk>
