@extends('layouts.main')

@section('main-content')
    <h1 class="mb-4">
        {{ $company->company_name }}
    </h1>
    <ul class="list-group">
        <li class="list-group-item">
            <b>ID:</b> {{ $company->id}}
        </li>
        <li class="list-group-item">
            <b>NAME:</b> {{ $company->company_name }}
        </li>
        <li class="list-group-item">
            <b>DESCRIPTION:</b> {{ $company->company_description }}
        </li>
        <li class="list-group-item">
            <b>CREATED AT:</b> {{ $company->created_at }}
        </li>
        <li class="list-group-item">
            <b>UPDATED AT:</b> {{ $company->updated_at }}
        </li>

    </ul>
@endsection