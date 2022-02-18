@extends('layout')
@section('title', 'Contacto')
@section('content')
<h2>
    CONTACT
</h2>
<ul>
    @forelse($contactos as $contacto)
    <li>
        {{$contacto['people']}}
    </li>
    <span class="badge">
        {{-- {{var_dump($loop)}} --}}
    </span>
    @empty
    No tienes concatos
    @endforelse
</ul>
@endsection
