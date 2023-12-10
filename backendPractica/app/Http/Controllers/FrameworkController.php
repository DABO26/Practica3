<?php

namespace App\Http\Controllers;

use App\Models\Framework;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrameworkController extends Controller
{
    public function getFrameworks()
    {
        $frameworks = Framework::all();
        return response()->json([
            'frameworks' => $frameworks
        ]);
    }

    public function update(Request $request, $id)
    {
        $framework = Framework::find($id);
        $framework->update([
            'name' => $request->name,
            'level' => $request->level,
            'year' => $request->year,
        ]);
        return response()->json([
            'framework' => $framework
        ], 200);
    }
}
