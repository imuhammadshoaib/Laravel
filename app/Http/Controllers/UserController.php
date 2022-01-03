<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Show the user view.
     *
     * @return \Illuminate\View\View
     */
    public function show()
    {
        $data['users'] = User::all();
        return view('users.users', $data);
    }

    /**
     * Show the user view.
     *
     * @return \Illuminate\View\View
     */
    public function profile($id)
    {
        $user['user'] = User::find($id);
        $user['roles'] = Role::all();
        return view('users.view', $user);
    }

    /**
     * Create new User
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {

        $role['roles'] = Role::all();
        $role['statuses'] = ['InActive', 'Active'];
        return view('users.create', $role)->with('success','User created successfully.');
    }

    /**
     * Edit new User
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(int $id, Role $role)
    {
        $user['user'] = User::find($id);
        $user['roles'] = Role::all();
        $user['statuses'] = ['InActive', 'Active'];
        return view('users.edit', $user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
            'is_active' => 'required'
        ]);
        $data = $request->all();
        $data['role_id'] = $request['role'];
        $data['password'] = Hash::make($request['pass']);
        $data['is_active'] = $request['is_active'];
        User::create($data);

        return redirect()->route('users')
            ->with('success','User created successfully.');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, int $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'role_id' => 'required',
            'is_active' => 'required',
            'current_password' => 'required',
            'password' => 'required|same:confirm_password|min:6',
            'confirm_password' => 'required'
        ]);
//        $getpass = $request->password;
//        $addhash = Hash::make($getpass);
//        dd($addhash);
        $data = User::find($id);
        $data->name = $request->name;
        $data->is_active = $request->is_active;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        $data->role_id = $request->role_id;
//        dd($data);
        $data->save();

        return redirect()->route('users')
            ->with('success','User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $users
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(int $id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('users')
            ->with('success','User deleted successfully');
    }
}
