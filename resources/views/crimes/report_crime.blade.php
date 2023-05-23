<x-layout>
    <div class="w-full">
        <!-- Contact Form -->
        <div class="border-b border-stroke py-4 px-6.5">
            <h2 class="text-3xl font-extrabold text-dark">
                Report Crime.
            </h2>
        </div>
        <form method="POST" action="/crimes/crime_reported">
            @csrf
            <input type="hidden" name="reported_by" value="{{ auth()->user()->id }}" class="hidden">
            <div class="flex justify-between w-full">
                <div class="p-6.5 flex flex-col overflow-y-auto w-full">
                    <div class="flex gap-6 row">
                        <div class="mb-4.5 flex gap-3 xl:flex-row">
                            <div class="w-full">
                                <label class="mb-2.5 block text-dark">
                                    Crime
                                </label>
                                <input name="crime" type="text" placeholder="Enter the crime name"
                                    class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-dark active:border-dark disabled:cursor-default disabled:bg-whiter ">
                            </div>
                        </div>

                        <div class="w-5/6 mb-6">
                            <label class="mb-2.5 block text-dark w-full">
                                Crime Description
                            </label>
                            <textarea name="description" rows="6" placeholder="Type the crime description"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-dark active:border-dark disabled:cursor-default disabled:bg-whiter"></textarea>
                        </div>
                    </div>

                    <div class="flex items-stretch gap-6 ">
                        <div class="flex flex-col">
                            <div class="w-full mb-1">
                                <label class="block mb-1 text-dark">
                                    Offender's Name
                                </label>
                                <input name="offender_name" type="text" placeholder="Enter the criminal's name"
                                    class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-dark active:border-dark disabled:cursor-default disabled:bg-whiter">
                            </div>

                            <div class="w-full mb-1">
                                <label class="block mb-1 text-dark">
                                    Offender's ID
                                </label>
                                <input name="offender_id" type="text" placeholder="Enter the criminal's ID"
                                    class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-dark active:border-dark disabled:cursor-default disabled:bg-whiter">
                            </div>
                            <div class="w-full mb-1">
                                <label class="block mb-1 text-dark">
                                    Offender's Phone
                                </label>
                                <input name="offender_phone_number" type="text"
                                    placeholder="Enter the criminal's phone number"
                                    class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-dark active:border-dark disabled:cursor-default disabled:bg-whiter">
                            </div>

                        </div>
                        <div class="w-5/6 mb-3">
                            <label class="w-full mb-1 text-dark">
                                Offender's Statement
                            </label>
                            <textarea name="offender_statement" rows="6" placeholder="Type the statement of the criminal"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-dark active:border-dark disabled:cursor-default disabled:bg-whiter"></textarea>
                        </div>
                    </div>
                    <div class="mt-2.5 mx-auto items-center">
                        <button class="flex justify-center p-2 font-medium rounded-full w-30 bg-dark text-gray"
                            type="submit">
                            Report
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-layout>
