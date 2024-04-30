@extends('layouts.userlayout')
@section('content')
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
                        <h2 class="text-2x1 tracking-widest title-font mb-8 font-bold text-blue-900 text-center">
                            BARANGAY CERTIFICATE</h2>
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
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Pindutin ang'Request' Button
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Fill up-an ang form
                        </p>

                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Antayin ang aprubal ng barangay
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Magtungo sa tanggapan ng Punong Barangay
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-6">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
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
                        <h2 class="text-2x1 tracking-widest title-font mb-8 font-bold text-blue-900 text-center">
                            BARANGAY CLEARANCE</h2>
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
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Pindutin ang'Request' Button
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Fill up-an ang form
                        </p>

                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Antayin ang aprubal ng barangay
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Magtungo sa tanggapan ng Punong Barangay
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-6">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
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
                        <h2 class="text-2x1 tracking-widest title-font mb-8 font-bold text-blue-900 text-center">
                            BARANGAY ID</h2>
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
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Pindutin ang'Request' Button
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Fill up-an ang form
                        </p>

                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Antayin ang aprubal ng barangay
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Magtungo sa tanggapan ng Punong Barangay
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-6">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
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
                        <h2 class="text-2x1 tracking-widest title-font mb-8 font-bold text-blue-900 text-center">
                            CEDULA</h2>
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
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Pindutin ang'Request' Button
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Fill up-an ang form
                        </p>

                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Antayin ang aprubal ng barangay
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Magtungo sa tanggapan ng Punong Barangay
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-6">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
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
                <div class="p-4 xl:w-1/4 md:w-1/2 w-full">
                    <div class="h-full p-6 rounded-lg border-2 border-blue-800 flex flex-col relative overflow-hidden">
                        <h2 class="text-2x1 tracking-widest title-font mb-8 font-bold text-blue-900 text-center">
                            ENDORSEMENT LETTER</h2>
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
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Pindutin ang'Request' Button
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Fill up-an ang form
                        </p>

                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Antayin ang aprubal ng barangay
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Magtungo sa tanggapan ng Punong Barangay
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-6">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
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
                        <h2 class="text-2x1 tracking-widest title-font mb-8 font-bold text-blue-900 text-center">
                            LOGGING PERMIT</h2>
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
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Pindutin ang'Request' Button
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Fill up-an ang form
                        </p>

                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Antayin ang aprubal ng barangay
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Magtungo sa tanggapan ng Punong Barangay
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-6">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
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
                        <h2 class="text-2x1 tracking-widest title-font mb-8 font-bold text-blue-900 text-center">
                            SENIOR CITIZENSHIP APPLICATION</h2>
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
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Pindutin ang'Request' Button
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Fill up-an ang form
                        </p>

                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Antayin ang aprubal ng barangay
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Magtungo sa tanggapan ng Punong Barangay
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-6">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
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
                        <h2 class="text-2x1 tracking-widest title-font mb-8 font-bold text-blue-900 text-center">
                            WORKING PERMIT</h2>
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
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Pindutin ang'Request' Button
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Fill up-an ang form
                        </p>

                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Antayin ang aprubal ng barangay
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Magtungo sa tanggapan ng Punong Barangay
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-6">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
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
                <div class="p-4 xl:w-1/4 md:w-1/2 w-full">
                    <div class="h-full p-6 rounded-lg border-2 border-blue-800 flex flex-col relative overflow-hidden">
                        <h2 class="text-2x1 tracking-widest title-font mb-8 font-bold text-blue-900 text-center">
                            TRAVEL ABROAD</h2>
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
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Pindutin ang'Request' Button
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Fill up-an ang form
                        </p>

                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Antayin ang aprubal ng barangay
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Magtungo sa tanggapan ng Punong Barangay
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-6">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
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
                        <h2 class="text-2x1 tracking-widest title-font mb-8 font-bold text-blue-900 text-center">
                            POSTAL ID</h2>
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
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Pindutin ang'Request' Button
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Fill up-an ang form
                        </p>

                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Antayin ang aprubal ng barangay
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Magtungo sa tanggapan ng Punong Barangay
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-6">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
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
                        <h2 class="text-2x1 tracking-widest title-font mb-8 font-bold text-blue-900 text-center">
                            BUSINESS TAX RECIEPT</h2>
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
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Pindutin ang'Request' Button
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Fill up-an ang form
                        </p>

                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Antayin ang aprubal ng barangay
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Magtungo sa tanggapan ng Punong Barangay
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-6">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
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
                        <h2 class="text-2x1 tracking-widest title-font mb-8 font-bold text-blue-900 text-center">
                            BUILDING PERMIT</h2>
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
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Pindutin ang'Request' Button
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Fill up-an ang form
                        </p>

                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Antayin ang aprubal ng barangay
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Magtungo sa tanggapan ng Punong Barangay
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-6">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
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
                <div class="p-4 xl:w-1/4 md:w-1/2 w-full">
                    <div class="h-full p-6 rounded-lg border-2 border-blue-800 flex flex-col relative overflow-hidden">
                        <h2 class="text-2x1 tracking-widest title-font mb-8 font-bold text-blue-900 text-center">
                            FENCING PERMIT</h2>
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
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Pindutin ang'Request' Button
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Fill up-an ang form
                        </p>

                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Antayin ang aprubal ng barangay
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Magtungo sa tanggapan ng Punong Barangay
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-6">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
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
                        <h2 class="text-2x1 tracking-widest title-font mb-8 font-bold text-blue-900 text-center">
                            SCHOLARSHIP APPLICATION</h2>
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
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Pindutin ang'Request' Button
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Fill up-an ang form
                        </p>

                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Antayin ang aprubal ng barangay
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Magtungo sa tanggapan ng Punong Barangay
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-6">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
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
                        <h2 class="text-2x1 tracking-widest title-font mb-8 font-bold text-blue-900 text-center">
                            OWNER-LEASING RENTAL PERMIT</h2>
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5"
                            class="text-lime-400 w-28 h-28 mb-3 flex justify-center items-center mx-auto pb-4 mb-4 border-b border-gray-200 leading-none"
                            viewBox="0 0 24 24">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
                                <path strokeLinecap="round" strokeLinejoin="round"
                                    d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                            </svg>
                        </svg>
                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Pindutin ang'Request' Button
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Fill up-an ang form
                        </p>

                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Antayin ang aprubal ng barangay
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Magtungo sa tanggapan ng Punong Barangay
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-6">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
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
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
                                <path strokeLinecap="round" strokeLinejoin="round"
                                    d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                            </svg>
                        </svg>
                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Pindutin ang'Request' Button
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Fill up-an ang form
                        </p>

                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Antayin ang aprubal ng barangay
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Magtungo sa tanggapan ng Punong Barangay
                        </p>
                        <p class="flex items-baseline text-gray-600 mb-6">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-lime-300 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
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
                <a href="{{ route('dashboard') }}" class="flex justify-center items-center mx-auto mt-16">
                    <button
                        class="flex mx-auto mt-16 text-blue-900 font-medium bg-white border-2 border-blue-900 py-2 px-8 mb-12 focus:outline-none hover:bg-blue-900 hover:text-blue-50 hover:font-medium rounded text-lg">
                        Go back</button>
                </a>
            </div>
        </div>
    </section>
@endsection