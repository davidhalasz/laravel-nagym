<div class="p-6 mx-auto">
    @foreach ($esemenyek as $esemeny)
        <div class="mb-6">
            <div class="bg-gray-200 w-full">
                <h2 class="text-lg text-center font-bold p-2">
                    {{ $esemeny->title }}
                </h2>
            </div>
        </div>
    @endforeach
</div>