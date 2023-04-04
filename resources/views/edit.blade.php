@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Modifier la sauce</h5>
            <form action="{{ route('sauces.update', $sauce->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $sauce->name }}">
                </div>
                <div class="form-group">
                    <label for="manufacturer">Fabricant</label>
                    <input type="text" class="form-control" id="manufacturer" name="manufacturer" value="{{ $sauce->manufacturer }}">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description">{{ $sauce->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="mainPepper">Ingrédient principal épicé</label>
                    <input type="text" class="form-control" id="mainPepper" name="mainPepper" value="{{ $sauce->mainPepper }}">
                </div>
                <div class="form-group">
                    <label for="heat">Niveau de piquant</label>
                    <select class="form-control" id="heat" name="heat">
                        <option value="1" @if ($sauce->heat === 1) selected @endif>1</option>
                        <option value="2" @if ($sauce->heat === 2) selected @endif>2</option>
                        <option value="3" @if ($sauce->heat === 3) selected @endif>3</option>
                        <option value="4" @if ($sauce->heat === 4) selected @endif>4</option>
                        <option
