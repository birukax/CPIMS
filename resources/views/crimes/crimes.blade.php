<x-layout>
@if(Auth()->user()->role_id === 2)

    <div class="flex-col mt-5 mx-30">
        <div class="flex justify-between mx-10 my-5 ">
            {{-- report a crime --}}
            <div class="">
                <a href="/crimes/report_crime"
                    class="inline-flex items-center justify-center gap-2 rounded-full bg-dark py-2 px-3 text-center font-medium text-white hover:bg-opacity-90 lg:px-4 xl:px-6">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 3v1.5M3 21v-6m0 0l2.77-.693a9 9 0 016.208.682l.108.054a9 9 0 006.086.71l3.114-.732a48.524 48.524 0 01-.005-10.499l-3.11.732a9 9 0 01-6.085-.711l-.108-.054a9 9 0 00-6.208-.682L3 4.5M3 15V4.5" />
                        </svg>
                    </span>
                    Report Crime
                </a>
            </div>

        </div>
@else
        @endif

        @include('crimes.crimes_table')



    </div>
</x-layout>
