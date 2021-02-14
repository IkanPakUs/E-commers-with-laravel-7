@extends('layout/baseaccess')

@section('title','Login')

@section('content')

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
                <form method="POST" action="{{ route('login') }}" class="login100-form validate-form flex-sb flex-w float-left">
                @csrf
					<span class="login100-form-title p-b-32">
						Account Login
					</span>

					<span class="txt1 p-b-11">
						Email
					</span>
					<div class="wrap-input100 @error('email')validate-input validate-box-danger alert-validate @enderror m-b-36" data-validate= @error('email') "{{ $message }}"  @enderror >
						<input class="input100" id="email" type="text" name="email" value="{{ old('email') }}"  autocomplete="none">
                        <span class="focus-input100"></span>
                    </div>
					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 m-b-12 @error('password') validate-box-danger validate-input alert-validate @enderror  m-b-36" data-validate= @error('password') "{{ $message }}"  @enderror>
						<span class="btn-show-pass" >
							<i class="fa fa-eye"></i>
						</span>
						<input id="password" class="input100" type="password"  name="password" >
                        <span class="focus-input100"></span>
					</div>
					
					<div class="flex-sb-m w-full p-b-48">
						<div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
							<label class="label-checkbox100" for="remember">
								Remember me
							</label>
						</div>

						<div>
                            @if (Route::has('password.request'))
                                <a class="txt3" href="{{ route('password.request') }}">
                                    Forgot Password
                                </a>
                            @endif
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
                        </button>
                        <a href="{{ route('register') }}" class="btn mx-3 mt-3">
							Sign Up
                        </a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

@endsection
