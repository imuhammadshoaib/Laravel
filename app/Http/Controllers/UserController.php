<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;

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
     * Create new User
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $role['roles'] = Role::all();
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
        return view('users.edit', $user);

        $role['roles'] = Role::all();
        $selectedRole = User::first()->role_id;
        return view('users.edit', compact('roles', 'selectedRole'));
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
        $data['password'] = $request['pass'];
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
            'is_active' => 'required'
        ]);

        $data = User::find($id);
        $data->name = $request->name;
        $data->password = $request->password;
        $data->is_active = $request->is_active;
        $data->password = $request->password;
        $data->email = $request->email;
        $data->role_id = $request->role_id;

        $data->update($request->all());

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
