<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grocery;

class GroceriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('groceries.index', ['groceries' => Grocery::all()]);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('groceries.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // return "You called the store method on the GroceriesController";
        //
        // var_dump(request()->all());
        $attributes = request()->validate([
            'name' => 'required|min:2',
            'number' => 'required|integer|gte:0',       // gte: greater than or equal to
            'price' => 'required'
        ]);

        Grocery::create($attributes);

        return redirect('/');

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
    public function edit(Grocery $grocery)
    {
        return view('groceries.edit', compact('grocery'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Grocery $grocery)
    {
        $attributes = request()->validate([
            'name' => 'required|min:2',
            'number' => 'required|integer|gte:0',       // gte: greater than or equal to
            'price' => 'required'
        ]);

        // $grocery = Grocery::find($id);
        $grocery->name = $request->input('name');
        $grocery->price = $request->input('price');
        $grocery->number = $request->input('number');
        
        $grocery->save();
        return redirect('/groceries');
        // return redirect('/groceries')->with('success', 'Item updated successfully');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Grocery $grocery)
    {
        $grocery->delete();

        return redirect('/groceries');
        //
    }
}
