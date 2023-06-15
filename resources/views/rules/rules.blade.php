<x-layout>
    @if (auth()->user()->role_id === 3)
        @include('rules.add_rule')
    @endif

    <x-message />
    @unless (count($rules) === null)
        <!-- component -->
        <div class="w-full ">

            <!--Tabs navigation-->
            <ul class="flex flex-row flex-wrap justify-center mx-auto mb-4 list-none border-b-0" id="tabs-tab3" role="tablist"
                data-te-nav-ref>
                <li role="presentation">
                    <a href="#tabs-home3"
                        class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400"
                        id="tabs-home-tab3" data-te-toggle="pill" data-te-target="#tabs-home3" data-te-nav-active
                        role="tab" aria-controls="tabs-home3" aria-selected="true">Police</a>
                </li>
                <li role="presentation">
                    <a href="#tabs-profile3"
                        class="focus:border-transparen my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400"
                        id="tabs-profile-tab3" data-te-toggle="pill" data-te-target="#tabs-profile3" role="tab"
                        aria-controls="tabs-profile3" aria-selected="false">Shift Leader</a>
                </li>
            </ul>

            <!--Tabs content-->
            <div class="w-3/4 mx-auto ">
                <div class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                    id="tabs-home3" role="tabpanel" data-te-tab-active aria-labelledby="tabs-home-tab3">
                    <div class="overflow-auto bg-white shadow h-fit" id="journal-scroll">

                        <table class="w-11/12 mx-auto my-4 overscroll-contain">


                            <tbody class="">
                                @foreach ($police_rule as $police)
                                    <tr
                                        class="py-1 text-xs transform scale-100 bg-blue-500 bg-opacity-25 border-b-2 border-blue-100 cursor-default ">

                                        <td class="px-2 py-2 whitespace-no-wrap">
                                            <div class="font-medium leading-5 text-dark">{{ $police->rule }}</div>
                                            <div class="leading-5 text-gray-800">{{ $police->role->name }}</div>
                                        </td>

                                        <td class="pl-5 pr-3 whitespace-no-wrap">

                                            <div class="">
                                                @if (auth()->user()->role_id === 3)
                                                    @include('rules.edit_police_rule')
                                                @endif
                                            </div>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                    id="tabs-profile3" role="tabpanel" aria-labelledby="tabs-profile-tab3">
                    <div class="overflow-auto bg-white shadow h-fit" id="journal-scroll">

                        <table class="w-11/12 mx-auto my-4">


                            <tbody class="">
                                @foreach ($shift_leader_rule as $shift_leader)
                                    <tr
                                        class="relative py-1 text-sm transform scale-100 bg-blue-500 bg-opacity-25 border-b-2 border-blue-100 cursor-default">

                                        <td class="px-2 py-2 whitespace-no-wrap">
                                            <div class="font-medium leading-5 text-dark">{{ $shift_leader->rule }}</div>
                                            <div class="leading-5 text-gray-800">{{ $shift_leader->role->name }}</div>
                                        </td>

                                        <td class="pl-5 pr-3 whitespace-no-wrap">
                                            <div>
                                                @if (auth()->user()->role_id === 3)
                                                    @include('rules.edit_SL_rule')
                                                @endif
                                            </div>
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
    </div>



</x-layout>
