@extends('layout.app')

@section('title')
    Home Page
@endsection

@section('content-1')
@include('component.Home.hero')
@endsection

@section('content-2')
@include('component.Home.about')
@endsection

@section('content-3')
@include('component.Home.card')
@endsection

@section('content-4')
@include('component.Home.event')
@endsection

@section('content-5')
@include('component.Home.price')
@endsection

@section('content-6')
@include('component.Contact.contact')
@endsection

{{-- 
@section('content-7')
@include('components.Home.ask')
@endsection

@section('content-8')
@include('components.Home.startFree')
@endsection --}}