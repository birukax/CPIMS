<x-layout>

<div class="items-center w-full">


    <div class="w-1/2 mx-auto ">

        <h1 class="text-4xl font-extrabold text-center text-dark my-7">Register User</h1>


        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required
                    autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')"
                    required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="phone" value="{{ __('Phone') }}" />
                <x-input id="phone" class="block w-full mt-1" type="text" name="phone" :value="old('phone')" required
                    autofocus autocomplete="phone" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block w-full mt-1" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block w-full mt-1" type="password"
                    name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex flex-row items-center justify-center w-full gap-1 my-4" data-toggle="buttons">
                <input type="radio" name="role_id" value="1" id="" autocomplete="off" checked>
                <label class="mr-5 btn btn-primary active ">Police</label>
                <input type="radio" name="role_id" value="2" id="" autocomplete="off">
                <label class="mr-5 btn btn-primary">Shift Leader</label>
                <input type="radio" name="role_id" value="3" id="" autocomplete="off">
                <label class="mr-5 btn btn-primary">Chief Officer</label>
                <input type="radio" name="role_id" value="5" id="" autocomplete="off">
                <label class="mr-5 btn btn-primary">Discipline Committee</label>
            </div>

            <div class="flex items-center justify-center mt-7">

                <x-button class="ml-4 bg-dark">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </div>
</div>
</x-layout>
