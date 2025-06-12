<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, string $username)
    {
        $user = User::where('username', $username)->with('links.collection')->first();

        if (is_null($user)) {
            abort(404);
        }

        return view('user.view', compact('user'));
    }
}
