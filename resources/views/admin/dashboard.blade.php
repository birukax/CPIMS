<x-layout>

    <div class="justify-between w-full h-full gap-4 md:flex">
        <div class="w-full cards">
            <!-- component -->
            <!-- main card -->
            <div class="p-3 md:p-10 rounded-xl">

                <!-- subscriptions -->
                <div
                    class="flex flex-col items-center justify-center mt-10 space-x-0 lg:flex-row md:space-x-10 space-y-14 md:space-y-0">

                    <div class="bg-dark rounded-xl text-dark">
                        <div
                            class="flex flex-col p-10 translate-x-4 translate-y-4 bg-white shadow-xl rounded-xl w-96 md:w-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-16 h-16">
                                <path fill-rule="evenodd"
                                    d="M8.25 6.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM15.75 9.75a3 3 0 116 0 3 3 0 01-6 0zM2.25 9.75a3 3 0 116 0 3 3 0 01-6 0zM6.31 15.117A6.745 6.745 0 0112 12a6.745 6.745 0 016.709 7.498.75.75 0 01-.372.568A12.696 12.696 0 0112 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 01-.372-.568 6.787 6.787 0 011.019-4.38z"
                                    clip-rule="evenodd" />
                                <path
                                    d="M5.082 14.254a8.287 8.287 0 00-1.308 5.135 9.687 9.687 0 01-1.764-.44l-.115-.04a.563.563 0 01-.373-.487l-.01-.121a3.75 3.75 0 013.57-4.047zM20.226 19.389a8.287 8.287 0 00-1.308-5.135 3.75 3.75 0 013.57 4.047l-.01.121a.563.563 0 01-.373.486l-.115.04c-.567.2-1.156.349-1.764.441z" />
                            </svg>

                            <div class="mt-3 text-xl font-bold">USERS</div>
                            <div class="p-2 text-base font-bold text-center bg-gray rounded-2xl ">
                                {{ count($users) }}
                            </div>
                            <div class="my-2">
                                <span class="text-base font-bold">POLICE:</span>
                                <span class="text-base font-bold ">{{ count($polices) }}</span>
                            </div>
                            <div class="my-2">
                                <span class="text-base font-bold">SHIFT LEADER:</span>
                                <span class="text-base font-bold ">{{ count($sls) }}</span>
                            </div>
                            <div class="my-2">
                                <span class="text-base font-bold">CHIEF OFFICER:</span>
                                <span class="text-base font-bold ">{{ count($cos) }}</span>
                            </div>
                            <div class="my-2">
                                <span class="text-base font-bold">DISCIPLINE COMMITTEE:</span>
                                <span class="text-base font-bold ">{{ count($dcs) }}</span>
                            </div>

                            <a href="{{ route('users') }}"
                                class="bg-dark px-4 py-2 rounded-3xl text-white  border border-[#F0F0F6] shadow-xl mt-4">
                                GOTO Users
                            </a>
                        </div>
                    </div>

                    <div class="bg-oxfordBlue rounded-xl text-oxfordBlue">
                        <div
                            class="flex flex-col p-10 translate-x-4 translate-y-4 bg-white shadow-xl rounded-xl w-96 md:w-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-16 h-16">
                                <path d="M12.75 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM7.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM8.25 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM9.75 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM10.5 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM12.75 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM14.25 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 13.5a.75.75 0 100-1.5.75.75 0 000 1.5z" />
                                <path fill-rule="evenodd" d="M6.75 2.25A.75.75 0 017.5 3v1.5h9V3A.75.75 0 0118 3v1.5h.75a3 3 0 013 3v11.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V7.5a3 3 0 013-3H6V3a.75.75 0 01.75-.75zm13.5 9a1.5 1.5 0 00-1.5-1.5H5.25a1.5 1.5 0 00-1.5 1.5v7.5a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5v-7.5z" clip-rule="evenodd" />
                              </svg>

                            <div class="mt-3 text-xl font-bold">LEAVES</div>
                            <div class="p-2 text-base font-bold text-center bg-gray rounded-2xl ">
                                {{ count($leaves) }}
                            </div>

                            <div class="my-2">
                                <span class="text-base font-bold">PENDING:</span>
                                <span class="text-base font-bold ">{{ count($pending) }}</span>
                            </div>
                            <div class="my-2">
                                <span class="text-base font-bold">ACCEPTED:</span>
                                <span class="text-base font-bold ">{{ count($accepted_leaves) }}</span>
                            </div>
                            <div class="my-2">
                                <span class="text-base font-bold">REJECTED</span>:</span>
                                <span class="text-base font-bold ">{{ count($rejected_leaves) }}</span>
                            </div>
                            <div class="my-2">
                                <span class="text-base font-bold">CHIEF OFFICER PENDING:</span>
                                <span class="text-base font-bold ">{{ count($co_pending) }}</span>
                            </div>

                            <a href="{{ route('manage_leaves') }}"
                                class="bg-oxfordBlue px-4 py-2 rounded-3xl text-white  border border-[#F0F0F6] shadow-xl mt-4">
                                GOTO Leaves
                            </a>
                        </div>
                    </div>

                </div>

            </div>

        </div>
        @include('partials.emergency')

    </div>

</x-layout>
