<button type="button" class="inline-block w-full rounded-lg bg-primary px-3 py-1 font-medium text-white sm:w-auto"

    data-te-toggle="modal" data-te-target="#add_victim_modal" data-te-ripple-init data-te-ripple-color="light">
    Add Victim
</button>
<!--Verically centered scrollable modal-->
<div data-te-modal-init
    class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
    id="add_victim_modal" tabindex="-1" aria-labelledby="add_victim_modal" aria-modal="true" role="dialog">
    <div data-te-modal-dialog-ref
        class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
        <div
            class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
            <div
                class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                <!--Victim Detail-->
                <h1 class="font-bold uppercase text-2xl">Victim detail.</h1>
                <!--Close button-->
                <button type="button"
                    class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                    data-te-modal-dismiss aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!--Modal body-->
            <div class="relative ">
                    {{-- <input type="hidden" name="reported_by" value="{{ auth()->user()->id }}" class="hidden"> --}}
                    <!-- component -->
                    <div class="flex justify-center items-center w-full h-full ">

                        <!-- COMPONENT CODE -->
                        <div class="container">
                            <div class="w-full p-2 rounded-2xl">
                                <div class="grid grid-cols-1 gap-5 md:grid-cols-2 mt-5">
                                    <input
                                        class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                                        type="text" name="victim_name" placeholder="victim name*" />
                                    <input
                                        class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                                        type="number" name="victim_id" placeholder="victim's ID*" />
                                    <input
                                        class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                                        type="number" name="victim_phone_number" placeholder="victim's Phone*" />
                                </div>
                                <div class="my-4">
                                    <textarea name="victim_statement" placeholder="victim's Statement*"
                                        class="w-full h-32 bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"></textarea>
                                </div>

                            </div>

                        </div>
                        <!-- COMPONENT CODE -->
                    </div>

            </div>

            <!--Modal footer-->
            <div
                class="flex bg-white flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                <button type="button"
                    class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200"
                    data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>
