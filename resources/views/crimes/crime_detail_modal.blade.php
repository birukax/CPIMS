<!--Button trigger vertically centered scrollable modal-->
<button type="button"
class="inline-flex items-center justify-center gap-2 rounded-full bg-dark py-1 px-3 text-center font-medium text-white hover:bg-opacity-90 lg:px-4 xl:px-6"
    data-te-toggle="modal" data-te-target="#showCrimeDetailModal{{ $crime->id }}"
    data-te-ripple-init data-te-ripple-color="light">
    <span>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m5.231 13.481L15 17.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v16.5c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9zm3.75 11.625a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
        </svg>
    </span>
    Detail
</button>

<!--crime detail modal-->
<div data-te-modal-init
    class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
    id="showCrimeDetailModal{{ $crime->id }}" tabindex="-1"
    aria-labelledby="showCrimeDetailModal{{ $crime->id }}" aria-modal="true" role="dialog">
    <div data-te-modal-dialog-ref
        class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[600px]">
        <div
            class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
            <div
                class="flex flex-shrink-0  items-center justify-center rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                <!--Modal title-->
                <h3 class="text-xl font-medium leading-normal text-black uppercase"
                    id="showCrimeDetailModal{{ $crime->id }}Label">
                    Crime Detail
                </h3>

            </div>

            <!--Modal body-->
            <div class="relative p-4 text-black">
                <div class="gap-3 font-medium ">
                    <span class="uppercase font-bold text-md">Crime:</span>
                    <span >{{ $crime->crime }}</span>
                </div>
                <div class="gap-3 font-medium ">
                    <span class="uppercase font-bold text-md">Committed by:</span>
                    <span>{{ $crime->offender_name }}</span>
                </div>
                <div class="gap-3 font-medium ">
                    <span class="uppercase font-bold text-md">Offender's ID:</span>
                    <span>{{ $crime->offender_id }}</span>
                </div>
                <div class="gap-3 font-medium ">
                    <span class="uppercase font-bold text-md">Offender's phone No.:</span>
                    <span>{{ $crime->offender_phone_number }}</span>
                </div>
                <div class="gap-3 font-medium ">
                    <span class="uppercase font-bold text-md">Offender's Statement:</span>
                    <span>{{ $crime->offender_statement }}</span>
                </div>
                <div class="gap-3 font-medium ">
                    <span class="uppercase font-bold text-md">Reported By:</span>
                    <span>{{ $crime->user->name }}</span>
                </div>
                <div class="gap-3 font-medium ">
                    <span class="uppercase font-bold text-md">Status:</span>
                    <span>{{ $crime->status->name }}</span>
                </div>
                @if ($crime->co_decision !== NULL)
                <div class="gap-3 font-medium ">
                    <span class="uppercase font-bold text-md">Chief Officer's Decision:</span>
                    <span>{{ $crime->co_decision }}</span>
                </div>
                @endif
                @if ($crime->dc_decision !== NULL)
                <div class="gap-3 font-medium ">
                    <span class="uppercase font-bold text-md">Discipline Committee's Decision:</span>
                    <span>{{ $crime->dc_decision }}</span>
                </div>
                @endif


            </div>

            <!--Modal footer-->
            <div
                class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                <button type="button"
                    class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200"
                    data-te-modal-dismiss data-te-ripple-init
                    data-te-ripple-color="light">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>
