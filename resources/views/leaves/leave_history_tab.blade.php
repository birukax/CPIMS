<div class="w-full px-4 mx-auto my-5 xl:w-11/12 xl:mb-0">
    <div class="relative flex flex-col w-full min-w-0 mb-6 break-words bg-white rounded shadow-lg ">
        <div class="px-4 py-3 mb-0 border-0 rounded-t">
            <div class="flex flex-wrap items-center">
                <div class="relative flex-1 flex-grow w-full max-w-full px-4">
                    <h3 class="text-base font-semibold text-blueGray-700">Leave Request History</h3>
                </div>
            </div>
        </div>

        <div class="block w-full overflow-x-auto">
            <table class="items-center w-full bg-transparent border-collapse ">
                <thead>
                    <tr>
                        {{-- <th
                            class="px-6 py-3 text-xs font-semibold text-left uppercase align-middle border border-l-0 border-r-0 border-solid bg-blueGray-50 text-blueGray-500 border-blueGray-100 whitespace-nowrap">
                            Reason
                        </th> --}}
                        <th
                            class="px-6 py-3 text-xs font-semibold text-left uppercase align-middle border border-l-0 border-r-0 border-solid bg-blueGray-50 text-blueGray-500 border-blueGray-100 whitespace-nowrap">
                            Leave Type
                        </th>
                        <th
                            class="px-6 py-3 text-xs font-semibold text-left uppercase align-middle border border-l-0 border-r-0 border-solid bg-blueGray-50 text-blueGray-500 border-blueGray-100 whitespace-nowrap">
                            Status
                        </th>
                        <th
                            class="px-6 py-3 text-xs font-semibold text-left uppercase align-middle border border-l-0 border-r-0 border-solid bg-blueGray-50 text-blueGray-500 border-blueGray-100 whitespace-nowrap">
                            Start Date + <span class="p-2 text-white rounded-md bg-oxfordBlue ">Leave Days</span>

                        </th>

                        <th
                            class="px-6 py-3 text-xs font-semibold text-left uppercase align-middle border border-l-0 border-r-0 border-solid bg-blueGray-50 text-blueGray-500 border-blueGray-100 whitespace-nowrap">
                            Detail
                        </th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($requests as $request)
                        <tr>
                            {{-- <th
                                class="p-4 px-6 text-xs text-left align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap text-blueGray-700 ">
                                {{ $request->reason }}
                            </th> --}}
                            <td
                                class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap ">
                                {{ $request->lt->name }}

                            </td>
                            <td
                                class="p-4 px-6 text-xs border-t-0 border-l-0 border-r-0 align-center whitespace-nowrap">
                                {{ $request->status->name }}
                            </td>
                            <td
                                class="flex-col p-4 px-6 text-xs border-t-0 border-l-0 border-r-0 align-center whitespace-nowrap">
                                <span>{{ $request->start_date }}</span>
                                <span
                                    class="px-2 py-1 text-white rounded-full bg-oxfordBlue">{{ $request->leave_days }}</span>
                            </td>
                            <td
                                class="p-4 px-6 text-xs border-t-0 border-l-0 border-r-0 align-center whitespace-nowrap">
                                @include('leaves.leave_history_modal')
                            </td>


                        </tr>
                    @endforeach

                </tbody>

            </table>
        </div>
    </div>
</div>
