@extends('layouts.basic')

@section('title', 'Homepage')

@section('sidebar')
    @parent
    <p>This is appended to the master sidebar</p>
@endsection

@section('content')
    <h1>Content here!</h1>
@endsection
