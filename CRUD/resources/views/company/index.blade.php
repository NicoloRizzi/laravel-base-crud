@extends('layouts.main')

@section('main-content')
    <section class="company mb-4">
        <h2 class="text-primary">Company List:</h2>
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
                    <td>
                    <a class="btn btn-success" href="{{ route('company.show', $company) }}">SHOW</a>
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('company.edit', $company) }}">EDIT</a>
                    </td>
                    <td>DELETE</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection