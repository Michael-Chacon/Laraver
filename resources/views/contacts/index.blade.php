@extends('layout')
@section('title', 'Contacto')
@section('content')
<section class="row justify-content-center mt-3">
    <h2 class="text-center">
        CONTACT
    </h2>
    <section class="col-md-3">
        <div class="d-grid gap-2">
            <a class="btn btn-outline-success mb-3 text-center" href="{{ route('contacts.create') }}">
                Crear nuevo contacto
            </a>
        </div>
        <ul class="list-group">
            @forelse($contacts as $contact)
            <li class="list-group-item text-center">
                <a  href="{{ route('contacts.show', $contact) }}">
                    {{ $contact->nombre }}
                </a>
            </li>
            @empty
            No tienes concatos
            @endforelse
        </ul>
    </section>
</section>

<br/>
<form action="{{ route('contacts.index') }}" method="post">
    @csrf
    <input name="nombre" placeholder="Nombre..." type="text " value="{{ old('nombre') }}"/>
    <br/>
    {!! $errors->first('nombre', '
        <small class="mal">
        :message
        </small>
        <br>
        ') !!}
        <input name="email" placeholder="Correo..." type="text" value="{{ old('email') }}"/>
        <br/>
        {!! $errors->first('email', '
            <small class="mal">
            :message
            </small>
            <br>
            ') !!}
            <input name="asunto" placeholder="Asunto" type="" value="{{ old('asunto') }}"/>
            <br/>
            {!! $errors->first('asunto', '
                <small class="mal">
                :message
                </small>
                <br>
                ') !!}
                <textarea name="mensaje">
                    {{ old('mensaje') }}
                </textarea>
                <br/>
                {!! $errors->first('mensaje', '
                    <small class="mal">
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
    </br>
</form>
@endsection
