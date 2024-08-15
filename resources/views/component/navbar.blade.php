

<nav class="navbar bg-base-100 mx-auto lg:px-12 fixed w-full z-20 top-0 start-0 border-b shadow-sm">
    <div class="navbar-start">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse w-full lg:max-w-16 max-w-10">
            <img src="{{asset('storage/images/logo-1.png')}}" class="lg:w-16 w-10" alt="Sayur Mini Logo">
        </a>
    </div>

    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                <x-nav-link class="text-xl" :href="route('home')" :active="request()->routeIs('home')">
                    {{ __('Beranda') }}
                </x-nav-link>
            </div>
            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                <x-nav-link class="text-xl" :href="route('home')" :active="request()->routeIs('')">
                    {{ __('Tentang kami') }}
                </x-nav-link>
            </div>
            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                <x-nav-link class="text-xl" :href="route('articles.index')" :active="request()->routeIs('articles.index')">
                    {{ __('Artikel') }}
                </x-nav-link>
            </div>
            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                <x-nav-link class="text-xl" :href="route('beneift.index')" :active="request()->routeIs('beneift.index')">
                    {{ __('Produk') }}
                </x-nav-link>
            </div>

        </ul>
    </div>

    <div class="navbar-end">
        <div class="dropdown ">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </div>
            <ul
                tabindex="0"
                class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow relative -left-40 text-base">
                <li class="hover:bg-gray-100 focus:bg-gray-100">
                    <a href="/" class="text-base block py-2 px-3 text-green-5 rounded hover:bg-gray-100 focus:bg-gray-100 md:hover:bg-transparent md:hover:text-green-3">Beranda</a>
                </li>
                <li>
                    <a href="" class="text-base block py-2 px-3 text-green-5 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-3">Tentang kami</a>
                </li>
                <li>
                    <a href="/articles" class="text-base block py-2 px-3 text-green-5 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-3">Artikel</a>
                </li>
                <li>
                    <a href="/benefit" class="text-base block py-2 px-3 text-green-5 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-3">Produk</a>
                </li>
                <li>
                    <a href="" class="text-base block py-2 px-3 text-green-5 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-3">Kontak</a>
                </li>
            </ul>
            <a target="_blank" href="https://www.tokopedia.com/sayurmini-microgreen/product" class="hidden lg:flex btn bg-green-2 hover:bg-green-3 text-white text-lg font-medium">Beli Sekarang!</a>
        </div>
    </div>
</nav>
