@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $sauce->name }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $sauce->manufacturer }}</h6>
            <p class="card-text">{{ $sauce->description }}</p>
            <p class="card-text">Ingrédients principaux : {{ $sauce->mainPepper }}</p>
            <p class="card-text">Niveau de piquant : {{ $sauce->heat }}/10</p>
            <p class="card-text">Nombre de likes : {{ $sauce->likes }}</p>
            <p class="card-text">Nombre de dislikes : {{ $sauce->dislikes }}</p>
            <a href="{{ route('sauces.edit', $sauce->id) }}" class="btn btn-primary">Modifier</a>
            <form action="{{ route('sauces.destroy', $sauce->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
        </div>
    </div>
@endsection
