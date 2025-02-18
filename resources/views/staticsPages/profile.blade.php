@extends('layouts.layout')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/main-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profile-style.css') }}">
@endsection

@section('title', 'Profile')

@include('layouts.pages.profile-page')
