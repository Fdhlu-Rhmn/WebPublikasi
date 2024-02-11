<div class="justify-center my-8">
    <div
        class="max-w-7xl h-64 w-full items-center rounded overflow-hidden shadow-lg px-5 py-5 md:mx-auto border bg-slate-600 justify-center">
        <div class="text-white h-full w-full text-center flex justify-center items-center text-7xl"
            style="letter-spacing: 0.5em;">
            COMING SOON
        </div>
    </div>
    <div class="max-w-7xl w-full md:mx-auto">
        <div class="flex justify-center my-8">
            <h1 class="text-4xl font-bold border-b-4 border-purple-600 pb-3 me-10">Koleksi Buku</h1>
        </div>
    </div>
    <div
        class="max-w-7xl w-full items-center rounded overflow-hidden shadow-lg px-5 py-3 md:mx-auto border justify-center">
        <div class="max-w-7xl w-full md:mx-auto my-2">
            <div class="grid grid-cols-5 gap-4">
                @foreach ($books as $book)
                    <a href="books/{{ $book->id }}">
                        <div class="border-x-2 border-y-2  p-4 relative rounded-md shadow-lg w-full">
                            <div class="mb-2 absolute top-0 right-0 bg-transparent text-right">
                                @php
                                    $isNewBook = $book->tag == '1' && $book->created_at->gt(\Carbon\Carbon::now()->subYear());
                                @endphp

                                @if ($isNewBook)
                                    <span class="px-2 py-1 bg-green-500 text-white text-xs rounded">New Book</span>
                                @elseif($book->tag == '2')
                                    <span class="px-2 py-1 bg-red-500 text-white text-xs rounded">Upcoming</span>
                                    {{-- @else
                                <span class="px-2 py-1 bg-gray-500 text-white text-xs rounded">Old Book</span> --}}
                                @endif
                            </div>
                            <div class="flex flex-col py-3">
                                <div class="w-full h-32 bg-gray-200 overflow-hidden">
                                    <img id="book-image-{{ $book->id }}"
                                        src="{{ asset('storage/post-images/placeholder.jpeg') }}"
                                        data-src="{{ asset('storage/' . $book->image_featured) }}" alt="Book Cover"
                                        class="mb-2 object-cover object-center w-full h-full">
                                </div>
                                <span class="mb-2 text-center font-bold">{{ $book->title }}</span>
                                <span class="text-justify truncate">{{ $book->desc }}</span>
                                <span class="font-semibold text-gray-900 text-sm py-2">{{ $book->isbn }}</span>
                            </div>
                            <span
                                class="text-sm text-white font-bold rounded-xl bg-purple-500 px-2 py-1">{{ $book->years }}</span>
                        </div>
                    </a>
                @endforeach
            </div>
            <div class="flex py-3 justify-end">
                <a class="text-purple-600 text-lg px-4 flex items-center font-bold" href="/books">
                    <span>Lihat Selengkapnya</span>
                    <x-bi-arrow-right class=" px-1 h-6 w-6 font-bold" />
                </a>
            </div>
        </div>
    </div>
</div>
