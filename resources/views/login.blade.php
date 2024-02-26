@extends('layouts.master')
@section('content')
    <div class="row mt-5 justify-content-center">
        <div class="col-md-4">
            <h2 class="mb-4">Login</h2>

            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            @endif

            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('login.submit') }}">
                        @csrf
                        <div class="md-2">
                            <label class="mb-form">Username</label>
                            <input type="text" name="username" id="username" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label class="md-form">Email</label>
                            <input type="text" name="email" id="email" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label class="md-form">Password</label>
                            <input type="text" name="password" id="password" class="form-control">
                        </div>
                        <button type="submit" class="button btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
