@extends('layout')
@section('title', 'Portafolio')
@section('content')
<h2>
    PORTAFOLIO
</h2>
<ul>
    @forelse($portafolio as $items)
    <li>
        {{$items['titulo']}}
    </li>
    <span>
        {{var_dump($loop->last ? 'Es el ultimo' : '')}}
    </span>
    @empty
    <li>
        No hay proyectos para mostrar
    </li>
    @endforelse
</ul>
@endsection
