<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

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
    public function store(Request $request)
    {
        $newComic = new Comic();

        $newComic->title = $request->title;
        $newComic->description = $request->description;
        $newComic->thumb = $request->thumb;
        $newComic->price = $request->price;
        $newComic->series = $request->series;
        $newComic->sale_date = $request->sale_date;
        $newComic->type = $request->type;

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
    public function update(Request $request, Comic $comic)
    {
        $comic->title = $request->title;
        $comic->description = $request->description;
        $comic->thumb = $request->thumb;
        $comic->price = $request->price;
        $comic->series = $request->series;
        $comic->sale_date = $request->sale_date;
        $comic->type = $request->type;

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
