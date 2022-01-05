<x-app-layout>
    <x-slot name="header" >
        <div class="grid grid-cols-3 gap-4 content-start" style="display: flex;    justify-content: space-between;">
            <h2 class=" font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Roles') }}
            </h2>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                <a class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('roles.create') }}" style="background-color: #000;float:right;">Add Role</a>
            </div>
        </div>
    </x-slot>
    <style>
        .hide {
            -moz-animation: cssAnimation 0s ease-in 5s forwards;
            /* Firefox */
            -webkit-animation: cssAnimation 0s ease-in 5s forwards;
            /* Safari and Chrome */
            -o-animation: cssAnimation 0s ease-in 5s forwards;
            /* Opera */
            animation: cssAnimation 0s ease-in 5s forwards;
            -webkit-animation-fill-mode: forwards;
            animation-fill-mode: forwards;
        }
        @keyframes cssAnimation {
            to {
                width:0;
                height:0;
                overflow:hidden;
            }
        }
        @-webkit-keyframes cssAnimation {
            to {
                width:0;
                height:0;
                visibility:hidden;
            }
        }
    </style>
    <!-- component -->
@if ($message = Session::get('success'))
    <!-- Success Component -->
        <div  class="hide h-screen absolute top-0 right-0 py-3 z-40 px-3">
            <div class="m-auto">
                <div class="bg-white rounded-lg border-gray-300 border p-3 shadow-lg">
                    <div class="flex flex-row">
                        <div class="px-2">
                            <svg width="24" height="24" viewBox="0 0 1792 1792" fill="#44C997" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1299 813l-422 422q-19 19-45 19t-45-19l-294-294q-19-19-19-45t19-45l102-102q19-19 45-19t45 19l147 147 275-275q19-19 45-19t45 19l102 102q19 19 19 45t-19 45zm141 83q0-148-73-273t-198-198-273-73-273 73-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273zm224 0q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"/>
                            </svg>
                        </div>
                        <div class="ml-2 mr-6">
                            <span class="font-semibold">{{ $message }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <div class="py-12">
        <section class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col justify-center h-full">
                <!-- Table -->
                <div class="w-full mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
                    <header class="p-6 bg-white border-b border-gray-200">
                        <h2 class="font-semibold text-gray-800">Roles Details</h2>
                    </header>
                    <div class="p-3">
                        <div class="overflow-x-auto">
                            <table class="table-auto w-full">
                                <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                <tr>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-left">Name</div>
                                    </th>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-left">Active</div>
                                    </th>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-left">User Count</div>
                                    </th>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-left">User Active</div>
                                    </th>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-left">Actions</div>
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="text-sm divide-y divide-gray-100">

                                @foreach ($roles as $role)
                                    <tr>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="font-medium text-gray-800">{{ $role->name }}</div>
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left font-medium">{{ $role->is_active ? 'Active' : 'Inactive' }}</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left font-medium">{{ $role->users->count() }}</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left font-medium">{{ $role->activeUsers->count() }}</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <form action="{{ route('roles.destroy', $role->id) }}" method="POST">
{{--                                            <a class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" style="background-color: black;" href="{{ route('profile',$role->id) }}">View</a>--}}
                                                <a class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" style="background-color: black;" href="{{ route('roles.edit',$role->id) }}">Edit</a>

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit"  style="background-color: black;" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
