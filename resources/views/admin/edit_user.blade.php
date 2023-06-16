<x-layout>

    <x-validation-errors class="mb-4" />
    <x-message />

    <h1 class="my-4 text-2xl font-extrabold text-center uppercase text-dark">Edit: {{ $user->name }}</h1>
    <div class="grid justify-between w-full grid-cols-1 gap-5 md:grid-cols-2">

        <div class="mx-2 md:mx-5">





            <form method="POST" class=" text-md" action="{{ route('user_edited') }}">
                @csrf
                @method('PUT')
                <input hidden name="id" value="{{ $user->id }}" />
                <div>
                    <x-label class="font-semibold" for="name" value="{{ __('Name') }}" />
                    <x-input id="name" class="block w-full mt-1" type="text" name="name"
                        value="{{ $user->name }}" required autofocus autocomplete="name" />
                </div>

                <div class="mt-4">
                    <x-label class="font-semibold" for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="block w-full mt-1" type="email" name="email"
                        value="{{ $user->email }}" required autocomplete="username" />
                </div>

                <div class="mt-4">
                    <x-label class="font-semibold" for="phone" value="{{ __('Phone') }}" />
                    <x-input id="phone" class="block w-full mt-1" type="text" name="phone"
                        value="{{ $user->phone }}" required autofocus autocomplete="phone" />
                </div>

                <div class="my-4 ">
                    <x-label class="font-semibold" for="available_leave" value="{{ __('Available Leave Days') }}" />
                    <x-input id="available_leave" class="block w-full mt-1" type="text" name="available_leave"
                        value="{{ $user->available_leave }}" required autocomplete="username" />
                </div>
                <span class="mt-4 font-semibold">Status</span>
                <div class="inline-flex items-center w-full gap-1 mb-2" data-toggle="buttons">
                    <input type="radio" name="status" value="1" id="" autocomplete="off"
                        @if ($user->status === 1) checked @endif>
                    <label class="mr-3 btn btn-primary active ">Active</label>
                    <input type="radio" name="status" value="0" id="" autocomplete="off">
                    <label class="mr-3 btn btn-primary active ">Deactive</label>

                </div>
                <span class="mr-3 font-semibold">Role</span>
                <div class="inline-flex items-center w-full gap-2 text-sm" data-toggle="buttons">
                    <input type="radio" name="role_id" value="1" id="" autocomplete="off"
                        @if ($user->role_id === 1) checked @endif>
                    <label class="mr-3 btn btn-dark active ">Police</label>
                    <input type="radio" name="role_id" value="2" id=""
                        autocomplete="off"@if ($user->role_id === 2) checked @endif>
                    <label class="mr-3 btn btn-dark">Shift Leader</label>
                    <input type="radio" name="role_id" value="3" id=""
                        autocomplete="off"@if ($user->role_id === 3) checked @endif>
                    <label class="mr-3 btn btn-dark">Chief Officer</label>
                    <input type="radio" name="role_id" value="4" id=""
                        autocomplete="off"@if ($user->role_id === 4) checked @endif>
                    <label class="mr-3 btn btn-dark">Admin</label>
                    <input type="radio" name="role_id" value="5" id=""
                        autocomplete="off"@if ($user->role_id === 5) checked @endif>
                    <label class="mr-3 btn btn-dark">Discipline Committee</label>
                </div>

                <div class="flex items-center justify-center mt-7">

                    <x-button class="ml-4 bg-dark">
                        {{ __('Update') }}
                    </x-button>
                </div>
            </form>
        </div>
        @include('admin.edit_password')

    </div>
</x-layout>
