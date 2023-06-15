<div class="container max-w-screen-lg mx-auto">
    <div>
        <h2 class="text-xl font-semibold text-dark">Leave Request</h2>
        {{-- <p class="mb-6 text-gray-500">Form is mobile responsive. Give it a try.</p> --}}
        <x-message />
        <div class="p-4 px-4 mb-6 bg-white rounded shadow-lg md:p-8">
            <div class="grid grid-cols-1 gap-4 text-sm gap-y-2 lg:grid-cols-3">
                <div class="text-gray-600">
                    <p class="text-lg font-medium">Leave Request Details</p>
                    <p>Please fill out all the fields.</p>

                </div>


                <div class="lg:col-span-2 text-black">
                    <div class="flex gap-3 justify-end items-center">
                        <span >Available days:</span>
                        <h1 class="text-xl p-1 bg-dark rounded-lg text-white text-center">{{ auth()->user()->available_leave }}</h1></div>
                    <form action="{{ route('request_leave') }}" method="post">
                        @csrf
                        <div class="grid grid-cols-1 gap-4 text-sm gap-y-2 md:grid-cols-5">
                            <div class="md:col-span-5">
                                <label class="text-black" for="reason">Reason</label>
                                <input type="text" name="reason" id="reason"
                                    class="w-full h-10 px-4 mt-1 border rounded bg-gray-50" />
                            </div>

                            <div class="md:col-span-2">
                                <label class="text-black" class="mb-1">Starting Date</label>
                                <div class="relative mb-3" id="datepicker-disable-past" data-te-input-wrapper-init>
                                    <input type="text"
                                        class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                        datepicker-format="mm/dd/yyyy" name="start_date" placeholder="date" />
                                </div>
                            </div>

                            <div class="md:col-span-2">
                                <label class="text-black" for="leave_days">Leave Days</label>
                                <input type="text" name="leave_days" id="leave_days"
                                    class="w-full h-10 px-4 mt-1 border rounded bg-gray-50" placeholder="" />
                            </div>

                            <div class="md:col-span-4">
                                <label class="text-black" for="leave_type">Leave Type (days)</label>
                                <select data-te-select-init name="lt_id" id=" leave_type"
                                    class="w-full h-10 border-dark active:border-dark">
                                    @foreach ($lts as $lt)
                                        <option value="{{ $lt->id }}">{{ $lt->name }}
                                            ({{ $lt->days }})
                                        </option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="md:col-span-4">
                                <label class="text-black" class="inline-block mb-2 text-neutral-700 dark:text-neutral-200">Evidence
                                    (if available)</label>
                                <input
                                    class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-2 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-dark focus:text-neutral-700 focus:shadow-te-dark focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-dark"
                                    type="file" name="evidence" id="evidence_path" />
                            </div>

                            <div class="text-right md:col-span-5">
                                <div class="inline-flex items-end">
                                    <button
                                        class="px-4 py-2 font-bold text-white rounded bg-dark hover:bg-dark">Request</button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
