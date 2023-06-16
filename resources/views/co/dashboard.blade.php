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

                    <div class="bg-dark rounded-xl text-dark">
                        <div
                            class="flex flex-col p-10 translate-x-4 translate-y-4 bg-white shadow-xl rounded-xl w-96 md:w-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-12 h-12">
                                <path fill-rule="evenodd"
                                    d="M12 2.25a.75.75 0 01.75.75v.756a49.106 49.106 0 019.152 1 .75.75 0 01-.152 1.485h-1.918l2.474 10.124a.75.75 0 01-.375.84A6.723 6.723 0 0118.75 18a6.723 6.723 0 01-3.181-.795.75.75 0 01-.375-.84l2.474-10.124H12.75v13.28c1.293.076 2.534.343 3.697.776a.75.75 0 01-.262 1.453h-8.37a.75.75 0 01-.262-1.453c1.162-.433 2.404-.7 3.697-.775V6.24H6.332l2.474 10.124a.75.75 0 01-.375.84A6.723 6.723 0 015.25 18a6.723 6.723 0 01-3.181-.795.75.75 0 01-.375-.84L4.168 6.241H2.25a.75.75 0 01-.152-1.485 49.105 49.105 0 019.152-1V3a.75.75 0 01.75-.75zm4.878 13.543l1.872-7.662 1.872 7.662h-3.744zm-9.756 0L5.25 8.131l-1.872 7.662h3.744z"
                                    clip-rule="evenodd" />
                            </svg>


                            <div class="mt-3 text-lg font-semibold">CRIMES</div>
                            <div class="p-2 text-sm font-bold text-center bg-gray rounded-2xl ">{{ count($crimes) }}
                            </div>
                            <div class="my-4">
                                <span class="text-base font-bold">PENDING:</span>
                                <span class="text-sm font-bold ">{{ count($polices) }}</span>
                            </div>

                            <a href="{{ route('crimes') }}"
                                class="bg-dark px-4 py-2 rounded-3xl text-white  border border-[#F0F0F6] shadow-xl mt-4">
                                Goto Crimes
                            </a>
                        </div>
                    </div>

                    <div class="bg-oxfordBlue rounded-xl text-oxfordBlue">
                        <div
                            class="flex flex-col p-10 translate-x-4 translate-y-4 bg-white shadow-xl rounded-xl w-96 md:w-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-12 h-12">
                                <path
                                    d="M4.5 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM14.25 8.625a3.375 3.375 0 116.75 0 3.375 3.375 0 01-6.75 0zM1.5 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM17.25 19.128l-.001.144a2.25 2.25 0 01-.233.96 10.088 10.088 0 005.06-1.01.75.75 0 00.42-.643 4.875 4.875 0 00-6.957-4.611 8.586 8.586 0 011.71 5.157v.003z" />
                            </svg>



                            <div class="mt-3 text-lg font-semibold">ALL PC</div>
                            <div class="p-2 text-sm font-bold text-center bg-gray rounded-2xl ">{{ count($pcs) }}
                            </div>
                            {{-- <div class="my-4">
                                <span class="text-base font-bold">:</span>
                                <span class="text-sm font-bold ">{{ count($availables) }}</span>
                            </div> --}}

                            <a href="{{ route('pcs') }}"
                                class="bg-oxfordBlue px-4 py-2 rounded-3xl text-white  border border-[#F0F0F6] shadow-xl mt-4">
                                Goto PC
                            </a>
                        </div>
                    </div>

                    <div class="bg-graydark rounded-xl">
                        <div
                            class="flex flex-col p-10 translate-x-4 translate-y-4 bg-white shadow-xl rounded-xl w-96 md:w-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-12 h-12">
                                <path
                                    d="M5.566 4.657A4.505 4.505 0 016.75 4.5h10.5c.41 0 .806.055 1.183.157A3 3 0 0015.75 3h-7.5a3 3 0 00-2.684 1.657zM2.25 12a3 3 0 013-3h13.5a3 3 0 013 3v6a3 3 0 01-3 3H5.25a3 3 0 01-3-3v-6zM5.25 7.5c-.41 0-.806.055-1.184.157A3 3 0 016.75 6h10.5a3 3 0 012.683 1.657A4.505 4.505 0 0018.75 7.5H5.25z" />
                            </svg>

                            <div class="mt-3 text-lg font-semibold">ALL LEAVES</div>
                            <div class="p-2 text-sm font-bold text-center bg-gray rounded-2xl">{{ count($leaves) }}</div>
                            <div class="my-4">
                                <span class="text-base font-bold">PENDING:</span>
                                <span class="text-sm font-bold">{{ count($pending_leaves) }}</span>
                            </div>

                            <a href="{{ route('manage_leaves') }}"
                                class="bg-graydark px-4 py-2 rounded-3xl text-white  border border-[#F0F0F6] shadow-xl mt-4">
                                Goto Leaves
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
