@extends('layouts.master')

@section('title')
Random User Generator
@endsection

@section('content')
<h1>Random User Generator</h1>
    <p>Specify how many users you need, and our Random User Generator will return a list of names, emails, usernames, and passwords for use in your application.</p>
    <div>
        <h2>Example</h2>
        <ul id="example">
            <li>Name: klara kern</li>
            <li>Email: klara.kern@example.com</li>
            <li>Username: ticklishbear442</li>
            <li>Password: kokomo</li>
        </ul>
    </div>
    <div>
        <h2>Try It Yourself</h2>            
        <form method="POST" action="/user-generator" accept-charset="UTF-8" id="userform">
            {{ csrf_field() }}
            <label for="number">How many users would you like? (Max 15)</label>
            <input type="text" name="number" id="number" size="5"><br>
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
        @if(Session::has('userCount'))
            <h2>{!!Session::get('userCount')!!}</h2>
        @endif
        @if(Session::has('userOutput'))
            {!!Session::get('userOutput')!!}
        @endif
    </div>
@endsection