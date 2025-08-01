@section('title', 'Welcome')
    @extends('layouts.app')
    @section('content')
        <div>
            <!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->
            <h1>Hello World</h1>
            <a href="{{ route('posts') }}">posts</a>
        </div>
    @endsection