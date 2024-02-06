{{-- <footer class="bg-purple-700 bottom-0 w-full">
    <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8 flex items-center justify-between">
        <!-- Logo and company name -->
        <div class="flex items-center">
            <img src="{{ asset('assets/logo-masagena.png') }}" alt="Logo" class="h-14 w-14mr-3">
            <span class="font-bold text-xl text-white">Yayasan Masagena Center</span>
        </div>

        <!-- Navigation links -->
        <div class="flex items-center text-white space-x-6">
            <a href="/" class="hover:bg-violet-400 p-2 rounded-full">Beranda</a>
            <a href="/books" class="hover:bg-violet-400 p-2 rounded-full">Books</a>
        </div>

        <!-- Social media icons -->
        <div class="flex items-center">
            <a href="https://www.facebook.com/yayasanmasagena?mibextid=ZbWKwL"
                class="text-white hover:bg-violet-400 p-2 rounded-full"><x-bi-facebook /></a>
            <a href="#" class="text-white hover:bg-violet-400 p-2 rounded-full ml-2"><x-bi-instagram /></a>
        </div>
    </div>
</footer> --}}



<footer class="shadow dark:bg-violet-500 w-full bottom-0">
    <div class="max-w-full max-h-full mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('assets/logo-masagena.png') }}" class="h-14 w-14" alt="Masagena Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Yayasan Masagena Center</span>
            </a>
            <!-- Social media icons -->

            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-white sm:mb-0">
                <li>
                    <a href="/" class="hover:bg-violet-400 p-2 rounded-full">Beranda</a>
                </li>
                <li>
                    <a href="/books" class="hover:bg-violet-400 p-2 rounded-full">Books</a>
                </li>
                <li>
                    <a href="/about" class="hover:bg-violet-400 p-2 rounded-full">About us</a>
                </li>
            </ul>

            <div class="flex-row items-center">
                <div class="text-white my-3">
                    <h1 class="font-bold border-b-2 border-white-600 pb-1 me-10">Hubungi Kami</h1>
                </div>
                <a href="https://www.facebook.com/yayasanmasagena?mibextid=ZbWKwL"
                    class="text-white flex items-center hover:bg-violet-400 p-2 rounded-full">
                    <x-bi-facebook/><span class="ml-1">Yayasan Masagena</span></a>
                <a href="mailto:masagenapress@gmail.com" 
                    class="text-white flex items-center hover:bg-violet-400 p-2 rounded-full">
                    <x-bi-envelope-at-fill /><span class="ml-1">masagenapress@gmail.com</span></a>
                <div class="text-white flex items-center hover:bg-violet-400 p-2 rounded-full">
                    <span>CP : 0813-5529-0311</span>
                </div>
                <div class="text-white flex items-center hover:bg-violet-400 p-2 rounded-full">
                    <x-bi-phone-fill /><span class="ml-1">Hp : 0853-9850-9700</span>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-autolg:my-8" />
        <span class="block text-sm text-white sm:text-center dark:text-white">© 2023 <a href="" class="hover:underline">Yayasan Masagena</a>. All Rights Reserved.</span>
    </div>
</footer>

@vite('resources/js/app.js')

</body>

