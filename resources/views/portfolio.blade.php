@extends('layout')

@section('title', 'Portfolio')

@section('content')
    <h1>Porfolio View</h1>

    @forelse ($projects as $project)
        <li>{{ $project->title }} <small>{{ $loop->last ? 'Este es el último' : '' }}</small></li>
    @empty
        <p>Está vacío</p>
    @endforelse


@endsection
