@extends('layouts.app')
@section('style1')
    {{ asset('css/list.css') }}
@endsection
@section('style2')
    {{ asset('css/floatingButton.css') }}
@endsection

@section('content')
<!--lista de extracurriculares y los botones de agregar editar y eliminar podrian ser
botones flotantes los 3-->
<div class="container" id="list">
    <h1>Perfil</h1>
    
    <ul>
        <li>
            <h3>Nombre</h3>
            <p>{{ Auth::user()->name }}</p>
            <a href="{{ url('/extracurriculares/actualizar') }}">✐</a>
        </li>
        <li>
            <h3>Matruicula</h3>
            <p>2231122098</p>
            <a href="{{ url('/extracurriculares/actualizar') }}">✐</a>
        </li>
        <li>
            <h3>Correro</h3>
            <p>{{ Auth::user()->email }}</p>
            <a href="{{ url('/extracurriculares/actualizar') }}">✐</a>
        </li>
        <li>
            <h3>Contraseña</h3>
            <p>*********</p>
            <a href="{{ url('/extracurriculares/actualizar') }}">✐</a>
        </li>
        

        <!-- Agrega más elementos según sea necesario -->
    </ul>
</div>

<div class="floating-btn-container">
    <button class="floating-btn">
        <a href="{{ url('/extracurriculares/registrar') }}" class="text">+</a>
    </button>
</div>

@endsection
