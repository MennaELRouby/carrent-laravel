<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use App\Traits\Common;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class testimonialController extends Controller
{
    use Common;
    private $columns = ['name', 'position', 'content', 'published', 'image'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tstmnl = Testimonial::get();
        return view('admin/testimonials', compact('tstmnl'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/addTestimonials');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $messages = $this->messages();
        $request->validate([
            'name' => 'required|string',
            'position' => 'required|string',
            'content' => 'required|string',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
        ], $messages);
        $data = $request->only($this->columns);
        $data['published'] = isset($request['published']);
        $data['image']  = $this->uploadFile($request->image, 'assets/images');
        Testimonial::create($data);
        return redirect('admin/testimonials');
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
        $tstmnl = Testimonial::findOrFail($id);
        return view('admin/editTestimonials', compact('tstmnl'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $messages = $this->messages();
        $request->validate([
            'name' => 'required|string',
            'position' => 'required|string',
            'content' => 'required|string',
            'image' => 'sometimes|mimes:png,jpg,jpeg|max:2048',
        ], $messages);
        $data = $request->only($this->columns);
        $data['published'] = isset($request['published']);
        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->image, 'assets/images');
        }
        Testimonial::where('id', $id)->update($data);
        return redirect('admin/testimonials');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Testimonial::where('id', $id)->delete();
        return redirect('admin/testimonials');
    }

    public function messages()
    {
        return [
            'name.required' => 'Full Name is required',
            'name.string' => 'Full Name should be string',
            'position.required' => 'Position is required',
            'position.string' => 'Position should be string',
            'content.required' => 'The content is required',
            'image.required' => 'Image is required',
            'image.mimes' => 'Image extension is not valid',
            'image.max' => 'Image length reached the max length',
        ];
    }
}
