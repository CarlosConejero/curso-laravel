@extends("layout")

@section("content")

    <h1>{{ $title }}</h1>

    @forelse ($users as $user)

        <li>{{ $user }}</li>

    @empty

        <li>No hay usuarios registrados.</li>

    @endforelse

@endsection

@section("sidebar")

    @parent

    <h2>Todos los usuarios sin pisar</h2>

@endsection

@section("title")

    Inicio

@endsection
