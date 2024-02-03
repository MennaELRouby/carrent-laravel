<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    private $columns = ['name', 'username', 'email', 'active', 'password', 'created_at'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::get();
        return view('admin/users', compact('user'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin/addUser');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = $this->messages();
        $request->validate([
            'name' => 'required|string',
            'username' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string|min:6'
        ], $messages);
        $data = $request->only($this->columns);
        $data['active'] = isset($request['active']);
        $data['email_verified_at'] = date('Y-m-d H:i:s');;
        // return dd($data);
        User::create($data);
        return redirect('admin/users');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return view('admin/edituser', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $messages = $this->messages();
        $request->validate([
            'name' => 'required|string',
            'username' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ], $messages);
        $data = $request->only($this->columns);
        $data['active'] = isset($request['active']);
        $data['password'] = password_hash($request["password"], PASSWORD_DEFAULT);
        User::where('id', $id)->update($data);
        return redirect('admin/users');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function messages()
    {
        return [
            'name.required' => 'Full Name is required',
            'name.string' => 'Full Name should be string',
            'username.required' => 'Username is required',
            'username.string' => 'Username should be string',
            'emai.required' => 'Your Email is required',
            'Email.email' => 'Your Email should be valid',
            'password.required' => 'Your Password is required',
            'password.string' => 'Your Password should be string',
            'password.min' => 'the minimum length of password should be 6 letters',
        ];
    }
}
