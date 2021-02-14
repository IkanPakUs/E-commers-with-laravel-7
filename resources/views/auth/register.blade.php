@extends('layout/baseaccess')

@section('title','Sign Up')

@section('content')

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
                <form method="POST" action="{{ route('register') }}" class="login100-form validate-form flex-sb flex-w float-left">
                @csrf
					<span class="login100-form-title p-b-32">
						Account Register
					</span>

					<span class="txt1 p-b-11">
						Name
					</span>
					<div class="wrap-input100 m-b-36 @error('name')validate-input validate-box-danger alert-validate @enderror m-b-36" data-validate= @error('name') "{{ $message }}"  @enderror>
                        <input class="input100" id="name" type="text" name="name" value="{{ old('name') }}" autocomplete="none">
                        <span class="focus-input100"></span>
                    </div>
                    
					<span class="txt1 p-b-11">
						Email
					</span>
					<div class="wrap-input100 m-b-36 @error('email')validate-input validate-box-danger alert-validate @enderror m-b-36" data-validate= @error('email') "{{ $message }}"  @enderror>
                        <input class="input100" id="email" type="text" name="email" value="{{ old('email') }}" autocomplete="none">
                        <span class="focus-input100"></span>
                    </div>
					
					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 m-b-36 @error('password')validate-input validate-box-danger alert-validate @enderror m-b-36" data-validate= @error('password') "{{ $message }}"  @enderror>
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input id="password" class="input100" type="password" name="password" >
                        <span class="focus-input100"></span>
                    </div>
					<span class="txt1 p-b-11">
						Confirm Password
					</span>
					<div class="wrap-input100 m-b-12">
                        <input id="password-confirm" class="input100" type="password" name="password_confirmation" >
                        <span class="focus-input100"></span>
                    </div>

					<div class="container-login100-form-btn my-3">
						<button class="login100-form-btn">
							Sign Up
                        </button>
                        <a href="{{ route('login') }}" class="btn mx-3 mt-3">
							Login
                        </a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

@endsection
