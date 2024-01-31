<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class PeopleController extends Controller
{ 
    public function index()
    {
        $people = People::all();
        return response()->json($people, 200, [], JSON_PRETTY_PRINT);
    }   
  
    public function show($id)
    {
        $person = People::find($id);

        if ($person) {
            return response()->json($person, 200, [], JSON_PRETTY_PRINT);
        } else {
            return response()->json(['message' => 'Person not found'], 404, [], JSON_PRETTY_PRINT);
        }
    }    

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'phone_number' => 'string|max:20',
        ]);

        $person = People::find($id);

        if ($person) {
            $person->update($data);
            return response()->json(['message' => 'Person updated successfully'], 200, [], JSON_PRETTY_PRINT);
        } else {
            return response()->json(['message' => 'Person not found'], 404, [], JSON_PRETTY_PRINT);
        }
    }

    public function destroy($id)
    {
        $person = People::find($id);

        if ($person) {
            $person->delete();
            return response()->json(['message' => 'Person deleted successfully'], 200, [], JSON_PRETTY_PRINT);
        } else {
            return response()->json(['message' => 'Person not found'], 404, [], JSON_PRETTY_PRINT);
        }
    }   

    public function store(Request $request)
    {
       
        dd($request->all());

       
        $data = $request->validate([
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'phone_number' => 'required|string|max:20',
            'street' => 'required|string|max:255',
            'city' => 'required|string|max:255',
        ]);

        $person = People::create($data);

        return response()->json(['message' => 'Person created successfully'], 201, [], JSON_PRETTY_PRINT);
    }
}
