<footer class="bg-purple-700">
  <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8 flex items-center justify-between">
      <!-- Logo and company name -->
      <div class="flex items-center">
          <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-10 w-10 mr-3">
          <span class="font-bold text-xl text-white">Yayasan Masagena Center</span>
      </div>

      <!-- Navigation links -->
      <div class="flex items-center text-white space-x-6">
          <a href="/beranda" class="hover:bg-violet-400 p-2 rounded-full">Beranda</a>
          <a href="/books" class="hover:bg-violet-400 p-2 rounded-full">Books</a>
      </div>

      <!-- Social media icons -->
      <div class="flex items-center">
          <a href="#" class="text-white hover:bg-violet-400 p-2 rounded-full"><x-bi-facebook /></a>
          <a href="#" class="text-white hover:bg-violet-400 p-2 rounded-full ml-2"><x-bi-instagram /></a>
      </div>
  </div>
</footer>

</body>
