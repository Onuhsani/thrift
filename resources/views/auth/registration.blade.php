@extends('layouts.app')

@section('content')
<main class = "signup-form myform">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">User Registration</h3>
                    <div class="card-body">
                        <form method="post" action="register-custom" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Fullname" id="fname" class="form-control" name="fname" required autofocus/>
                                @if ($errors->has('name'))
                                <span class="text-danger"> {{$errors->first('name')}}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email" class="form-control" name="email" required />
                                @if ($errors->has('email'))
                                <span class="text-danger"> {{$errors->first('email')}}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control" name="password" required />
                                @if ($errors->has('password'))
                                <span class="text-danger"> {{$errors->first('password')}}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Repeat password" id="rpassword" class="form-control" name="rpassword" required />
                                @if ($errors->has('password'))
                                <span class="text-danger"> {{$errors->first('password')}}</span>
                                @endif
                            </div>
                            
                            
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dard btn-block" style="background-color:black; color:white">Signup</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection                