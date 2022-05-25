@extends('layout')
@section('title', 'Portafolio')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2 class="text-secondary mb-0">
                    PORTAFOLIO
                </h2>
                <br/>
                <a class="btn btn-success" href="{{ route('projects.create') }}">
                    Crear nuevo proyecto
                </a>
            </div>
            <p class="lead text-secondary">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut vero velit odio, sapiente repellat vel at qui a. Mollitia, deleniti!</p>
            <ul class="list-group">
                {{-- Ciclo para mostrar los datos  --}}
                @forelse($projects as $project)
                <li class="list-group-item border-0 shadow-sm mb-3">
                    <a href="{{ route('projects.show', $project) }}" class="d-flex justify-content-between align-items-center">
                        <span class="text-secondary font-weight-bold lead">
                            {{ $project->title }}
                        </span>
                        <span class="text-black-50">
                            {{ $project->created_at->format("d/m/y")}}
                        </span>
                    </a>
                </li>
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
    </div>
</div>
</div>
@endsection
