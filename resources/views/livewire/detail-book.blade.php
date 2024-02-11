<div class="flex flex-col justify-center my-8">
    <div class="max-w-7xl w-full items-center rounded overflow-hidden shadow-lg px-5 py-3 md:mx-auto border justify-center">
        <div class="flex md:flex-shrink-0">
            <img class="h-auto w-full md:w-48" src="{{ asset('storage/post-images/placeholder.jpeg') }}"
                data-src="{{ asset('storage/' . $book->image_featured) }}" alt="Cover Buku">
            <table class="w-full text-sm text-left rtl:text-right">
                <tbody>
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black">
                            Judul
                        </th>
                        <td class="px-6 py-4">
                            {{ $book->title }}
                        </td>
                    </tr>
                    <tr class="bg-white border-b">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black">
                            Penulis
                        </th>
                        <td class="px-6 py-4">
                            {{ $book->writer }}
                        </td>
                    </tr>
                    <tr class="bg-white border-b">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black">
                            Ukuran Buku
                        </th>
                        <td class="px-6 py-4">
                            {{ $book->size_book }}
                        </td>
                    </tr>
                    <tr class="bg-white border-b">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black">
                            Jumlah Halaman
                        </th>
                        <td class="px-6 py-4">
                            {{ $book->book_page }}
                        </td>
                    </tr>
                    <tr class="bg-white border-b">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black">
                            Tahun Terbit
                        </th>
                        <td class="px-6 py-4">
                            {{ $book->years }}
                        </td>
                    </tr>
                    <tr class="bg-white border-b">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black">
                            ISBN
                        </th>
                        <td class="px-6 py-4">
                            {{ $book->isbn }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="flex pt-3">
            {{ $book->desc }}
        </div>
    </div>
    <div class="max-w-7xl w-full md:mx-auto py-10">
        <div class="grid grid-cols-5 gap-4">
            @foreach ($books as $book)
                <a href="books/{{ $book->id }}">
                    <div class="border-x-2 border-y-2  p-4 relative rounded-md shadow-lg">
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
                            <img id="book-image-{{ $book->id }}"
                            src="{{ asset('storage/post-images/placeholder.jpeg') }}"
                            data-src="{{ asset('storage/' . $book->image_featured) }}" alt="Book Cover" class="mb-2 mx-auto">
                            <span class="mb-2 text-center ">{{ $book->title }}</span>
                            <span class="text-justify">{{ $book->desc }}</span>
                            <span class="font-semibold text-gray-900 text-sm py-2">{{ $book->isbn }}</span>
                            <span class="mb-2 text-center flex items-center"><x-bi-cart-fill class="text-gray-500 pr-1"/>{{ $book->price ?? 'Rp. XXX.XXX,XX' }}</span>
                        </div>
                        <span class="text-sm text-white font-bold rounded-xl bg-purple-500 px-2 py-1">{{ $book->years }}</span>
                    </div>
                </a>
            @endforeach
        </div>
        <div class="flex py-3 justify-end">
            <a class="text-purple-600 text-lg px-4 flex items-center font-bold" href="/books">
                <span>Lihat Selengkapnya</span>
                <x-bi-arrow-right class=" px-1 h-6 w-6 font-bold"/>
            </a> 
        </div>
    </div>
</div>
