<x-layout>

    <div class="flex flex-col w-full">

        <div class="modal mx-auto mt-5">
            {{-- modal start --}}

            <div class="space-y-2">

                <!--Button trigger vertically centered scrollable modal-->
                <button type="button"
                    class="inline-block rounded bg-dark px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                    data-te-toggle="modal" data-te-target="#exampleModalCenteredScrollable" data-te-ripple-init
                    data-te-ripple-color="light">
                    Create Task
                </button>
            </div>

            <!--Verically centered scrollable modal-->
            <div data-te-modal-init
                class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
                id="exampleModalCenteredScrollable" tabindex="-1" aria-labelledby="exampleModalCenteredScrollable"
                aria-modal="true" role="dialog">
                <div data-te-modal-dialog-ref
                    class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[700px]">
                    <div
                        class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-dark shadow-lg outline-none dark:bg-neutral-600">
                        <form method="POST" action="{{ route('task_created') }}">
                            @csrf
                            <div
                                class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                                <!--Modal title-->
                                <h3 class="text-4xl font-extrabold text-center text-dark my-7"
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

                            <!--Modal body-->
                            <div class="relative p-4">
                                <div class="items-center w-full">


                                    <div class="w-1/2 mx-auto ">


                                        <x-validation-errors class="mb-4" />



                                        <div>
                                            <x-label for="task_name" value="{{ __('Task Name') }}" />
                                            <x-input id="task_name" class="block w-full mt-1" type="text"
                                                name="task_name" :value="old('task_name')" required autofocus
                                                autocomplete="task_name" />
                                        </div>
                                        <div>
                                            <x-label for="task_description" value="{{ __('Task Description') }}" />
                                            <x-input id="task_description" class="block w-full mt-1" type="text"
                                                name="task_description" :value="old('task_description')" required autofocus
                                                autocomplete="task_description" />
                                        </div>
                                        <div
                                            class="mb-[0.125rem] items-center flex min-h-[1.5rem] pl-[1.5rem] flex-col">
                                            @foreach ($zones as $zone)
                                                <div class="row w-full">
                                                    <label class="mt-px inline-block pl-[0.15rem] hover:cursor-pointer"
                                                        for="{{ $zone->id }}">
                                                        {{ $zone->name }}
                                                    </label>
                                                    <input
                                                        class="relative float-left -ml-[1.5rem] mr-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-neutral-300 before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-dark checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-dark checked:after:bg-dark checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-dark checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] dark:border-neutral-600 dark:checked:border-dark dark:checked:after:border-dark dark:checked:after:bg-dark dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:border-dark dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]"
                                                        type="radio" name="zone_id" value="{{ $zone->id }}"
                                                        id="{{ $zone->id }}" />
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Modal footer-->
                            <div
                                class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                                <button type="submit"
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
        <div class="flex gap-3 m-10">

            @foreach ($tasks as $task)
                <div
                    class="block w-1/2 rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                    <h5 class="mb-2 text-xl leading-tight text-dark ">
                        <span class="text-black mr-3 font-bold ">Task Name: </span>
                        {{ $task->task_name }}
                    </h5>
                    <p class="mb-2 text-base text-dark">
                        <span class="text-black mr-3 font-bold ">Task Description: </span>
                        {{ $task->task_description }}
                    </p>
                    <span class="text-black mr-3 font-bold ">Task Zones: </span>

                    @foreach ($task->zones as $zone)
                        <ul class="w-96 text-dark mb-2">
                            <li
                                class="w-1/2 border-b-2 border-opacity-100 py-1 ">
                            {{ $zone->name }}
                            </li>
                        </ul>
                    @endforeach

                    <span class="text-black mr-3 font-bold ">StartingTime: </span>

                </div>
            @endforeach
        </div>

    </div>



</x-layout>
