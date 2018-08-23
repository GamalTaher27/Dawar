@extends('RegisterPage')

@section('content')
<div class="col-lg-6 col-xs-12" >
               <img src="/images/logo1.png" class="img-responsive centerblock">
            </div>
<div class="row col-lg-6">
<div class="fooofooof">
    
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                         <h1> Sign Up </h1>
                            <div class="form-group">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Name" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                     
                        
                            <div class="form-group">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                       
                      
                            <div class="form-group">
                                <input id="password" type="password" class="reginput form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                        
                            <div class="form-group">
                                <input id="password-confirm" type="password" class="reginput form-control" name="password_confirmation" placeholder="Confirm Password" required>
                            </div>

                            <div class="form-group">
                        <input id="phone_number" type="text" class="reginput form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" name="phone_number" value="{{ old('phone_number') }}" placeholder="Phone Number" required autofocus>
                        @if ($errors->has('phone_number'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                             </form>
                         </div>
                        


                    </div>
@endsection
