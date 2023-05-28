<x-layout>

    <div class="flex flex-col mx-10 my-10">
        <div class="overflow-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <div class="">
                    <table class="min-w-full h-3/4 text-left text-sm font-sm border-1 shadow-md ">
                        <thead class="border-b font-md text-white uppercase bg-dark">
                            <tr>
                                <th scope="col" class=" px-6 py-4">#</th>
                                <th scope="col" class=" px-6 py-4">Full name</th>
                                <th scope="col" class=" px-6 py-4">Email</th>
                                <th scope="col" class=" px-6 py-4">Role</th>
                                <th scope="col" class=" px-6 py-4">Phone</th>
                                <th scope="col" class=" px-6 py-4">Available Leave</th>
                                <th scope="col" class=" px-6 py-4">Status</th>
                                <th scope="col" class=" px-6 py-4">Created at</th>
                                <th scope="col" class=" px-6 py-4">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr class="border-b text-black">
                                    <td class="whitespace-nowrap  px-6 py-4 font-medium">{{ $count=+1 }}</td>
                                    <td class="whitespace-nowrap  px-6 py-4">{{ $user->name }}</td>
                                    <td class="whitespace-nowrap  px-6 py-4">{{ $user->email }}</td>
                                    <td class="whitespace-nowrap  px-6 py-4">{{ $user->role->name }}</td>
                                    <td class="whitespace-nowrap  px-6 py-4">{{ $user->phone }}</td>
                                    <td class="whitespace-nowrap  px-6 py-4">{{ $user->available_leave }}</td>
                                    <td class="whitespace-nowrap  px-6 py-4">{{ $user->status }}</td>
                                    <td class="whitespace-nowrap  px-6 py-4">{{ $user->created_at }}</td>
                                    <td class="whitespace-nowrap  px-6 py-4">
                                        <a href="users/edit_user/{{ $user->id }}"
                                            class="inline-flex items-center justify-center gap-2 rounded-full bg-dark py-1 px-3 text-center font-sm text-white hover:bg-opacity-90 lg:px-2 xl:px-6">
                                            <span>

                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-4 h-4 ">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                                </svg>

                                            </span>
                                            Edit
                                        </a>
                                    </td>



                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-layout>
