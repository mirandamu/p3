<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Lorem;

class LoremController extends Controller
{
    public function index()
    {
        return view('loremindex', ['pCount' => null, 'pOutput' => null]);
    }

    public function generate(Request $request)
    {
        $this->validate($request, ['number' => 'bail|required|numeric|min:1|max:30']);

        $generator = new Lorem;
        $input = $request->input('number');
        $outputarray = $generator->getParagraphs($input);
        $output = '<p>';
        $output .= implode('</p><p>', $outputarray);
        $output .= '</p>';
        return view('loremindex', ['pCount' => $input, 'pOutput' => $output]);
    }
}
