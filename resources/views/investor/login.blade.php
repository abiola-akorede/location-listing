@extends('layout.app')
@section('content')



<section class="tz-login">
		<div class="tz-regi-form">
			<h4>Investor Login</h4>
			<p>It's free and always will be.</p>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
			<form class="s12" method="POST" action="{{ route('login') }}">
                @csrf
				
				<div class="row">
					<div class="input-field col s12">
						<input type="email" class="validate" value="{{ old('email') }}" name="email" placeholder="Email">
						{{-- <label>Email </label> --}}
					</div>
				</div>	
								
				
				<div class="row">
					<div class="input-field col s12">
						<input type="password" class="validate" name="password" placeholder="Password">
						{{-- <label>New password</label> --}}
					</div>
				</div>				
						
				<div class="row">
					<div class="input-field col s12"> <i class="waves-effect waves-light btn-large full-btn waves-input-wrapper" style=""><input type="submit" value="submit" class="waves-button-input"></i> </div>
				</div>
			</form>
			{{-- <p>Are you a already member ? <a href="admin-login.html">Login</a> </p> --}}
            <p>Don't have an account? <a href="{{ route('register') }}">Register Here!. </p>
		</div>
	</section>
    
@endsection

