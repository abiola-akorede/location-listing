<div >
    <!-- Be present above all else. - Naval Ravikant -->
    <div class="v3-menu">
        <div class="v3-m-1">
            <a href="{{ route('home') }}"><img src="{{ asset('images/beetech-logo.jpg') }}" width="250" height="50" alt=""> </a>
        </div>
        <div class="v3-m-2" style="color: white;">
            <ul>
                <li style="color: white;"><a class='' href="{{ route('listing.sales') }}" style="color: white;"> Sale</a>
                </li>
                <li><a class='' href='{{ route('listing.rent') }}' style="color: white;"> Rent</a>
                </li>
                <li><a class='' href='{{ route('listing.project') }}' style="color: white;">Project</a>
                </li>
                <li><a class='' href='{{ route('listing.project') }}' style="color: white;">Materials</a>
                </li>
                <li><a class='' href='{{ route('listing.index') }}' style="color: white;">Services</a>
                </li>
                <li><a class='' href='{{ route('listing.all-rent-to-own') }}' style="color: white;">Rent to Own</a>
                </li>
            </ul>
        </div>
        <div class="v3-m-3">
            <div class="v3-top-ri v32-top-ri">
                <ul>
                    <li><a href="login" class="v3-menu-sign" style="background: white;"> Sign In</a> </li>
                    <li><a href="{{ route('register') }}" class="v3-add-bus" style="background: white;"> Create Account</a> </li>
                </ul>
            </div>
        </div>
    </div>
</div>