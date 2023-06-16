<x-layout>
    <h1 class="my-5 text-2xl font-bold text-center uppercase text-oxfordBlue">Edit: {{ auth()->user()->name }}
    </h1>
    <div class="grid items-center justify-between w-full gap-10 mx-5 md:grid-cols-2">



        <div class="w-full mx-2 md:mx-5">


            <x-message />
            <x-validation-errors class="mb-4" />

            <form method="POST" class="md:px-5 text-md" action="{{ route('profile_edited') }}">
                @csrf
                @method('PUT')
                <div>
                    <x-label for="name" value="{{ __('Name') }}" />
                    <x-input id="name" class="block w-full mt-1" type="text" name="name"
                        value="{{ auth()->user()->name }}" required autofocus autocomplete="name" />
                </div>

                <div class="mt-4">
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="block w-full mt-1" type="email" name="email"
                        value="{{ auth()->user()->email }}" required autocomplete="email" />
                </div>

                <div class="mt-4">
                    <x-label for="phone" value="{{ __('Phone') }}" />
                    <x-input id="phone" class="block w-full mt-1" type="number" name="phone"
                        value="{{ auth()->user()->phone }}" required autofocus autocomplete="phone" />
                </div>

                <div class="flex items-center justify-center mt-7">
                    <x-button class="ml-4 bg-oxfordBlue">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-4 h-4 mr-1">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                        </svg>

                        {{ __('Update') }}
                    </x-button>
                </div>
            </form>
        </div>
        @include('profile.edit_password')
    </div>
</x-layout>
