<?php

namespace App\Http\Controllers\BladeVue\Admin\Contacts;

use App\BladeVue\Pages\About\Index;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $contacts = fn() => Contact::query()->paginate();

        return inertia("BladeVue/Pages/Contacts/Index", [
            "title"   => "Contacts",
            "records" => $contacts,
        ]);
    }
}
