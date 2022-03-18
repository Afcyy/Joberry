@extends('layout')

@section('content')
    <section class="flex items-center justify-center py-16 bg-gray-100 min-w-screen">
        <div class="container mx-auto px-6 py-8 bg-gray-100">
            <h3 class="text-gray-700 text-3xl font-medium">კომპანიები</h3>
            <div class="mt-8">

                <div class="border border-gray-200 p-6 grid grid-cols-1 gap-6 bg-white rounded-lg">

                    <div class="gapy-6">
                        <div class="grid grid-cols-4 gap-2 p-2 rounded">
                            <div class="flex border rounded-md bg-gray-100 items-center p-2 ">
                                <svg class="fill-current text-gray-500 mr-2 w-5" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 24 24" width="24" height="24">
                                    <path class="heroicon-ui"
                                          d="M12 12a5 5 0 1 1 0-10 5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm9 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H8a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v2z"/>
                                </svg>
                                <input type="text" placeholder="სახელი"
                                       class="bg-gray-100 max-w-full focus:outline-none text-gray-500"/>
                            </div>
                            <div class="flex border rounded-md bg-gray-100 items-center p-2 ">
                                <svg class="fill-current text-gray-500 mr-2 w-5" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 24 24" width="24" height="24">
                                    <path class="heroicon-ui"
                                          d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zM5.68 7.1A7.96 7.96 0 0 0 4.06 11H5a1 1 0 0 1 0 2h-.94a7.95 7.95 0 0 0 1.32 3.5A9.96 9.96 0 0 1 11 14.05V9a1 1 0 0 1 2 0v5.05a9.96 9.96 0 0 1 5.62 2.45 7.95 7.95 0 0 0 1.32-3.5H19a1 1 0 0 1 0-2h.94a7.96 7.96 0 0 0-1.62-3.9l-.66.66a1 1 0 1 1-1.42-1.42l.67-.66A7.96 7.96 0 0 0 13 4.06V5a1 1 0 0 1-2 0v-.94c-1.46.18-2.8.76-3.9 1.62l.66.66a1 1 0 0 1-1.42 1.42l-.66-.67zM6.71 18a7.97 7.97 0 0 0 10.58 0 7.97 7.97 0 0 0-10.58 0z"/>
                                </svg>
                                <input type="text" placeholder="ლოკაცია"
                                       class="bg-gray-100 max-w-full focus:outline-none text-gray-500"/>
                            </div>

                            <div class="flex border rounded-md bg-gray-100 items-center p-2 ">
                                <svg class="fill-current text-gray-500 mr-2 w-5" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 24 24" width="24" height="24">
                                    <path class="heroicon-ui"
                                          d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zM5.68 7.1A7.96 7.96 0 0 0 4.06 11H5a1 1 0 0 1 0 2h-.94a7.95 7.95 0 0 0 1.32 3.5A9.96 9.96 0 0 1 11 14.05V9a1 1 0 0 1 2 0v5.05a9.96 9.96 0 0 1 5.62 2.45 7.95 7.95 0 0 0 1.32-3.5H19a1 1 0 0 1 0-2h.94a7.96 7.96 0 0 0-1.62-3.9l-.66.66a1 1 0 1 1-1.42-1.42l.67-.66A7.96 7.96 0 0 0 13 4.06V5a1 1 0 0 1-2 0v-.94c-1.46.18-2.8.76-3.9 1.62l.66.66a1 1 0 0 1-1.42 1.42l-.66-.67zM6.71 18a7.97 7.97 0 0 0 10.58 0 7.97 7.97 0 0 0-10.58 0z"/>
                                </svg>
                                <input type="text" placeholder="სფერო"
                                       class="bg-gray-100 max-w-full focus:outline-none text-gray-500"/>
                            </div>

                            <div class="flex justify-center">
                                <button
                                    class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 block w-full">
                                    ძებნა
                                </button>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="grid grid-cols-5 gap-4">
                <div class="flex justify-between items-center">
                    <div class="container mx-auto max-w-sm py-6">
                        <div class="card flex flex-col justify-center p-10 bg-white rounded-lg border border-gray-300">
                            <div class="prod-title">
                                <p class="text-2xl uppercase text-gray-900 font-bold text-center">Redberry</p>
                                <p class="uppercase text-sm text-gray-400 text-center">
                                    Digital Transformation Agency
                                </p>
                            </div>
                            <div class="prod-img py-6">
                                <img
                                    src="https://res.cloudinary.com/crunchbase-production/image/upload/c_lpad,f_auto,q_auto:eco,dpr_1/jb5ym5gptwrerxsgsv2c"
                                    class="w-full object-cover object-center"/>
                            </div>
                            <div class="prod-info grid gapy-6">
                                <div>
                                </div>
                                <div class="flex flex-col md:flex-col justify-between items-center text-gray-900">
                                    <p class="font-bold text-md">ვაკანსიები:<span class="font-medium text-md"> 65<span
                                                class=""></p>
                                    <button
                                        class="px-6 py-2 mt-2 transition ease-in duration-200 uppercase rounded-md hover:bg-indigo-500 text-white bg-indigo-600 focus:outline-none">
                                        პროფილი
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center items-center">
                    <div class="container mx-auto max-w-sm py-6 ">
                        <div class="card flex flex-col justify-center p-10 bg-white rounded-lg border border-gray-300">
                            <div class="prod-title">
                                <p class="text-2xl uppercase text-gray-900 font-bold text-center">Redberry</p>
                                <p class="uppercase text-sm text-gray-400 text-center">
                                    Digital Transformation Agency
                                </p>
                            </div>
                            <div class="prod-img py-6">
                                <img
                                    src="https://res.cloudinary.com/crunchbase-production/image/upload/c_lpad,f_auto,q_auto:eco,dpr_1/jb5ym5gptwrerxsgsv2c"
                                    class="w-full object-cover object-center"/>
                            </div>
                            <div class="prod-info grid gapy-6">
                                <div>
                                </div>
                                <div class="flex flex-col md:flex-col justify-between items-center text-gray-900">
                                    <p class="font-bold text-md">ვაკანსიები:<span class="font-medium text-md"> 65<span
                                                class=""></p>
                                    <button
                                        class="px-6 py-2 mt-2 transition ease-in duration-200 uppercase rounded-md hover:bg-indigo-500 text-white bg-indigo-600 focus:outline-none">
                                        პროფილი
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center items-center">
                    <div class="container mx-auto max-w-sm py-6 ">
                        <div class="card flex flex-col justify-center p-10 bg-white rounded-lg border border-gray-300">
                            <div class="prod-title">
                                <p class="text-2xl uppercase text-gray-900 font-bold text-center">Redberry</p>
                                <p class="uppercase text-sm text-gray-400 text-center">
                                    Digital Transformation Agency
                                </p>
                            </div>
                            <div class="prod-img py-6">
                                <img
                                    src="https://res.cloudinary.com/crunchbase-production/image/upload/c_lpad,f_auto,q_auto:eco,dpr_1/jb5ym5gptwrerxsgsv2c"
                                    class="w-full object-cover object-center"/>
                            </div>
                            <div class="prod-info grid gapy-6">
                                <div>
                                </div>
                                <div class="flex flex-col md:flex-col justify-between items-center text-gray-900">
                                    <p class="font-bold text-md">ვაკანსიები:<span class="font-medium text-md"> 65<span
                                                class=""></p>
                                    <button
                                        class="px-6 py-2 mt-2 transition ease-in duration-200 uppercase rounded-md hover:bg-indigo-500 text-white bg-indigo-600 focus:outline-none">
                                        პროფილი
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center items-center">
                    <div class="container mx-auto max-w-sm py-6 ">
                        <div class="card flex flex-col justify-center p-10 bg-white rounded-lg border border-gray-300">
                            <div class="prod-title">
                                <p class="text-2xl uppercase text-gray-900 font-bold text-center">Redberry</p>
                                <p class="uppercase text-sm text-gray-400 text-center">
                                    Digital Transformation Agency
                                </p>
                            </div>
                            <div class="prod-img py-6">
                                <img
                                    src="https://res.cloudinary.com/crunchbase-production/image/upload/c_lpad,f_auto,q_auto:eco,dpr_1/jb5ym5gptwrerxsgsv2c"
                                    class="w-full object-cover object-center"/>
                            </div>
                            <div class="prod-info grid gapy-6">
                                <div>
                                </div>
                                <div class="flex flex-col md:flex-col justify-between items-center text-gray-900">
                                    <p class="font-bold text-md">ვაკანსიები:<span class="font-medium text-md"> 65<span
                                                class=""></p>
                                    <button
                                        class="px-6 py-2 mt-2 transition ease-in duration-200 uppercase rounded-md hover:bg-indigo-500 text-white bg-indigo-600 focus:outline-none">
                                        პროფილი
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center items-center">
                    <div class="container mx-auto max-w-sm py-6 ">
                        <div class="card flex flex-col justify-center p-10 bg-white rounded-lg border border-gray-300">
                            <div class="prod-title">
                                <p class="text-2xl uppercase text-gray-900 font-bold text-center">Redberry</p>
                                <p class="uppercase text-sm text-gray-400 text-center">
                                    Digital Transformation Agency
                                </p>
                            </div>
                            <div class="prod-img py-6">
                                <img
                                    src="https://res.cloudinary.com/crunchbase-production/image/upload/c_lpad,f_auto,q_auto:eco,dpr_1/jb5ym5gptwrerxsgsv2c"
                                    class="w-full object-cover object-center"/>
                            </div>
                            <div class="prod-info grid gapy-6">
                                <div>
                                </div>
                                <div class="flex flex-col md:flex-col justify-between items-center text-gray-900">
                                    <p class="font-bold text-md">ვაკანსიები:<span class="font-medium text-md"> 65<span
                                                class=""></p>
                                    <button
                                        class="px-6 py-2 mt-2 transition ease-in duration-200 uppercase rounded-md hover:bg-indigo-500 text-white bg-indigo-600 focus:outline-none">
                                        პროფილი
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
