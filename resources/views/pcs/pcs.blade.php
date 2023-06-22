<x-layout>
    <div class="flex-col mx-auto">
        <div class="row">
            <x-message />
        <x-validation-errors class="mb-2" />
        </div>
        @include('pcs.register_pc')

        {{-- Modal End --}}

        <div class="flex flex-col items-center mt-10 ">
            <div class="w-11/12 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 border-white sm:px-6 lg:px-8">
                    <div class="overflow-hidden bg-white">
                        <table class="min-w-full text-sm font-light text-left">
                            <thead
                                class="font-medium text-white border-b bg-dark ">
                                <tr>
                                    <th scope="col" class="px-1 py-2 ">#</th>
                                    <th scope="col" class="px-1 py-2 ">Brand</th>
                                    <th scope="col" class="px-1 py-2 ">Serial Number</th>
                                    <th scope="col" class="px-1 py-2 ">Owner's Name</th>
                                    <th scope="col" class="px-1 py-2 ">Owner's ID</th>
                                    <th scope="col" class="px-1 py-2 ">Actions</th>


                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pcs as $pc)
                                    <tr class="font-medium text-black border-b">
                                        <td class="px-1 py-2 font-medium whitespace-nowrap">{{ $count += 1 }}</td>
                                        <td class="px-1 py-2 whitespace-nowrap">{{ $pc->brand }}</td>
                                        <td class="px-1 py-2 whitespace-nowrap">{{ $pc->serial_number }}</td>
                                        <td class="px-1 py-2 whitespace-nowrap">{{ $pc->owner_name }}</td>
                                        <td class="px-1 py-2 whitespace-nowrap">{{ $pc->owner_id }}</td>
                                        <td class="whitespace-nowrap ">
                                            @include('pcs.edit_pc')
                                        </td>

                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                {{ $pcs->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>



</x-layout>
