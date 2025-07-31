@extends('master')

@section('content')

    <a href="{{ route('users.create') }}">Criar usuário</a>

    <h2>Users</h2>

    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }} | <a href="{{ route('users.edit', ['user' => $user->id]) }}">Editar |
                    <a href="{{ route('users.show', ['user' => $user->id]) }}">Mostrar usuários</a>

            </li>
        @endforeach
    </ul>

@endsection