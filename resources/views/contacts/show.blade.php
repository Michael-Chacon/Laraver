@extends('layout')
@section('title', $id->nombre)
@section('content')
<h2>
    {{ $id->nombre }}
</h2>
<a href="{{ route('contacts.edit', $id) }}">
    Editar los datos
</a>
<p>
    Direccion:
    <strong>
        {{$id->direccion}}
    </strong>
</p>
<p>
    Cédula:
    <strong>
        {{$id->cedula}}
    </strong>
</p>
<p>
    Telefono:
    <strong>
        {{$id->telefono}}
    </strong>
</p>
@endsection
