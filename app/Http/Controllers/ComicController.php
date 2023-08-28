<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ComicController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $comics = Comic::all();
    return view('comics.index', compact('comics'));
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
    $request->validate([
      'title' => 'required|unique:comics,title',
      'description' => 'required|string',
      'thumb' => 'url:http,https',
      'price' => 'required|string',
      'sale_date' => 'string',
      'series' => 'string',
      'type' => 'string',
      'artists' => 'string',
      'writers' => 'string'
    ]);

    $data = $request->all();
    $new_comic = new Comic();
    $new_comic->fill($data);
    $new_comic->save();

    return to_route('comics.show', $new_comic);
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
    $request->validate([
      'title' => ['required', Rule::unique('comics', 'title')->ignore($comic),],
      'description' => 'required|string',
      'thumb' => 'url:http,https',
      'price' => 'required|string',
      'sale_date' => 'string',
      'series' => 'string',
      'type' => 'string',
      'artists' => 'string',
      'writers' => 'string'
    ]);

    $data = $request->all();

    $comic->update($data);

    return to_route('comics.show', $comic);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Comic $comic)
  {
    //
  }
}
