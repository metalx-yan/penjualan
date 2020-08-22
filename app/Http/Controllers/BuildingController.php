<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Building;

class BuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = Building::all();
        return view('building.index', compact('all'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('building.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = $request->validate([
            'name'              =>  'required|max:30',
            'quantity'            =>  'required|string',
            'size'            =>  'required|string',
            'price'      =>  'required|numeric',
        ]);

        Building::create($store);

        return redirect()->route('building.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $get = Building::find($id);
        return view('building.edit', compact('get'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'              =>  'required|max:30',
            'quantity'            =>  'required|string',
            'size'            =>  'required|string',
            'price'      =>  'required|numeric',
        ]);

        $update = Building::findOrFail($id);
        $update->name = $request->name;
        $update->quantity = $request->quantity;
        $update->size = $request->size;
        $update->price = $request->price;
        $update->save();

        return redirect()->route('building.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $get = Building::find($id);
        $get->delete();

        return redirect()->back();
    }
}
