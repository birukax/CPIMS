<!-- component -->
<section class="w-full font-mono md:container md:p-2 md:mx-auto">
    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
        <div class="w-full overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr
                        class="font-semibold tracking-wide text-left text-white uppercase border-b border-gray-600 bg-dark text-md">
                        <th class="px-4 py-3">Name</th>
                        <th class="px-4 py-3">Leave Type</th>
                        <th class="px-4 py-3">Status</th>
                        <th class="px-4 py-3">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @foreach ($leaves as $leave)
                        <tr class="text-gray-700">
                            <td class="px-4 py-3 border">
                                <div class="flex items-center text-sm">

                                    <div>
                                        <p class="font-semibold text-black">{{ $leave->user->name }}</p>
                                        <p class="hidden text-xs text-gray-600 md:visible">{{ $leave->reason }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 font-semibold border text-ms">{{ $leave->lt->name }}</td>
                            <td class="px-4 py-3 text-xs border">
                                <span
                                    class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm">
                                    @if ($leave->status->id === 2)
                                        Admin Pending
                                    @elseif ($leave->status->id === 5)
                                        Admin Rejected
                                    @else
                                        {{ $leave->status->name }}
                                    @endif
                                </span>
                            </td>
                            <td class="px-4 py-3 text-sm border">

                                <a href="/leave/leave_detail/{{ $leave->id }}"
                                    class="inline-flex items-center justify-center gap-2 px-3 py-1 font-medium text-center text-white rounded-full bg-dark hover:bg-opacity-90 lg:px-4 xl:px-6">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m5.231 13.481L15 17.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v16.5c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9zm3.75 11.625a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                                        </svg>
                                    </span>
                                    Detail
                                </a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</section>
