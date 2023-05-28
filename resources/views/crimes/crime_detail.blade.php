<x-layout>
    <!-- component -->
    <!-- This is an example component -->
    <div class="min-h-screen flex items-center justify-center px-4 ">

        <div class="max-w-4xl  bg-white w-full rounded-lg shadow-xl text-black">
            <div class="p-4 border-b">
                <h2 class="text-2xl ">
                    Crime Information
                </h2>
                <p class="text-sm text-gray-500 ml-5">
                    Reportred By: <span>{{ $crime->user->name }}</span>
                </p>
            </div>
            <div>
                <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                    <p class="text-gray-600">
                        Crime
                    </p>
                    <p>
                        {{ $crime->crime }}
                    </p>
                </div>
                <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                    <p class="text-gray-600">
                        Crime Description
                    </p>
                    <p>
                        {{ $crime->description }}
                    </p>
                </div>
                <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                    <p class="text-gray-600">
                        Offender's Name
                    </p>
                    <p>
                        {{ $crime->offender_name }}
                    </p>
                </div>
                <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                    <p class="text-gray-600">
                        Offender's Phone No.
                    </p>
                    <p>
                        {{ $crime->offender_phone_number }}
                    </p>
                </div>
                <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                    <p class="text-gray-600">
                        Offender's ID
                    </p>
                    <p>
                        {{ $crime->offender_id }}
                    </p>
                </div>
                <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                    <p class="text-gray-600">
                        Offender's Statement
                    </p>
                    <p>
                        {{ $crime->offender_statement }}
                    </p>
                </div>
                @if ($crime->victim_name !== null)
                    <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                        <p class="text-gray-600">
                            Victim's Name
                        </p>
                        <p>
                            {{ $crime->victim_name }}
                        </p>
                    </div>
                @endif
                @if ($crime->victim_id !== null)
                    <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                        <p class="text-gray-600">
                            Victim's ID
                        </p>
                        <p>
                            {{ $crime->victim_id }}
                        </p>
                    </div>
                @endif
                @if ($crime->victim_phone_number !== null)
                    <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                        <p class="text-gray-600">
                            Victim's Phone No.
                        </p>
                        <p>
                            {{ $crime->victim_phone_number }}
                        </p>
                    </div>
                @endif
                @if ($crime->victim_statement !== null)
                    <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                        <p class="text-gray-600">
                            Victim's Statement
                        </p>
                        <p>
                            {{ $crime->victim_statement }}
                        </p>
                    </div>
                @endif

                @if ($crime->co_decision !== null)
                    <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                        <p class="text-gray-600">
                            Chief Officer's Decision:
                        </p>
                        <p>
                            {{ $crime->co_decision }}
                        </p>
                    </div>
                @endif
                @if ($crime->dc_decision !== null)
                    <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                        <p class="text-gray-600">
                            Discipline Committee's Decision:
                        </p>
                        <p>
                            {{ $crime->dc_decision }}
                        </p>
                    </div>
                @endif

                @if ($crime->status->name !== null)
                <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                    <p class="text-gray-600">
                        Status:
                    </p>
                    <p class=" font-bold text-2xl uppercase">
                        {{ $crime->status->name }}
                    </p>
                </div>
            @endif
                @if ($crime->status->id === 1)
                    <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4">
                        <p class="text-gray-600">
                            Chief Officer's Review
                        </p>
                        @include('crimes.crime_review')
                    </div>
                @endif
                @if ($crime->status->id === 2)
                    <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4">
                        <p class="text-gray-600">
                            Discipline Committee's Review
                        </p>
                        @include('crimes.crime_review')
                    </div>
                @endif
            </div>
        </div>




        <!-- support me by buying a coffee -->
        <a href="https://www.buymeacoffee.com/danimai" target="_blank"
            class="bg-purple-600 p-2 rounded-lg text-white fixed right-0 bottom-0">
            Support me
        </a>
    </div>
</x-layout>
