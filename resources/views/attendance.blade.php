@extends('home')

@section('body')
    <div class=" flex items-stretch justify-between w-full my-5 divide-x-4 divide-dark h-screen">
        {{-- table for attendance --}}
        <div class="flex flex-col w-full px-5">
            <div class="flex-col w-full">
                <x-search />

                <div class="col flex">
                    <div class="overflow-hidden  p-5 shadow-2xl">
                        <table class="items-center overflow-hidden font-sans text-oxfordBlue">
                            <thead class="font-sans border-b bg-platinum">
                                <tr>
                                    <th scope="col" class="px-6 py-4">#</th>
                                    <th scope="col" class="px-6 py-4">Full Name</th>
                                    <th scope="col" class="px-6 py-4 ">Role</th>
                                    <th scope="col" class="px-6 py-4 ">E-mail</th>
                                    <th scope="col" class="px-6 py-4 overflow-x-hidden">Phone No.</th>
                                    <th scope="col" class="px-6 py-4">Action</th>
                                </tr>
                            </thead>
                            <tbody class="flex-row">

                                @foreach ($users as $user)
                                    <tr class="flex-col font-medium border-b ">
                                        <td class="px-6 py-4 whitespace-nowrap font-xl">{{ $count += 1 }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $user->name }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $user->role }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $user->email }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $user->phone }}</td>
                                        <td class="flex justify-between gap-2 px-6 py-4 my-auto ">

                                            <a href="attendance/entered/{{ $user->id }}"
                                                class="inline-flex items-center justify-center gap-2.0 rounded-full bg-dark py-1 px-1 text-center font-medium text-white hover:bg-opacity-90 lg:px-8 xl:px-10">
                                                Arrived
                                            </a>
                                            <a href="attendance/left/{{ $user->id }}"
                                                class="inline-flex items-center justify-center gap-2.0 rounded-full bg-oxfordBlue py-1 px-1 text-center font-medium text-white hover:bg-opacity-90 lg:px-8 xl:px-10">
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

        <div class="flex flex-col w-75">
            <div class="px-2 card">
                <div class="divide-y-4 card-body">
                    <h5 class="mt-2 text-center card-title">AVAILABLE STAFF</h5>

                    {{-- @unless ($attendances === 0) --}}
                    {{-- @foreach ($attendances as $attendance) --}}
                    <div class="pt-5 text-left card-text">
                        <div class="">
                            {{-- <h4 class=" text-oxfordBlue">{{ $attendance->User }}</h4> --}}
                            <p></p>
                        </div>
                    </div>
                    {{-- @endforeach --}}
                    {{-- @else --}}
                    {{-- @endunless --}}

                </div>
            </div>
        </div>
    </div>
@endsection
