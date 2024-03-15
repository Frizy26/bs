<?php

namespace App\Http\Controllers;

use App\Http\Requests\FavouriteRequest;
use App\Models\Favourite;

class FavouriteController extends Controller
{
    public function index()
    {
        return Favourite::all();
    }

    public function store(FavouriteRequest $request)
    {
        return Favourite::create($request->validated());
    }

    public function show(Favourite $favoutite)
    {
        return $favoutite;
    }

    public function update(FavouriteRequest $request, Favourite $favoutite)
    {
        $favoutite->update($request->validated());

        return $favoutite;
    }

    public function destroy(Favourite $favoutite)
    {
        $favoutite->delete();

        return response()->json();
    }
}
