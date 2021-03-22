@extends('layouts.frontend.app')
@section('content')
    <!-- Start Contact Us  -->
    <div class="contact-box-main" style="text-align: center">
        <div class="container" style="text-align: center">
            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-3">
                    <div class="contact-form-right">
                        <h2>LOGIN</h2>
                        <br>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <br>
                        <form id="" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Your email" required data-error="Please enter your email" value="{{ old('email') }}">
                                        @error('email')
                                        <div class="help-block with-errors">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="password" placeholder="Your password" id="password" class="form-control" name="password" required data-error="Please enter your password">
                                        @error('password')
                                        <div class="help-block with-errors">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="submit-button text-center">
                                        <button class="btn hvr-hover" id="submit" type="submit">Login</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <form id="" method="GET">
                            <div style="text-align: center">
                                <a class="nav-link" href="{{ route('password.request') }}">
                                Forget Password?
                                </a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Cart -->
@endsection
