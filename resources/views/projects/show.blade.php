@extends('layout')
@section('title', $project->title)
@section('content')
<h1>
    {{ $project->title }}
</h1>
@auth
<a href="{{ route('projects.edit', $project) }}">
    Editar proyecto
</a>
<form action="{{ route('projects.destroy', $project) }}" method="POST">
    @csrf @method('DELETE')
    <button>
        Eliminar
    </button>
</form>
@endauth
<p>
    {{ $project->description }}
</p>
<p>
    {{ $project->created_at->diffForHumans() }}
</p>
<div class="row justify-content-center">
    <div class="col-md-4 p-5 bg-white">
        <h1 class="text-secondary text-center">
            {{ $project->title }}
        </h1>
        <p class="lead ">
            {{ $project->description }}
        </p>
        <p>
            {{ $project->created_at->diffForHumans() }}
        </p>
        <div class="justify-content-between align-items-center d-flex ">
            <a class="" href="{{ route('projects.index') }}">
                Regresar
            </a>
            <div class="btn-group">
                <a class="btn btn-success btn-sm" type="button" href="{{ route('projects.edit', $project) }}">
                    Editar
                </a>
                <form action="{{ route('projects.destroy', $project) }}" method="POST">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm">
                        Eliminar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
