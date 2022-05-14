@extends('layout')
@section('title', 'crear')
@section('content')
<h1>
    Formulario para registrar datos
</h1>
@if($errors->any())
<ul>
    @foreach($errors->all() as $error)
    <li>
        {{ $error }}
    </li>
    @endforeach
</ul>
@endif
<form action="{{ route('projects.store') }}" method="post">
    @csrf
    <label>
        Titulo:
        <br/>
        <input name="title" type="text"/>
    </label>
    <br/>
    <label>
        URL:
        <br/>
        <input name="url" type="text"/>
    </label>
    <br/>
    <label>
        Descripción:
        <br/>
        <textarea name="description">
        </textarea>
    </label>
    <br/>
    <button>
        Guardar
    </button>
</form>
@endsection
