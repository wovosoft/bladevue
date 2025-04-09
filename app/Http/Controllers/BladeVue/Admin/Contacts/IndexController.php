<?php

namespace App\Http\Controllers\BladeVue\Admin\Contacts;

use App\BladeVue\Pages\About\Index;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return Index::serve();
    }
}
