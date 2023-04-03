<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tasks List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- component -->
            <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
                <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                    <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Name</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Man hours</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Description</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Created at</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Edit</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 border-t border-gray-100">
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
                                    <a x-data="{ tooltip: 'Delete' }" href="{{ route('tasks.show',$task) }}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="30" height="30" viewBox="0 0 256 256" xml:space="preserve">

<defs>
</defs>
                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                <path d="M 45 66.739 c -11.987 0 -21.74 -9.752 -21.74 -21.739 S 33.013 23.26 45 23.26 S 66.739 33.013 66.739 45 S 56.987 66.739 45 66.739 z M 45 29.26 c -8.679 0 -15.74 7.061 -15.74 15.74 S 36.321 60.739 45 60.739 S 60.739 53.679 60.739 45 S 53.679 29.26 45 29.26 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                <path d="M 45 66.763 c -14.477 0 -28.953 -6.054 -43.328 -18.16 C 0.609 47.708 0 46.395 0 45 s 0.609 -2.708 1.672 -3.603 c 28.751 -24.214 57.906 -24.214 86.656 0 l 0 0 C 89.391 42.293 90 43.605 90 45 s -0.609 2.707 -1.672 3.602 C 73.953 60.709 59.477 66.763 45 66.763 z M 6.726 45 c 25.74 21.046 50.809 21.048 76.547 0 C 57.536 23.954 32.467 23.952 6.726 45 z M 84.459 45.984 c 0.001 0.001 0.003 0.002 0.004 0.003 C 84.461 45.986 84.461 45.985 84.459 45.984 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                <circle cx="45" cy="45" r="7" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                            </g>
</svg>
                                    </a>
                                    <a x-data="{ tooltip: 'Delete' }" href="{{ route('tasks.destroy',$task->id) }}}">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                            stroke="currentColor"
                                            class="h-6 w-6"
                                            x-tooltip="tooltip"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                                            />
                                        </svg>
                                    </a>
                                    <a x-data="{ tooltip: 'Edit' }" href="{{ route('tasks.edit',$task) }}">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                            stroke="currentColor"
                                            class="h-6 w-6"
                                            x-tooltip="tooltip"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"
                                            />
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
