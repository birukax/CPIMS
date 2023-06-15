<div class="items-center mx-auto button">
    <button type="button"
        class="inline-flex items-center justify-center gap-2 px-2 py-1 text-center text-white rounded-full bg-dark font-sm hover:bg-opacity-90 lg:px-3 xl:px-4"
        data-te-toggle="modal" data-te-target="#editPoliceRuleModal{{ $police->id }}" data-te-ripple-init
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
    id="editPoliceRuleModal{{ $police->id }}" tabindex="-1" aria-labelledby="editPoliceRuleModal{{ $police->id }}"
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
                    <input hidden name="id" type="text" value="{{ $police->id }}" />

                    <div class="mx-1">
                        <textarea
                            class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                            id="reviewTextArea" rows="3" name="rule" placeholder="Message"></textarea>
                        <label for="reviewTextArea"
                            class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-dark peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-dark">Rule
                        </label>
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
</div>
