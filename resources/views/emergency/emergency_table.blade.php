<div class="flex flex-col items-center mt-10 ">
    <div class="w-11/12 overflow-x-auto md:mx-6 lg:mx-8">
        <div class="py-2 md:min-w-full md:px-6 lg:px-8">
            <div class="">
                <table class="min-w-full text-sm font-light text-left bg-white">
                    <thead
                        class="font-medium text-white border-b bg-dark ">
                        <tr>
                            <th scope="col" class="px-1 py-2 ">#</th>
                            <th scope="col" class="px-1 py-2 ">Emergency Name</th>
                            <th scope="col" class="px-1 py-2 ">Contact Name</th>
                            <th scope="col" class="px-1 py-2 ">Contact Phone</th>
                            <th scope="col" class="px-1 py-2 ">Alternative Name</th>
                            <th scope="col" class="px-1 py-2 ">Alternative Number</th>
                            <th scope="col" class="px-1 py-2 ">Actions</th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($emergencies as $emergency)
                            <tr class="font-medium text-black border-b">
                                <td class="px-1 py-2 font-medium whitespace-nowrap">{{ $count = +1 }}</td>
                                <td class="px-1 py-2 whitespace-nowrap">{{ $emergency->emergency_name }}</td>
                                <td class="px-1 py-2 whitespace-nowrap">{{ $emergency->emergency_contact_name }}</td>
                                <td class="px-1 py-2 whitespace-nowrap">{{ $emergency->emergency_contact_phone }}</td>
                                <td class="px-1 py-2 whitespace-nowrap">{{ $emergency->emergency_alternative_name }}</td>
                                <td class="px-1 py-2 whitespace-nowrap">{{ $emergency->emergency_alternative_phone }}</td>
                                <td class="flex justify-around whitespace-nowrap">
                                    @include('emergency.edit_emergency')

                                    <div class="">
                                        <form action="/emergency/emergency_deleted/{{ $emergency->id }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="inline-flex items-center justify-center gap-1 px-2 py-0.5 text-center text-white rounded-full bg-dark font-extralight xl:font-sm hover:bg-opacity-90 lg:px-2 xl:px-3">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                        stroke="currentColor" class="w-4 h-4">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                                                    </svg>

                                                </span>
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>

                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
