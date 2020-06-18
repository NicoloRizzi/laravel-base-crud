@extends('layouts.main')

@section('main-content')
    <h1 class="mb-4">Edit {{ $company->name }}</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
            <li> {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('company.edit', $company->id) }}" method="POST">
        @csrf
        @method('PATCH')

            <div class="form-group mt-2">

                <label class="mb-2" for="company_name">Company name</label>

                <input type="text" class="form-control" value="{{ old('company_name', $company->company_name) }}" placeholder="Insert company name" name="company_name" id="company_name">

            </div>

            <div class="form-group mt-2">

                <label class="mb-2" for="company-description">Company description</label>

                <input type="text" class="form-control mt-2" value="{{old('company_description', $company->company_description) }}" placeholder="Insert description" name="company_description" id="company-description">

            </div>
            
            <input type="submit" class="btn btn-primary mt-2" name="create" value="Create">
    </form>
@endsection