<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $links = Link::all();

        return view('links.index', compact('links'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $collections = Collection::all();
        
        return view('links.create', compact('collections'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'required',
            'collection_id' => ['integer', 'nullable'],
        ]);

        $collection = Collection::findOrFail($request->collection_id);
        $link = Link::create($validated);
        $link->collection()->associate($collection)->save();

        return redirect()->route('links.index');
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
    public function edit(Link $link)
    {
        // $link = Link::findOrFail($id);
        // dd($link);

        $collections = Collection::all();

        return view('links.edit', compact('link', 'collections'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Link $link)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'required',
            'collection_id' => ['integer', 'nullable'],
        ]);

        $link->update($validated);

        $collection = Collection::findOrFail($request->collection_id);
        $link->collection()->associate($collection)->save();

        return redirect()->route('links.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Link $link)
    {
        $link->delete();

        return redirect()->route('links.index');
    }
}
