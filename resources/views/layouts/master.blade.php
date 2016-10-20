<!DOCTYPE html>
<html lang="en">
<!-- Miranda Mu for DWA-15 -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ URL::asset('/css/main.css') }}"/>
        <title>
            @yield('title', "Developer's Best Friends")
        </title>
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/lorem-generator">Lorem Ipsum Generator</a></li>
                <li><a href="/user-generator">User Generator</a></li>
            </ul>
        </nav>
        <div class="main">
        @yield('content')
        </div>
    </body>
</html>