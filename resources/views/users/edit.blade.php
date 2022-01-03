<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit User') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="mt-10 sm:mt-0">
                    <header class="p-6 bg-white border-b border-gray-200" style="margin-bottom:15px;">
                        <h2 class="font-semibold text-gray-800">Edit Users Details</h2>
                    </header>
                    <div class="w-full">
                        <div class="mt-5 md:mt-0 md:col-span-2">
                            <form action="{{ route('update', $user->id) }}" method="POST">
                                @csrf
                                <div class="shadow overflow-hidden sm:rounded-md">
                                    <div class="px-4 py-5 bg-white sm:p-6">
                                        <div class="grid grid-cols-6 gap-6">
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="name" class="block text-sm font-medium text-gray-700">First name</label>
                                                <input type="text" value="{{$user->name}}" name="name" autocomplete="name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                                                <input type="text" value="{{$user->email}}" name="email" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="current_password" class="block text-sm font-medium text-gray-700">Current Password</label>
                                                <input type="text" value="{{$user->password}}" name="current_password" autocomplete="current_password" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="new_password" class="block text-sm font-medium text-gray-700">New Password</label>
                                                <input type="text"  name="password" autocomplete="password" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="confirm_password" class="block text-sm font-medium text-gray-700">Comfirm Password</label>
                                                <input type="text"  name="confirm_password" autocomplete="confirm_password" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="role_id" class="block text-sm font-medium text-gray-700">Role</label>
                                                <select name="role_id" id="" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                                                    @foreach($roles as $role)
                                                        <option value="{{ $role->id }}" {{ $user->role_id == $role->id ? 'selected="selected"' : '' }}>{{ $role->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="is_active" class="block text-sm font-medium text-gray-700">Status</label>
                                                <select name="is_active" id="" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                                                    @foreach($statuses as $key => $value)
                                                        <option value="{{ $key }}" {{ ( $key == $user->is_active) ? 'selected' : '' }}>
                                                            {{ $value }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-4 sm:-my-px py-3 bg-gray-50 text-right sm:px-6" style="float:right; margin:15px 0;">
                                        <button style="background-color: black;" type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            Update
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
