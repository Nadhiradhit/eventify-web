<div class="card bg-white border border-gray-200 rounded-xl shadow">
    <div class="p-6">
        <a href="#">
            <img class="rounded-t-lg w-full h-64 rounded-lg" src="{{ url('assets/img/wedding-product.jpg') }}" alt="" />
        </a>
    </div>
    <div class="p-5 -mt-6">
        <a href="#">
            <x-card.heading-card for="name" :value="__('Halloo')"/>
        </a>
        <p class="mb-3 font-normal text-sm text-gray-700 dark:text-gray-400">Here are the biggest enterprise
            technology acquisitions of 2021 so far, in reverse chronological order.</p>
        <div class="flex justify-between">
            <p class="flex items-center justify-center">Rp.750.000</p>
            <a href="{{url('/detail')}}"
                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Detail
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
        </div>
    </div>
</div>
