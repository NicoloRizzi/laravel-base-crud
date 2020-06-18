<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/css/bootstrap.min.css'/>
    <title>LARAVEL CRUD</title>
</head>
<body>
    <header class="mb-5">
        <nav class="navbar navbar-expand navbar-dark bg-dark">
            <div class="navbrand">
                <h4>Boolean</h4>
            </div>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                <a href="{{ route('company.index') }}" class="nav-link">Company</a>
                </li>
                <a href="{{ route('company.create') }}" class="nav-link">Create a new Company</a>
                </li>
            </ul>
            </ul>
        </nav>
    </header>