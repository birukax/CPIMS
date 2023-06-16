<x-layout>


    <section class="bg-gray-100">
        <div class="px-4 py-4 mx-auto">
            <div class="p-4 bg-white rounded-lg shadow-lg">
                <x-validation-errors class="mb-2" />
                <x-message />
                <form action="{{ route('crime_reported') }}" method="post" class="space-y-4">
                    @csrf
                <div class="justify-between md:flex">
                    <h2 class="text-2xl font-bold text-black">
                        Report Crime
                    </h2>


                    <button type="submit"
                        class="inline-block w-full px-3 py-1 text-sm text-white rounded-lg bg-dark sm:w-auto">
                        Report
                    </button>
                </div>
                <div class="space-y-4">


                    <div class="grid grid-cols-2">
                        <div class="col-span-1 ">
                            <label class="sr-only" for="crime">crime</label>
                            <input class="w-full p-3 text-sm border-gray-200 rounded-lg" placeholder="crime"
                                type="text" name="crime" id="crime" />
                        </div>
                    </div>

                    <div>
                        <label class="sr-only" for="description">Crime Detail</label>

                        <textarea class="w-full p-3 text-sm border-gray-200 rounded-lg" placeholder="detail" rows="6" name="description"
                            id="description"></textarea>
                    </div>

                    <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
                        <div>
                            <label class="sr-only" for="offender_name">Offender's Name</label>
                            <input class="w-full p-3 text-sm border-gray-200 rounded-lg" placeholder="Offender's Name"
                                type="text" name="offender_name" id="offender_name" />
                        </div>

                        <div>
                            <label class="sr-only" for="offfender_id">Offender's ID</label>
                            <input class="w-full p-3 text-sm border-gray-200 rounded-lg" placeholder="Offender's ID"
                                type="text" name="offender_id" id="offfender_id" />
                        </div>
                        <div>
                            <label class="sr-only" for="offender_phone_number">Phone</label>
                            <input class="w-full p-3 text-sm border-gray-200 rounded-lg"
                                placeholder="Offender's Phone Number" type="text" name="offender_phone_number"
                                id="offender_phone_number" />
                        </div>
                    </div>
                    <div>
                        <label class="sr-only" for="offender_statement">Offender's statement</label>

                        <textarea class="w-full p-3 text-sm border-gray-200 rounded-lg" placeholder="Offender's Statement" rows="6"
                            name="offender_statement" id="offender_statement"></textarea>
                    </div>
                    <div class="w-full p-2 rounded-2xl">
                        <div class="grid grid-cols-1 gap-5 mt-5 md:grid-cols-2">
                            <input
                                class="w-full p-3 mt-2 text-gray-900 bg-gray-100 rounded-lg focus:outline-none focus:shadow-outline"
                                type="text" name="victim_name" placeholder="victim name*" />
                            <input
                                class="w-full p-3 mt-2 text-gray-900 bg-gray-100 rounded-lg focus:outline-none focus:shadow-outline"
                                type="number" name="victim_id" placeholder="victim's ID*" />
                            <input
                                class="w-full p-3 mt-2 text-gray-900 bg-gray-100 rounded-lg focus:outline-none focus:shadow-outline"
                                type="text" name="victim_phone_number" placeholder="victim's Phone*" />
                        </div>
                        <div class="my-4">
                            <textarea name="victim_statement" placeholder="victim's Statement*"
                                class="w-full h-32 p-3 mt-2 text-gray-900 bg-gray-100 rounded-lg focus:outline-none focus:shadow-outline"></textarea>
                        </div>

                    </div>
                </div>
            </form>

            </div>
        </div>
    </section>
</x-layout>
