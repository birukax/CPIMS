<x-layout>
    <div class="flex-col mx-auto">
        <div class="row">
            <x-message />
        <x-validation-errors class="mb-2" />
        </div>
        @include('pcs.register_pc')

        {{-- Modal End --}}

        <div class="flex flex-col items-center mt-10 ">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8 w-11/12">
                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full text-left text-sm font-light">
                            <thead
                                class="border-b bg-dark font-medium text-white ">
                                <tr>
                                    <th scope="col" class=" px-1 py-2">#</th>
                                    <th scope="col" class=" px-1 py-2">Brand</th>
                                    <th scope="col" class=" px-1 py-2">Serial Number</th>
                                    <th scope="col" class=" px-1 py-2">Owner's Name</th>
                                    <th scope="col" class=" px-1 py-2">Owner's ID</th>
                                    <th scope="col" class=" px-1 py-2">Actions</th>


                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pcs as $pc)
                                    <tr class="border-b font-medium text-black">
                                        <td class="whitespace-nowrap  px-1 py-2 font-medium">{{ $count = +1 }}</td>
                                        <td class="whitespace-nowrap  px-1 py-2">{{ $pc->brand }}</td>
                                        <td class="whitespace-nowrap  px-1 py-2">{{ $pc->serial_number }}</td>
                                        <td class="whitespace-nowrap  px-1 py-2">{{ $pc->owner_name }}</td>
                                        <td class="whitespace-nowrap  px-1 py-2">{{ $pc->owner_id }}</td>
                                        <td class="whitespace-nowrap ">
                                            @include('pcs.edit_pc')
                                        </td>

                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



</x-layout>
