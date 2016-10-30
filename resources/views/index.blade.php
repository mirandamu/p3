@extends('layouts.master')

@section('content')
    <h1>Developer's Best Friends</h1>
    <p>When developing web pages or applications, there is sometimes a need for placeholder text or test user details to get a better picture of how things are coming together. Try using our <a href="lorem-generator/">Lorem Ipsum Generator</a> or our <a href="user-generator/">User Generator</a> to save some time.</p><br>
    <img id="newyorker" alt="New Yorker cartoon" src="{{ URL::asset('/images/newyorkercartoon.jpg') }}"/>
    <p id="picturesource"><a href="http://www.newyorker.com/cartoons/a15605" target="_BLANK">Image source</a></p>
@endsection