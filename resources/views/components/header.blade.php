<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link href="{{ asset('css/api.css') }}" rel="stylesheet"/>
    <title>CRUD</title>
  </head>
  <body>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
    <nav class="navbar navbar-light bg-light sticky-top">
        <div class="container-fluid">
          <h3 class="navbar-brand " href="#">{{(Auth::check()?ucfirst(Auth::user()->name):"API")}}</h3>
          <div class="nav-item">
            @if(Route::currentRouteName()==="app")
            <a href="login" class="btn btn-outline-secondary"> Back </a>
            @endif
            @if(Auth::check())
            <!-- <a href="app" class="btn btn-outline-success"> API </a> -->
            <a href="logout" class="btn btn-outline-secondary"> Logout </a>
            @endif
          </div>
        </div>
    </nav>

    @if(session('add_success')||session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success!</strong> {{(session('add_success')??session('success'))}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(session('add_error'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Error!</strong> Invalid Input.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    