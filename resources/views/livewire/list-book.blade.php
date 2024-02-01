{{-- <div>
    <div class="flex justify-center my-8">
        <h1 class="text-4xl font-bold border-b-4 border-blue-500 pb-3 me-10">Buku Baru</h1>
    </div>

    <div class="my-8 mx-10">
        <div class="max-w-xs rounded overflow-hidden shadow-lg">
            <img class="w-full" src="" alt="Sunset in the mountains">
            <div class="px-6 py-2">
              <div class="font-bold text-sm mb-1">The Coldest Sunset</div>
              <p class="text-gray-700 text-xs">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
              </p>
            </div>
            <div class="px-6 py-2">
              <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
              <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
              <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
            </div>
          </div>
    </div>

    <div class="flex justify-center my-8">
        <h1 class="text-4xl font-bold border-b-4 border-blue-500 pb-3 me-10">Buku Lama</h1>
    </div>

    <div class="my-8 mx-10">
      <div class="max-w-xs rounded overflow-hidden shadow-lg">
          <img class="w-full" src="" alt="Sunset in the mountains">
          <div class="px-6 py-2">
            <div class="font-bold text-sm mb-1">The Coldest Sunset</div>
            <p class="text-gray-700 text-xs">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
            </p>
          </div>
          <div class="px-6 py-2">
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
          </div>
        </div>
  </div>

    <div class="flex justify-center my-8">
        <h1 class="text-4xl font-bold border-b-4 border-blue-500 pb-3 me-10">Buku Yang Akan Datang</h1>
    </div>

    <div class="my-8 mx-10">
      <div class="max-w-xs rounded overflow-hidden shadow-lg">
          <img class="w-full" src="" alt="Sunset in the mountains">
          <div class="px-6 py-2">
            <div class="font-bold text-sm mb-1">The Coldest Sunset</div>
            <p class="text-gray-700 text-xs">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
            </p>
          </div>
          <div class="px-6 py-2">
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
          </div>
        </div>
  </div>
    
</div> --}}


<div class="container mx-auto p-4">
  <div class="mb-4 flex justify-between">
    <div class="space-x-2">
      <button wire:click="setFilter('all')" class="px-4 py-2 {{ $filter == 'all' ? 'bg-gray-400' : 'bg-gray-200' }} text-gray-700 rounded hover:bg-gray-300 focus:outline-none">All Books</button>
      <button wire:click="setFilter('new')" class="px-4 py-2 {{ $filter == 'new' ? 'bg-gray-400' : 'bg-gray-200' }} text-gray-700 rounded hover:bg-gray-300 focus:outline-none">New Books</button>
      <button wire:click="setFilter('upcoming')" class="px-4 py-2 {{ $filter == 'upcoming' ? 'bg-gray-400' : 'bg-gray-200' }} text-gray-700 rounded hover:bg-gray-300 focus:outline-none">Upcoming</button>
      {{-- <span wire:loading wire:target="setFilter" class="absolute top-0 right-0 mt-2 mr-2">
        <i> <x-uiw-loading /> </i>
      </span> --}}
    </div>
    <div class="flex space-x-2">
      <input type="text" wire:model.debounce.300ms="search" placeholder="Search books..." class="px-4 py-2 border rounded focus:outline-none" />
    </div>
  </div>

  <div class="grid grid-cols-3 gap-4">
      @foreach($books as $book)
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
              <img src="{{ $book->image_featured }}" alt="Book Cover" class="mb-2">
              <span class="mb-2">{{ $book->price ?? 'Price not available' }}</span>
              <span>{{ $book->title }}</span>
          </div>
      @endforeach
  </div>
</div>
