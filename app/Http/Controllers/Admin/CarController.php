<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Category;
use App\Traits\Common;
use Illuminate\Http\RedirectResponse;

class CarController extends Controller
{
    use Common;
    private $columns = ['title', 'content', 'luggage', 'doors', 'passengers', 'price', 'published', 'image', 'cat_id'];
    /**
     * Display a listing of the resource.
     * Show all table in DB in Blade file
     */
    public function index()
    {
        $car = Car::get();
        return view('admin/cars', compact('car'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::select('id', 'cat_name')->get();
        return view('admin/addCar', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     * Send new row data to database
     */
    public function store(Request $request): RedirectResponse
    {
        $messages = $this->messages();
        $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'luggage' => 'required|string',
            'doors' => 'required|string',
            'passengers' => 'required|string',
            'price' => 'required|string',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
            'cat_id' => 'required',
        ], $messages);
        $data = $request->only($this->columns);
        $data['published'] = isset($request['published']);
        $data['image'] = $this->uploadFile($request->image, 'assets/images');
        Car::create($data);
        return redirect('admin/cars');
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
     * Show specified row data as $id from database 
     */
    public function edit(string $id)
    {
        $car = Car::findOrFail($id);
        $category = Category::select('id', 'cat_name')->get();
        return view('admin/editCar', compact(['car', 'category']));
    }

    /**
     * Update the specified resource in storage.
     * Send Updated specified row data as $id to DB.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $messages = $this->messages();
        $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'luggage' => 'required|string',
            'doors' => 'required|string',
            'passengers' => 'required|string',
            'price' => 'required|string',
            'image' => 'sometimes|mimes:png,jpg,jpeg|max:2048',
            'cat_id' => 'required',
        ], $messages);
        $data = $request->only($this->columns);
        $data['published'] = isset($request['published']);
        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->image, 'assets/images');
        }

        Car::where('id', $id)->update($data);
        return redirect('admin/cars');
    }

    /**
     * Remove the specified resource from storage DB.
     */
    public function destroy(string $id): RedirectResponse
    {
        Car::where('id', $id)->delete();
        return redirect('admin/cars');
    }
    public function messages()
    {
        return [
            'title.required' => 'Car title is required',
            'title.string' => 'Car title should be string',
            'content.required' => 'Content is required',
            'content.string' => 'Content should be string',
            'image.mimes' => 'Image extension is not valid',
            'image.max' => 'Image length reached the max length',
        ];
    }
}
