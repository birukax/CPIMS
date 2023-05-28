<x-layout>

    <div class="items-center w-full">


        <div class="w-1/2 mx-auto ">

            <h1 class="text-4xl font-extrabold text-center uppercase text-dark my-7">Edit: {{ $user->name }}</h1>


            <x-validation-errors class="mb-4" />

            <form method="POST" class="text-md" action="{{ route('user_edited') }}">
                @csrf
                @method('PUT')
                <input hidden name="id" value="{{ $user->id }}" />
                <div>
                    <x-label for="name" value="{{ __('Name') }}" />
                    <x-input id="name" class="block w-full mt-1" type="text" name="name"
                        value="{{ $user->name }}" required autofocus autocomplete="name" />
                </div>

                <div class="mt-4">
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="block w-full mt-1" type="email" name="email"
                        value="{{ $user->email }}" required autocomplete="username" />
                </div>

                <div class="mt-4">
                    <x-label for="phone" value="{{ __('Phone') }}" />
                    <x-input id="phone" class="block w-full mt-1" type="text" name="phone"
                        value="{{ $user->phone }}" required autofocus autocomplete="phone" />
                </div>

                <div class="mt-4">
                    <x-label for="Available_leave" value="{{ __('Available Leave Days') }}" />
                    <x-input id="Available_leave" class="block w-full mt-1" type="text" name="Available_leave"
                        value="{{ $user->available_leave }}" required autocomplete="username" />
                </div>

                <div class="mt-4 mb-2">

                    <input
                        class="mr-2 mt-[0.3rem] h-3.5 w-8 appearance-none rounded-[0.4375rem] bg-neutral-300 before:pointer-events-none before:absolute before:h-3.5 before:w-3.5 before:rounded-full before:bg-transparent before:content-[''] after:absolute after:z-[2] after:-mt-[0.1875rem] after:h-5 after:w-5 after:rounded-full after:border-none after:bg-neutral-100 after:shadow-[0_0px_3px_0_rgb(0_0_0_/_7%),_0_2px_2px_0_rgb(0_0_0_/_4%)] after:transition-[background-color_0.2s,transform_0.2s] after:content-[''] checked:bg-primary checked:after:absolute checked:after:z-[2] checked:after:-mt-[3px] checked:after:ml-[1.0625rem] checked:after:h-5 checked:after:w-5 checked:after:rounded-full checked:after:border-none checked:after:bg-primary checked:after:shadow-[0_3px_1px_-2px_rgba(0,0,0,0.2),_0_2px_2px_0_rgba(0,0,0,0.14),_0_1px_5px_0_rgba(0,0,0,0.12)] checked:after:transition-[background-color_0.2s,transform_0.2s] checked:after:content-[''] hover:cursor-pointer focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[3px_-1px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-5 focus:after:w-5 focus:after:rounded-full focus:after:content-[''] checked:focus:border-primary checked:focus:bg-primary checked:focus:before:ml-[1.0625rem] checked:focus:before:scale-100 checked:focus:before:shadow-[3px_-1px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] dark:bg-neutral-600 dark:after:bg-neutral-400 dark:checked:bg-primary dark:checked:after:bg-primary dark:focus:before:shadow-[3px_-1px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:before:shadow-[3px_-1px_0px_13px_#3b71ca]"
                        type="checkbox" name="status" value="{{ $user->status }}" role="switch"
                        id="flexSwitchCheckDefault" @if ($user->status === 1) checked @endif />
                    <label class="inline-block pl-[0.15rem] hover:cursor-pointer"
                        for="flexSwitchCheckDefault">Status</label>

                </div>
                <div class="flex flex-row items-center justify-center w-full gap-1 my-4" data-toggle="buttons">
                    <input type="radio" name="role_id" value="1" id="" autocomplete="off"
                        @if ($user->role_id === 1) checked @endif>
                    <label class="mr-5 btn btn-primary active ">Police</label>
                    <input type="radio" name="role_id" value="2" id=""
                        autocomplete="off"@if ($user->role_id === 2) checked @endif>
                    <label class="mr-5 btn btn-primary">Shift Leader</label>
                    <input type="radio" name="role_id" value="3" id=""
                        autocomplete="off"@if ($user->role_id === 3) checked @endif>
                    <label class="mr-5 btn btn-primary">Chief Officer</label>
                    <input type="radio" name="role_id" value="4" id=""
                        autocomplete="off"@if ($user->role_id === 4) checked @endif>
                    <label class="mr-5 btn btn-primary">Admin</label>
                    <input type="radio" name="role_id" value="5" id=""
                        autocomplete="off"@if ($user->role_id === 5) checked @endif>
                    <label class="mr-5 btn btn-primary">Discipline Committee</label>
                </div>

                <div class="flex items-center justify-center mt-7">

                    <x-button class="ml-4 bg-dark">
                        {{ __('Update') }}
                    </x-button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
