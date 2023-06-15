<x-layout>


    <div class="justify-between md:flex">
        <div class="container w-full">
            <div class="w-full">
                <ul class="flex flex-row flex-wrap justify-center w-full pl-0 mb-5 list-none border-b-0" role="tablist"
                    data-te-nav-ref>
                    <li role="presentation">
                        <a href="#tabs-today"
                            class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-oxfordBlue data-[te-nav-active]:text-oxfordBlue dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:text-oxfordBlue"
                            data-te-toggle="pill" data-te-target="#tabs-today" data-te-nav-active role="tab"
                            aria-controls="tabs-today" aria-selected="true">Today's Task</a>
                    </li>
                    <li role="presentation">
                        <a href="#tabs-history"
                            class="focus:border-transparen my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate data-[te-nav-active]:border-oxfordBlue data-[te-nav-active]:text-oxfordBlue dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:text-oxfordBlue"
                            data-te-toggle="pill" data-te-target="#tabs-history" role="tab"
                            aria-controls="tabs-history" aria-selected="false">Tasks History</a>
                    </li>

                </ul>
            </div>

            <!--Tabs content for oxfordBlue color-->
            <div class="mx-auto mb-6 ">
                <div class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                    id="tabs-today" role="tabpanel" aria-labelledby="tabs-home-tab5" data-te-tab-active>
                    @unless (count($assigned_tasks_today) === 0)

                    @include('police.police_tasks.assigned_tasks_today')
                    @else
                    <h3 class="text-lg font-semibold text-center text-gray-900">There is no task assigned to you today.</h3>
                    @endunless
                </div>
                <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                    id="tabs-history" role="tabpanel" aria-labelledby="tabs-profile-tab5">
                    @include('police.police_tasks.assigned_tasks_all')
                </div>
            </div>
        </div>
        @include('partials.emergency')
    </div>

</x-layout>
