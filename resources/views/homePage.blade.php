<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
</head>
<body>
    <p>Homepage</p>
    {{-- <a href="/about">About Page</a> --}}
    {{-- <a href="{{ url('/about') }}">About Page</a> --}}
    <a href="{{ route('about') }}">About Page</a>

    {{-- <a href="/contact">Contact Page</a> --}}
    <a href="{{ route('contact') }}">Contact Page</a>


    {{-- @php($id = 125) --}}

    {{-- <a href="{{ route('post.show', $id) }}">Parameter Route</a> --}}
    {{-- <a href="{{ url('/post', $id) }}">Parameter Route</a> --}}

    {{-- <a href="/post/123">Parameter Route</a> --}}


    
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit cumque ex recusandae totam possimus necessitatibus error dignissimos maxime officia pariatur?</p>

 
    
</body>
</html>