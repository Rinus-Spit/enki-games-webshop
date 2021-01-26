<?php

namespace App\Http\Controllers;

use App\Models\Toplist;
use Illuminate\Http\Request;

class ToplistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $toplists = Toplist::latest()->paginate(8);

        return view('toplists.index', ['toplists' => $toplists]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('toplists.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $toplist = Toplist::create($this->validateToplist());

        return redirect(route('toplists.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Toplist  $toplist
     * @return \Illuminate\Http\Response
     */
    public function show(Toplist $toplist)
    {
        return view('toplists.show', ['toplist' => $toplist]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Toplist  $toplist
     * @return \Illuminate\Http\Response
     */
    public function edit(Toplist $toplist)
    {
        return view('toplists.edit', ['toplist' => $toplist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Toplist  $toplist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Toplist $toplist)
    {
        $category->update($this->validateToplist());

        return redirect(route('toplists.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Toplist  $toplist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Toplist $toplist)
    {
        $toplist->delete($toplist);

        return redirect(route('toplists.index'));
    }

    protected function validateToplist()
    {
        return request()->validate([
            'name' => 'required',
            'image' => ''
        ]);
    }

}
