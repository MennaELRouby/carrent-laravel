<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Testimonial;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\RedirectResponse;

class CarRentalController extends Controller
{
    private $columns = ['name', 'email', 'website', 'content', 'car_id'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::where('published', 1)->orderBy('id', 'DESC')->take(6)->get();
        $tstmnl = Testimonial::where('published', 1)->orderBy('id', 'DESC')->take(3)->get();
        return view('index', compact(['cars', 'tstmnl']));
    }
    public function listing()
    {
        $cars = Car::where('published', '=', 1)->orderBy('id', 'DESC')->simplePaginate(6);
        $tstmnl = Testimonial::where('published', 1)->orderBy('id', 'DESC')->take(3)->get();

        return view('listing', compact(['cars', 'tstmnl']));
    }
    public function testimonial()
    {
        $tstmnl = Testimonial::where('published', 1)->get();
        return view('testimonials', compact('tstmnl'));
    }

    public function single(string $id)
    {

        $car = Car::findOrFail($id);
        $category = Category::select('id', 'cat_name')->get();
        $car_count = Category::with('Car')->get();
        $cmt = Comment::where('car_id', $id)->get();
        return view('single', compact(['car', 'category', 'car_count', 'cmt']));
    }
    public function comment(Request $request): RedirectResponse
    {
        $data = $request->only($this->columns);
        Comment::create($data);
        return redirect()->route('single', $request->car_id);
    }

    public function blog()
    {
        return view('blog');
    }
    public function about()
    {
        return view('about');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

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
    public function destroy(string $id)
    {
        //
    }
}
