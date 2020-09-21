<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Increment;
use Image;
use Auth;
use File;

class IncrementController extends Controller
{
    public function index()
    {
        $all = Increment::all();
        return view('increments.index', compact('all'));
    }

    public function create()
    {
        return view('increments.create');
    }

    public function store(Request $request)
    {

        if ($request->hasFile('image')) {
            
          $image = $request->file('image');
          $filename = time() . '.' . $image->getClientOriginalExtension(); // membuat nama
          $location = public_path('images/' . $filename); //
          Image::make($image)->save($location);

          Increment::create([
            'name' => $request->name,
            'count' => 0,
            'images' => $filename,
            'parents_id' => $request->parents_id
          ]);

          return redirect()->back();
        }

    }

    public function view($id)
    {
        $view = Increment::find($id);

        return view('increments.view', compact('view'));
    }

    public function update(Request $request, $id)
    {
        $find = Increment::find($id);
        $find->name = $request->name;
        $find->parents_id = $request->parents_id;

        File::delete('images/'.$find->images);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->resize(800,400)->save($location);
            $find->images = $filename;
        }

        $find->save();

        return redirect()->back();
    }

    public function destroy($id)
    {
        $find = Increment::find($id);
        File::delete('images/'.$find->images);
        $find->delete();

        return redirect()->back();
        
    }

}
