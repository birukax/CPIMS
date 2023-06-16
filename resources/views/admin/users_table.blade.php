<div class="flex flex-col justify-start mx-2 my-2 md:mx-5 md:my-4">
    <div class="flex justify-around">
        <h3 class="text-2xl font-bold text-center uppercase text-dark">Users</h3>
        <a href="{{ route('create') }}"
            class="inline-flex items-center justify-center gap-2 px-2 py-1 text-sm text-center text-white rounded-lg bg-dark hover:bg-opacity-90 lg:px-3">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                    <path fill-rule="evenodd"
                        d="M12 3.75a.75.75 0 01.75.75v6.75h6.75a.75.75 0 010 1.5h-6.75v6.75a.75.75 0 01-1.5 0v-6.75H4.5a.75.75 0 010-1.5h6.75V4.5a.75.75 0 01.75-.75z"
                        clip-rule="evenodd" />
                </svg>
            </span>
            New
        </a>
    </div>
    <div class="overflow-auto lg:mx-10">
        <div class="inline-block min-w-full py-2 sm:px-4 lg:px-8">
            <div class="bg-white">
                <table class="min-w-full text-sm text-left shadow-md h-3/4 md:text-md border-1 ">
                    <thead class="text-sm text-white uppercase border-b md:text-md bg-dark">
                        <tr>
                            <th scope="col" class="px-1 py-1 ">#</th>
                            <th scope="col" class="px-1 py-1 ">Full name</th>
                            <th scope="col" class="px-1 py-1 ">Email</th>
                            <th scope="col" class="px-1 py-1 ">Phone</th>
                            <th scope="col" class="px-1 py-1 ">Status</th>
                            <th scope="col" class="px-1 py-1 ">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr class="text-black border-b">
                                <td class="px-1 py-1 md:px-2 whitespace-nowrap ">{{ $count += 1 }}</td>
                                <td class="flex-col gap-1 px-1 py-1 md:px-2">
                                    <span>{{ $user->name }}</span>
                                    <br>
                                    <span class="ml-3 text-xs">{{ $user->role->name }}</span>
                                </td>
                                <td class="px-1 py-1 md:px-2 whitespace-nowrap">{{ $user->email }}</td>
                                <td class="px-1 py-1 md:px-2 whitespace-nowrap">{{ $user->phone }}</td>
                                <td class="px-1 py-1 md:px-2 whitespace-nowrap">{{ $user->status }}</td>
                                <td class="px-1 py-1 md:px-2 whitespace-nowrap">
                                    <a href="users/edit_user/{{ $user->id }}"
                                        class="inline-flex items-center justify-center gap-2 px-2 py-1 text-sm text-center text-white rounded-lg bg-dark hover:bg-opacity-90 lg:px-2 xl:px-2">
                                        <span>

                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-3 h-3 ">
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
                {{ $users->links() }}

            </div>
        </div>
    </div>
</div>
