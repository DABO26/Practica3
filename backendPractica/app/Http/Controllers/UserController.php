<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('frameworks', 'hobbies')->first();

        return response()->json([
            'users' => $users,
        ]);
    }

    public function update(Request $request)
    {
        $user = User::with('frameworks', 'hobbies')->first();
        $user->update([
            'name' => $request->name,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'country' => $request->country,
            'summary' => $request->summary,
        ]);

        foreach ($request->frameworks as $frameworkData) {
            $framework = $user->frameworks()->firstOrNew(['id' => $frameworkData['id']]);
            $framework->fill($frameworkData);
            $user->frameworks()->save($framework);
        }

        // Actualizar hobbies (relación HasMany - BelongsTo)
        foreach ($request->hobbies as $hobbyData) {
            $hobby = $user->hobbies()->firstOrNew(['id' => $hobbyData['id']]);
            $hobby->fill($hobbyData);
            $user->hobbies()->save($hobby);
        }

        // Si se desea eliminar los elementos que no están presentes en la solicitud
        $user->frameworks()->whereNotIn('id', collect($request->frameworks)->pluck('id'))->delete();
        $user->hobbies()->whereNotIn('id', collect($request->hobbies)->pluck('id'))->delete();

        $user->load('frameworks', 'hobbies');

        return response()->json([
            'user' => $user
        ], 200);
    }

}
