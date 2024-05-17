<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //dd(Comic::all());

        return view('comics.index', ['comics' => Comic::orderByDesc('id')->paginate(8)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());

        //valido l'user input
        $data = $request->all();

        /*  $comic = new Comic();
         $comic->title = $data['title'];
         $comic->description = $data['description'];
         $comic->thumb = $data['thumb'];
         $comic->price = $data['price'];
         $comic->series = $data['series'];
         $comic->sale_date = $data['sale_date'];
         $comic->type = $data['type'];
         $comic->save(); */

        $val_data = $request->validate([
            'title' => 'required|min:3|max:250',
            'description' => 'nullable|max:550',
            'thumb' => 'nullable|max:255',
            'price' => 'nullable|max:10',
            'series' => 'nullable|max:100',
            'sale_date' => 'nullable|max:10',
            'type' => 'nullable|max:100',
        ]);

        //dd($val_data);

        Comic::create($data);

        return to_route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        //dd($request->all());
        $comic->update($request->all());

        return to_route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return to_route('comics.index');
    }
}
