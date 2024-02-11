<div class="flex justify-center my-8">
    <div
        class="max-w-7xl w-full items-center rounded overflow-hidden shadow-lg px-5 py-5 md:mx-auto border justify-center">
        <div class="mb-4 flex justify-between">
            <div class="space-x-2">
                <button wire:click="setFilter('all')"
                    class="px-4 py-2 {{ $filter == 'all' ? 'bg-gray-400' : 'bg-gray-200' }} text-gray-700 rounded hover:bg-gray-300 focus:outline-none">All
                    Books</button>
                <button wire:click="setFilter('new')"
                    class="px-4 py-2 {{ $filter == 'new' ? 'bg-gray-400' : 'bg-gray-200' }} text-gray-700 rounded hover:bg-gray-300 focus:outline-none">New
                    Books</button>
                <button wire:click="setFilter('upcoming')"
                    class="px-4 py-2 {{ $filter == 'upcoming' ? 'bg-gray-400' : 'bg-gray-200' }} text-gray-700 rounded hover:bg-gray-300 focus:outline-none">Upcoming</button>
                <button wire:click="setFilter('oldbook')"
                    class="px-4 py-2 {{ $filter == 'oldbook' ? 'bg-gray-400' : 'bg-gray-200' }} text-gray-700 rounded hover:bg-gray-300 focus:outline-none">Old
                    Books</button>
            </div>
            <div class="flex space-x-2">
                <input type="text" wire:model.defer="search" wire:keydown.enter="loadBooks"
                    placeholder="Search books..." class="px-4 py-2 border rounded focus:outline-none" />
                <button wire:click="loadBooks" class="px-4 py-2 bg-blue-500 text-white rounded">Search</button>
            </div>
        </div>

        <div class="grid grid-cols-3 gap-4">
            @foreach ($books as $book)
                <a href="books/{{ $book->id }}" class="hover:bg-gray-300">
                    <div class="border p-4 relative flex flex-col items-center h-full">
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
                        <div class="w-full h-64 bg-gray-200 overflow-hidden my-2">
                            <img src="{{ asset('storage/' . $book->image_featured) }}" alt="Book Cover"
                                 class="mb-2 object-cover object-center w-full h-64">
                        </div>
                        <span class="font-semibold">{{ $book->title }}</span>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
