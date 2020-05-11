@extends('layout')

@section('title', 'Home')

@section('content')
    <h1>Home View</h1>
    
    <?php echo $nombre; ?>

    <br>
    <br>

    {{ $nombre }}



@endsection