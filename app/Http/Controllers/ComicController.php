<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreComicRequest;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        $icons = config('mylinks.icons');
        $linkss = config('mylinks.linkss');
        $links = config('mylinks.links');
        return view('comics.index', compact('comics', 'icons', 'links', 'linkss'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $icons = config('mylinks.icons');
        $linkss = config('mylinks.linkss');
        $links = config('mylinks.links');
        return view('comics.create', compact('icons', 'links', 'linkss'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComicRequest $request)
    {
        $request->validated();

        $newComic = new Comic();

        $newComic->fill($request->all());

        $newComic->save();

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        $icons = config('mylinks.icons');
        $linkss = config('mylinks.linkss');
        $links = config('mylinks.links');

        return view('comics.show', compact('comic', 'icons', 'links', 'linkss'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        $icons = config('mylinks.icons');
        $linkss = config('mylinks.linkss');
        $links = config('mylinks.links');

        return view('comics.edit', compact('comic', 'icons', 'links', 'linkss'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreComicRequest $request, Comic $comic)
    {
        $request->validated();

        $comic->update($request->all());

        $comic->save();

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
