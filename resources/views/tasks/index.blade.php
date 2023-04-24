<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tasks List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="block mb-8">
                <a href="{{ route('tasks.create') }}">
                    <button class="inline-flex items-center px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-white text-sm font-medium mb-4 rounded-md">
                        Add Task
                    </button>
                </a>

            </div>
            <!-- component -->
            <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
                <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                    <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Name</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Man hours</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Description</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Created at</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">View</th>
{{--                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Edit</th>--}}
{{--                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Delete</th>--}}
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                    @foreach($tasks as $task)
                        <tr class="hover:bg-gray-50">
                            <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                                <div class="relative h-10 w-10">
                                    <img
                                        class="h-full w-full rounded-full object-cover object-center"
                                        src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                        alt=""
                                    />
                                    <span class="absolute right-0 bottom-0 h-2 w-2 rounded-full bg-green-400 ring ring-white"></span>
                                </div>
                                <div class="text-sm">
                                    <div class="font-medium text-gray-700">{{ $task->name }}</div>
                                    <div class="text-gray-400">jobs@sailboatui.com</div>
                                </div>
                            </th>
                            <td class="px-6 py-4">
                                  <span
                                      class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600"
                                  >
                                    <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span>
                                    {{ $task->man_hours }}
                                  </span>
                            </td>
                            <td class="px-6 py-4">{{ $task->description }}</td>
                            <td class="px-6 py-4">
                                                        <div class="flex gap-2">
                                    <span
                                        class="inline-flex items-center gap-1 rounded-full bg-blue-50 px-2 py-1 text-xs font-semibold text-blue-600"
                                    >
                                      {{ $task->created_at }}
                                    </span>
                                                            <span
                                                                class="inline-flex items-center gap-1 rounded-full bg-indigo-50 px-2 py-1 text-xs font-semibold text-indigo-600"
                                                            >
                                      Product
                                    </span>
                                                            <span
                                                                class="inline-flex items-center gap-1 rounded-full bg-violet-50 px-2 py-1 text-xs font-semibold text-violet-600"
                                                            >
                                      Develop
                                    </span>
                                </div>
                            </td>

                            <td class="px-6 py-4">
                                <div class="flex justify-end gap-4">
                                    <x-link href="{{ route('tasks.show', $task) }}">View</x-link>
                                    @can('manage_tasks')
                                    <x-link href="{{ route('tasks.edit', $task) }}">Edit</x-link>
                                    <form method="POST" action="{{ route('tasks.destroy', $task) }}">
                                        @csrf
                                        @method('DELETE')
                                        <x-danger-button type="submit" onclick=" return confirm('Are you sure ?')">
                                            Delete
                                        </x-danger-button>
                                    </form>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
