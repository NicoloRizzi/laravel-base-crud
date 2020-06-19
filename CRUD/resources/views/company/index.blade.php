@extends('layouts.main')

@section('main-content')
    @if (session('deleted'))
        <div class="alert alert-danger">
            {{ session('deleted') }} successfully deleted
        </div>
    @endif
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
                    <a class="btn btn-success" href="{{ route('company.show', $company->id) }}">SHOW</a>
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('company.edit', $company->id) }}">EDIT</a>
                    </td>
                    <td>
                        <form action="{{ route('company.destroy', $company->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input class="btn btn-danger" type="submit" value="DELETE">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection