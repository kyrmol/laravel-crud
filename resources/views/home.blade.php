@extends('layouts.app')

@section('content')
<h1>Home</h1>
<p>This is the about home.</p>
@endsection 

@section('sidebar')
    @parent
    <p>This is appended to the sidebar.</p>
@endsection