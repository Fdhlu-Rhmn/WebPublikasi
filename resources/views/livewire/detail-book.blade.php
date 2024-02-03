<div class="flex justify-center my-8">
    <div class="max-w-4xl w-full rounded overflow-hidden shadow-lg px-5 py-5 md:mx-auto border">
        <div class="flex md:flex-shrink-0">
            <img class="h-auto w-full object-cover md:w-48" src="{{ asset('storage/post-images/placeholder.jpeg') }}"
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
</div>
