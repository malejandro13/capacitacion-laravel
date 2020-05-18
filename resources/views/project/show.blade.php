@extends('layout')

@section('title', $project->title)

@section('content')
    <h1>View Show</h1>
    <p>{{ $project->id }}</p>
    <p>{{ $project->title }}</p>
@endsection