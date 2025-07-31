@extends('master')

@section('content')

    <h2>Editar</h2>

    @if(session()->has('message'))
        {{ session()->get('message') }}
    @endif

    <form action="{{ route('route.update', ['user' => $user->id]) }}">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <input type="text" name="name" value="{{ $user->name }}">
        <input type="text" name="email" value="{{ $user->email }}">
        <button type="submit">Salvar</button>
    </form>

@endsection