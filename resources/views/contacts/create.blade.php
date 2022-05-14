@extends('layout')
@section('title', 'registro')
@section('content')
<h1>
    formulario para registrar los contactos
</h1>
@include('partials.errores')
<form action="{{ route('contacts.store') }}" method="post">
    {{-- @include('projects._form', ['btn' => 'Guardar']) --}}
</form>
@endsection
