@extends('layout')

@section('content')

    <!-- Section 2 -->
    <section class="flex items-center justify-center py-16 bg-gray-100 min-w-screen">
        <div class="max-w-6xl px-12 mx-auto bg-gray-100 md:px-16 xl:px-10">
            <div class="flex flex-col items-center lg:flex-row">
                <div class="flex flex-col items-start justify-center w-full h-full pr-8 mb-10 lg:mb-0 lg:w-1/2">
                    <p class="mb-2 text-base font-medium tracking-tight text-indigo-500 uppercase">იპოვე კადრები მარტივად</p>
                    <h2 class="text-4xl font-extrabold leading-10 tracking-tight text-gray-900 sm:text-5xl sm:leading-none md:text-6xl lg:text-5xl xl:text-6xl">Jobberry-ზე</h2>
                    <p class="my-6 text-lg text-gray-600">დაათვალიერე პროფილები და ამოარჩიე შენთვის სასურველი კადრი</p>
                    <a href="#_" class="flex items-center justify-center px-8 py-3 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-indigo-600 border border-transparent rounded-md shadow hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo md:py-4 md:text-lg md:px-10">ყველა პროფილის ნახვა</a>
                </div>
                <div class="w-full lg:w-1/2">
                    <blockquote class="flex items-center justify-between w-full col-span-1 p-6 bg-white rounded-lg shadow">
                        <div class="flex flex-col pr-8">
                            <div class="relative pl-12">
                                <p class="mt-2 text-sm text-gray-600 sm:text-base lg:text-sm xl:text-base">მოტივირებული, შრომისმოყვარე და უბრალოდ კარგი ადამიანი</p>
                            </div>

                            <h3 class="pl-12 mt-3 text-sm font-medium leading-5 text-gray-800 truncate sm:text-base lg:text-sm lg:text-base">
                                ჯონ დო
                                <span class="mt-1 text-sm leading-5 text-gray-500 truncate">- Full Stack Developer</span>
                            </h3>
                        </div>
                        <img class="flex-shrink-0 w-20 h-20 bg-gray-300 rounded-full xl:w-24 xl:h-24" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=60" alt="">
                    </blockquote>
                    <blockquote class="flex items-center justify-between w-full col-span-1 p-6 mt-4 bg-white rounded-lg shadow">
                        <div class="flex flex-col pr-10">
                            <div class="relative pl-12">
                                <p class="mt-2 text-sm text-gray-600 sm:text-base lg:text-sm xl:text-base">სასიქადულო მამულიშვილი, პატრიოტი</p>
                            </div>
                            <h3 class="pl-12 mt-3 text-sm font-medium leading-5 text-gray-800 truncate sm:text-base lg:text-sm lg:text-base">
                                ჯონ ხო
                                <span class="mt-1 text-sm leading-5 text-gray-500 truncate">- UI/UX Designer</span>
                            </h3>
                            <p class="mt-1 text-sm leading-5 text-gray-500 truncate"></p>
                        </div>
                        <img class="flex-shrink-0 w-24 h-24 bg-gray-300 rounded-full" src="https://images.unsplash.com/photo-1527980965255-d3b416303d12?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;aauto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=60" alt="">
                    </blockquote>
                    <blockquote class="flex items-center justify-between w-full col-span-1 p-6 mt-4 bg-white rounded-lg shadow">
                        <div class="flex flex-col pr-10">
                            <div class="relative pl-12">
                                <p class="mt-2 text-sm text-gray-600 sm:text-base lg:text-sm xl:text-base">გამოჩენილი საზოგადო მოღვაზე და სასახელო მამულიშვილი</p>
                            </div>

                            <h3 class="pl-12 mt-3 text-sm font-medium leading-5 text-gray-800 truncate sm:text-base lg:text-sm lg:text-base">
                                ჯონ სმიტი
                                <span class="mt-1 text-sm leading-5 text-gray-500 truncate">- DevOps Manager</span>
                            </h3>
                            <p class="mt-1 text-sm leading-5 text-gray-500 truncate"></p>
                        </div>
                        <img class="flex-shrink-0 w-24 h-24 bg-gray-300 rounded-full" src="https://images.unsplash.com/photo-1545167622-3a6ac756afa4?ixlib=rrb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;aauto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=60" alt="">
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3 -->
    <section class="bg-white pt-7 pb-14">
        <div class="container px-8 mx-auto sm:px-12 lg:px-20">
            <h1 class="text-sm font-bold tracking-wide text-center text-gray-800 uppercase mb-7">კომპანიები, რომლებიც გვენდობიან.</h1>
            <div class="flex grid items-center justify-center grid-cols-4 grid-cols-12 gap-y-8">
                <div class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-3 xl:col-span-2">
                    <img src="https://cdn.devdojo.com/tails/images/disney-plus.svg" alt="Disney Plus" class="block object-contain h-12">
                </div>
                <div class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-3 xl:col-span-2">
                    <img src="https://cdn.devdojo.com/tails/images/google.svg" alt="Google" class="block object-contain h-9">
                </div>
                <div class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-3 xl:col-span-2">
                    <img src="https://cdn.devdojo.com/tails/images/hubspot.svg" alt="Hubspot" class="block object-contain h-9">
                </div>
                <div class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-3 xl:col-span-2">
                    <img src="https://cdn.devdojo.com/tails/images/youtube.svg" alt="Youtube" class="block object-contain h-7 lg:h-8">
                </div>
                <div class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-6 xl:col-span-2">
                    <img src="https://cdn.devdojo.com/tails/images/slack.svg" alt="Slack" class="block object-contain h-9">
                </div>
                <div class="flex items-center justify-center col-span-6 sm:col-span-4 md:col-span-6 xl:col-span-2">
                    <img src="https://cdn.devdojo.com/tails/images/shopify.svg" alt="Shopify" class="block object-contain h-9">
                </div>
            </div>
        </div>
    </section>

    <!-- Section 4 -->
    <section class="leading-7 text-gray-900 bg-white">
        <div class="max-w-6xl px-4 px-10 mx-auto border-solid lg:px-12">
            <div class="flex flex-col items-start leading-7 text-gray-900 border-0 border-gray-200 lg:items-center lg:flex-row">
                <div class="box-border flex-1 text-center border-solid sm:text-left">
                    <h2 class="m-0 text-xl font-semibold leading-tight tracking-tight text-left text-black border-0 border-gray-200 sm:text-3xl">
                        აღმოაჩინე Jobberry-ზე
                    </h2>
                    <p class="mt-2 text-md text-left text-gray-900 border-0 border-gray-200 sm:text-2xl font-base">
                        შენთვის სასურველი კომპანიები და არ გამოტოვო ვაკანსიები
                    </p>
                </div>

        <a href="#_" class="flex items-center justify-center px-8 py-3 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-indigo-600 border border-transparent rounded-md shadow hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo md:py-4 md:text-lg md:px-10">ყველა კომპანია <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg></a>
            </div>
        </div>
    </section>

    <!-- Section 5 -->
    <section class="py-20 bg-white">
        <div class="container max-w-6xl mx-auto">
            <h2 class="text-4xl font-bold tracking-tight text-center">რატომ ჩვენ?</h2>
            <div class="grid grid-cols-4 gap-8 mt-10 sm:grid-cols-8 lg:grid-cols-12 sm:px-8 xl:px-0">

                <div class="relative flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 overflow-hidden bg-gray-100 sm:rounded-xl">
                    <div class="p-3 text-white bg-blue-500 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M14 3v4a1 1 0 0 0 1 1h4"></path><path d="M5 8v-3a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2h-5"></path><circle cx="6" cy="14" r="3"></circle><path d="M4.5 17l-1.5 5l3 -1.5l3 1.5l-1.5 -5"></path></svg>
                    </div>
                    <h4 class="text-xl font-medium text-gray-700">კადრები</h4>
                    <p class="text-base text-center text-gray-500">აღმოაჩინე შენთვის სასურველი კადრები თავადვე ლოდინის გარეშე.</p>
                </div>

                <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl">
                    <div class="p-3 text-white bg-blue-500 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M18 8a3 3 0 0 1 0 6"></path><path d="M10 8v11a1 1 0 0 1 -1 1h-1a1 1 0 0 1 -1 -1v-5"></path><path d="M12 8h0l4.524 -3.77a0.9 .9 0 0 1 1.476 .692v12.156a0.9 .9 0 0 1 -1.476 .692l-4.524 -3.77h-8a1 1 0 0 1 -1 -1v-4a1 1 0 0 1 1 -1h8"></path></svg>
                    </div>
                    <h4 class="text-xl font-medium text-gray-700">შეტყობინებები</h4>
                    <p class="text-base text-center text-gray-500">მიიღე შეტყობინება, როდესაც შენთვის სასურველი ვაკანსია გამოჩნდება.</p>
                </div>

                <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl">
                    <div class="p-3 text-white bg-blue-500 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3"></polyline><line x1="12" y1="12" x2="20" y2="7.5"></line><line x1="12" y1="12" x2="12" y2="21"></line><line x1="12" y1="12" x2="4" y2="7.5"></line><line x1="16" y1="5.25" x2="8" y2="9.75"></line></svg>
                    </div>
                    <h4 class="text-xl font-medium text-gray-700">კომპანიები</h4>
                    <p class="text-base text-center text-gray-500">იპოვე შენთვის სასურველი კომპანია და არ გამოტოვო მათი ვაკანსიები.</p>
                </div>

                <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl">
                    <div class="p-3 text-white bg-blue-500 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M8 9l3 3l-3 3"></path><line x1="13" y1="15" x2="16" y2="15"></line><rect x="3" y="4" width="18" height="16" rx="2"></rect></svg>
                    </div>
                    <h4 class="text-xl font-medium text-gray-700">CV ყუთები</h4>
                    <p class="text-base text-center text-gray-500">დაუტოვე შენი CV კომპანიებს წინასწარ.</p>
                </div>

                <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl">
                    <div class="p-3 text-white bg-blue-500 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="9.5" y1="11" x2="9.51" y2="11"></line><line x1="14.5" y1="11" x2="14.51" y2="11"></line><path d="M9.5 15a3.5 3.5 0 0 0 5 0"></path><path d="M7 5h1v-2h8v2h1a3 3 0 0 1 3 3v9a3 3 0 0 1 -3 3v1h-10v-1a3 3 0 0 1 -3 -3v-9a3 3 0 0 1 3 -3"></path></svg>
                    </div>
                    <h4 class="text-xl font-medium text-gray-700">მარტივი რეგისტრაცია</h4>
                    <p class="text-base text-center text-gray-500">დარეგისტრირდი მარტივად, ზედმეტი ინფორმაციის გარეშე.</p>
                </div>

                <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl">
                    <div class="p-3 text-white bg-blue-500 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="15" y1="5" x2="15" y2="7"></line><line x1="15" y1="11" x2="15" y2="13"></line><line x1="15" y1="17" x2="15" y2="19"></line><path d="M5 5h14a2 2 0 0 1 2 2v3a2 2 0 0 0 0 4v3a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-3a2 2 0 0 0 0 -4v-3a2 2 0 0 1 2 -2"></path></svg>
                    </div>
                    <h4 class="text-xl font-medium text-gray-700">მარტივი კონტროლი</h4>
                    <p class="text-base text-center text-gray-500">აკონტროლე პროფილი/განცხადებები მარტივად, ლამაზი დიზაინით.</p>
                </div>

            </div>
        </div>
    </section>
    <!-- Section 6 -->

@endsection()
