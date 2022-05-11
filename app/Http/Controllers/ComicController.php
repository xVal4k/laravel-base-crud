<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;
use Faker\Generator as Faker;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::paginate(4);

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Faker $faker)
    {
        $data = $request->all();

        // if during the insertion some data is missing, it is possible to generate a random value with the following lines
        // -----------------------------------------------------------------------------------------------------------------
        // if ($data['title'] == null) {
        //     $data['title'] = $faker->words(5, true);
        // }
        // if ($data['description'] == null) {
        //     $data['description'] = $faker->sentence(7);
        // }
        // if ($data['thumb'] == null) {
        //     $data['thumb'] = $faker->imageUrl(192, 291);
        // }
        // if ($data['price'] == null) {
        //     $data['price'] = '0.00';
        // }
        // if ($data['series'] == null) {
        //     $data['series'] = $faker->words(3, true);
        // }
        // if ($data['sale_date'] == null) {
        //     $data['sale_date'] = date("Y-m-d");
        // }
        // if ($data['type'] == null) {
        //     $data['type'] = $faker->words(2, true);
        // }
        // -----------------------------------------------------------------------------------------------------------------
        // dd($data);


        $newComic = Comic::create($data);

        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', [
            'pageTitle' => $comic->title,
            'comic'     => $comic,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
    }
}
