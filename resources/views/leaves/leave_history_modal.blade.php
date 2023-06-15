<!--Button trigger vertically centered scrollable modal-->
<button type="button"
class="inline-flex items-center justify-center gap-2 px-3 py-1 font-medium text-center text-white rounded-full bg-dark hover:bg-opacity-90 lg:px-4 xl:px-6"
    data-te-toggle="modal" data-te-target="#showrequestDetailModal{{ $request->id }}"
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

<!--request detail modal-->
<div data-te-modal-init
    class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none print:block"
    id="showrequestDetailModal{{ $request->id }}" tabindex="-1"
    aria-labelledby="showrequestDetailModal{{ $request->id }}" aria-modal="true" role="dialog">
    <div data-te-modal-dialog-ref
        class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[800px]">
        <div
            class="relative flex flex-col w-full text-current bg-white border-none rounded-md shadow-lg outline-none pointer-events-auto bg-clip-padding dark:bg-neutral-600">
            <div
                class="flex items-center justify-center flex-shrink-0 p-4 border-b-2 border-opacity-100 rounded-t-md border-neutral-100 dark:border-opacity-50">
                <!--Modal title-->
                <h3 class="text-xl font-medium leading-normal text-black uppercase"
                    id="showrequestDetailModal{{ $request->id }}Label">
                    request Detail
                </h3>

            </div>

            <!--Modal body-->
            <div class="relative w-2/3 p-4 text-black">
                <div class="gap-3 font-medium ">
                    <span class="font-bold uppercase text-md">Reason:</span>
                    <span class="inline-block w-full">{{ $request->reason }}</span>
                </div>
                <div class="gap-3 font-medium ">
                    <span class="font-bold uppercase text-md">Leave Type:</span>
                    <span>{{ $request->lt->name }}</span>
                </div>
                <div class="gap-3 font-medium ">
                    <span class="font-bold uppercase text-md">Status:</span>
                    <span> @if ($request->status->id === 2)
                        Admin Pending
                    @elseif ($request->status->id === 5)
                        Admin Rejected
                    @else
                        {{ $request->status->name }}

                    @endif</span>
                </div>
                <div class="gap-3 font-medium ">
                    <span class="font-bold uppercase text-md">Starting Date:</span>
                    <span>{{ $request->start_date }}</span>
                </div>
                <div class="gap-3 font-medium ">
                    <span class="font-bold uppercase text-md">End Date:</span>
                    <span>{{ $request->end_date }}</span>
                </div>
                <div class="gap-3 font-medium ">
                    <span class="font-bold uppercase text-md">Leave Days:</span>
                    <span>{{ $request->leave_days }}</span>
                </div>
                @if ($request->co_decision !== NULL)
                <div class="gap-3 font-medium ">
                    <span class="font-bold uppercase text-md">Chief Officer's Decision:</span>
                    <span>{{ $request->co_decision }}</span>
                </div>
                @endif
                @if ($request->admin_decision !== NULL)
                <div class="gap-3 font-medium ">
                    <span class="font-bold uppercase text-md">HR's Decision:</span>
                    <span>{{ $request->admin_decision }}</span>
                </div>
                @endif


            </div>

            <!--Modal footer-->
            <div
                class="flex flex-wrap items-center justify-end flex-shrink-0 p-4 border-t-2 border-opacity-100 rounded-b-md border-neutral-100 dark:border-opacity-50">
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
