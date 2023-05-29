<x-layout>
    <!-- component -->
    <!-- This is an example component -->
    <div class="flex items-center justify-center min-h-screen px-4 ">

        <div class="w-full max-w-4xl text-black bg-white rounded-lg shadow-xl">
            <div class="p-4 border-b">
                <h2 class="text-2xl ">
                    Crime Information
                </h2>
                <p class="ml-5 text-sm text-gray-500">
                    Reportred By: <span>{{ $crime->user->name }}</span>
                </p>
            </div>
            <div>
                <div class="p-4 space-y-1 border-b md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0">
                    <p class="text-gray-600">
                        Crime
                    </p>
                    <p>
                        {{ $crime->crime }}
                    </p>
                </div>
                <div class="p-4 space-y-1 border-b md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0">
                    <p class="text-gray-600">
                        Crime Description
                    </p>
                    <p>
                        {{ $crime->description }}
                    </p>
                </div>
                <div class="p-4 space-y-1 border-b md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0">
                    <p class="text-gray-600">
                        Offender's Name
                    </p>
                    <p>
                        {{ $crime->offender_name }}
                    </p>
                </div>
                <div class="p-4 space-y-1 border-b md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0">
                    <p class="text-gray-600">
                        Offender's Phone No.
                    </p>
                    <p>
                        {{ $crime->offender_phone_number }}
                    </p>
                </div>
                <div class="p-4 space-y-1 border-b md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0">
                    <p class="text-gray-600">
                        Offender's ID
                    </p>
                    <p>
                        {{ $crime->offender_id }}
                    </p>
                </div>
                <div class="p-4 space-y-1 border-b md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0">
                    <p class="text-gray-600">
                        Offender's Statement
                    </p>
                    <p>
                        {{ $crime->offender_statement }}
                    </p>
                </div>
                @if ($crime->victim_name !== null)
                    <div class="p-4 space-y-1 border-b md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0">
                        <p class="text-gray-600">
                            Victim's Name
                        </p>
                        <p>
                            {{ $crime->victim_name }}
                        </p>
                    </div>
                @endif
                @if ($crime->victim_id !== null)
                    <div class="p-4 space-y-1 border-b md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0">
                        <p class="text-gray-600">
                            Victim's ID
                        </p>
                        <p>
                            {{ $crime->victim_id }}
                        </p>
                    </div>
                @endif
                @if ($crime->victim_phone_number !== null)
                    <div class="p-4 space-y-1 border-b md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0">
                        <p class="text-gray-600">
                            Victim's Phone No.
                        </p>
                        <p>
                            {{ $crime->victim_phone_number }}
                        </p>
                    </div>
                @endif
                @if ($crime->victim_statement !== null)
                    <div class="p-4 space-y-1 border-b md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0">
                        <p class="text-gray-600">
                            Victim's Statement
                        </p>
                        <p>
                            {{ $crime->victim_statement }}
                        </p>
                    </div>
                @endif

                @if ($crime->co_decision !== null)
                    <div class="p-4 space-y-1 border-b md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0">
                        <p class="text-gray-600">
                            Chief Officer's Decision:
                        </p>
                        <p>
                            {{ $crime->co_decision }}
                        </p>
                    </div>
                @endif
                @if ($crime->dc_decision !== null)
                    <div class="p-4 space-y-1 border-b md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0">
                        <p class="text-gray-600">
                            Discipline Committee's Decision:
                        </p>
                        <p>
                            {{ $crime->dc_decision }}
                        </p>
                    </div>
                @endif

                @if ($crime->status->name !== null)
                <div class="p-4 space-y-1 border-b md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0">
                    <p class="text-gray-600">
                        Status:
                    </p>
                    <p class="text-2xl font-bold uppercase ">
                        {{ $crime->status->name }}
                    </p>
                </div>
            @endif
                @if ($crime->status->id === 1 && auth()->user()->role_id === 3)
                    <div class="p-4 space-y-1 md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0">
                        <p class="text-gray-600">
                            Chief Officer's Review
                        </p>
                        @include('crimes.crime_review')
                    </div>
                @endif
                @if ($crime->status->id === 2 && auth()->user()->role_id === 5)
                    <div class="p-4 space-y-1 md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0">
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
            class="fixed bottom-0 right-0 p-2 text-white bg-purple-600 rounded-lg">
            Support me
        </a>
    </div>
</x-layout>
