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
            <p><strong>One Paragraph:</strong> {{ Lipsum::medium()->html(1) }}</p>
            <p><strong>Two Paragraphs:</strong> {{ Lipsum::medium()->html(2) }}</p>
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