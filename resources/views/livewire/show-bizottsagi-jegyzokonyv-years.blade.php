@foreach ($years as $x)
    <a href="/onkormanyzat/bizottsagi-jegyzokonyvek/{{$x->year}}" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
        <div class="ml-4 whitespace-nowrap">
            <p class=font-medium text-gray-900">{{ $x->year }}</p>
        </div>
    </a>
@endforeach
