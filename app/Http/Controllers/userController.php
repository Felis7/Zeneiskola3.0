<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class userController extends Controller
{
    public function deleteUser(Request $request)
    {
        $userId = $request->input('userId');

    try {
        $user = User::find($userId);

        if ($user) {
            $user->delete();
            // dd hívás a válasz vizsgálatához
            return response()->json(['message' => 'Felhasználó sikeresen törölve']);
        } else {
            // dd hívás a válasz vizsgálatához
            return response()->json(['message' => 'Felhasználó nem található'], 404);
        }
    } catch (\Exception $e) {
        // dd hívás a válasz vizsgálatához
        return response()->json(['message' => 'Hiba a felhasználó törlésekor: ' . $e->getMessage()], 500);
    }
}
}