<x-layout>
    <div class="w-full flex-col ">
        <div class="flex items-center justify-center mx-auto mt-3">
            <h2 class=" font-extrabold text-3xl text-dark">Task Detail</h2>
        </div>
        <div class="gap-4 flex justify-between grid-cols-2 mx-8">
            <div class="left-0 w-3/5">
                <div class="container p-2 sm:p-4 text-black">
                    <div class="flex justify-between">
                        <h2 class="mb-4 text-2xl font-semibold leading-tight shadow-lg">Assigned Police</h2>
                        <div class="items-center">

                            @include('tasks.add_user')
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full text-sm text-left">
                            <thead class="text-white bg-dark">

                                <tr>
                                    <th class="p-3">#</th>
                                    <th class="p-3">Name</th>
                                    <th class="p-3">Contact</th>
                                    <th class="p-3">Tasks</th>
                                    <th class="p-3">Action</th>
                                </tr>
                            </thead>
                            <tbody class=" mb-1">
                                @foreach ($task->users as $user)
                                    <tr class="border-b border-opacity-20 border-gray-700 bg-gray-900">
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
                                                <x-button class="bg-dark py-1 px-3 text-sm font-light"
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

            <div class="right-0 mt-20  text-black gap-5">

                <div class="flex justify-start  text-left  mt-3">
                    <h3 class="font-bold text-xl mr-3">Task name:</h3>
                    <p class=" ">{{ $task->task_name }}</p>
                </div>
                <div class="flex justify-start text-left mt-3">
                    <h3 class="font-bold text-xl mr-3 justify-start">Task Description:</h3>
                    <p class="">{{ $task->task_description }}</p>
                </div>
                <div class="flex justify-start  text-left mt-3">
                    <h3 class="font-bold text-xl mr-3">Task Date:</h3>
                    <p class="flex">{{ $task->date }}</p>
                </div>
                <div class="flex justify-start text-left mt-3">
                    <h3 class="font-bold text-xl mr-3">Starting Time:</h3>
                    <p class="flex">{{ $task->starting_time }}</p>
                </div>
                <div class="flex justify-start text-left mt-3">
                    <h3 class="font-bold text-xl mr-3">Ending Time:</h3>
                    <p class="flex">{{ $task->ending_time }}</p>
                </div>

            </div>

        </div>

    </div>


</x-layout>
