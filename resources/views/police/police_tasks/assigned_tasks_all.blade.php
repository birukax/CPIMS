<div class="justify-center w-5/6 mx-auto mb-8 overflow-auto rounded-lg shadow-lg">
    <div class="w-full overflow-x-auto">
        <table class="w-full bg-white">
            <thead>
                <tr
                    class="text-sm tracking-wide text-left text-gray-900 uppercase bg-gray-100 border-b border-gray-600 md:font-semibold md:text-md">
                    <th class="px-1 py-1 md:px-4 md:py-3">Task Name + Date</th>
                    <th class="px-1 py-1 md:px-4 md:py-3">Starting Time</th>
                    <th class="px-1 py-1 md:px-4 md:py-3">Ending Time</th>
                    <th class="px-1 py-1 md:px-4 md:py-3">Assigned Polices</th>
                    <th class="px-1 py-1 md:px-4 md:py-3">Zones</th>
                    <th class="px-1 py-1 md:px-4 md:py-3">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @foreach ($assigned_tasks as $task)
                    <tr class="text-gray-700">
                        <td class="px-4 py-3 border">
                            <div class="flex items-center text-sm">
                                <div>
                                    <p class="font-semibold text-black">{{ $task->task_name }}</p>
                                    <p class="text-xs text-gray-600">{{ $task->date }}</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-3 font-semibold border text-ms">{{ $task->starting_time }}</td>
                        <td class="px-4 py-3 font-semibold border text-ms">{{ $task->ending_time }}</td>
                        <td class="px-4 py-3 font-semibold border text-ms">{{ count($task->users) }}</td>
                        <td class="px-4 py-3 font-semibold border text-ms">
                            @foreach ($task->zones as $zone)
                                <span
                                    class="inline-block whitespace-nowrap mb-1 text-black rounded-full bg-gray px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.80em] font-bold leading-none">
                                    #{{ $zone->name }}
                                </span>
                            @endforeach
                        </td>
                        <td class="px-4 py-3 font-semibold border text-ms">
                            <span>
                            </span>
                            <span>
                                <a href="/tasks/task_detail/{{ $task->id }}"
                                    class="inline-flex rounded gap-2 bg-oxfordBlue px-3 py-1 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:opacity-75 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-dark focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-dark active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m5.231 13.481L15 17.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v16.5c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9zm3.75 11.625a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                                        </svg>

                                    </span>
                                    Detail
                                </a>
                            </span>
                        </td>

                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
