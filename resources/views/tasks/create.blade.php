<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Task') }}
        </h2>
    </x-slot>


    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />


        <form method="POST" action="{{ route('tasks.store') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Task name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="description" value="{{ __('Description') }}" />
                <x-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required autocomplete="description" />
            </div>

            <div class="mt-4">
                <x-label for="man_hours" value="{{ __('Man hours') }}" />
                <x-input id="man_hours" class="block mt-1 w-full" type="text" name="man_hours" required autocomplete="man_hours" />
            </div>

            <div class="flex items-center justify-end mt-4">

                <x-button class="ml-4">
                    {{ __('Create') }}
                </x-button>
            </div>
        </form>

    </x-authentication-card>



</x-app-layout>
