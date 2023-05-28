<div class=" button items-center mt-5 mx-auto">
    <button type="button"
        class="inline-flex ml-5 items-center justify-center gap-2.5 rounded-full bg-dark py-1 px-3 text-center font-sm text-white hover:bg-opacity-90 lg:px-4 xl:px-6"
        data-te-toggle="modal" data-te-target="#registerPcModal" data-te-ripple-init data-te-ripple-color="light">
        <span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 10.5v6m3-3H9m4.06-7.19l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
            </svg>
        </span>
        Register PC
    </button>
</div>

{{-- Modal Start --}}

<!--Verically centered scrollable modal-->
<div data-te-modal-init
    class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
    id="registerPcModal" tabindex="-1" aria-labelledby="registerPcModal" aria-modal="true" role="dialog">
    <div data-te-modal-dialog-ref
        class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
        <div
            class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
            <div
                class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-2 ">
                <!--Modal title-->
                <h1 class="text-4xl font-extrabold text-center text-dark my-3 mx-auto">Register PC</h1>

            </div>

            <div class="p-3">
                <form method="POST" action="{{ route('pc_registered') }}">
                    @csrf

                    <div>
                        <x-label for="brand" value="{{ __('Brand') }}" />
                        <x-input id="brand" class="block w-full mt-1" type="text" name="brand"
                            :value="old('brand')" required autofocus autocomplete="brand" />
                    </div>

                    <div class="mt-4">
                        <x-label for="serial_number" value="{{ __('Serial Number') }}" />
                        <x-input id="serial_number" class="block w-full mt-1" type="text" name="serial_number"
                            :value="old('serial_number')" required autocomplete="serial_number" />
                    </div>

                    <div class="mt-4">
                        <x-label for="owner_name" value="{{ __('Owner Name') }}" />
                        <x-input id="owner_name" class="block w-full mt-1" type="text" name="owner_name"
                            :value="old('owner_name')" required autofocus autocomplete="owner_name" />
                    </div>

                    <div class="mt-4">
                        <x-label for="owner_id" value="{{ __('Owner ID') }}" />
                        <x-input id="owner_id" class="block w-full mt-1" type="text" name="owner_id"
                            :value="old('owner_id')" required autocomplete="owner_id" />
                    </div>

                    <div class="flex items-center justify-center mt-7">

                        <x-button class="ml-4 bg-dark">
                            {{ __('Register') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
