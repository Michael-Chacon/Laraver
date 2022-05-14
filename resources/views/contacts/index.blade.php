@extends('layout')
@section('title', 'Contacto')
@section('content')
<h2>
    CONTACT
</h2>
<a href="{{ route('contacts.create') }}">
    Crear nuevo contacto
</a>
<ul>
    @forelse($contacts as $contact)
    <li>
        <a href="{{ route('contacts.show', $contact) }}">
            {{ $contact->nombre }}
        </a>
    </li>
    <span class="badge">
        {{-- {{var_dump($loop)}} --}}
    </span>
    @empty
    No tienes concatos
    @endforelse
</ul>
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
