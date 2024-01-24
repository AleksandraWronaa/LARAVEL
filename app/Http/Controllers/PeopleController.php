<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;

class PeopleController extends Controller
{
    public function create(Request $request) 
    {
        $people = new People();
        $people->name = $request->name;
        $people->surname = $request->surname;
        $people->phone = $request->phone;
        $people->street = $request->street;
        $people->city = $request->city;
        $people->country = $request->country;

        $people->save();

        return response()->json('ADDED', 200);
    }

    public function update(Request $request)
    {
        $people = People::findorfail($request->id);

        $people->name = $request->name;
        $people->surname = $request->surname;
        $people->phone = $request->phone;
        $people->street = $request->street;
        $people->city = $request->city;
        $people->country = $request->country;

        $people->update();

        return response()->json('UPDATED', 200);
    }

    public function delete(Request $request)
    {
        $people = People::findorfail($request->id)->delete();

        return response()->json('REMOVED', 200);
    }
    
    public function readall()
    {
        $people = People::all();

        return response()->json($people, 200);
    }
    
    public function read(Request $request)
    {
        $people = People::findorfail($request->id);

        return response()->json($people, 200);
    }
}