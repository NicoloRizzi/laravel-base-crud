@extends('layouts.main')

@section('main-content')
    <h1 class="mb-4">
        {{ $company->name }}
    </h1>
    <ul class="list-group">
        <li class="list-group-item">
            ID: {{ $company->id}}
        </li>
        <li class="list-group-item">
            NAME: {{ $company->company_name }}
        </li>
        <li class="list-group-item">
        DESCRIPTION: {{ $company->company_description }}
        </li>
        <li class="list-group-item">
        CREATED AT: {{ $company->created_at }}
        </li>
        <li class="list-group-item">
            UPDATED AT: {{ $company->updated_at }}
        </li>

    </ul>
@endsection