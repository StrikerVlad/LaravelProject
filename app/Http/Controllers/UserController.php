<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function store(Request $request)
    {
        $image = $request->file('image')->store('upload', 'public');
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'img' => $image
        ]);

        return redirect()->route('user.index');
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $image = $request->file('image')->store('upload', 'public');
        $user = User::find($id);
        $user->name = $request->name;
        $user->email =  $request->email;
        $user->password = bcrypt($request->password);
        $user->img =  $image;
        $user->save();

        return redirect()->route('user.index');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index');
    }
}
