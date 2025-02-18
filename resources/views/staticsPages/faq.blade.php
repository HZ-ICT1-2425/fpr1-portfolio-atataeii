@extends('layouts.layout')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/main-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/faq-style.css') }}">
@endsection

@section('title', 'FAQ')

@include('layouts.pages.faq-page')
