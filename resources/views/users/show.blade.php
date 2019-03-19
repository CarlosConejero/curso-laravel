@extends("layout")

@section("content")

    <h1>Usuario {{ $id }}</h1>

    Mostrando detalle del usuario: {{ $id }}

@endsection

@section("sidebar")

    <h2>Usuario único</h2>

@endsection

@section("title")

    Perfil {{ $id }}