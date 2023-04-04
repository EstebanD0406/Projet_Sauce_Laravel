<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sauceController extends Controller
{
    public function index()
    {
        $sauces = Sauce::all();
        return view('sauces.index', compact('sauces'));
    }

    public function create()
    {
        return view('sauces.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'userId' => 'required',
            'name' => 'required',
            'manufacturer' => 'required',
            'description' => 'required',
            'mainPepper' => 'required',
            'imageUrl' => 'required',
            'heat' => 'required',
            'likes' => 'required',
            'dislikes' => 'required',
            'usersLiked' => 'required',
            'usersDisliked' => 'required'
        ]);

        $sauce = Sauce::create($validatedData);

        return redirect()->route('sauces.show', $sauce->id);
    }

    public function show($id)
    {
        $sauce = Sauce::findOrFail($id);
        return view('sauces.show', compact('sauce'));
    }

    public function edit($id)
    {
        $sauce = Sauce::findOrFail($id);
        return view('sauces.edit', compact('sauce'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'userId' => 'required',
            'name' => 'required',
            'manufacturer' => 'required',
            'description' => 'required',
            'mainPepper' => 'required',
            'imageUrl' => 'required',
            'heat' => 'required',
            'likes' => 'required',
            'dislikes' => 'required',
            'usersLiked' => 'required',
            'usersDisliked' => 'required'
        ]);

        $sauce = Sauce::findOrFail($id);
        $sauce->update($validatedData);

        return redirect()->route('sauces.show', $sauce->id);
    }

    public function destroy($id)
    {
        $sauce = Sauce::findOrFail($id);
        $sauce->delete();

        return redirect()->route('sauces.index');
    }
}