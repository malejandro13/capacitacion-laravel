@extends('layout')

@section('content')
    <h1>View Create</h1>

    <form action="{{ route('projects.store') }}" method="POST">
        @csrf
        <input type="text" name="title" id="title" placeholder="Title" value="{{ old('title') }}"><br>
        @error('title')
            {{ $message }}
        @enderror
        <br>
        <input type="text" name="slug" id="slug" placeholder="Slug" value="{{ old('slug') }}"><br>
        @error('slug')
            {{ $message }}
        @enderror
        <br>
        
        <button type="submit">Enviar</button>
    </form>
    
@endsection