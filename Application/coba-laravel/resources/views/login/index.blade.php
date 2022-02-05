@extends('layouts.main')
@section('container')
    <div class="row justify-content-center">

        <div class="col-md-4">

            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close justify-content-right" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>


            @endif

            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="close justify-content-right" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>


            @endif

            <h1 class="h3 mb-3 font-weight-normal text-center">Please Login</h1>
            <form action="login" method="post" class="form-signin">
                @csrf

                <div class="form-floating">
                    <input type="email" name="email" id="email" class="form-control  @error('email')is-invalid @enderror"
                        placeholder="email" required autofocus>
                    <label for="email">Email Adress</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating">
                    <input type="password" name="password" id="password" class="form-control  " placeholder="password"
                        required autofocus>
                    <label for="password">Password</label>
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>



            </form>
            <small class="d-block text-center mt-3">
                Not registered? <a href="register">Register Now!</a>
            </small>

        </div>
    </div>


@endsection
