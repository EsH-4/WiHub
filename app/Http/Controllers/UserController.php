<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;

class UserController extends Controller
{
    public function show(User $user): View
    {
        $articles = $user->articles()
            ->latest()
            ->get();

        return view('users.show', compact('user', 'articles'));
    }
}