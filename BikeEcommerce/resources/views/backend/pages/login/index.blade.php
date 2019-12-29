@extends('backend.layout.master-login')
<!-- LOGIN FORM -->
<!--===================================================-->
<div class="lock-wrapper">
    <div class="panel lock-box">
        <div class="center"> <img alt="" src="img/user.png" class="img-circle"/> </div>
        <h4> Hello User !</h4>
        <p class="text-center">Please login to Access your Account</p>
        <div class="row">
            <form action="{{route('admin.login')}}" method="POST" class="form-inline">
                {{ csrf_field() }}
                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                    <div class="text-left">
                        <label class="text-muted">Email ID</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="text-left">
                        <label for="signupInputPassword" class="text-muted">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="pull-left pad-btm">
                        <label class="form-checkbox form-icon form-text">
                        <input type="checkbox"> Remember Me
                        </label>
                    </div>
                    <button type="submit" class="btn btn-block btn-primary">
                    Sign In
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="registration"> Don't have an account ! <a href="#/pages/signup"> <span class="text-primary"> Sign Up </span> </a> </div>
</div>