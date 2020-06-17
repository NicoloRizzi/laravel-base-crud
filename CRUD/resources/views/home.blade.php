@extends('layouts.main')

@section('main-content')
    <h1 class="mb-4">HomePage</h1>
    <section class="videogames">
        <h2 class="text-primary">Videogames List:</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Genre</th>
                    <th>Age</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($videogame as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->genre }}</td>
                        <td>{{ $item->age }}</td>
                        <td>{{ $item->description }}</td>
                    </tr>
                @endforeach 
            </tbody>
        </table>
    </section>
@endsection