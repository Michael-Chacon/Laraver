@extends('layouts.app')

@section('content')
@auth
@include('layout')
@endauth
<h2>
    Hola desde el home
</h2>
<button class="btn btn-danger">
    HOLA
</button>
@endsection
