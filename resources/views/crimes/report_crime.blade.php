<x-layout>


    <section class="bg-gray-100">
        <div class="mx-auto px-4 py-4">
            <div class="rounded-lg bg-white p-4 shadow-lg">
                <div class="">
                    <h2 class="text-2xl font-bold text-black">
                        Report Crime
                    </h2>
                </div>
                <form action="{{ route('crime_reported') }}" method="post" class="space-y-4">
                    @csrf
                    <div class="grid grid-cols-2">
                        <div class=" col-span-1">
                            <label class="sr-only" for="crime">crime</label>
                            <input class="w-full rounded-lg border-gray-200 p-3 text-sm" placeholder="crime"
                                type="text" name="crime" id="crime" />
                        </div>
                    </div>

                    <div>
                        <label class="sr-only" for="description">Crime Detail</label>

                        <textarea class="w-full rounded-lg border-gray-200 p-3 text-sm" placeholder="detail" rows="6" name="description"
                            id="description"></textarea>
                    </div>

                    <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
                        <div>
                            <label class="sr-only" for="offender_name">Offender's Name</label>
                            <input class="w-full rounded-lg border-gray-200 p-3 text-sm" placeholder="Offender's Name"
                                type="text" name="offender_name" id="offender_name" />
                        </div>

                        <div>
                            <label class="sr-only" for="offfender_id">Offender's ID</label>
                            <input class="w-full rounded-lg border-gray-200 p-3 text-sm" placeholder="Offender's ID"
                                type="text" name="offender_id" id="offfender_id" />
                        </div>
                        <div>
                            <label class="sr-only" for="offender_phone_number">Phone</label>
                            <input class="w-full rounded-lg border-gray-200 p-3 text-sm"
                                placeholder="Offender's Phone Number" type="number" name="offender_phone_number"
                                id="offender_phone_number" />
                        </div>
                    </div>
                    <div>
                        <label class="sr-only" for="offender_statement">Offender's statement</label>

                        <textarea class="w-full rounded-lg border-gray-200 p-3 text-sm" placeholder="Offender's Statement" rows="6"
                            name="offender_statement" id="offender_statement"></textarea>
                    </div>

                    <div class="mt-2 items-center">
                        @include('crimes.add_victim_modal')
                        <button type="submit"
                            class="inline-block w-full rounded-lg bg-dark px-3 py-1 font-medium text-white sm:w-auto">
                            Report
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-layout>
