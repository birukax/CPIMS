<!-- component -->
<div class="w-full md:p-2">
    <div class="mb-8 overflow-hidden bg-white border rounded  border-grey-light">
        <div class="border-b md:p-2 border-grey-light bg-grey-lighter">
            <div class="mx-auto overflow-hidden bg-white rounded-lg shadow-lg">
                <div class="px-2 py-4 sm:flex sm:items-center">
                    <div class="flex-grow">
                        <div class="flex justify-between border-b-4">

                        <h3 class="px-2 py-3 font-medium leading-tight text-black">Leave Types</h3>
                        <h3 class="px-2 py-3 font-medium leading-tight text-black">Leave Days</h3>
                        </div>

                        <div class="w-full">
                            @foreach ($lts as $lt)
                                <div class="flex my-1 rounded cursor-pointer hover:bg-blue-lightest">
                                    <div class="w-8 h-10 py-1 text-center">
                                        <p class="p-0 text-3xl text-green-dark">&bull;</p>
                                    </div>
                                    <div class="w-4/5 h-10 px-1 py-3">
                                        <p class="hover:text-blue-dark">{{ $lt->name }}</p>
                                    </div>
                                    <div class="w-1/5 h-10 p-3 text-right">
                                        <p class="text-sm text-grey-dark">{{ $lt->days }}</p>
                                    </div>

                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="px-2 py-4 sm:flex bg-grey-light sm:items-center">
                    <div class="flex-grow text-right">
                        @if (auth()->user()->role_id === 4)
                        @include('leaves.add_lt_modal')
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
