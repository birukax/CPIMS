<div class="flex justify-between h-screen divide-x-4 divide-dark">
    {{-- table for attendance --}}
    <div class="flex flex-col px-5 mx-20 my-10">
        <div class="flex flex-col">
            <x-validation-errors class="mb-4" />
            <x-message />

                <div class="shadow-2xl">
                    <table class="items-center text-black">
                        <thead class="text-white border-b  bg-dark">
                            <tr>
                                <th scope="col" class="px-6 py-4">#</th>
                                <th scope="col" class="px-6 py-4 ">Full Name</th>
                                <th scope="col" class="px-6 py-4 collapse md:visible">Role</th>
                                <th scope="col" class="px-6 py-4 collapse md:visible">E-mail</th>
                                <th scope="col" class="px-6 py-4 collapse md:visible">Phone No.</th>
                                <th scope="col" class="px-6 py-4">Action</th>
                            </tr>
                        </thead>
                        <tbody class="flex-row ">

                            @foreach ($users as $user)
                                <tr class="flex-col border-b ">
                                    <td class="px-6 py-4 whitespace-nowrap font-xl">{{ $count += 1 }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $user->name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap collapse md:visible">{{ $user->role->name }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap collapse md:visible">{{ $user->email }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap collapse md:visible">{{ $user->phone }}</td>
                                    <td class="flex justify-between gap-2 px-6 py-4 my-auto ">

                                        <a href="attendance/staff_entered/{{ $user->id }}"
                                            class="inline-flex items-center justify-center gap-2.0 rounded-full bg-dark py-1 px-3 text-center font-xs text-white hover:bg-opacity-90 lg:px-4 xl:px-5">
                                            Arrived
                                        </a>
                                        <a href="attendance/staff_left/{{ $user->id }}"
                                            class="inline-flex items-center justify-center gap-2.0 rounded-full bg-oxfordBlue py-1 px-3 text-center font-xs
                                        text-white hover:bg-opacity-90 lg:px-4 xl:px-5 ">
                                            Left
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
