<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Shortlink;
use Illuminate\Http\Request;

class ShortlinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.shortlink.index', [
            'links' => Shortlink::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.shortlink.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'original' => 'required|max:191|url',
            'name' => 'required|max:191',
            'short' => 'required|max:191|unique:shortlinks|alpha_dash',
        ]);
        $validated['user_id'] = auth()->user()->id;
        Shortlink::create($validated);

        return redirect('/admin/shortlink')->with('message', "New short link has been created!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shortlink  $shortlink
     * @return \Illuminate\Http\Response
     */
    public function show(Shortlink $shortlink)
    {
        $visited = $shortlink->visited;
        $shortlink->update([
            'visited' => $visited + 1
        ]);
        return redirect($shortlink->original);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shortlink  $shortlink
     * @return \Illuminate\Http\Response
     */
    public function edit(Shortlink $shortlink)
    {
        return view('admin.shortlink.edit', compact('shortlink'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shortlink  $shortlink
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shortlink $shortlink)
    {
        $rules = [
            'original' => 'required|max:191|url',
            'name' => 'required|max:191',
        ];

        if ($request->short != $shortlink->short) {
            $rules['short'] = 'required|max:191|unique:shortlinks|alpha_dash';
        } elseif ($request->short == $shortlink->short) {
            $rules['short'] = 'required|max:191|alpha_dash';
        }
        $request->validate($rules);

        $shortlink->update($request->all());

        return redirect('/admin/shortlink')->with('message', "The short link has been updated!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shortlink  $shortlink
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shortlink $shortlink)
    {
        $shortlink->delete();

        return redirect('/admin/shortlink')->with('message', "The short link has been deleted!");
    }
}
