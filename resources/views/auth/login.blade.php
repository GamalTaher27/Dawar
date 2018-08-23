@extends('LoginPage')

@section('content')
<div class="col-lg-8 col-xs-12" >
               <img src="/images/logo1.png" class="img-responsive centerblock">
            </div>
<div class="container">
    <section class="main">
   
                    <form method="POST" action="{{ route('login') }}" class="login">
                        @csrf

                        <div class="input-group">
                 <h1> Login </h1>
                                <input id="email" type="email" class="input form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" aria-describedby="basic-addon1" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            

                       
                                <input id="password" type="password" class="input form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" aria-describedby="basic-addon1" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                   <h1 class="sign">Don't have an account ? <a href="/register">Sign UP</a> </h1>


                        

                        
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>

                                      <h1 class="checkbox">  <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}</h1>


                            </div>
                        </div>
                    </form>
                    </section>
                </div>

@endsection
