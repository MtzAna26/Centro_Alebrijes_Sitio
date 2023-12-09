@extends('layouts.app')

@section('title', 'Resultados de Búsqueda')

@section('content')
<div class="container mx-auto">
    <h2 class="text-2xl font-bold mb-4">Resultados de Búsqueda</h2>
    <a href="javascript:window.history.back()" class="btn btn-secondary mb-4">Regresar</a>
    <div class="container mx-auto p-4">
        <form method="GET" action="{{ route('mascotas.index') }}" class="max-w-md mx-auto bg-transparent p-6 rounded-lg shadow-md flex items-center justify-end">
            <input type="text" name="query" placeholder="Término de búsqueda" class="flex-1 appearance-none rounded-md py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline border border-gray-300 bg-white bg-opacity-75">
            <button type="submit" class="ml-4 bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline">Buscar</button>

        </form>
    </div>
    
    @if ($mascotas->count() > 0)
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach ($mascotas as $mascota)
                <div class="bg-white p-4 rounded shadow-md">
                    <p class="text-gray-600">{{ $mascota->fecha_consulta }}</p>
                    <h3 class="text-xl font-bold text-blue-500">{{ $mascota->nombre_mascota }}</h3>
                    <p class="text-gray-800">{{ $mascota->nombre_propietario }}</p>
                    <p class="text-gray-800">{{ $mascota->especie }}</p>
                    <p class="text-gray-800">{{ $mascota->sexo }}</p>
                    <p class="text-gray-800">{{ $mascota->raza }}</p>
                    <p class="text-gray-800">{{ $mascota->senas_particulares }}</p>
                    <p class="text-gray-800">{{ $mascota->esterilizado }}</p>
                    <p class="text-gray-800">{{ $mascota->enfermedades_previas }}</p>
                    <p class="text-gray-800">{{ $mascota->notas }}</p>
                </div>
            @endforeach
        </div>
    @else
        <p>No se encontraron resultados.</p>
    @endif
</div>
@endsection
