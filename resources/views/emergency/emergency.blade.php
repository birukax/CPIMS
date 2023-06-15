<x-layout>



<div class="flex-col mx-auto">
    <div class="row">
        <x-message />
    <x-validation-errors class="mb-2" />
    </div>
    @include('emergency.add_emergency')

    @include('emergency.emergency_table')


</div>
</x-layout>
