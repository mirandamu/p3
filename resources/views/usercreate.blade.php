@extends('layouts.master')

@section('title')
Random User Generator
@endsection

@section('content')
<h1>Random User Generator</h1>
    <p>Generate random users to test your applications with.</p>
    <div>
        <h2>Examples</h2>
        <p>Hold</p>
    </div>
    <div>
        <h2>Try it Yourself</h2>            
        <form method="POST" action="/user-generator" accept-charset="UTF-8" id="userform">
            {{ csrf_field() }}
            <label for="number">How many users would you like?</label>
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
@endsection