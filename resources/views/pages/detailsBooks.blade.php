@include('common.header')

  @livewireStyles
  <livewire:detail-book :book-id="$bookId" />
  @livewireScripts

@include('common.footer')