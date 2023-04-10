<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        $categories = $categories->take(5);

        return view('welcome', compact('categories'));
    }
}
