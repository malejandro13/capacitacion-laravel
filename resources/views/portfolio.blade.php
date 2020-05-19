@extends('layout')

@section('title', 'Portfolio')

@section('content')
    <h1>Porfolio View</h1>

    @if(session('status'))
      <div class="alert alert-success" role="alert">
        {{ session('status') }}
      </div>
    @endif

    <a href="{{ route('projects.create') }}" class="btn btn-success text-white">Crear</a>

    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
            <th scope="col">Ver</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
          </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
                <tr>
                    <th scope="row">{{ $project->id }}</th>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->slug }}</td>
                    <td>
                        <a href="{{ route('projects.show', $project) }}" class="btn btn-primary text-white">Ver</a>
                    </td>
                    <td>
                      <a href="{{ route('projects.edit', $project) }}" class="btn btn-warning text-white">Editar</a>
                    </td>
                    <td>
                    <form action="{{ route('projects.destory', $project) }}" method="POST">
                      @csrf @method('DELETE')
                      <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                        
                    </td>
                
                </tr>
          @endforeach
         
        </tbody>
      </table>
      {{ $projects->links() }}


@endsection
