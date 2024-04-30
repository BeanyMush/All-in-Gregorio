@extends('layouts.layout')
@section('content')
    {{-- HERO Section --}}
    <section id="hero">
        <section
            class="bg-[url('https://github.com/BeanyMush/Capstone-Test-Try/blob/main/assets/img/brgygregoriohall2.png?raw=true')] bg-cover bg-fixed bg-center bg-no-repeat bg-blend-soft-light bg-blue-900/100"
            id="text-gray-600 body-font">
            <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
                <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
                    <img class="rounded-full w-200 h-200"
                        src="https://github.com/BeanyMush/Capstone-Test-Try/blob/main/assets/img/brgygregoriologo.png?raw=true"
                        alt="image description">

                </div>
                <div
                    class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
                    <h1 class="title-font sm:text-7xl text-7xl mb-4 font-medium text-blue-50">ALL IN <span
                            class="underline underline-offset-8 decoration-lime-400 decoration-2.5 text-blue-50">GREGORIO</span>
                    </h1>
                    <p class="mb-8 leading-relaxed text-blue-50 font-normal text-3xl">Brgy. Gregorio Official Website</p>
                    <div class="flex justify-center">
                        <a href="#services">
                            <button
                                class="inline-flex text-blue-900 font-semibold text-3xl tracking-wide bg-blue-50 border-0 py-4 px-12 focus:outline-none hover:bg-lime-400 hover:text-blue-50 rounded text-lg">Go
                                to Services</button>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </section>
    {{-- END HERO Section --}}

    {{-- ABOUT US Section --}}
    <section class="text-gray-600 body-font" id="about">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
                <h1 class="py-8 sm:text-6xl text-6xl font-medium title-font mb-4 text-blue-900">ABOUT US</h1>
                <div class="h-1 w-40 mx-auto bg-blue-900 rounded">
                    <div class="flex items-center justify-center mx-auto h-1 w-24 h-full bg-lime-300 rounded"></div>
                </div>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base text-3x1 mt-10">Gregorio classified as rural area and
                    has a total population of 4,192 and considered as one of the peaceful Barangay in the City.</p>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base text-3x1">It is surrounded by Barangays and
                    Municipality: Tanza to the North, Barangay Conchu to the South, Barangay Osorio to the East and Barangay
                    San Agustin/De Ocampo to the West.</p>
                <br class="hidden lg:inline-block">
                <a href="./about">
                    <button
                        class="flex mx-auto mt-16 text-blue-900 font-medium bg-white border-2 border-blue-900 py-2 px-8 focus:outline-none hover:bg-blue-900 hover:text-blue-50 hover:font-medium rounded text-lg">Read
                        More</button>
                </a>
            </div>
            <div class="flex flex-wrap -m-4 text-center">
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="text-lime-400 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                                stroke="currentColor" className="w-6 h-6">
                                <path strokeLinecap="round" strokeLinejoin="round"
                                    d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                            </svg>
                        </svg>
                        <h2 class="title-font font-medium text-3xl text-blue-900">1.2K</h2>
                        <p class="leading-relaxed text-blue-900">Projects</p>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="text-lime-400 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                                stroke="currentColor" className="w-6 h-6">
                                <path strokeLinecap="round" strokeLinejoin="round"
                                    d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z" />
                            </svg>
                        </svg>
                        <h2 class="title-font font-medium text-3xl text-blue-900">16</h2>
                        <p class="leading-relaxed text-blue-900">Officials</p>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="text-lime-400 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                                stroke="currentColor" className="w-6 h-6">
                                <path strokeLinecap="round" strokeLinejoin="round"
                                    d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                            </svg>
                        </svg>
                        <h2 class="title-font font-medium text-3xl text-blue-900">15</h2>
                        <p class="leading-relaxed text-blue-900">Staffs</p>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="text-lime-400 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                                stroke="currentColor" className="w-6 h-6">
                                <path strokeLinecap="round" strokeLinejoin="round"
                                    d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                            </svg>
                        </svg>
                        <h2 class="title-font font-medium text-3xl text-blue-900">1.4K</h2>
                        <p class="leading-relaxed text-blue-900">Residents</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- END ABOUT US Section --}}

    {{-- OFFICIALS Section --}}
    <section class="pb-20 text-blue-50 body-font bg-blue-900" id="officials">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
                <h1 class="py-8 sm:text-6xl text-3xl font-medium title-font mb-4 text-blue-50">BARANGAY OFFICIALS</h1>
                <div class="h-1 w-40 mx-auto bg-amber-400 rounded">
                    <div class="flex items-center justify-center mx-auto h-1 w-24 h-full bg-lime-300 rounded"></div>
                </div>
            </div>
            <div class="flex flex-wrap -m-2">
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-full flex items-center bg-white border p-4 rounded-lg">
                        <img alt="team"
                            class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                            src="https://github.com/BeanyMush/Capstone-Test-Try/blob/main/assets/img/user.png?raw=true">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">Eliseo C. Dela luya</h2>
                            <p class="text-gray-500">Barangay Chairman</p>
                        </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-full flex items-center bg-white border p-4 rounded-lg">
                        <img alt="team"
                            class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                            src="https://github.com/BeanyMush/Capstone-Test-Try/blob/main/assets/img/user.png?raw=true">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">Arpee D. Lubigan</h2>
                            <p class="text-gray-500">Barangay Kagawad</p>
                        </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-full flex items-center bg-white border p-4 rounded-lg">
                        <img alt="team"
                            class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                            src="https://github.com/BeanyMush/Capstone-Test-Try/blob/main/assets/img/user.png?raw=true">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">Maverick A. Autriz</h2>
                            <p class="text-gray-500">Barangay Kagawad</p>
                        </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-full flex items-center bg-white border p-4 rounded-lg">
                        <img alt="team"
                            class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                            src="https://github.com/BeanyMush/Capstone-Test-Try/blob/main/assets/img/user.png?raw=true">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">Rex. B. De Jesus</h2>
                            <p class="text-gray-500">Barangay Kagawad</p>
                        </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-full flex items-center bg-white border p-4 rounded-lg">
                        <img alt="team"
                            class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                            src="https://github.com/BeanyMush/Capstone-Test-Try/blob/main/assets/img/user.png?raw=true">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">Mark Joseph B. Umipon</h2>
                            <p class="text-gray-500">Barangay Kagawad</p>
                        </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-full flex items-center bg-white border p-4 rounded-lg">
                        <img alt="team"
                            class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                            src="https://github.com/BeanyMush/Capstone-Test-Try/blob/main/assets/img/user.png?raw=true">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">Melnita A. Sierra</h2>
                            <p class="text-gray-500">Barangay Kagawad</p>
                        </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-full flex items-center bg-white border p-4 rounded-lg">
                        <img alt="team"
                            class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                            src="https://github.com/BeanyMush/Capstone-Test-Try/blob/main/assets/img/user.png?raw=true">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">Leonardo J. Bolor Jr.</h2>
                            <p class="text-gray-500">Barangay Kagawad</p>
                        </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-full flex items-center bg-white border p-4 rounded-lg">
                        <img alt="team"
                            class="w-16 h-16 bg-white object-cover object-center flex-shrink-0 rounded-full mr-4"
                            src="https://github.com/BeanyMush/Capstone-Test-Try/blob/main/assets/img/user.png?raw=true">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">Mary Judith E. Mendoza</h2>
                            <p class="text-gray-500">Barangay Kagawad</p>
                        </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-full flex items-center bg-white border p-4 rounded-lg">
                        <img alt="team"
                            class="w-16 h-16 bg-white object-cover object-center flex-shrink-0 rounded-full mr-4"
                            src="https://github.com/BeanyMush/Capstone-Test-Try/blob/main/assets/img/user.png?raw=true">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">Carl Heaven N. Lubigan</h2>
                            <p class="text-gray-500">SK Chairman</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- END OFFICIALS Section --}}

    {{-- SERVICES Section --}}
    <section class="pb-20 text-gray-600 body-font overflow-hidden bg-slate-100" id="services">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
                <h1 class="py-8 sm:text-6xl text-6xl font-medium title-font mb-4 text-blue-900">SERVICES</h1>
                <div class="h-1 w-40 mx-auto bg-blue-900 rounded">
                    <div class="flex items-center justify-center mx-auto h-1 w-24 h-full bg-lime-300 rounded"></div>
                </div>
                <p class="lg:w-2/3 mx-auto mt-12 leading-relaxed text-base text-gray-500">We provide various services for
                    every residents of Brgy.Gregorio.</p>
            </div>
            <div class="flex flex-wrap -m-4">
                <div class="p-4 xl:w-1/4 md:w-1/2 w-full">
                    <div class="h-full p-6 rounded-lg border-2 border-blue-800 flex flex-col relative overflow-hidden">
                        <h2 class="text-2x1 tracking-widest title-font mb-8 font-bold text-blue-900 text-center">BARANGAY
                            CERTIFICATE</h2>
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5"
                            class="text-lime-400 w-28 h-28 mb-3 flex justify-center items-center mx-auto pb-4 mb-4 border-b border-gray-200 leading-none"
                            viewBox="0 0 24 24">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                                stroke="currentColor" className="w-6 h-6">
                                <path strokeLinecap="round" strokeLinejoin="round"
                                    d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                            </svg>
                        </svg>
                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-blue-800 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Pindutin ang'Request' Button
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-blue-800 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Fill up-an ang form
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-blue-800 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Antayin ang aprubal ng barangay
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-blue-800 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Magtungo sa tanggapan ng Punong Barangay
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-6">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-blue-800 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Magbayad at kunin ang Barangay Certificate
                        </p>
                        <button
                            class="flex items-center mt-auto text-white bg-blue-800 border-0 py-2 px-4 w-full focus:outline-none hover:bg-lime-400 rounded">Request
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </button>
                        <p class="text-xs text-gray-500 mt-3">Maaaring Makuha ang dokumento sa loob ng 1-2 araw.</p>
                    </div>
                </div>
                <div class="p-4 xl:w-1/4 md:w-1/2 w-full">
                    <div class="h-full p-6 rounded-lg border-2 border-blue-800 flex flex-col relative overflow-hidden">
                        <h2 class="text-2x1 tracking-widest title-font mb-8 font-bold text-blue-900 text-center">BARANGAY
                            CLEARANCE</h2>
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5"
                            class="text-lime-400 w-28 h-28 mb-3 flex justify-center items-center mx-auto pb-4 mb-4 border-b border-gray-200 leading-none"
                            viewBox="0 0 24 24">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                                stroke="currentColor" className="w-6 h-6">
                                <path strokeLinecap="round" strokeLinejoin="round"
                                    d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                            </svg>
                        </svg>
                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-blue-800 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Pindutin ang'Request' Button
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-blue-800 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Fill up-an ang form
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-blue-800 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Antayin ang aprubal ng barangay
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-blue-800 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Magtungo sa tanggapan ng Punong Barangay
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-6">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-blue-800 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Magbayad at kunin ang Barangay Clearance
                        </p>
                        <button
                            class="flex items-center mt-auto text-white bg-blue-800 border-0 py-2 px-4 w-full focus:outline-none hover:bg-lime-400 rounded">Request
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </button>
                        <p class="text-xs text-gray-500 mt-3">Maaaring Makuha ang dokumento sa loob ng 1-2 araw.</p>
                    </div>
                </div>
                <div class="p-4 xl:w-1/4 md:w-1/2 w-full">
                    <div class="h-full p-6 rounded-lg border-2 border-blue-800 flex flex-col relative overflow-hidden">
                        <h2 class="text-2x1 tracking-widest title-font mb-8 font-bold text-blue-900 text-center">BARANGAY
                            ID</h2>
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5"
                            class="text-lime-400 w-28 h-28 mb-3 flex justify-center items-center mx-auto pb-4 mb-4 border-b border-gray-200 leading-none"
                            viewBox="0 0 24 24">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                                stroke="currentColor" className="w-6 h-6">
                                <path strokeLinecap="round" strokeLinejoin="round"
                                    d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                            </svg>
                        </svg>
                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-blue-800 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Pindutin ang'Request' Button
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-blue-800 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Fill up-an ang form
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-blue-800 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Antayin ang aprubal ng barangay
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-blue-800 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Magtungo sa tanggapan ng Punong Barangay
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-6">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-blue-800 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Magbayad at kunin ang Barangay ID
                        </p>
                        <button
                            class="flex items-center mt-auto text-white bg-blue-800 border-0 py-2 px-4 w-full focus:outline-none hover:bg-lime-400 rounded">Request
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </button>
                        <p class="text-xs text-gray-500 mt-3">Maaaring Makuha ang dokumento sa loob ng 1-2 araw.</p>
                    </div>
                </div>
                <div class="p-4 xl:w-1/4 md:w-1/2 w-full">
                    <div class="h-full p-6 rounded-lg border-2 border-blue-800 flex flex-col relative overflow-hidden">
                        <h2 class="text-2x1 tracking-widest title-font mb-8 font-bold text-blue-900 text-center">BARANGAY
                            INDIGENCY</h2>
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5"
                            class="text-lime-400 w-28 h-28 mb-3 flex justify-center items-center mx-auto pb-4 mb-4 border-b border-gray-200 leading-none"
                            viewBox="0 0 24 24">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                                stroke="currentColor" className="w-6 h-6">
                                <path strokeLinecap="round" strokeLinejoin="round"
                                    d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                            </svg>
                        </svg>
                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-blue-800 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Pindutin ang'Request' Button
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-blue-800 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Fill up-an ang form
                        </p>

                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-blue-800 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Antayin ang aprubal ng barangay
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-blue-800 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Magtungo sa tanggapan ng Punong Barangay
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-6">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-blue-800 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Magbayad at kunin ang Barangay Indigency
                        </p>
                        <button
                            class="flex items-center mt-auto text-white bg-blue-800 border-0 py-2 px-4 w-full focus:outline-none hover:bg-lime-400 rounded">Request
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </button>
                        <p class="text-xs text-gray-500 mt-3">Maaaring Makuha ang dokumento sa loob ng 1-2 araw.</p>
                    </div>
                </div>
                <button
                    class="flex mx-auto mt-16 text-blue-900 font-medium bg-white border-2 border-blue-900 py-2 px-8 focus:outline-none hover:bg-blue-900 hover:text-blue-50 hover:font-medium rounded text-lg flex mx-auto justify-center items-center mt-16"
                    >Read More</button>


            </div>
        </div>
    </section>
    {{-- END SERVICES Section --}}

    {{-- ANNOUNCEMENT Section --}}
    <section class="text-gray-600 body-font" id="announcements">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap w-full mb-20">
                <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                    <h1 class="py-8 sm:text-6xl text-6xl font-medium title-font mb-4 text-blue-900">ANNOUNCEMENTS</h1>
                    <div class="h-1 w-20 bg-lime-300 rounded"></div>
                </div>
            </div>
            <div class="flex flex-wrap -m-4">
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class="bg-gray-100 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6"
                            src="https://scontent.fmnl4-6.fna.fbcdn.net/v/t39.30808-6/434157248_3777700905847801_940303614786164430_n.jpg?stp=cp6_dst-jpg&_nc_cat=108&ccb=1-7&_nc_sid=5f2048&_nc_ohc=U2Pk5kCg8lUAb7m4uok&_nc_ht=scontent.fmnl4-6.fna&oh=00_AfAbf7zovief4eGusaNibfFoBRq4ZWdtKSbMIDKZz5OLDQ&oe=661FD10C"
                            alt="content">
                        <h3 class="tracking-widest text-blue-800 text-xs font-medium title-font">SUBTITLE</h3>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Weekly Clean-up Drive</h2>
                        <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat.
                            Distillery hexagon disrupt edison bulbche.</p>
                    </div>
                </div>
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class="bg-gray-100 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6"
                            src="https://scontent.fmnl4-4.fna.fbcdn.net/v/t39.30808-6/432782510_3777292009222024_1653908369693021706_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=5f2048&_nc_ohc=hvxP7gTatRkAb4J6Dh3&_nc_ht=scontent.fmnl4-4.fna&oh=00_AfAREZkkGIvN8GX8jUcjtaRUxdltocVYyQJ4OPbIx2eb-g&oe=661FD092"
                            alt="content">
                        <h3 class="tracking-widest text-blue-800 text-xs font-medium title-font">SUBTITLE</h3>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Barangay Assembly Day</h2>
                        <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat.
                            Distillery hexagon disrupt edison bulbche.</p>
                    </div>
                </div>
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class="bg-gray-100 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6"
                            src="https://scontent.fmnl4-5.fna.fbcdn.net/v/t39.30808-6/432297613_383110911290107_8397067200771670676_n.jpg?stp=dst-jpg_p180x540&_nc_cat=106&ccb=1-7&_nc_sid=5f2048&_nc_ohc=j9fR8jyLSz8Ab6OKoze&_nc_ht=scontent.fmnl4-5.fna&oh=00_AfAq-jKylS0IwU2613vhMtoL5rdTGzKi5X_5jVRKin0YJw&oe=661FD8A2"
                            alt="content">
                        <h3 class="tracking-widest text-blue-800 text-xs font-medium title-font">SUBTITLE</h3>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Pet Castration</h2>
                        <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat.
                            Distillery hexagon disrupt edison bulbche.</p>
                    </div>
                </div>
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class="bg-gray-100 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6"
                            src="https://scontent.fmnl4-5.fna.fbcdn.net/v/t39.30808-6/428623248_807203921439379_5037216370341067176_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=5f2048&_nc_ohc=cGerlKgkU2UAb46HD_0&_nc_ht=scontent.fmnl4-5.fna&oh=00_AfAlQYGnXW-jLceoNW3Y3cIJPMqzIhhL7-0s7Ell4API3g&oe=661FEC2E"
                            alt="content">
                        <h3 class="tracking-widest text-blue-800 text-xs font-medium title-font">SUBTITLE</h3>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Earthquake Drill</h2>
                        <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat.
                            Distillery hexagon disrupt edison bulbche.</p>
                    </div>
                </div>
                <a href="./announcement" class="flex justify-center items-center mx-auto mt-16">
                    <button
                        class="flex mx-auto mt-16 text-blue-900 font-medium bg-white border-2 border-blue-900 py-2 px-8 mb-12 focus:outline-none hover:bg-blue-900 hover:text-blue-50 hover:font-medium rounded text-lg">Read
                        More</button>
                </a>
            </div>
        </div>
    </section>
    {{-- END ANNOUNCEMENT Section --}}

    {{--  CONTACT Section --}}
    <section class="text-gray-600 body-font relative bg-slate-100" id="contact">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
                <h1 class="py-8 sm:text-6xl text-6xl font-medium title-font mb-4 text-blue-900">CONTACT US</h1>
                <div class="h-1 w-40 mx-auto bg-blue-900 rounded">
                    <div class="flex items-center justify-center mx-auto h-1 w-24 h-full bg-lime-300 rounded"></div>
                </div>
            </div>
            <div class="container px-5 pb-20 mx-auto flex sm:flex-nowrap flex-wrap">
                <div
                    class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
                    <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map"
                        marginheight="0" marginwidth="0" scrolling="no"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7732.79169603633!2d120.87182700000001!3d14.288418000000002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd81271b0e6d55%3A0x9f754109d5d71721!2sGregorio%20Barangay%20Hall!5e0!3m2!1sen!2sph!4v1712986684074!5m2!1sen!2sph"
                        width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
                    <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
                        <div class="lg:w-1/2 px-6">
                            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">ADDRESS</h2>
                            <p class="mt-1">Purok 2, Brgy.Gregorio, Trece Martires City, Cavite</p>
                            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">WORKING HOURS
                            </h2>
                            <p>
                                <span class="font-semibold text-xs">Monday to Friday:</span>
                                <br>7:00AM - 5:00PM;
                                <br><span class="font-semibold text-xs">Saturday & Sunday:</span>
                                <br>Closed
                            </p>
                        </div>
                        <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                            <p>
                            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
                            <a class="text-blue-800 leading-relaxed">example@email.com</a>
                            </p>
                            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">PHONE</h2>
                            <p>
                                <span class="font-semibold text-xs">Barangay Hotline: Rescue and Operation</span>
                                <br>0943 132 8463
                                <br><span class="font-semibold text-xs">BHERT Hotline: Health Concerns</span>
                                <br>0970 670 7047
                                <br><span class="font-semibold text-xs">Admin Office:</span>
                                <br>(046) 412 1211
                            </p>
                        </div>
                    </div>
                </div>
                <div
                    class="px-8 lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0 rounded-md">
                    <h2 class="text-blue-900 text-lg mb-1 font-medium title-font">Feedback</h2>
                    <p class="leading-relaxed mb-5 text-gray-600">For Inquiries, don't hesitate to message us here!</p>
                    <div class="relative mb-4">
                        <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                        <input type="text" id="name" name="name"
                            class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <div class="relative mb-4">
                        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                        <input type="email" id="email" name="email"
                            class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <div class="relative mb-4">
                        <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                        <textarea id="message" name="message"
                            class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                    </div>
                    <button
                        class="text-white font-medium bg-blue-800 border-0 py-2 px-6 focus:outline-none hover:bg-lime-400 rounded text-lg">Send
                        Message</button>
                    <p class="text-xs text-gray-500 mt-3">Chicharrones blog helvetica normcore iceland tousled brook viral
                        artisan.</p>
                </div>
            </div>
        </div>
    </section>
    {{--  END CONTACT Section --}}
@endsection
