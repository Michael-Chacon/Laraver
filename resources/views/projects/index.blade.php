@extends('layout')
@section('title', 'Portafolio')
@section('content')
<h2>
    PORTAFOLIO
</h2>
@if(session('estado'))
{{session('estado')}}
@endif
<br/>
@auth
<a href="{{ route('projects.create') }}">
    Crear nuevo proyecto
</a>
@endauth
<ul>
    {{-- Ciclo para mostrar los datos  --}}
    @forelse($projects as $project)
    <li>
        <a href="{{ route('projects.show', $project) }}">
            {{ $project->title }}
        </a>
    </li>
    <hr/>
    <span>
        {{-- {{var_dump($loop->last ? 'Es el ultimo' : '')}} --}}
    </span>
    @empty
    <li>
        No hay proyectos para mostrar
    </li>
    @endforelse
    {{-- fin del ciclo --}}
    {{ $projects->links() }}
</ul>
<hr>
    {{--  esta parte del codigo es de la practica de valicacion de formularios  --}}
    <form action="{{route('projects.index')}}" method="post">
        @csrf
        <input name="nombre" placeholder="Nombre" type="text" value="{{old('nombre')}}"/>
        <br/>
        {!! $errors->first('nombre', '
        <small>
            :message
        </small>
        <br>
            ') !!}
            <input name="direccion" placeholder="Dirección" type="text" value="{{old('direccion')}}"/>
            <br/>
            {!! $errors->first('direccion', '
            <small>
                :message
            </small>
            <br>
                ') !!}
                <input name="id" type="number" value="{{old('id')}}"/>
                <br/>
                {!! $errors->first('id', '
                <small>
                    :message
                </small>
                <br>
                    ') !!}
                    <button>
                        Enviar
                    </button>
                </br>
            </br>
        </br>
    </form>
</hr>
@endsection
