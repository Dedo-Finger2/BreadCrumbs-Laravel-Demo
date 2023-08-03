@extends('layout')

@section('title', 'Home')

@section('content')
    {{ Breadcrumbs::render('home') }}

    <h1>Home da aplicação</h1>
@endsection
