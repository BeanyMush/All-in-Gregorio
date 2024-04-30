<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth focus:scroll-auto">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>All in Gregorio | Official Website</title>
    <link href="https://github.com/BeanyMush/Capstone-Test-Try/blob/main/assets/img/brgygregoriologo.png?raw=true"
        rel="icon">

    @vite('resources/css/app.css')

</head>

<body>
    {{-- <header class="text-gray-600 body-font bg-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <span class="ml-3 font-medium text-3xl text-blue-900">ALL IN GREGORIO</span>
            </a>
            <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
                <a class="mr-5 hover:text-blue-800 font-medium" href="#hero">Home</a>
                <a class="mr-5 hover:text-blue-800 font-medium" href="#about">About</a>
                <a class="mr-5 hover:text-blue-800 font-medium" href="#services">Services</a>
                <a class="mr-5 hover:text-blue-800 font-medium" href="#announcements">Announcement</a>
            </nav>
            <div>
                <h1 class="text-20 font-medium text-blue-900">Welcome, User!</h1>
            </div>
        </div>
    </header> --}}
    {{-- <header class="text-blue-50 body-font bg-blue-900 sticky top-0 fixed z-50">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0" href="#">
                <span class="ml-3 font-medium text-2xl text-blue-50">ALL IN GREGORIO</span>
            </a>
            <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                <a class="mr-5 hover:text-amber-200 hover:font-medium font-medium tracking-wide text-lg hover:underline underline-offset-8 decoration-2 decoration-lime-400"
                    href="#hero">Home</a>
                <a class="mr-5 hover:text-amber-200 hover:font-medium font-medium tracking-wide text-lg hover:underline underline-offset-8 decoration-2 decoration-lime-400"
                    href="#about">About</a>
                <a class="mr-5 hover:text-amber-200 hover:font-medium font-medium tracking-wide text-lg hover:underline underline-offset-8 decoration-2 decoration-lime-400"
                    href="#services">Services</a>
                <a class="mr-5 hover:text-amber-200 hover:font-medium font-medium tracking-wide text-lg hover:underline underline-offset-8 decoration-2 decoration-lime-400"
                    href="#announcements">Announcement</a>
                <a class="mr-5 hover:text-amber-200 hover:font-medium font-medium tracking-wide text-lg hover:underline underline-offset-8 decoration-2 decoration-lime-400"
                    href="#contact">Contact</a>
            </nav>
            <button
                class="inline-flex items-center bg-blue-50 border-0 py-1 px-3 focus:outline-none text-blue-900 font-medium hover:bg-lime-400 hover:text-white rounded mt-4 md:mt-0">Login
            </button>
        </div>
    </header> --}}

    <main>
        <div>
            @yield('content')
        </div>
        {{-- FOOTER Section --}}
        <footer class="text-blue-50 body-font bg-blue-900" id="footer">
            <div
                class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
                <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
                    <a class="flex title-font font-medium items-center md:justify-start justify-center text-blue-50">
                        <span class="text-3xl">ALL IN GREGORIO</span>
                    </a>
                    <p class="mt-2 text-sm text-blue-50">Purok 2</p>
                    <p class="mt-2 text-sm text-blue-50">Brgy. Gregorio</p>
                    <p class="mt-2 text-sm text-blue-50">Trece Martires City, Cavite</p>
                </div>
                <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
                    <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                        <h2
                            class="title-font font-medium text-blue-50 tracking-widest text-sm mb-3 underline underline-offset-8 decoration-2 decoration-lime-400">
                            CATEGORIES</h2>
                        <nav class="list-none mb-10">
                            <li>
                                <a class="text-blue-50 hover:text-amber-200">First Link</a>
                            </li>
                            <li>
                                <a class="text-blue-50 hover:text-amber-200">Second Link</a>
                            </li>
                            <li>
                                <a class="text-blue-50 hover:text-amber-200">Third Link</a>
                            </li>
                            <li>
                                <a class="text-blue-50 hover:text-amber-200">Fourth Link</a>
                            </li>
                        </nav>
                    </div>
                    <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                        <h2
                            class="title-font font-medium text-blue-50 tracking-widest text-sm mb-3 underline underline-offset-8 decoration-2 decoration-lime-400">
                            CATEGORIES</h2>
                        <nav class="list-none mb-10">
                            <li>
                                <a class="text-blue-50 hover:text-amber-200">First Link</a>
                            </li>
                            <li>
                                <a class="text-blue-50 hover:text-amber-200">Second Link</a>
                            </li>
                            <li>
                                <a class="text-blue-50 hover:text-amber-200">Third Link</a>
                            </li>
                            <li>
                                <a class="text-blue-50 hover:text-amber-200">Fourth Link</a>
                            </li>
                        </nav>
                    </div>
                    <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                        <h2
                            class="title-font font-medium text-blue-50 tracking-widest text-sm mb-3 underline underline-offset-8 decoration-2 decoration-lime-400">
                            CATEGORIES</h2>
                        <nav class="list-none mb-10">
                            <li>
                                <a class="text-blue-50 hover:text-amber-200">First Link</a>
                            </li>
                            <li>
                                <a class="text-blue-50 hover:text-amber-200">Second Link</a>
                            </li>
                            <li>
                                <a class="text-blue-50 hover:text-amber-200">Third Link</a>
                            </li>
                            <li>
                                <a class="text-blue-50 hover:text-amber-200">Fourth Link</a>
                            </li>
                        </nav>
                    </div>
                    <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                        <h2
                            class="title-font font-medium text-blue-50 tracking-widest text-sm mb-3 underline underline-offset-8 decoration-2 decoration-lime-400">
                            CATEGORIES</h2>
                        <nav class="list-none mb-10">
                            <li>
                                <a class="text-blue-50 hover:text-amber-200">First Link</a>
                            </li>
                            <li>
                                <a class="text-blue-50 hover:text-amber-200">Second Link</a>
                            </li>
                            <li>
                                <a class="text-blue-50 hover:text-amber-200">Third Link</a>
                            </li>
                            <li>
                                <a class="text-blue-50 hover:text-amber-200">Fourth Link</a>
                            </li>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="bg-blue-950">
                <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
                    <p class="text-blue-50 text-sm text-center sm:text-left">© 2024 ALL IN GREGORIO —
                        <a href="https://twitter.com/knyttneve" rel="noopener noreferrer" class="text-blue-50 ml-1"
                            target="_blank">Panelo | Valenton | Velarde</a>
                    </p>
                    <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
                        <a class="text-blue-50">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                            </svg>
                        </a>
                        <a class="ml-3 text-blue-50">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                class="w-5 h-5" viewBox="0 0 24 24">
                                <path
                                    d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                </path>
                            </svg>
                        </a>
                        <a class="ml-3 text-blue-50">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <rect width="20" height="20" x="2" y="2" rx="5" ry="5">
                                </rect>
                                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                            </svg>
                        </a>
                        <a class="ml-3 text-blue-50">
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                                <path stroke="none"
                                    d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                                </path>
                                <circle cx="4" cy="4" r="2" stroke="none"></circle>
                            </svg>
                        </a>
                    </span>
                </div>
            </div>
        </footer>
        {{--  END FOOTER Section --}}
    </main>
</body>

</html>
