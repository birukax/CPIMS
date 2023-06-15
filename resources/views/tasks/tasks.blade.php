<x-layout>
    <x-validation-errors class="mb-2" />
    <x-message />
    <div class="flex flex-col w-full">
        <div class="inline-flex  justify-end md:mx-5 gap-2 md:gap-6 mt-5">
            @include('tasks.create_zone_modal')
            @include('tasks.create_task')
        </div>


        <!--Pills navigation-->
        <ul class="flex flex-col flex-wrap pl-0 mx-auto mb-2 list-none md:flex-row" id="pills-tab" role="tablist" data-te-nav-ref>
            <li role="presentation">
                <a href="#pills-card"
                    class="my-2 block rounded bg-neutral-100 px-3 pb-2 pt-2.5 text-xs font-medium uppercase leading-tight text-neutral-500 data-[te-nav-active]:!bg-oxfordBlue data-[te-nav-active]:text-white dark:bg-neutral-700 dark:text-white dark:data-[te-nav-active]:text-primary-700 md:mr-4"
                    id="pills-table-tab" data-te-toggle="pill" data-te-target="#pills-table" data-te-nav-active
                    role="tab" aria-controls="pills-table" aria-selected="true">Table</a>
            </li>
            <li role="presentation">
                <a href="#pills-table"
                    class="my-2 block rounded bg-neutral-100 px-3 pb-2 pt-2.5 text-xs font-medium uppercase leading-tight text-neutral-500 data-[te-nav-active]:!bg-oxfordBlue data-[te-nav-active]:text-white dark:bg-neutral-700 dark:text-white dark:data-[te-nav-active]:text-primary-700 md:mr-4"
                    id="pills-card-tab" data-te-toggle="pill" data-te-target="#pills-card" role="tab"
                    aria-controls="pills-card" aria-selected="false">Card</a>
            </li>

        </ul>

        <!--Pills content-->
        <div class="mb-6">
            <div class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                id="pills-table" role="tabpanel" aria-labelledby="pills-table-tab" data-te-tab-active>
                @include('tasks.tasks_table')
            </div>
            <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                id="pills-card" role="tabpanel" aria-labelledby="pills-card-tab">
                @include('tasks.tasks_card')
            </div>
        </div>




    </div>

</x-layout>
