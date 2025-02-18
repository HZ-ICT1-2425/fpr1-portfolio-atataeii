@extends('layouts.layout')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/main-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard-style.css') }}">
@endsection

@section('title', 'Dashboard')

@include('layouts.pages.dashboard-page')
