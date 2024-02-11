<div id="header" wire:loading.class="hidden">
    @include('common.header')
</div>

<livewire:detail-book :book-id="$bookId" />

<div id="footer" wire:loading.class="hidden">
    @include('common.footer')
</div>
