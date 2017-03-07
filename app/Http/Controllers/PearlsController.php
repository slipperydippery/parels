<?php

namespace App\Http\Controllers;

use App\Pearl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PearlsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pearls = Pearl::get();
        return view ('pearls.index', compact('pearls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('pearls.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pearl $pearl)
    {
        $pearlid = $pearl->id;
        return view('pearls.pearl', compact('pearl', 'pearlid'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pearl $pearl)
    {
        return view ('pearls.edit', compact('pearl'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pearl = PEARL::findOrFail($id);
        $pearl->title = $request->title;
        $pearl->description = $request->description;
        $pearl->save();
        return Redirect::route('pearls.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
