@extends('layouts.layout')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/main-style.css') }}">
@endsection

@section('title', 'Home')

@include('layouts.pages.home-page')
