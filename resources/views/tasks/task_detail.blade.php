<x-layout>
    <div class="flex-col w-full p-5 bg-white">
        <x-validation-errors class="mb-2" />
        <x-message />
        <div class="grid gap-2 md:grid-cols-2 grid-col-1 mt-5">
            <div class="md:col-span-1">
                <div class="container p-2 text-black sm:p-4">
                    <div class="flex justify-between">
                        <h2 class="mb-4 text-2xl font-semibold leading-tight uppercase">Assigned Police</h2>
                        <div class="items-center">

                            @include('tasks.add_user_modal1')
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full text-sm text-left">
                            <thead class="text-white bg-oxfordBlue">

                                <tr>
                                    <th class="p-3">#</th>
                                    <th class="p-3">Name</th>
                                    <th class="p-3">Contact</th>
                                    <th class="p-3">Tasks</th>
                                    <th class="p-3">Action</th>
                                </tr>
                            </thead>
                            <tbody class="mb-1 ">
                                @foreach ($task->users as $user)
                                    <tr class="bg-gray-900 border-b border-gray-700 border-opacity-20">
                                        <td class="p-3">
                                            <p>{{ $no += 1 }}</p>
                                        </td>
                                        <td class="p-3">
                                            <p>{{ $user->name }}</p>
                                        </td>
                                        <td class="p-3">
                                            <p>{{ $user->phone }}</p>
                                            <p class="text-gray-400">{{ $user->email }}</p>
                                        </td>
                                        <td class="p-3">
                                            <p></p>
                                            <p class="text-gray-400">{{ count($user->tasks) }}</p>
                                        </td>
                                        <td class="p-3">
                                            <form method="POST"
                                                action="/tasks/task/remove_police/{{ $task->id }}/{{ $user->id }}">
                                                @csrf
                                                @method('DELETE')
                                                <x-button class="px-3 py-1 text-sm font-light bg-dark"
                                                    data-te-ripple-init data-te-ripple-color="light">
                                                    {{ __('Remove') }}
                                                </x-button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="gap-5 p-3 md:col-span-1  text-black ">
                <h2 class="text-3xl font-bold uppercase text-dark">Task Detail</h2>

                <div class="flex justify-between mt-3 text-left">
                    <h3 class="mr-2 text-lg font-semibold">Task name:</h3>
                    <p class="">{{ $task->task_name }}</p>
                </div>
                <div class="flex justify-between mt-3 text-left">
                    <h3 class=" mr-2 text-lg font-semibold">Task Description:</h3>
                    <p class="">{{ $task->task_description }}</p>
                </div>
                <div class="flex justify-between mt-3 text-left">
                    <h3 class="mr-2 text-lg font-semibold">Task Date:</h3>
                    <p class="flex">{{ $task->date }}</p>
                </div>
                <div class="flex justify-between mt-3 text-left">
                    <h3 class="mr-2 text-lg font-semibold">Starting Time:</h3>
                    <p class="flex">{{ $task->starting_time }}</p>
                </div>
                <div class="flex justify-between mt-3 text-left">
                    <h3 class="mr-2 text-lg font-semibold">Ending Time:</h3>
                    <p class="flex">{{ $task->ending_time }}</p>
                </div>

            </div>

        </div>

    </div>


</x-layout>
