@extends('layouts.guest')
@section('content')
    <div id="wrapper-admin">
        <div class="container">
            <div class="row">
                <div class="offset-md-3 col-6">
                    <form class="yourform" action="{{ route('login') }}" method="post">
                        <div class="text-center mb-4">
                            <img src="{{ asset('images/library.png') }}" class="w-50" alt='logo' />
                        </div>
                        @csrf
                        <h3 class="text-center display-4 mb-4">Login</h3>
                        <div class="form-group mb-4">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" value="{{ old('username') }}" />
                        </div>
                        <div class="form-group mb-4">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" value="" />
                        </div>
                        @error('username')
                            <div class='alert alert-danger mt-2'>{{ $message }}</div>
                        @enderror
                        <input type="submit" name="login" class="btn btn-primary btn-block btl-lg py-3" value="login" />
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
