<section class="py-0 bg-white">
    <div class="container max-w-6xl mx-auto">
        <div class="container mb-10">
            {{-- {{ config('sekolah.features_tittle') }} untuk memanggil custom config dari file sekolah --}}
            <h2 class="text-4xl font-bold tracking-tight text-center">{{ config('sekolah.features_headers') }}</h2>
            <p class="mt-2 text-lg text-center text-gray-600">{{ config('sekolah.features_tittle') }}</p>
        </div>
        <div class="grid grid-cols-4 gap-8 mt-10 sm:grid-cols-8 lg:grid-cols-12 sm:px-8 xl:px-0">

            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl"
            data-aos="fade-right" data-aos-duration="2000">
                <div class="p-3 text-white bg-blue-500 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M8 9l3 3l-3 3" />
                        <line x1="13" y1="15" x2="16" y2="15" />
                        <rect x="3" y="4" width="18" height="16" rx="2" />
                    </svg>
                </div>
                <h4 class="text-xl font-medium text-gray-700">Developer Tools</h4>
                <p class="text-base text-center text-gray-500">Developer tools to help grow your application and keep it up-to-date.</p>
            </div>

            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl"
            data-aos="fade-up" data-aos-duration="2000">
                <div class="p-3 text-white bg-blue-500 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <line x1="9.5" y1="11" x2="9.51" y2="11" />
                        <line x1="14.5" y1="11" x2="14.51" y2="11" />
                        <path d="M9.5 15a3.5 3.5 0 0 0 5 0" />
                        <path d="M7 5h1v-2h8v2h1a3 3 0 0 1 3 3v9a3 3 0 0 1 -3 3v1h-10v-1a3 3 0 0 1 -3 -3v-9a3 3 0 0 1 3 -3" />
                    </svg>
                </div>
                <h4 class="text-xl font-medium text-gray-700">Building Blocks</h4>
                <p class="text-base text-center text-gray-500">The right kind of building blocks to take your company to the next level.</p>
            </div>

            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl" 
            data-aos="fade-left" data-aos-duration="2000">
                <div class="p-3 text-white bg-blue-500 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <line x1="15" y1="5" x2="15" y2="7" />
                        <line x1="15" y1="11" x2="15" y2="13" />
                        <line x1="15" y1="17" x2="15" y2="19" />
                        <path d="M5 5h14a2 2 0 0 1 2 2v3a2 2 0 0 0 0 4v3a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-3a2 2 0 0 0 0 -4v-3a2 2 0 0 1 2 -2" />
                    </svg>
                </div>
                <h4 class="text-xl font-medium text-gray-700">Coupons</h4>
                <p class="text-base text-center text-gray-500">Coupons system to provide special offers and discounts for your app.</p>
            </div>

        </div>
    </div>
</section>