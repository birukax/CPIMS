<div class="w-2/3 mx-auto">
    {{-- <h2 class="mb-4 text-2xl font-bold text-dark">Your tasks today</h2> --}}

    <div class="space-y-4">
        @foreach ($assigned_tasks as $task)
            <div class="p-2 space-y-2 text-gray-800 bg-white border rounded-xl">
                <div class="flex justify-between">
                    <a href="javascript:void(0)"
                        class="font-bold hover:text-yellow-800 hover:underline">{{ $task->task_name }}</a>



                    <div class="text-sm text-gray-400">{{ $task->date }}</div>
                </div>

                <div class="flex justify-between">
                    <div class="text-sm text-gray-600">
                        From: {{ $task->starting_time }} <br> To: {{ $task->ending_time }}
                    </div>
                    <span>
                        <a href="/tasks/task_detail/{{ $task->id }}"
                            class="inline-flex rounded gap-1 bg-oxfordBlue px-2 py-1 text-xs font-light uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:opacity-75 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-oxfordBlue focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-oxfordBlue active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] oxfordBlue:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m5.231 13.481L15 17.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v16.5c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9zm3.75 11.625a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                                </svg>

                            </span>
                            Detail
                        </a>
                    </span>
                </div>
                <div class="flex gap-3 ">
                    @foreach ($task->zones as $zone)
                        <div class="px-2 py-1 text-xs text-gray-400 rounded-md bg-gray">{{ $zone->name }}</div>
                    @endforeach
                </div>

            </div>
        @endforeach


    </div>
</div>
