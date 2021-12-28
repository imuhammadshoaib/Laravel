<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit User') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class=" mx-auto sm:px-6 lg:px-8">
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

                                            <div class="col-span-6 sm:col-span-4">
                                                <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                                                <input type="text" value="{{$user->email}}" name="email" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            </div>

                                            <div class="col-span-6 sm:col-span-4">
                                                <label for="pass" class="block text-sm font-medium text-gray-700">Password</label>
                                                <input type="password" value="{{$user->password}}" name="password" autocomplete="pass" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="role" class="block text-sm font-medium text-gray-700">Role</label>
                                                <input type="number" value="{{$user->role_id}}" name="role_id" autocomplete="role" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                                            </div>

{{--                                            <div class="col-span-6 sm:col-span-3">--}}
{{--                                                <label for="country" class="block text-sm font-medium text-gray-700">Country</label>--}}
{{--                                                <select name="role" autocomplete="role" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">--}}
{{--                                                    @if ($roles->count())--}}
{{--                                                        {{dd(roles)}}--}}
{{--                                                        @foreach($roles as $role)--}}
{{--                                                            <option value="{{ $role->id }}" {{ $selectedRole == $role->id ? 'selected="selected"' : '' }}>{{ $role->name }}</option>--}}
{{--                                                        @endforeach--}}
{{--                                                    @endif--}}
{{--                                                </select>--}}
{{--                                            </div>--}}

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="is-active" class="block text-sm font-medium text-gray-700">Status</label>
                                                <input type="number" value="{{$user->is_active}}" name="is_active" autocomplete="pass" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-4 sm:-my-px py-3 bg-gray-50 text-right sm:px-6" style="float:right; margin:15px 0;">
                                        <button style="background-color: green;" type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
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