<div class="items-center mx-auto button">
    <button type="button"
        class="inline-flex items-center justify-center gap-2 px-2 py-1 text-center text-white rounded-full bg-dark font-sm hover:bg-opacity-90 lg:px-3 xl:px-4"
        data-te-toggle="modal" data-te-target="#editSlRuleModal{{ $shift_leader->id }}" data-te-ripple-init
        data-te-ripple-color="light">
        <span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-4 h-4 ">
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
    id="editSlRuleModal{{ $shift_leader->id }}" tabindex="-1" aria-labelledby="editSlRuleModal{{ $shift_leader->id }}"
    aria-modal="true" role="dialog">
    <div data-te-modal-dialog-ref
        class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
        <div
            class="relative flex flex-col w-full text-current bg-white border-none rounded-md shadow-lg outline-none pointer-events-auto bg-clip-padding dark:bg-neutral-600">
            <div class="p-3">
                <h1 class="text-4xl font-extrabold text-center uppercase text-dark my-7">Edit Rule</h1>


                <x-validation-errors class="mb-4" />

                <form method="POST" action="{{ route('rule_edited') }}">
                    @csrf
                    @method('PUT')
                    <input hidden name="id" type="text" value="{{ $shift_leader->id }}" />



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
</div>
