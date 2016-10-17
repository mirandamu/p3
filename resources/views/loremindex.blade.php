@extends('layouts.master')

@section('title')
Lorem Ipsum Generator
@endsection

@section('content')
    <div class="main">
        <h1>Lorem Ipsum Generator</h1>
        <p>Need some placeholder text? This Lorem Ipsum Generator allows you to specify how many paragraphs of text you would like and returns unformatted HTML text for you to copy and paste directly into your code.</p>
        <div>
            <h2>Examples</h2>
            <p><strong>One Paragraph:</strong> &lt;p&gt;Nisi mi inceptos ullamcorper primis viverra ante at rhoncus mattis per mauris nam, erat dictumst non orci nisi id erat diam magna habitasse per pharetra, sollicitudin luctus netus lorem habitant diam scelerisque pellentesque hac volutpat aenean. Ligula ut ac sociosqu nulla purus cubilia, vitae blandit etiam vivamus nulla, mollis varius venenatis diam quisque. Ac curae ac nulla quam laoreet malesuada nunc nostra lacinia lorem, curabitur aenean tempor justo enim varius pretium tortor sit, magna habitasse ullamcorper fusce dapibus pellentesque aptent sed gravida.&lt;/p&gt;</p>
            <p><strong>Two Paragraphs:</strong> &lt;p&gt;Tempor lobortis pretium purus taciti proin velit quam etiam velit consectetur, nulla molestie ad integer et fermentum hendrerit non posuere ullamcorper, faucibus vivamus lacinia tristique commodo magna imperdiet nisi in. Et pellentesque diam torquent platea cursus aptent in posuere sodales pretium bibendum tempor, id sociosqu laoreet phasellus quis porttitor habitasse metus ipsum mollis massa. Inceptos vivamus suscipit nostra feugiat duis nisl arcu orci, integer nostra ac tempus semper lectus condimentum suspendisse, diam aptent lobortis blandit tristique proin quisque. &lt;/p&gt;&lt;p&gt;Commodo conubia aenean eros pharetra curabitur class justo adipiscing, suscipit accumsan erat arcu pretium quisque risus etiam metus, odio sollicitudin vehicula consequat faucibus convallis eu. Facilisis tempor netus ullamcorper quis vel aenean pretium lectus quis nulla lorem mollis, taciti interdum sem congue etiam luctus ipsum suspendisse ullamcorper fusce est.&lt;/p&gt;</p>
        </div>
        <div>
            <h2>Try it Yourself</h2>
            <form method="POST" action="/lorem-generator" accept-charset="UTF-8" id="loremform">
                {{ csrf_field() }}
                <label for="number">How many placeholder paragraphs would you like? (Max 30)</label>
                <input type="text" name="number" size="5"><br>
                <input type="submit" value="Generate">
            </form>

            @if(count($errors) > 0)
            <ul class="errors">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
            @endif
        </div>
        <div>
            @if ($pCount == 1)
                <h2>1 Placeholder Paragraph</h2>
                <p id="loremoutput">{{ $pOutput }}</p>
            @elseif ($pCount > 1)
                <h2>{{ $pCount }} Placeholder Paragraphs</h2>
                <p id="loremoutput">{{ $pOutput }}</p>
            @endif
        </div>
    </div>
@endsection