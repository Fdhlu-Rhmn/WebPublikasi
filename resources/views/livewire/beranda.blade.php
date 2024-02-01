<div class="justify-center my-8">
    <div class="max-w-7xl h-64 w-full items-center rounded overflow-hidden shadow-lg px-5 py-5 md:mx-auto border bg-slate-600 justify-center">
        <div class="text-white h-full w-full text-center flex justify-center items-center text-7xl" style="letter-spacing: 0.5em;"> 
            COMING SOON
        </div>
    </div>
    <div class="max-w-7xl w-full md:mx-auto my-12">
        <div class="grid grid-cols-5 gap-4">
            @foreach($books as $book)
            <a href="books/{{$book->id}}">
                <div class="border p-4 relative flex flex-col items-center">
                    <div class="mb-2 absolute top-0 right-0 bg-transparent text-right">
                        @php
                            $isNewBook = $book->tag == '1' && $book->created_at->gt(\Carbon\Carbon::now()->subYear());
                        @endphp
                    
                        @if($isNewBook)
                            <span class="px-2 py-1 bg-green-500 text-white text-xs rounded">New Book</span>
                        @elseif($book->tag == '2')
                            <span class="px-2 py-1 bg-red-500 text-white text-xs rounded">Upcoming</span>
                        {{-- @else
                            <span class="px-2 py-1 bg-gray-500 text-white text-xs rounded">Old Book</span> --}}
                        @endif
                    </div>
                    <img src="{{ asset('storage/' . $book->image_featured) }}" alt="Cover Buku" class="mb-2">
                    <span class="mb-2">{{ $book->price ?? 'Price not available' }}</span>
                        <span>{{ $book->title }}</span>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>
