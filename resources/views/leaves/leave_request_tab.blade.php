<div class="container mx-auto md:max-w-screen-lg">
    <div>
        <h2 class="text-xl font-semibold text-center text-dark">Leave Request</h2>
        {{-- <p class="mb-6 text-gray-500">Form is mobile responsive. Give it a try.</p> --}}
        <x-message />
        <div class="p-4 px-4 mb-6 bg-white rounded shadow-lg md:p-8">
            <div class="grid grid-cols-1 gap-4 text-sm gap-y-2 lg:grid-cols-3">
                <div class="text-gray-900">
                    <p class="text-lg font-semibold ">Leave Request Details</p>
                    <p>Please fill out all the fields.</p>

                </div>


                <div class="text-black lg:col-span-2">
                    <div class="flex items-center justify-end gap-3">
                        <span>Available days:</span>
                        <h1 class="p-1 text-xl text-center text-white rounded-lg bg-dark">
                            {{ auth()->user()->available_leave }}</h1>
                    </div>
                    <form action="{{ route('request_leave') }}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="grid grid-cols-1 gap-4 text-sm gap-y-2 md:grid-cols-5">
                            <div class="md:col-span-5">
                                <label class="my-2" for="reason">Reason</label>
                                <input type="text" name="reason" id="reason"
                                    class="w-full h-10 px-4 mt-1 border rounded bg-gray-50" />
                            </div>

                            <div class="md:col-span-2">
                                <label class="" class="mb-1">Starting Date</label>
                                <div class="relative mb-3" id="datepicker-disable-past" data-te-input-wrapper-init>
                                    <input type="date"
                                        class="peer block h-10 w-full placeholder-opacity-75 rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none  [&:not([data-te-input-placeholder-active])]:placeholder:opacity-60"
                                        name="start_date" placeholder="date" />
                                </div>
                            </div>

                            <div class="md:col-span-2">
                                <label class="" for="leave_days">Leave Days</label>
                                <input type="number" name="leave_days" id="leave_days"
                                    class="w-full h-10 px-2 border rounded min-h-auto bg-gray-50" placeholder="" />
                            </div>

                            <div class="md:col-span-4">
                                <label class="my-2" for="leave_type">Leave Type (days)</label>
                                <select data-te-select-init name="lt_id" id=" leave_type"
                                    class="w-full h-10 border-dark active:border-dark">
                                    @foreach ($lts as $lt)
                                        <option value="{{ $lt->id }}">{{ $lt->name }}
                                            ({{ $lt->days }})
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="text-right md:col-span-5">
                                <div class="inline-flex items-end">
                                    <button
                                        class="px-3 py-1 font-bold text-white rounded-lg bg-dark hover:bg-dark">Request</button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
