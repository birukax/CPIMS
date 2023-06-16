<x-layout>

    <div class="justify-between gap-4 md:flex">
        {{-- @include('sl.attendance') --}}
        <div class="w-full cards">
            <!-- component -->
            <!-- main card -->
            <div class="p-3 bg-white md:p-10 rounded-xl">

                <!-- subscriptions -->
                <div
                    class="flex flex-col items-center justify-center mt-10 space-x-0 md:flex-row md:space-x-10 space-y-14 md:space-y-0">

                    <div class="bg-oxfordBlue rounded-xl text-oxfordBlue">
                        <div
                            class="flex flex-col p-16 translate-x-4 translate-y-4 bg-white shadow-xl rounded-xl w-96 md:w-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-16 h-16">
                                <path fill-rule="evenodd"
                                    d="M12 2.25a.75.75 0 01.75.75v.756a49.106 49.106 0 019.152 1 .75.75 0 01-.152 1.485h-1.918l2.474 10.124a.75.75 0 01-.375.84A6.723 6.723 0 0118.75 18a6.723 6.723 0 01-3.181-.795.75.75 0 01-.375-.84l2.474-10.124H12.75v13.28c1.293.076 2.534.343 3.697.776a.75.75 0 01-.262 1.453h-8.37a.75.75 0 01-.262-1.453c1.162-.433 2.404-.7 3.697-.775V6.24H6.332l2.474 10.124a.75.75 0 01-.375.84A6.723 6.723 0 015.25 18a6.723 6.723 0 01-3.181-.795.75.75 0 01-.375-.84L4.168 6.241H2.25a.75.75 0 01-.152-1.485 49.105 49.105 0 019.152-1V3a.75.75 0 01.75-.75zm4.878 13.543l1.872-7.662 1.872 7.662h-3.744zm-9.756 0L5.25 8.131l-1.872 7.662h3.744z"
                                    clip-rule="evenodd" />
                            </svg>


                            <div class="mt-3 text-xl font-bold">CRIMES</div>
                            <div class="p-2 text-base font-bold text-center bg-gray rounded-2xl ">{{ count($crimes) }}
                            </div>
                            <div class="my-4">
                                <span class="text-lg font-bold">PENDING:</span>
                                <span class="text-base font-bold ">{{ count($pending_crimes) }}</span>
                            </div>

                            <a href="{{ route('crimes') }}"
                                class="bg-oxfordBlue px-4 py-2 rounded-3xl text-white  border border-[#F0F0F6] shadow-xl mt-4">
                                Goto Crimes
                            </a>
                        </div>
                    </div>

                </div>

                <div class="flex justify-center">
                    <button class="px-4 py-3 mt-12 text-white rounded-full bg-slate-900">See all subscriptions</button>
                </div>
            </div>

        </div>
        @include('partials.emergency')
    </div>

</x-layout>
