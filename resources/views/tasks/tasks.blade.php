<x-layout>

    <div class="flex flex-col w-full">

        <div class="modal mx-auto mt-5">
            {{-- modal start --}}
            <x-validation-errors class="mb-4" />

            <div class="space-y-2">

                <!--Button trigger vertically centered scrollable modal-->
                <button type="button"
                    class="inline-block rounded bg-dark px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                    data-te-toggle="modal" data-te-target="#createNewTaskModal" data-te-ripple-init
                    data-te-ripple-color="light">
                    Create Task
                </button>
            </div>

            <!--Verically centered scrollable modal-->
            <div data-te-modal-init
                class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
                id="createNewTaskModal" tabindex="-1" aria-labelledby="createNewTaskModal" aria-modal="true"
                role="dialog">
                <div data-te-modal-dialog-ref
                    class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[1000px]">
                    <div
                        class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-dark shadow-lg outline-none dark:bg-neutral-600">
                        <div
                            class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                            <!--Modal title-->
                            <h3 class="text-2xl font-extrabold text-center text-dark my-2"
                                id="exampleModalCenteredScrollableLabel">Create a new task.</h3>
                            <!--Close button-->
                            <button type="button"
                                class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                                data-te-modal-dismiss aria-label="Close">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        <form method="POST" action="{{ route('task_created') }}">
                            @csrf


                            <!--Modal body-->
                            <div class="relative p-4">
                                <div class="items-center w-full">


                                    <div class="w-11/12 mx-auto flex-col">



                                        <div class="flex gap-3">

                                            <div class="w-1/4">
                                                <x-label for="task_name" value="{{ __('Task Name') }}" />
                                                <x-input id="task_name" class="block w-full mt-1" type="text"
                                                    name="task_name" :value="old('task_name')" required autofocus
                                                    autocomplete="task_name" />
                                            </div>
                                            <div class="w-3/4">
                                                <x-label for="task_description" value="{{ __('Task Description') }}" />
                                                <x-input id="task_description" class="block w-full mt-1" type="text"
                                                    row="4" name="task_description" :value="old('task_description')" required
                                                    autofocus autocomplete="task_description" />
                                            </div>
                                        </div>
                                        <div class="flex gap-3 mt-2 items-center justify-center">
                                            <div class="relative w-1/4" id="datepicker-disable-past"
                                                data-te-input-wrapper-init>
                                                <input type="text"
                                                    class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                                    name="date" placeholder="Select date" />
                                                <label for="floatingInput"
                                                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">Date</label>
                                            </div>
                                            <div class="relative" data-te-format24="true" id="timepicker-format"
                                                data-te-input-wrapper-init>
                                                <input type="text"
                                                    class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                                    data-te-toggle="timepicker" name="starting_time"
                                                    id="starting_time" />
                                                <label for="starting_time"
                                                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">Starting
                                                    time</label>
                                            </div>

                                            <div class="relative" data-te-format24="true" id="timepicker-format1"
                                                data-te-input-wrapper-init>
                                                <input type="text"
                                                    class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                                    data-te-toggle="timepicker" name="ending_time" id="ending_time" />
                                                <label for="ending_time"
                                                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">Ending
                                                    time</label>
                                            </div>

                                        </div>
                                        <div class="mb-[0.125rem] items-start flex min-h-[1.5rem] flex-col mt-2 ">
                                            <x-label class="mb-1" for="zone_id" value="{{ __('Zone') }}" />
                                            @foreach ($zones as $zone)
                                                <!--Default checkbox-->
                                                <div class="mb-[0.125rem] block min-h-[1.5rem] pl-[1.5rem]">
                                                    <input
                                                        class="relative float-left -ml-[1.5rem] mr-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ml-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ml-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent dark:border-neutral-600 dark:checked:border-primary dark:checked:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]"
                                                        type="checkbox" name="zone_id[]" value="{{ $zone->id }}"
                                                        id="{{ $zone->id }}" />
                                                    <label class="inline-block pl-[0.15rem] hover:cursor-pointer"
                                                        for="{{ $zone->id }}">
                                                        {{ $zone->name }}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Modal footer-->
                            <div
                                class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                                <button type="button"
                                    class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-dark-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200"
                                    data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
                                    Close
                                </button>
                                <x-button class="ml-4 bg-dark" data-te-ripple-init data-te-ripple-color="light">
                                    {{ __('Create Task') }}
                                </x-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class=" gap-3 m-10">
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-6 xl:grid-cols-4 2xl:gap-7.5">

                @foreach ($tasks as $task)
                    <div class="max-w-sm rounded shadow-lg">
                        <div class="px-3 py-2">
                            <span class=" font-medium text-sm text-black">Task name:</span>
                            <div class="font-bold text-xl mb-2 text-dark pl-4"> {{ $task->task_name }}</div>
                            <span class=" font-medium text-sm text-black">Description:</span>
                            <p class="text-dark  font-sans text-lg pl-4">
                                {{ $task->task_description }}
                            </p>
                        </div>
                        <div class="px-3 py-2 flex items-center">
                            <span class=" font-medium text-sm text-black mr-2">Starting time:</span>
                            <span
                            class="inline-block rounded-full text-sm font-semibold text-oxfordBlue">{{ $task->starting_time }}</span>
                        </div>
                        <div class="flex px-3 py-2 gap-3">

                            <span class=" font-medium text-sm text-black">Zones:</span>
                            <div class="flex-col text-oxfordBlue gap-1">
                                @foreach ($task->zones as $zone)
                                    <span
                                        class="inline-block text-sm font-semibold">#{{ $zone->name }}</span>
                                @endforeach

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>



</x-layout>
