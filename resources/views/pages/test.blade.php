@extends('layouts.app')
@section('content')
    @auth
        {{ Auth::user()->first_name }}
    @endauth
    <h1>Test</h1>
@endsection
