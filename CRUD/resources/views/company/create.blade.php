@extends('layouts.main')

@section('main-content')
    <h1 class="mb-4">Create a new Company</h1>
<form action="{{ route('company.store') }}" method="POST">
    @csrf
    @method('POST')
        <div class="form-group mt-2">
            <input type="text" class="form-control" placeholder="Insert company name" name="company_name">
        </div>
        <div class="form-group">
            <input type="text" class="form-control mt-2" placeholder="Insert description" name="company_description">
        </div>
        <input type="button" class="btn btn-primary mt-2" name="submit" value="Create">
    </form>
@endsection