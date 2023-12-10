<?php

namespace App\Http\Controllers;

use App\Models\Hobbie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HobbieController extends Controller
{
    public function getHobbies()
    {
        $hobbies = Hobbie::all();
        return response()->json([
            'hobbies' => $hobbies
        ]);
    }

    public function update(Request $request, $id)
    {
        $hobbie = Hobbie::find($id);
        $hobbie->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        return response()->json([
            'hobbie' => $hobbie
        ], 200);
    }
}
