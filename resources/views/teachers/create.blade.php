@extends('adminlte::page')


@section('title')

    list of type      teacher | laravel university managment APP

@endsection

@section('content_header')
       <h1> list of type teacher   </h1>
@endsection
@section('contenu')
    <form action="/create" method="post">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Mot de passe">
        <input type="password" name="password_confirmation" placeholder="Mot de passe (confirmation)">
        <input type="submit" value="M'inscrire">
    </form>
@endsection