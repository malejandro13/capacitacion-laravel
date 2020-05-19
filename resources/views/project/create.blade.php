@extends('layout')

@section('content')
    <h1>View Create</h1>
    <div style="width: 600px;" class="card shadow-sm p-3 mb-5 bg-white rounded">
    <form action="{{ route('projects.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title"  class="form-control @error('title') is-invalid @enderror" placeholder="Title" value="{{ old('title') }}">
            @error('title')
                 <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <br>
        <input type="text" name="slug" id="slug" class="form-control @error('slug') is-invalid @enderror"  placeholder="Slug" value="{{ old('slug') }}">
        @error('slug')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        <br>
        
        <button type="submit" class="btn btn-primary" >Enviar</button>
    </form>
    </div>  
    
@endsection