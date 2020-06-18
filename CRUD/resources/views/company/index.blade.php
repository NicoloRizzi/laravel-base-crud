@extends('layouts.main')

@section('main-content')
    <section class="company mb-4">
        <h2 class="text-primary">Companiy List:</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($companies as $company)
                <tr>
                    <td> {{ $company->id }} </td>
                    <td> {{ $company->company_name }}</td>
                    <td>SHOW</td>
                    <td>UPDATE</td>
                    <td>DELETE</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection