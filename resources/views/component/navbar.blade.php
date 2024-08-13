<!-- <nav class="bg-white fixed w-full z-20 top-0 start-0 border-b">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto py-4 lg:px-12 px-2">
        <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse w-full lg:max-w-16 max-w-10">
            <img src="{{asset('storage/images/logo-1.png')}}" class="lg:w-16 w-10" alt="Sayur Mini Logo">
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <a target="_blank" href="https://www.tokopedia.com/sayurmini-microgreen/product" class="hidden lg:flex btn bg-green-2 hover:bg-green-3 text-white text-lg font-medium">Buy Microgreen Now!</a>
            <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul class="flex flex-col p-4 md:p-0 mt-4 border font-normal border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 ">

                <li>
                    <a href="/" class="text-lg block py-2 px-3 text-green-5 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-3 md:p-0">Home</a>
                </li>
                <li>
                    <a href="" class="text-lg block py-2 px-3 text-green-5 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-3 md:p-0">About</a>
                </li>
                <li>
                    <a href="/articles" class="text-lg block py-2 px-3 text-green-5 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-3 md:p-0">Article</a>
                </li>
                <li>
                    <a href="/benefit" class="text-lg block py-2 px-3 text-green-5 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-3 md:p-0">Product Benefit</a>
                </li>
                <li>
                    <a href="" class="text-lg block py-2 px-3 text-green-5 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-3 md:p-0">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav> -->


<nav class="navbar bg-base-100 mx-auto lg:px-12 fixed w-full z-20 top-0 start-0 border-b shadow-sm">
    <div class="navbar-start">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse w-full lg:max-w-16 max-w-10">
            <img src="{{asset('storage/images/logo-1.png')}}" class="lg:w-16 w-10" alt="Sayur Mini Logo">
        </a>
    </div>

    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
            <li class="hover:bg-gray-100 focus:bg-gray-100">
                <a href="/" class="text-lg block py-2 px-3 text-green-5 rounded hover:bg-gray-100 focus:bg-gray-100 md:hover:bg-transparent md:hover:text-green-3">Home</a>
            </li>
            <li>
                <a href="" class="text-lg block py-2 px-3 text-green-5 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-3">About</a>
            </li>
            <li>
                <a href="/articles" class="text-lg block py-2 px-3 text-green-5 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-3">Article</a>
            </li>
            <li>
                <a href="/benefit" class="text-lg block py-2 px-3 text-green-5 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-3">Product Benefit</a>
            </li>
            <li>
                <a href="" class="text-lg block py-2 px-3 text-green-5 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-3">Contact</a>
            </li>
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
                    <a href="/" class="text-base block py-2 px-3 text-green-5 rounded hover:bg-gray-100 focus:bg-gray-100 md:hover:bg-transparent md:hover:text-green-3">Home</a>
                </li>
                <li>
                    <a href="" class="text-base block py-2 px-3 text-green-5 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-3">About</a>
                </li>
                <li>
                    <a href="/articles" class="text-base block py-2 px-3 text-green-5 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-3">Article</a>
                </li>
                <li>
                    <a href="/benefit" class="text-base block py-2 px-3 text-green-5 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-3">Product Benefit</a>
                </li>
                <li>
                    <a href="" class="text-base block py-2 px-3 text-green-5 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-3">Contact</a>
                </li>
            </ul>
            <a target="_blank" href="https://www.tokopedia.com/sayurmini-microgreen/product" class="hidden lg:flex btn bg-green-2 hover:bg-green-3 text-white text-lg font-medium">Buy Microgreen Now!</a>
        </div>
    </div>
</nav>
