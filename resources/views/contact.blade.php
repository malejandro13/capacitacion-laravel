@extends('layout')

@section('title', 'Contact')

@section('content')
    <h1>Contact View</h1>

    {{-- dump($errors) --}}

    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

    <form action='/contact' method="post">
        @csrf
        <input type="text" name="name" id="name" placeholder="Name" value="{{ old('name') }}"><br>
        @error('name')
             <span style="font-size: 10px; color: red;">{{ $message }}</span> 
        @enderror
        <br>
        <input type="text" name="fullname" id="fullname" placeholder="Full name" value="{{ old('fullname') }}"><br>
        @error('fullname')
             <span style="font-size: 10px; color: red;">{{ $message }}</span> 
        @enderror
        <br>
        <input type="text" name="email" id="email" placeholder="Email" value="{{ old('email') }}"><br>
        @error('email')
             <span style="font-size: 10px; color: red;">{{ $message }}</span> 
        @enderror<br><br>
        <button>Enviar</button>
    </form>
@endsection

