<x-layout>

    <div class="items-center w-full">


        <div class="w-1/2 mx-auto ">

            <h1 class="text-4xl font-extrabold text-center text-dark my-7">Create a new task.</h1>


            <x-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('task_created') }}">
                @csrf

                <div>
                    <x-label for="task_name" value="{{ __('Task Name') }}" />
                    <x-input id="task_name" class="block w-full mt-1" type="text" name="task_name" :value="old('task_name')" required
                        autofocus autocomplete="task_name" />
                </div>
                <div>
                    <x-label for="task_description" value="{{ __('Task Description') }}" />
                    <x-input id="task_description" class="block w-full mt-1" type="text" name="task_description" :value="old('task_description')" required
                        autofocus autocomplete="task_description" />
                </div><div>
                    <x-label for="task_name" value="{{ __('Task Name') }}" />
                    <x-input id="task_name" class="block w-full mt-1" type="text" name="task_name" :value="old('task_name')" required
                        autofocus autocomplete="task_name" />
                </div>


                <div class="flex items-center justify-center mt-7">

                    <x-button class="ml-4 bg-dark">
                        {{ __('Create Task') }}
                    </x-button>
                </div>
            </form>
        </div>
    </div>



    @foreach ($zones as $zone)
    @endforeach
</x-layout>
