<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile($id, $name) {
        return view('blog.profile', compact('id', 'name'));
    }
}
