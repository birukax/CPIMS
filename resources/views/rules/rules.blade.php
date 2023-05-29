<x-layout>
        @if (auth()->user()->role_id === 3)
    @include('rules.add_rule')
@endif

        @unless (count($rules) === null)
                <!-- component -->

                <div class="container flex justify-center h-full py-10 mx-auto">
                    <div class="flex flex-col w-4/12 h-full pl-4">
                        <div class="px-5 py-2 text-sm font-bold text-gray-500 bg-white border-b border-gray-300 shadow">
                            Tracking events
                        </div>

                        <div class="w-full overflow-auto bg-white shadow h-fit" id="journal-scroll">

                            <table class="w-full">


                                <tbody class="">
            @foreach ($rules as $rule)
                                    <tr
                                        class="relative py-1 text-xs transform scale-100 bg-blue-500 bg-opacity-25 border-b-2 border-blue-100 cursor-default">
                                        <td class="pl-5 pr-3 whitespace-no-wrap">
                                            <div class="text-gray-400">Today</div>
                                            <div>07:45</div>
                                        </td>

                                        <td class="px-2 py-2 whitespace-no-wrap">
                                            <div class="font-medium leading-5 text-gray-500">Taylor Otwel</div>
                                            <div class="leading-5 text-gray-900">Create pull request #1213
                                                <a class="text-blue-500 hover:underline" href="#">#231231</a>
                                            </div>
                                            <div class="leading-5 text-gray-800">Hello message</div>
                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>
        @else
            there is no rule
        @endunless

</x-layout>
