@extends('layout')
@section('title', 'crear')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-4 bg-white p-5">
        <h1 class="text-center">
            Formulario para editar datos
        </h1>
        @include('partials.errores')
        <form action="{{ route('projects.update', $project) }}" method="post">
            @method('PATCH')
            @include('projects._form', ['btn' => 'Actualizar'])
        </form>
    </div>
</div>
@endsection
