<x-layout>
    <!-- component -->
    <!-- This is an example component -->
    <div class="flex items-center justify-center min-h-screen px-4 ">

        <div class="w-full max-w-4xl text-black bg-white rounded-lg shadow-xl">
            <div class="p-4 border-b">
                <h2 class="text-2xl ">
                    Leave Information
                </h2>
                <p class="ml-5 text-sm text-gray-500">
                    Requested By: <span>{{ $leave->user->name }}</span>
                </p>
            </div>
            <div>
                <div class="p-4 space-y-1 border-b md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0">
                    <p class="text-gray-600">
                        Leave Reason
                    </p>
                    <p>
                        {{ $leave->reason }}
                    </p>
                </div>
                <div class="p-4 space-y-1 border-b md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0">
                    <p class="text-gray-600">
                        Leave Type
                    </p>
                    <p>
                        {{ $leave->lt->name }}
                    </p>
                </div>
                <div class="p-4 space-y-1 border-b md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0">
                    <p class="text-gray-600">
                        Leave Starts @
                    </p>
                    <p>
                        {{ $leave->start_date }}
                    </p>
                </div>
                <div class="p-4 space-y-1 border-b md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0">
                    <p class="text-gray-600">
                        Leave Ends @
                    </p>
                    <p>
                        {{ $leave->end_date }}
                    </p>
                </div>
                <div class="p-4 space-y-1 border-b md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0">
                    <p class="text-gray-600">
                        Leave Days
                    </p>
                    <p>
                        {{ $leave->leave_days }}
                    </p>
                </div>

                @if ($leave->co_decision !== null)
                <div class="p-4 space-y-1 border-b md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0">
                    <p class="text-gray-600">
                        Chief Officer's Decision:
                    </p>
                    <p>
                        {{ $leave->co_decision }}
                    </p>
                </div>
            @endif
                @if ($leave->admin_decision !== null)
                    <div class="p-4 space-y-1 border-b md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0">
                        <p class="text-gray-600">
                            HR's Decision:
                        </p>
                        <p>
                            {{ $leave->admin_decision }}
                        </p>
                    </div>
                @endif

                <div class="p-4 space-y-1 border-b md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0">
                    <p class="text-gray-600">
                        Status:
                    </p>
                    <p class="text-2xl font-bold uppercase ">
                        @if ($leave->status->id === 2)
                            Admin Pending
                        @elseif ($leave->status->id === 5)
                            Admin Rejected
                        @else
                            {{ $leave->status->name }}

                        @endif
                    </p>
                </div>
                @if ($leave->status->id === 1 && auth()->user()->role_id === 3)
                    <div class="p-4 space-y-1 md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0">
                        <p class="text-gray-600">
                            Chief Officer's Review
                        </p>
                        @include('leaves.leave_review')
                    </div>
                @endif
                @if ($leave->status->id === 2 && auth()->user()->role_id === 4)
                    <div class="p-4 space-y-1 md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0">
                        <p class="text-gray-600">
                            HR's Review
                        </p>
                        @include('leaves.leave_review')
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-layout>
