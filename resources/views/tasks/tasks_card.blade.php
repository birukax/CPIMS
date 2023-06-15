<div class="gap-3 mx-10 my-5 ">
    <div class="grid grid-cols-1 gap-2 md:grid-cols-3 md:gap-4 xl:grid-cols-4 2xl:gap-6 ">

        @foreach ($tasks as $task)
            <div class="relative max-w-sm pb-10 bg-white rounded shadow-lg">
                <div class="px-2 py-3">
                    <div class="justify-between pb-2 text-xl font-extrabold uppercase border-b text-dark">
                        {{ $task->task_name }}
                        <span
                            class="right-0 inline-block text-base font-medium rounded-full text-oxfordBlue ">{{ $task->date }}</span>
                    </div>
                    {{-- <p class="pt-2 font-sans text-xs text-black-2 xl:text-sm">
                        {{ $task->task_description }}
                    </p> --}}
                </div>
                <div class="flex items-center justify-between px-3 py-2">
                    <span class="text-sm font-medium text-black ">Starting time:</span>
                    <span
                        class="inline-block text-sm font-semibold rounded-full text-oxfordBlue">{{ $task->starting_time }}</span>
                </div>

                <div class="flex items-center justify-between px-3 py-2">
                    <span class="text-sm font-medium text-black ">Ending time:</span>
                    <span
                        class="inline-block text-sm font-semibold rounded-full text-oxfordBlue">{{ $task->ending_time }}</span>
                </div>
                <div class="flex justify-between gap-3 px-3 py-2 ">

                    <span class="sticky text-sm font-medium text-black ">Assigned police:</span>
                    <span
                        class="inline-block whitespace-nowrap rounded-full bg-gray px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-bold leading-none text-black">

                        {{ count($task->users) }}
                    </span>
                </div>

                <div class="flex justify-between gap-3 px-3 py-2">

                    <span class="text-sm font-medium text-black ">Zones:</span>
                    <div class="flex flex-col gap-1">
                        @foreach ($task->zones as $zone)
                            <span
                                class="inline-block whitespace-nowrap mb-1 text-black rounded-full bg-gray px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.80em] font-bold leading-none">
                                #{{ $zone->name }}
                            </span>
                        @endforeach

                    </div>

                </div>
                <div class="absolute justify-around bottom-2 left-2">

                    @include('tasks.add_user_modal1')
                </div>
                <div class="absolute justify-around bottom-2 right-2 ">
                    <a href="/tasks/task_detail/{{ $task->id }}"
                        class="inline-flex rounded gap-2 bg-oxfordBlue px-3 py-1 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:opacity-75 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-dark focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-oxfordBlue active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]  ">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m5.231 13.481L15 17.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v16.5c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9zm3.75 11.625a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                            </svg>

                        </span>
                        Detail
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
