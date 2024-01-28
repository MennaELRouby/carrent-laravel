<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //private $columns = ['cat_name'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::get();
        return view('admin/categories', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/addCategory');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $messages = $this->messages();
        $data = $request->validate([
            'cat_name' => 'required|string'
        ], $messages);
        Category::create($data);
        return redirect('admin/addcategory');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        return view('admin/editCategory', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $messages = $this->messages();
        $data = $request->validate([
            'cat_name' => 'required|string'
        ], $messages);
        Category::where('id', $id)->update($data);
        return redirect('admin/categories');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Category::where('id', $id)->delete();
        return redirect('admin/categories');
    }

    public function messages()
    {
        return [
            'cat_name.required' => 'Category name is required',
            'cat_name.string' => 'Category name should be string',
        ];
    }
}
