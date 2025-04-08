<?php

namespace App\Http\Controllers;

use App\BladeVue\Pages\About\Index;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BladeVueController extends Controller
{
    public function index()
    {
        return Inertia::render(Index::$file);
    }
}
