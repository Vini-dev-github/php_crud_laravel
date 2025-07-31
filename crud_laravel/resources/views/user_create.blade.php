@extends('master')

@section('content')

    <h2>Create</h2>

    @if (session()->has('message'))
        {{ session()->get('nessage')}}
    @endif

    <form action="{{ route('users.store')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="email" placeholder="email">
        <input type="text" name="password" placeholder="Senha">

        <button type="submit">Salvar</button>

    </form>

@endsection