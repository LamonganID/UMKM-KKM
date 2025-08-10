@extends('layouts.app')
@section('title', 'Contact Us')
@section('content')
<!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->
@foreach ( $contacts as $contact )
    <p>{{ $contact->name }}</p>
    <p>{{ $contact->email }}</p>
    <p>{{ $contact->phone }}</p>
    <p>{{ $contact->jabatn }}</p>
    <p>{{ $contact->image ?? 'nothink images' }}</p>
@endforeach
@endsection