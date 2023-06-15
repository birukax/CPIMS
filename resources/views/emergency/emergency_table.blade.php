<div class="flex flex-col items-center mt-10 ">
    <div class="overflow-x-auto md:mx-6 lg:mx-8 w-11/12">
        <div class=" md:min-w-full py-2 md:px-6 lg:px-8">
            <div class="">
                <table class="min-w-full text-left text-sm font-light bg-white">
                    <thead
                        class="border-b bg-dark font-medium text-white ">
                        <tr>
                            <th scope="col" class=" px-1 py-2">#</th>
                            <th scope="col" class=" px-1 py-2">Emergency Name</th>
                            <th scope="col" class=" px-1 py-2">Contact Name</th>
                            <th scope="col" class=" px-1 py-2">Contact Phone</th>
                            <th scope="col" class=" px-1 py-2">Alternative Name</th>
                            <th scope="col" class=" px-1 py-2">Alternative Number</th>
                            <th scope="col" class=" px-1 py-2">Actions</th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($emergencies as $emergency)
                            <tr class="border-b font-medium text-black">
                                <td class="whitespace-nowrap  px-1 py-2 font-medium">{{ $count = +1 }}</td>
                                <td class="whitespace-nowrap  px-1 py-2">{{ $emergency->emergency_name }}</td>
                                <td class="whitespace-nowrap  px-1 py-2">{{ $emergency->emergency_contact_name }}</td>
                                <td class="whitespace-nowrap  px-1 py-2">{{ $emergency->emergency_contact_phone }}</td>
                                <td class="whitespace-nowrap  px-1 py-2">{{ $emergency->emergency_alternative_name }}</td>
                                <td class="whitespace-nowrap  px-1 py-2">{{ $emergency->emergency_alternative_phone }}</td>
                                <td class="whitespace-nowrap ">
                                    @include('emergency.edit_emergency')
                                </td>

                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
