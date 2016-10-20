<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Redirect;

use \Badcow;

use Illuminate\Http\Response;

class LoremController extends Controller
{
    public function create()
    {
        return view('loremcreate', ['pCount' => null, 'pOutput' => null]);
    }

    public function store(Request $request)
    {
        $this->validate($request, ['number' => 'bail|required|numeric|min:1|max:8']);

        $loremGenerator = new Badcow\LoremIpsum\Generator();

        $pCount = $request->input('number');
        if ($pCount == 1) {
            $pCount .= ' Placeholder Paragraph';
        } else {
            $pCount .= ' Placeholder Paragraphs';
        }

        $loremOutputArray = $loremGenerator->getParagraphs($pCount);
        $pOutput = '&lt;p&gt;';
        $pOutput .= implode('&lt;/p&gt;&lt;p&gt;', $loremOutputArray);
        $pOutput .= '&lt;/p&gt;';

        \Session::flash('pCount', $pCount);
        \Session::flash('pOutput', $pOutput);

        return redirect('/lorem-generator');
    }
}
