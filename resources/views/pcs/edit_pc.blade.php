<div class=" button items-center mx-auto">
    <button type="button"
    class="inline-flex items-center justify-center gap-2 rounded-full bg-dark py-1 px-2 text-center font-sm text-white hover:bg-opacity-90 lg:px-3 xl:px-4"
     data-te-toggle="modal" data-te-target="#editPcModal{{ $pc->id }}" data-te-ripple-init
        data-te-ripple-color="light">
        <span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="w-4 h-4 ">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
        </svg>
        </span>
        Edit
    </button>
</div>
{{--  --}}
<!--Verically centered scrollable modal-->
<div data-te-modal-init
    class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
    id="editPcModal{{ $pc->id }}" tabindex="-1" aria-labelledby="editPcModal{{ $pc->id }}" aria-modal="true" role="dialog">
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
                <h1 class="text-4xl font-extrabold text-center text-dark my-7 uppercase">Edit PC: {{ $pc->brand }}</h1>


                <x-validation-errors class="mb-4" />

                <form method="POST" action="{{ route('pc_edited') }}">
                    @csrf
                    @method('PUT')
                    <input hidden name="id" type="text" value="{{ $pc->id }}" />
                    <div>
                        <x-label for="brand" value="{{ __('Brand') }}" />
                        <x-input id="brand" class="block w-full mt-1" type="text" name="brand"
                            value="{{ $pc->brand }}" required autofocus autocomplete="brand" />
                    </div>

                    <div class="mt-4">
                        <x-label for="serial_number" value="{{ __('Serial Number') }}" />
                        <x-input id="serial_number" class="block w-full mt-1" type="text" name="serial_number"
                            value="{{ $pc->serial_number }}" required autocomplete="serial_number" />
                    </div>

                    <div class="mt-4">
                        <x-label for="owner_name" value="{{ __('Owner Name') }}" />
                        <x-input id="owner_name" class="block w-full mt-1" type="text" name="owner_name"
                            value="{{ $pc->owner_name }}" required autofocus autocomplete="owner_name" />
                    </div>

                    <div class="mt-4">
                        <x-label for="owner_id" value="{{ __('Owner ID') }}" />
                        <x-input id="owner_id" class="block w-full mt-1" type="text" name="owner_id"
                            value="{{ $pc->owner_id }}" required autocomplete="owner_id" />
                    </div>

                    <div class="flex items-center justify-center mt-7">

                        <x-button class="ml-4 bg-dark">
                            {{ __('Done') }}
                        </x-button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

{{--  --}}

    <div class="items-center w-full">

        <x-message />
        <div class="w-1/2 mx-auto ">

                   </div>
    </div>
