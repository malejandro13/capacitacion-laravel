@extends('layout')

@section('title', 'Portfolio')

@section('content')
    <h1>Porfolio View</h1>

    @forelse ($projects as $project)
        <li>{{ $project->title }}</li><small>{{ $loop->first ? 'Este es el último' : '' }}</small>
    @empty
        <p>Está vacío</p>
    @endforelse

    {{ $projects->links() }}

@endsection
