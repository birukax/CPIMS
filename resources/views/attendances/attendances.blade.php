
<x-layout>

<div class="justify-center mx-2 bg-white rounded-lg shadow-lg md:mx-6">
    <h2 class="my-4 text-lg font-bold text-center uppercase text-dark">Attendance</h2>
    <x-validation-errors class="p-2" />
    <x-message />
    <div class="w-full ">
        <table class="w-full bg-white">
            <thead>
                <tr
                    class="font-semibold tracking-wide text-center text-white uppercase border border-dark text-md bg-dark">
                    <th class="px-4 py-3">Name</th>
                    <th class="px-4 py-3">Email</th>
                    <th class="px-4 py-3">Entered @</th>
                    <th class="px-4 py-3">Left @</th>
                    <th class="px-4 py-3">Phone No.</th>
                    <th class="px-4 py-3">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @foreach ($polices as $police)
                    <tr class="text-black">
                        <td class="px-4 py-3 border">
                            <div class="flex items-center text-sm">
                                <div>
                                    <p class="font-semibold text-black">{{ $police->name }}</p>
                                    <p class="text-xs text-gray-600">{{ $police->role->name }}</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-3 text-sm font-normal border ">{{ $police->email }}</td>
                        <td class="px-4 py-3 text-sm font-normal border ">{{ $police->attendances()->where('date', $today)->value('entered') }}</td>
                        <td class="px-4 py-3 text-sm font-normal border ">{{ $police->attendances()->where('date', $today)->value('left') }}</td>
                        <td class="px-4 py-3 text-sm font-normal border ">{{ $police->phone }}</td>
                        <td class="gap-2 px-2 py-2 border ">
                            <span>
                                <a href="attendances/staff_entered/{{ $police->id }}"
                                    class="inline-flex items-center justify-center px-2 py-1 text-sm text-center text-white rounded-lg bg-dark hover:bg-opacity-90 xl:px-3">Arrived
                                </a>
                            </span>
                            <span>
                                <a href="attendances/staff_left/{{ $police->id }}"
                                    class="inline-flex items-center justify-center px-2 py-1 text-sm text-center text-white rounded-lg bg-oxfordBlue hover:bg-opacity-90 xl:px-3">
                                    Left
                                </a>
                            </span>
                        </td>


                    </tr>
                @endforeach

            </tbody>
        </table>
        {{ $polices->links() }}
    </div>
</div>


</x-layout>
