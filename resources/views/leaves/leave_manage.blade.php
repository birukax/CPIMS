<x-layout>
    <x-message />
    <x-validation-errors class="mb-2" />
    <div class="justify-between w-full md:flex">
        <div class="md:w-3/4">
            @include('leaves.leave_manage_table')
        </div>
        <div class="md:w-1/4 md:mx-2">
            @include('leaves.lt_list')
            </div>
    </div>
</x-layout>
