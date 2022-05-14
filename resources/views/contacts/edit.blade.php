@extends('layout')
@section('title', 'editar')
@section('content')
<h2>
    Editar contacto
</h2>
<form action="{{ route('contacts.update', $id) }}" method="post">
    @csrf
    @method('PATCH')
    <label>
        Telefono:
        <input name="telefono" type="number" value="{{ old('telefono', $id->telefono) }}"/>
    </label>
    <br/>
    <label>
        Direccion:
        <input name="direccion" type="text" value="{{ old('direccion', $id->direccion) }} "/>
    </label>
    <br/>
    <button>
        Acutalizar
    </button>
</form>
@endsection
