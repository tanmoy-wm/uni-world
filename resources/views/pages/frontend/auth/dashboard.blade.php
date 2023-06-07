@extends('layouts.fe-auth')
@section('content')
    @if (Auth::user()->profile_type === 'App\Models\Agent')
        @if ($errors->any())
            @include('theme.components.backend.errors', ['errors' => $errors])
        @endif
        @include('pages.frontend.auth.dashboard.agent', ['countries' => $countries])
    @endif
@endsection
