<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interior;

class InteriorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = Interior::all();
        return view('interior.index', compact('all'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('interior.create');
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
            'type'              =>  'required|max:30',
            'quantity'            =>  'required|string',
        ]);

        Interior::create($store);

        return redirect()->route('interior.index');
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
        $get = Interior::find($id);
        return view('interior.edit', compact('get'));
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
            'type'              =>  'required|max:30',
            'quantity'            =>  'required|string',
        ]);

        $update = Interior::findOrFail($id);
        $update->type = $request->type;
        $update->quantity = $request->quantity;
        $update->save();

        return redirect()->route('interior.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $get = Interior::find($id);
        $get->delete();

        return redirect()->back();
    }
}
