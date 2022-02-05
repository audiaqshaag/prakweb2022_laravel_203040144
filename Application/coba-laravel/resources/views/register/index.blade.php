@extends('layouts.main')
@section('container')
    <div class="row justify-content-center">

        <div class="col-md-5">
            <h1 class="h3 mb-3 font-weight-normal text-center">Registration Form</h1>
            <form action="register" method="post" class="form-registration">
                @csrf
                <div class="form-floating">
                    <input type="text" name="name" id="name"
                        class="form-control rounded-top @error('name')is-invalid @enderror" placeholder="Name" required>
                    <label for="name">Name</label>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating">
                    <input type="text" name="username" id="username"
                        class="form-control  @error('username')is-invalid @enderror" placeholder="Username" required>
                    <label for="username">Username</label>
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating">
                    <input type="email" name="email" id="email" class="form-control @error('email')is-invalid @enderror"
                        placeholder="Email" required>
                    <label for="email">Email</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating">
                    <input type="password" name="password" id="password"
                        class="form-control rounded-bottom  @error('password')is-invalid @enderror" placeholder="Password"
                        required>
                    <label for="password">Password</label>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>



            </form>
            <small class="d-block text-center mt-3">
                Not registered? <a href="register">Register Now!</a>
            </small>

        </div>
    </div>


@endsection
