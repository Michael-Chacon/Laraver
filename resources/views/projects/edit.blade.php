@extends('layout')
@section('title', 'crear')
@section('content')
<h1>
    Formulario para editar datos
</h1>
@include('partials.errores')
<form action="{{ route('projects.update', $project) }}" method="post">
    @method('PATCH')
    @include('projects._form', ['btn' => 'Actualizar'])
</form>
@endsection
