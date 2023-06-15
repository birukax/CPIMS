<aside
    class="right-0 flex flex-col justify-end h-full px-6 py-4 my-1 mr-1 overflow-y-auto bg-white border-l-2 rounded-r-lg md:w-1/4">
    <!-- Right side NavBar -->

    <div class="flex items-center justify-between">
        <!-- Info -->

    </div>
    <span class="mt-1 text-xl font-bold text-black uppercase">Emergency Contacts</span>
    <hr class="text-lg " />
    @foreach ($emergencies as $emergency)

    <div class="flex-col justify-center mt-4 text-black">
        <h2 class=" text-base font-semibold text-dark uppercase">{{ $emergency->emergency_name }}</h2>
        <h4 class="ml-4 text-sm font-semibold">- {{ $emergency->emergency_contact_name }}</h4>
        <h4 class="ml-4 text-sm font-semibold">- {{ $emergency->emergency_contact_phone }}</h4>
        @if ($emergency->emergency_alternative_name !== NULL)
        <h4 class="ml-4 text-sm font-semibold">- {{ $emergency->emergency_alternative_name }}</h4>
        <h4 class="ml-4 text-sm font-semibold">- {{ $emergency->emergency_alternative_phone }}</h4>

        @endif
    </div>
    @endforeach

</aside>
