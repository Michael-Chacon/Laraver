@extends('layout')
@section('title', 'Portafolio')
@section('content')
<div class="container">
    <div class="row justify-content-center">
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
            @forelse($projects as $project)
            <div class="col-md-4">
                <div class="card border-0 shadow mt-4 mx-auto" style="width: 18rem;">
                    @if($project->image)
                        <img src="/storage/{{ $project->image }}" class="card-img-top" alt="..." style="height:300px; object-fit: cover;">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $project->title}}</h5>
                        <p class="card-text text-truncate">{{ $project->description }}</p>
                        <a href="{{ route('projects.show', $project) }}" class="btn btn-outline-primary btn-sm">Ver detalle</a>
                    </div>
                </div>
            </div>
                @empty
                <div class="alert alert-danger">
                    NO hay proyectos registrados
                </div>
            @endforelse

                {{-- fin del ciclo --}}
                {{-- {{ $projects->links() }} --}}
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
@endsection
