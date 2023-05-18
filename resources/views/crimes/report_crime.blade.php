<x-layout>
    <div class="flex flex-col ">
        <!-- Contact Form -->
        <div class="border-b border-stroke py-4 px-6.5">
            <h3 class="font-semibold text-dark">
                Report Crime.
            </h3>
        </div>
        <form action="#">
            <div class="p-6.5">
                <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                    <div class="w-full xl:w-1/2">
                        <label class="mb-2.5 block text-dark">
                            Crime
                        </label>
                        <input type="text" placeholder="Enter the crime name"
                            class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-dark active:border-dark disabled:cursor-default disabled:bg-whiter">
                    </div>
                </div>

                <div class="mb-6">
                    <label class="mb-2.5 block text-dark">
                        Crime Description
                    </label>
                    <textarea rows="5" placeholder="Type the crime description"
                        class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-dark active:border-dark disabled:cursor-default disabled:bg-whiter"></textarea>
                </div>

                <div class="row flex gap-8">
                    <div class="mb-4.5 w-full">
                        <label class="mb-2.5 block text-dark">
                            Offender's Name
                        </label>
                        <input type="text" placeholder="Enter the criminal's name"
                            class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-dark active:border-dark disabled:cursor-default disabled:bg-whiter">
                    </div>

                    <div class="mb-4.5 w-full">
                        <label class="mb-2.5 block text-dark">
                            Offender's ID
                        </label>
                        <input type="text" placeholder="Enter the criminal's ID"
                            class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-dark active:border-dark disabled:cursor-default disabled:bg-whiter">
                    </div>
                </div>

                <div class="mb-6">
                    <label class="mb-2.5 block text-dark">
                        Offender's Statement
                    </label>
                    <textarea rows="5" placeholder="Type the statement of the criminal"
                        class="w-full rounded border-[1.5px] border-stroke bg-transparent py-3 px-5 font-medium outline-none transition focus:border-dark active:border-dark disabled:cursor-default disabled:bg-whiter"></textarea>
                </div>

                <button class="flex w-30 justify-center rounded-full bg-dark p-2 font-medium text-gray">
                    Report
                </button>
            </div>
        </form>

    </div>
</x-layout>
