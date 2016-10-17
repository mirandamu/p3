<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Lipsum;

class LoremController extends Controller
{
    public function index()
    {
        return view('loremindex', ['pCount' => null, 'pOutput' => null]);
    }

    public function generate(Request $request)
    {
        $this->validate($request, ['number' => 'bail|required|numeric|min:1|max:30']);

        $input = $request->input('number');
        $output = Lipsum::medium()->html($input);
        return view('loremindex', ['pCount' => $input, 'pOutput' => $output]);
    }
}
