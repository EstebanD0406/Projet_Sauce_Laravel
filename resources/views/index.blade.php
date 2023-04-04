@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Liste des sauces</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Fabricant</th>
                                    <th>Ingrédient épicé principal</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sauces as $sauce)
                                    <tr>
                                        <td>{{ $sauce->name }}</td>
                                        <td>{{ $sauce->manufacturer }}</td>
                                        <td>{{ $sauce->mainPepper }}</td>
                                        <td><img src="{{ asset('storage/' . $sauce->imageUrl) }}" alt="{{ $sauce->name }}" style="max-width: 100px;"></td>
                                        <td><a href="{{ route('sauces.show', $sauce->id) }}" class="btn btn-primary">Voir</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
