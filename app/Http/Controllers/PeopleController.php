<?php

namespace App\Http\Controllers;

use App\Http\Requests\PeopleRequest;
use App\Models\People;

class PeopleController extends Controller
{
    public function store(PeopleRequest $request)
    {

        People::create([
            'name' => strtoupper($request->name),
            'age' => $request->age,
            'city' => strtoupper($request->city)
        ]);

        return back();
    }
}
