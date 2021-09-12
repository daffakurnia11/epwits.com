<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.user.index', [
            'users' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'name'      => 'required|max:255',
                'email'     => 'required|max:255|unique:users|email:dns',
                'password1'     => 'required|min:8',
                'password2'     => 'required|min:8|same:password1',
            ],
            [
                'password1.required' => 'The new password field is required!',
                'password1.min' => 'The new password must be at least 8 characters.',
                'password2.required' => 'The repeat password field is required!',
                'password2.min' => 'The new password must be at least 8 characters.',
                'password2.same' => 'The password does not match!'
            ]
        );
        $validated['role'] = 'Admin';
        $validated['password'] = Hash::make($request->password1);
        User::create($validated);

        return redirect('/admin/user')->with('message', 'New admin account has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.user.profile', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $rules = [
            'name'  => 'required|max:255'
        ];

        if ($request->email != $user->email) {
            $rules['email'] = 'required|max:255|unique:users|email:dns';
        } elseif ($request->email == $user->email) {
            $rules['email'] = 'required|max:255|email:dns';
        }

        $request->validate($rules);

        $user->update($request->all());

        $id = auth()->user()->id;
        $user = auth()->user()->name;
        return redirect("/admin/user/$id/edit")->with('message', "Your profile has been updated! Thank you, $user");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect('/admin/user')->with('message', "Admin account has been deleted!");
    }

    public function changepass(Request $request)
    {
        $request->validate(
            [
                'oldpass'       => 'required|password',
                'password1'     => 'required|min:8',
                'password2'     => 'required|min:8|same:password1',
            ],
            [
                'oldpass.required' => 'The old password field is required!',
                'password1.required' => 'The new password field is required!',
                'password1.min' => 'The new password must be at least 8 characters.',
                'password2.required' => 'The repeat password field is required!',
                'password2.min' => 'The new password must be at least 8 characters.',
                'password2.same' => 'The password does not match!'
            ]
        );
        $id = auth()->user()->id;
        User::where('id', $id)->update([
            'password'  => Hash::make($request->password1)
        ]);

        $user = auth()->user()->name;
        return redirect("/admin/user/$id/edit")->with('message', "Your Password has been changed! Thank you and please try to login again, $user");
    }
}
