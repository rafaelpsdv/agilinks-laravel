<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $collections = Auth::user()->collections()->with(['links'])->get();
        //$collections = Collection::with(['links'])->get();

        return view('collections.index', compact('collections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('collections.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required'
        ]);

        $collection = Collection::create($validated);
        $collection->user()->associate(Auth::user())->save();

        return redirect()->route('collections.index');
        
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
    public function edit(Collection $collection)
    {
        Gate::authorize('update', $collection);

        return view('collections.edit', compact('collection'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Collection $collection)
    {
        Gate::authorize('update', $collection);

        $validated = $request->validate([
            'name' => 'required'
        ]);

        $collection->update($validated);

        return redirect()->route('collections.index');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Collection $collection)
    {
        Gate::authorize('delete', $collection);

        $collection->delete();

        return redirect()->route('collections.index');
        //
    }
}
