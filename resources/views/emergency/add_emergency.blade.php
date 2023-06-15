<div class="items-center mx-auto mt-5 button">
    <button type="button"
        class="inline-flex ml-5 items-center justify-center gap-2.5 rounded-full bg-dark py-1 px-2 text-center font-normal text-sm text-white hover:bg-opacity-90 lg:px-4 xl:px-6"
        data-te-toggle="modal" data-te-target="#addEmergencyModal" data-te-ripple-init data-te-ripple-color="light">
        <span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 10.5v6m3-3H9m4.06-7.19l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
            </svg>
        </span>
        Add Emergency
    </button>
</div>

{{-- Modal Start --}}

<!--Verically centered scrollable modal-->
<div data-te-modal-init
    class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
    id="addEmergencyModal" tabindex="-1" aria-labelledby="addEmergencyModal" aria-modal="true" role="dialog">
    <div data-te-modal-dialog-ref
        class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
        <div
            class="relative flex flex-col w-full text-current bg-white border-none rounded-md shadow-lg outline-none pointer-events-auto bg-clip-padding dark:bg-neutral-600">
            <div
                class="flex items-center justify-between flex-shrink-0 p-2 border-b-2 border-opacity-100 rounded-t-md border-neutral-100 ">
                <!--Modal title-->
                <h1 class="mx-auto my-3 text-4xl font-extrabold text-center text-dark">Add Emergency</h1>

            </div>

            <div class="p-3">
                <form method="POST" action="{{ route('emergency_added') }}">
                    @csrf

                    <div>
                        <x-label for="emergency_name" pattern="[A-Za-z]+" value="{{ __('Emergency Name') }}" />
                        <x-input id="emergency_name" class="block w-full mt-1" type="text" name="emergency_name"
                            :value="old('emergency_name')" required autofocus autocomplete="emergency_name" />
                    </div>
                    <div>
                        <x-label for="emergency_contact_name" value="{{ __('Emergency Contact Name') }}" />
                        <x-input id="emergency_contact_name" class="block w-full mt-1" type="text"
                            name="emergency_contact_name" :value="old('emergency_contact_name')" required autofocus
                            autocomplete="emergency_contact_name" />
                    </div>
                    <div>
                        <x-label for="emergency_contact_phone" value="{{ __('Emergency Contact phone') }}" />
                        <x-input id="emergency_contact_phone" class="block w-full mt-1" type="phone"
                            name="emergency_contact_phone" :value="old('emergency_contact_phone')" required autofocus
                            autocomplete="emergency_contact_phone" />
                    </div>
                    <div>
                        <x-label for="emergency_alternative_name" value="{{ __('Alternative Contact Name') }}" />
                        <x-input id="emergency_alternative_name" class="block w-full mt-1" type="text"
                            name="emergency_alternative_name" :value="old('emergency_alternative_name')"
                            autocomplete="emergency_alternative_name" />
                    </div>
                    <div>
                        <x-label for="emergency_alternative_phone" value="{{ __('Alternative Contact phone') }}" />
                        <x-input id="emergency_alternative_phone" class="block w-full mt-1" type="phone"
                            name="emergency_alternative_phone" :value="old('emergency_alternative_phone')"
                            autocomplete="emergency_alternative_phone" />
                    </div>
                    <div class="flex items-center justify-center mt-2">

                        <x-button class="ml-4 bg-dark">
                            {{ __('Register') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
