<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div class="container mt-5">
@if ($massege = Session::get('failed'))
    <div class="alert alert-info">
        {{ $massege }}
    </div>
@endif

<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-4">
              <div class="card">
                  <h3 class="card-header text-center">Login</h3>
                  <div class="card-body">
                      <form method="POST" action="{{ route('login.custom') }}">
                          @csrf
                          <div class="form-group mb-3">
                              <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                                  autofocus>
                              @if ($errors->has('email'))
                              <span class="text-danger">{{ $errors->first('email') }}</span>
                              @endif
                          </div>

                          <div class="form-group mb-3">
                              <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                              @if ($errors->has('password'))
                              <span class="text-danger">{{ $errors->first('password') }}</span>
                              @endif
                          </div>

                          <div class="form-group mb-3">
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox" name="remember"> Remember Me
                                  </label>
                              </div>
                          </div>

                          <div class="d-grid mx-auto">
                              <button type="submit" class="btn btn-dark btn-block">Signin</button>
                          </div>
                      </form>

                  </div>
              </div>
          </div>
      </div>
  </div>
</main>

