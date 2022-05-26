@extends('layout')
@section('title', 'crear')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-4 bg-white p-5">
    @include('partials.errores')
        <h1 class="text-secondary text-center">
            Formulario para registrar datos
        </h1>
        <form action="{{ route('projects.store') }}" method="post">
            @csrf
            <label class="form-label">
                Titulo:
            </label>
            <input class="form-control"  name="title" type="text"/>
            <br/>
            <label class="form-label">
                URL:
            </label>
            <input  class="form-control" name="url" type="text"/>
            <br/>
            <label class="form-label">
                Descripción:
            </label>
            <textarea  class="form-control" name="description">
            </textarea>
            <div class="d-grid mt-3">
                <button class="btn btn-primary">
                    Guardar
                </button>
            </div>
        </form>

    </div>
</div>
@endsection
