@extends('layout.app')
@section('content')

<section id="background1" class="">
    <div class="container dir-ho-t-sp">
        <div class="row">
            <div class="dir-hr1">
                <div class="dir-ho-t-tit dir-ho-t-tit-2">
                    <h1 style="font-color: blue;"> Your Smart Properties Management System </h1>
                    {{-- <p>Find B2B & B2C businesses contact addresses, phone numbers,<br> user ratings and reviews.</p> --}}
                {{-- </div>
                    <form class="tourz-search-form">
                        <div class="input-field">
                            <input type="text" id="select-city" class="autocomplete">
                            <label for="select-city">Enter city</label>
                        </div>
                        <div class="input-field">
                            <input type="text" id="select-search" class="autocomplete">
                            <label for="select-search" class="search-hotel-type">Search your services like hotel, resorts, events and more</label>
                        </div>
                        <div class="input-field">
                            <input type="submit" value="search" class="waves-effect waves-light tourz-sear-btn"> </div>
                    </form>
            </div> --}}
            <div class="row">
				<div class="col-md-12">
					<div class="pg-elem" style="background: #002147;">
						{{-- <h3>Variable Width Tabs</h3> <span>Local directory is the smartest way to find the best services for all your works</span> --}}
						<div class="pg-elem-inn ele-btn">
							<div>
								<ul class="tabs pg-ele-tab">
									<li class="tab col s3"><a class="active" href="#test1">Rent </a> </li>
									<li class="tab col s3"><a  href="#test2"> Sale </a> </li>
									<li class="tab col s3"><a href="#test3">  Project </a> </li>
									<li class="tab col s3"><a href="#test4"> Services </a> </li>
								</ul>
							</div>
							<div id="test1" class="col s12">
								<p> 
                                    <form class="tourz-search-form">
                                        <div class="input-field">
                                            <input type="text" id="select-city" class="autocomplete">
                                            <label for="select-city">Enter city</label>
                                        </div>
                                        <div class="input-field">
                                            <input type="text" id="select-search" class="autocomplete">
                                            <label for="select-search" class="search-hotel-type">Search your services like hotel, resorts, events and more</label>
                                        </div>
                                        <div class="input-field">
                                            <input type="submit" value="search" class="waves-effect waves-light tourz-sear-btn"> </div>
                                    </form>
                                </p>
							</div>
							<div id="test2" class="col s12">
								<p> 
                                    <form class="tourz-search-form">
                                        <div class="input-field">
                                            <input type="text" id="select-city" class="autocomplete">
                                            <label for="select-city">Enter city</label>
                                        </div>
                                        <div class="input-field">
                                            <input type="text" id="select-search" class="autocomplete">
                                            <label for="select-search" class="search-hotel-type">Search your services like hotel, resorts, events and more</label>
                                        </div>
                                        <div class="input-field">
                                            <input type="submit" value="search" class="waves-effect waves-light tourz-sear-btn"> </div>
                                    </form>
                                </p>
							</div>
							<div id="test3" class="col s12">
								<p> 
                                    <form class="tourz-search-form">
                                        <div class="input-field">
                                            <input type="text" id="select-city" class="autocomplete">
                                            <label for="select-city">Enter city</label>
                                        </div>
                                        <div class="input-field">
                                            <input type="text" id="select-search" class="autocomplete">
                                            <label for="select-search" class="search-hotel-type">Search your services like hotel, resorts, events and more</label>
                                        </div>
                                        <div class="input-field">
                                            <input type="submit" value="search" class="waves-effect waves-light tourz-sear-btn"> </div>
                                    </form>
                                </p>
							</div>
							<div id="test4" class="col s12">
								<p> 
                                    <form class="tourz-search-form">
                                        <div class="input-field">
                                            <input type="text" id="select-city" class="autocomplete">
                                            <label for="select-city">Enter city</label>
                                        </div>
                                        <div class="input-field">
                                            <input type="text" id="select-search" class="autocomplete">
                                            <label for="select-search" class="search-hotel-type">Search your services like hotel, resorts, events and more</label>
                                        </div>
                                        <div class="input-field">
                                            <input type="submit" value="search" class="waves-effect waves-light tourz-sear-btn"> </div>
                                    </form>
                                </p>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>
</section>

<section class="proj mar-bot-red-m30">
    <div class="container">
        <div class="row">
            <!--HOME PROJECTS: 1-->
            <div class="col-md-3 col-sm-6" style="border-radius: 45px; background-color: #002147;;">
                <div class="hom-pro"  style="background-color: rgb(232, 240, 245); border-radius: 20px;"> <img src="images/icon/office.jpeg" alt="" />
                    <h4> Over 5000 Building Projects  </h4>
                    <p>Choose from a collection of handpicked luxury villas & apartments</p> <a href="#!" style="background: #D9A441;">Explore Now</a> </div>
            </div>
            <!--HOME PROJECTS: 1-->
            <div class="col-md-3 col-sm-6" style="border-radius: 45px; background-color: #002147;;">
                <div class="hom-pro" style="background-color: rgb(232, 240, 245); border-radius: 20px;" style="background: #D9A441;"> <img src="images/icon/office.jpeg" alt="" />
                    <h4> 20 Million Worth of Investment </h4>
                    <p>Choose from a collection of handpicked luxury villas & apartments</p> <a href="#!" style="background: #D9A441;"> Become an Investor </a> </div>
            </div>
            <!--HOME PROJECTS: 1-->
            <div class="col-md-3 col-sm-6" style="border-radius: 45px; background-color: #002147;;">
                <div class="hom-pro" style="background-color: rgb(232, 240, 245); border-radius: 20px;"> <img src="images/icon/office.jpeg" alt="" />
                    <h4> Join over 1000 Developers </h4>
                    <p>Choose from a collection of handpicked luxury villas & apartments</p> <a href="#!" style="background: #D9A441;">Explore Now</a> </div>
            </div>
            <!--HOME PROJECTS: 1-->
            <div class="col-md-3 col-sm-6" style="border-radius: 45px; background-color: #002147;;">
                <div class="hom-pro" style="background-color: rgb(232, 240, 245); border-radius: 20px;"> <img src="images/icon/office.jpeg" alt="" />
                    <h4>24 Million Business</h4>
                    <p>Choose from a collection of handpicked luxury villas & apartments</p> <a href="#!" style="background: #D9A441;">Explore Now</a> </div>
            </div>
        </div>
    </div>
</section>
<!--FIND YOUR SERVICE-->
<section class="com-padd quic-book-ser-full">
    <div class="container">
        <div class="row">
            {{-- <div class="com-title">
                <br>
                <h2>Find your <span>Services</span></h2>
                <p>Explore some of the best business from around the world from our partners and friends.</p>
            </div> --}}
            {{-- <div class="dir-hli">
                <ul>
                    <!--=====LISTINGS======-->
                    <li class="col-sm-4" style="border-radius: 20px; background-color: white;">
                        <a href="list.html">
                            <div class="dir-hli-5">
                                <h3>Properties</h3>
                            </div>
                        </a>
                    </li>
                    <!--=====LISTINGS======-->
                    <li class="col-sm-4" style="border-radius: 20px; background-color: white;">
                        <h3>Marketing Partners</h3>
                        
                    </li> 
                    <!--=====LISTINGS======-->
                    <li class="col-sm-4" style="border-radius: 20px; background-color: white;">
                        <a href="list-grid.html">
                            <div class="dir-hli-5">
                                <div class="dir-hli-1">
                                   
                            </div>
                        </a>
                    </li>
                    
                   
                </ul>
            </div> --}}
        </div>
    </div>
</section>

<!--EXPLORE CITY LISTING-->
<section class="com-padd quic-book-ser-full">
    <div class="container">
        <div class="row">
            <div class="com-title">
            </div>            
            <div class="col-md-6" style="border: 0px solid #ddd; border-radius: 20px;">
                <span>
                    <div class="list-mig-like-com">
                        <div class="list-mig-lc-img"> <img src="{{ asset('images/real-estate.jpg') }}" alt=""> </div>                                            
                    </div>
                </span>
            </div>            
            <div class="col-md-6" style="border: 0px solid; text-align: center;">
                <h3 style="text-align: center; padding-top: 50px; padding-bottom: 20px;">BECOME AN INVESTOR</h3>
                <p style="font-size: 24px; padding: 15px;">
                    You can join the over 200 investors on our platform for a better ROI
                    <br><br>
                    <a href="{{ route('investor.register') }}"><u> Just choose your investment option</u> </a>
                    {{-- <a href="{{ route('admin.login') }}"><u>  Admin Login</u> </a> --}}
                </p>               
            </div>            
        </div>
    </div>
</section>
<!--ADD BUSINESS-->
{{-- <section class="com-padd home-dis">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><span>30% Off</span> Promote Your Business with us <a href="">Add My Business</a></h2> </div>
        </div>
    </div>
</section> --}}


<section class="com-padd quic-book-ser-full">
    <div class="container">
        <div class="row">
            <div class="com-title">
            </div>            
            <div class="col-md-6" style="border: 0px solid #ddd; border-radius: 20px;">
                <span>
                    <div class="list-mig-like-com">
                        <div class="list-mig-lc-img"> <img src="{{ asset('images/real-estate-investing.jpg') }}" alt=""> </div>                                            
                    </div>
                </span>
            </div>            
            <div class="col-md-6" style="border: 0px solid; text-align: center;">
                <h3 style="text-align: center; padding-top: 50px; padding-bottom: 20px;"> PROJECT OWNER ?? </h3>
                <p style="font-size: 24px; padding: 15px;">
                    Are you a project owner looking for investors and client
                    <br><br>
                    <a href="{{ route('vendor.register') }}"><u>You need to join the Beetech Platform</u> </a>
                </p>               
            </div>            
        </div>
    </div>
</section>

<section class="com-padd quic-book-ser-full">
    <div class="container">
        <div class="row">
            <div class="com-title">
            </div>            
            <div class="col-md-6" style="border: 0px solid #ddd; border-radius: 20px;">
                <span>
                    <div class="list-mig-like-com">
                        <div class="list-mig-lc-img"> <img src="{{ asset('images/Real-estate.jpg') }}" alt=""> </div>                                            
                    </div>
                </span>
            </div>            
            <div class="col-md-6" style="border: 0px solid; text-align: center;">
                <h3 style="text-align: center; padding-top: 50px; padding-bottom: 20px;"> PROJECT OWNER ?? </h3>
                <p style="font-size: 24px; padding: 15px;">
                    Are you a project owner looking for investors and client
                    <br><br>
                    <u>You need to join the Beetech Platform</u>
                </p>               
            </div>            
        </div>
    </div>
</section>


<!--BEST THINGS-->
<section class="com-padd com-padd-redu-bot1">
    <div class="container dir-hom-pre-tit">
        <div class="row">
            <div class="com-title">
                <h2>Top Trending <span>Project</span></h2>
                {{-- <p>Explore some of the best tips from around the world from our partners and friends.</p> --}}
            </div>
            <div class="col-md-12">
                @foreach ($listings as $listing)
                <div class="col-md-6">
                    <!--POPULAR LISTINGS-->
                    <a href="{{ route('listing.details', $listing->id) }}">
                        <div class="home-list-pop">
                            <!--POPULAR LISTINGS IMAGE-->
                            <div class="col-md-3"> <img src="{{ asset('images/' . $listing->cover_image) }}" alt="" /> </div>
                            <!--POPULAR LISTINGS: CONTENT-->
                            <div class="col-md-9 home-list-pop-desc"> <h3>{{ $listing->project_title }}</h3>
                                <h4>{{ $listing->address }}</h4>
                                <p> {{ $listing->category }}  </p> 
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="#!"> {{ $listing->phone }}</a> </li>
                                        <li><a href="#!"> {{ $listing->email }} </a> </li>
                                        {{-- <li><a href="#!"><i class="fa fa-eye" aria-hidden="true"></i> $2,420</a> </li> --}}
                                        {{-- <li><a href="#!"><i class="fa fa-share-alt" aria-hidden="true"></i> 570</a> </li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </a>

                    <!--POPULAR LISTINGS-->

                </div>
                @endforeach
                <div class="center">
                    <a href="{{ route('listing.index') }}" class="btn btn-primary btn-light-frame btn-rounded btn-framed arrow">View all listings</a>
                </div>
            </div>

        </div>
    </div>
</section>

<div id="page-content">

        <!--end hero-section-->

        <!--end block-->
        <div class="container"><hr></div>

        <div class="container">
            <hr>
        </div>
        <!--end container-->


        <!--end block-->
    </div>
@endsection
