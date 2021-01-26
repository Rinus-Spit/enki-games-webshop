<?php

namespace App\Http\Controllers;

use App\Models\Age_category;
use Illuminate\Http\Request;

class AgeCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $age_categories = Age_category::latest()->paginate(8);

        return view('age_categories.index', ['age_categories' => $age_categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('age_categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $age_category = Age_category::create($this->validateAgeCategory());

        return redirect(route('age_categories.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Age_category  $age_category
     * @return \Illuminate\Http\Response
     */
    public function show(Age_category $age_category)
    {
        return view('age_categories.show', ['age_category' => $age_category]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Age_category  $age_category
     * @return \Illuminate\Http\Response
     */
    public function edit(Age_category $age_category)
    {
        return view('age_categories.edit', ['age_category' => $age_category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Age_category  $age_category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Age_category $age_category)
    {
        $age_category->update($this->validateAgeCategory());

        return redirect(route('age_categories.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Age_category  $age_category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Age_category $age_category)
    {
        $age_category->delete($age_category);

        return redirect(route('age_categories.index'));
    }

    protected function validateAgeCategory()
    {
        return request()->validate([
            'description' => 'required'
        ]);
    }

}
