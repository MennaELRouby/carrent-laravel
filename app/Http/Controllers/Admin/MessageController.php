<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class MessageController extends Controller
{
    private $columns = ['fname', 'lname', 'email', 'content', 'vmsg'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $msg = Message::get();
        return view('admin/messages', compact('msg'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contact');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|email',
            'content' => 'required|string',
        ]);
        Message::create($data);
        Mail::to('roubymenna@gmail.com')->send(new ContactMail($data));

        return redirect('contact');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, Request $request)
    {
        $msg = Message::findOrFail($id);
        $data = $request->only($this->columns);
        $data['vmsg'] = 1;
        Message::where('id', $id)->update($data);
        //return dd($data);
        return view('admin/showMessage', compact(['msg', 'data']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Message::where('id', $id)->delete();
        return redirect('admin/messages');
    }
}
