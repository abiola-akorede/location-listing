@extends('layout.app')
@section('content')

<section class="tz-register">
    <div class="log-in-pop">
        <div class="log-in-pop-left">
            <h1>Hello... <span></span></h1>
            <p>Don't have an account? Create your account. It's take less then a minutes</p>
            <h4>Login with social media</h4>
            <ul>
                <li><a href="#"><i class="fa-facebook"></i> Rent to Own</a>
                </li>
                <li><a href="#"><i class="fa-google"></i> Buy or Sell Propertire+</a>
                </li>
                <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                </li>
            </ul>
        </div>
        <div class="log-in-pop-right">
            <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png" alt="" />
            </a>
            <h4>Login</h4>
            

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

            <form class="s12" method="POST" action="{{ route('register') }}">
                @csrf
                <div>
                    <div class="input-field s12">
                        <input type="text" data-ng-model="name" name="name" value="{{ old('name') }}" placeholder="Name" class="validate">
                        <label>Name</label>
                    </div>
                </div>
                <div>
                    <div class="input-field s12">
                        <input type="email" data-ng-model="email" name="email" value="{{ old('email') }}" placeholder="Email" class="validate">
                        <label>Email</label>
                    </div>
                </div>
                <div>
                    <div class="input-field s12">
                        <input type="password" name="password" placeholder="Password" class="validate">
                        <label>Password</label>
                    </div>
                </div>
                <div>
                    <div class="input-field s12">
                        <input type="password" name="password_confirmation" placeholder="Confirm Password" class="validate">
                        <label>Password</label>
                    </div>
                </div>
                <div>
                    <div class="input-field s12">
                        {{-- <input type="email" data-ng-model="email" name="email" value="{{ old('email') }}" placeholder="Email" class="validate"> --}}
                        <select name="category"  id="" required class="validate">
                            <option value="">Select Category</option>
                            <option value="Customer">Customer</option>
                            <option value="Service Provider">Service Provider</option>
                        </select>
                        {{-- <label>Category</label> --}}
                    </div>
                </div>
                <div>
                    <div class="input-field s4">
                        <input type="submit" value="Register" class="waves-effect waves-light log-in-btn"> </div>
                </div>
                <div>
                    <div class="input-field s12"> 
                        <p>Already has an account? <a href="{{ route('login') }}">Login Here!. </p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
    
@endsection

