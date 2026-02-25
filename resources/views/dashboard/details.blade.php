@extends('layout.app')
@section('content')

{{-- {{ $listings }} --}}
{{--
{{ $listings->category }}
<img src="{{ asset('images/' . $listings->image) }}" alt="">
{{ $listings->description }}
<address>
    <figure><i class="fa fa-map-marker"></i>{{ $listings->address }} </figure>
    <figure><i class="fa fa-envelope"></i><a href="#">{{ $listings->email }}</a></figure>
    <figure><i class="fa fa-phone"></i>{{ $listings->phone }}</figure>
    <figure><i class="fa fa-globe"></i><a href="#">{{ $listings->website }}</a></figure>
</address>
<div class="social-share">{{ $listings->video_url }}</div>
                                <div class="social-share">{{ $listings->facebook }}</div>
                                <div class="social-share">{{ $listings->twitter }}</div>
                                <div class="social-share">{{ $listings->youtube }}</div>
                                <div class="social-share">{{ $listings->pinterest }}</div> --}}


    <section class="pg-list-1" style="background: url({{ asset('images/' . $listings->cover_image) }})">
		<div class="container">
			<div class="row">
				<div class="pg-list-1-left"> <a href="#"><h3>{{ $listings->project_title }}</h3></a>
					<div class="list-rat-ch"> <span>5.0</span> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </div>
					<h4>{{ $listings->city }}</h4>
					<p><b>Address:</b> {{ $listings->address }}</p>
					<div class="list-number pag-p1-phone">
						<ul>
							<li><i class="fa fa-phone" aria-hidden="true"></i> {{ $listings->phone }} </li>
							<li><i class="fa fa-envelope" aria-hidden="true"></i> {{ $listings->email }}</li>
							<li><i class="fa fa-user" aria-hidden="true"></i> johny depp</li>
						</ul>
					</div>
				</div>
				<div class="pg-list-1-right">
					<div class="list-enqu-btn pg-list-1-right-p1">
						<ul>
							<li><a href="#ld-rew"><i class="fa fa-star-o" aria-hidden="true"></i> Write Review</a> </li>
							<li><a href="#"><i class="fa fa-commenting-o" aria-hidden="true"></i> Send SMS</a> </li>
							<li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i> Call Now</a> </li>
							<li><a href="#" data-dismiss="modal" data-toggle="modal" data-target="#list-quo"><i class="fa fa-usd" aria-hidden="true"></i> Get Quotes</a> </li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="list-pg-bg">
		<div class="container">
			<div class="row">
				<div class="com-padd">
					<div class="list-pg-lt list-page-com-p">
						<!--LISTING DETAILS: LEFT PART 1-->
						<div class="pglist-p1 pglist-bg pglist-p-com" id="ld-abour">
							<div class="pglist-p-com-ti">
								<h3><span>About</span> {{ $listings->project_title  }}</h3> </div>
							<div class="list-pg-inn-sp">
								<div class="share-btn">
									<ul>
										<li><a href="#"><i class="fa fa-facebook fb1"></i> Share On Facebook</a> </li>
										<li><a href="#"><i class="fa fa-twitter tw1"></i> Share On Twitter</a> </li>
										<li><a href="#"><i class="fa fa-google-plus gp1"></i> Share On Google Plus</a> </li>
									</ul>
								</div>
								<p> {{ $listings->description }} </p>
							</div>
						</div>
						<!--END LISTING DETAILS: LEFT PART 1-->
						<!--LISTING DETAILS: LEFT PART 2-->
						<div class="pglist-p2 pglist-bg pglist-p-com" id="ld-ser">
							<div class="pglist-p-com-ti">
								<h3><span>Services / Features</span> Offered</h3> </div>
							<div class="list-pg-inn-sp">
								{{-- <p>Taj Luxury Hotels & Resorts provide 24-hour Business Centre, Clinic, Internet Access Centre, Babysitting, Butler Service in Villas and Seaview Suite, House Doctor on Call, Airport Butler Service, Lobby Lounge </p> --}}
								<div class="row pg-list-ser">
									<h4 style="color: black; padding-top: 15px;">{{ $listings->feature1  }}</h4>
									<h4 style="color: black; padding-top: 15px;">{{ $listings->feature2  }}</h4>
									<h4 style="color: black; padding-top: 15px;">{{ $listings->feature3  }}</h4>
									<h4 style="color: black; padding-top: 15px;">{{ $listings->feature4  }}</h4>
									<h4 style="color: black; padding-top: 15px;">{{ $listings->feature5  }}</h4>
									<h4 style="color: black; padding-top: 15px;">{{ $listings->feature6  }}</h4>
									
									
								</div>
							</div>
						</div>

						<div class="pglist-p2 pglist-bg pglist-p-com" id="ld-ser">
							<div class="pglist-p-com-ti">
								<h3><span>Video Display</span> </h3> </div>
							<div class="list-pg-inn-sp">
								{{-- <p>Taj Luxury Hotels & Resorts provide 24-hour Business Centre, Clinic, Internet Access Centre, Babysitting, Butler Service in Villas and Seaview Suite, House Doctor on Call, Airport Butler Service, Lobby Lounge </p> --}}
								@if($videoId)
									<iframe width="750" height="455"
										src="https://www.youtube.com/embed/{{ $videoId }}"
										frameborder="0"
										allowfullscreen>
									</iframe>
								@endif
							</div>
						</div>
						
						<!--END LISTING DETAILS: LEFT PART 2-->
						<!--LISTING DETAILS: LEFT PART 3-->
						<div class="pglist-p3 pglist-bg pglist-p-com" id="ld-gal">
							<div class="pglist-p-com-ti">
								<h3><span>Photo</span> Gallery</h3> </div>
							<div class="list-pg-inn-sp">
								<div id="myCarousel" class="carousel slide" data-ride="carousel">
									<!-- Indicators -->
									<ol class="carousel-indicators">
										<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
										<li data-target="#myCarousel" data-slide-to="1"></li>
										<li data-target="#myCarousel" data-slide-to="2"></li>
										<li data-target="#myCarousel" data-slide-to="3"></li>
									</ol>
									<!-- Wrapper for slides -->
									<div class="carousel-inner">
										<div class="item active"> <img src="images/slider/1.jpg" alt="Los Angeles"> </div>
										<div class="item"> <img src="images/slider/2.jpg" alt="Chicago"> </div>
										<div class="item"> <img src="images/slider/3.jpg" alt="New York"> </div>
										<div class="item"> <img src="images/slider/4.jpg" alt="New York"> </div>
									</div>
									<!-- Left and right controls -->
									<a class="left carousel-control" href="#myCarousel" data-slide="prev"> <i class="fa fa-angle-left list-slider-nav" aria-hidden="true"></i> </a>
									<a class="right carousel-control" href="#myCarousel" data-slide="next"> <i class="fa fa-angle-right list-slider-nav list-slider-nav-rp" aria-hidden="true"></i> </a>
								</div>
							</div>
						</div>
						<!--END LISTING DETAILS: LEFT PART 3-->
						<!--LISTING DETAILS: LEFT PART 4-->
						{{-- <div class="pglist-p3 pglist-bg pglist-p-com" id="ld-roo">
							<div class="pglist-p-com-ti">
								<h3><span>Room</span> Booking</h3> </div>
							<div class="list-pg-inn-sp">
								<div class="home-list-pop list-spac list-spac-1 list-room-mar-o">
									<!--LISTINGS IMAGE-->
									<div class="col-md-3"> <img src="images/room/1.jpg" alt=""> </div>
									<!--LISTINGS: CONTENT-->
									<div class="col-md-9 home-list-pop-desc inn-list-pop-desc list-room-deta"> <a href="#!"><h3>Ultra Deluxe Rooms</h3></a>
										<div class="list-rat-ch list-room-rati"> <span>5.0</span> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </div>
										<div class="list-room-type list-rom-ami">
											<ul>
												<li>
													<p><b>Amenities:</b> </p>
												</li>
												<li><img src="images/icon/a7.png" alt=""> Wi-Fi</li>
												<li><img src="images/icon/a4.png" alt=""> Air Conditioner </li>
												<li><img src="images/icon/a3.png" alt=""> Swimming Pool</li>
												<li><img src="images/icon/a2.png" alt=""> Bar</li>
												<li><img src="images/icon/a5.png" alt=""> Bathroom</li>
												<li><img src="images/icon/a6.png" alt=""> TV</li>
												<li><img src="images/icon/a9.png" alt=""> Spa</li>
												<li><img src="images/icon/a10.png" alt=""> Music</li>
												<li><img src="images/icon/a11.png" alt=""> Parking</li>
											</ul>
										</div> <span class="home-list-pop-rat list-rom-pric">$940</span>
										<div class="list-enqu-btn">
											<ul>
												<li><a href="#!"><i class="fa fa-usd" aria-hidden="true"></i> Get Quotes</a> </li>
												<li><a href="#!"><i class="fa fa-commenting-o" aria-hidden="true"></i> Send SMS</a> </li>
												<li><a href="#!"><i class="fa fa-phone" aria-hidden="true"></i> Call Now</a> </li>
												<li><a href="#!"><i class="fa fa-usd" aria-hidden="true"></i> Book Now</a> </li>
											</ul>
										</div>
									</div>
								</div>
								
							</div>
						</div> --}}
						<!--END 360 DEGREE MAP: LEFT PART 8-->

						<!--END 360 DEGREE MAP: LEFT PART 8-->
						<!--LISTING DETAILS: LEFT PART 6-->
						<div class="pglist-p3 pglist-bg pglist-p-com" id="ld-rew">
							<div class="pglist-p-com-ti">
								<h3><span>Write Your</span> Reviews</h3> </div>
							<div class="list-pg-inn-sp">
								<div class="list-pg-write-rev">
									<form class="col">
										<p>Writing great reviews may help others discover the places that are just apt for them. Here are a few tips to write a good review:</p>
										<div class="row">
											<div class="col s12">
												<fieldset class="rating">
													<input type="radio" id="star5" name="rating" value="5" />
													<label class="full" for="star5" title="Awesome - 5 stars"></label>
													<input type="radio" id="star4half" name="rating" value="4 and a half" />
													<label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
													<input type="radio" id="star4" name="rating" value="4" />
													<label class="full" for="star4" title="Pretty good - 4 stars"></label>
													<input type="radio" id="star3half" name="rating" value="3 and a half" />
													<label class="half" for="star3half" title="Meh - 3.5 stars"></label>
													<input type="radio" id="star3" name="rating" value="3" />
													<label class="full" for="star3" title="Meh - 3 stars"></label>
													<input type="radio" id="star2half" name="rating" value="2 and a half" />
													<label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
													<input type="radio" id="star2" name="rating" value="2" />
													<label class="full" for="star2" title="Kinda bad - 2 stars"></label>
													<input type="radio" id="star1half" name="rating" value="1 and a half" />
													<label class="half" for="star1half" title="Meh - 1.5 stars"></label>
													<input type="radio" id="star1" name="rating" value="1" />
													<label class="full" for="star1" title="Sucks big time - 1 star"></label>
													<input type="radio" id="starhalf" name="rating" value="half" />
													<label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
												</fieldset>
											</div>
										</div>
										<div class="row">
											<div class="input-field col s6">
												<input id="re_name" type="text" class="validate">
												<label for="re_name">Full Name</label>
											</div>
											<div class="input-field col s6">
												<input id="re_mob" type="number" class="validate">
												<label for="re_mob">Mobile</label>
											</div>
										</div>
										<div class="row">
											<div class="input-field col s6">
												<input id="re_mail" type="email" class="validate">
												<label for="re_mail">Email id</label>
											</div>
											<div class="input-field col s6">
												<input id="re_city" type="text" class="validate">
												<label for="re_city">City</label>
											</div>
										</div>
										<div class="row">
											<div class="input-field col s12">
												<textarea id="re_msg" class="materialize-textarea"></textarea>
												<label for="re_msg">Write review</label>
											</div>
										</div>
										<div class="row">
											<div class="input-field col s12"> <a class="waves-effect waves-light btn-large full-btn" href="#!">Submit Review</a> </div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<!--END LISTING DETAILS: LEFT PART 6-->
						<!--LISTING DETAILS: LEFT PART 5-->
						{{-- <div class="pglist-p3 pglist-bg pglist-p-com" id="ld-rer">
							<div class="pglist-p-com-ti">
								<h3><span>User</span> Reviews</h3> </div>
							<div class="list-pg-inn-sp">
								<div class="lp-ur-all">
									<div class="lp-ur-all-left">
										<div class="lp-ur-all-left-1">
											<div class="lp-ur-all-left-11">Excellent</div>
											<div class="lp-ur-all-left-12">
												<div class="lp-ur-all-left-13"></div>
											</div>
										</div>
										<div class="lp-ur-all-left-1">
											<div class="lp-ur-all-left-11">Good</div>
											<div class="lp-ur-all-left-12">
												<div class="lp-ur-all-left-13 lp-ur-all-left-Good"></div>
											</div>
										</div>
										<div class="lp-ur-all-left-1">
											<div class="lp-ur-all-left-11">Satisfactory</div>
											<div class="lp-ur-all-left-12">
												<div class="lp-ur-all-left-13 lp-ur-all-left-satis"></div>
											</div>
										</div>
										<div class="lp-ur-all-left-1">
											<div class="lp-ur-all-left-11">Below Average</div>
											<div class="lp-ur-all-left-12">
												<div class="lp-ur-all-left-13 lp-ur-all-left-below"></div>
											</div>
										</div>
										<div class="lp-ur-all-left-1">
											<div class="lp-ur-all-left-11">Below Average</div>
											<div class="lp-ur-all-left-12">
												<div class="lp-ur-all-left-13 lp-ur-all-left-poor"></div>
											</div>
										</div>
									</div>
									<div class="lp-ur-all-right">
										<h5>Overall Ratings</h5>
										<p><span>4.5 <i class="fa fa-star" aria-hidden="true"></i></span> based on 242 reviews</p>
									</div>
								</div>
								<div class="lp-ur-all-rat">
									<h5>Reviews</h5>
									<ul>
										<li>
											<div class="lr-user-wr-img"> <img src="images/users/2.png" alt=""> </div>
											<div class="lr-user-wr-con">
												<h6>Jacob Michael <span>4.5 <i class="fa fa-star" aria-hidden="true"></i></span></h6> <span class="lr-revi-date">19th January, 2017</span>
												<p>Good service... nice and clean rooms... very good spread of buffet and friendly staffs. Located in heart of city and easy to reach any places in a short distance. </p>
												<ul>
													<li><a href="#!"><span>Like</span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a> </li>
													<li><a href="#!"><span>Dis-Like</span><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a> </li>
													<li><a href="#!"><span>Report</span> <i class="fa fa-flag-o" aria-hidden="true"></i></a> </li>
													<li><a href="#!"><span>Comments</span> <i class="fa fa-commenting-o" aria-hidden="true"></i></a> </li>
													<li><a href="#!"><span>Share Now</span>  <i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
													<li><a href="#!"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
													<li><a href="#!"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
													<li><a href="#!"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
													<li><a href="#!"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
												</ul>
											</div>
										</li>

									</ul>
								</div>
							</div>
						</div> --}}
						<!--END LISTING DETAILS: LEFT PART 5-->
					</div>
					<div class="list-pg-rt">
						<!--LISTING DETAILS: LEFT PART 7-->

						<!--END LISTING DETAILS: LEFT PART 7-->
						<!--LISTING DETAILS: LEFT PART 7-->
						<div class="pglist-p3 pglist-bg pglist-p-com">
							<div class="pg-list-user-pro"> <img src="images/users/8.png" alt=""> </div>
							<div class="list-pg-inn-sp">
								<div class="list-pg-upro">
									<h5>Kevin Jack</h5>
									<p>Member since July 2017</p> <a class="waves-effect waves-light btn-large full-btn list-pg-btn" href="#!">Contact User</a> </div>
							</div>
						</div>
						<!--END LISTING DETAILS: LEFT PART 7-->
						<!--LISTING DETAILS: LEFT PART 8-->

						<!--END LISTING DETAILS: LEFT PART 8-->
						<!--LISTING DETAILS: LEFT PART 9-->

						<!--END LISTING DETAILS: LEFT PART 9-->
						<!--LISTING DETAILS: LEFT PART 10-->
						<div class="list-mig-like">
							<div class="list-ri-spec-tit">
								<h3><span>You might</span> like this</h3> </div>
							<a href="#!">
								<div class="list-mig-like-com">
									<div class="list-mig-lc-img"> <img src="images/listing/1.jpg" alt="" /> <span class="home-list-pop-rat list-mi-pr">$720</span> </div>
									<div class="list-mig-lc-con">
										<div class="list-rat-ch list-room-rati"> <span>4.0</span> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
										<h5>Holiday Inn Express</h5>
										<p>Illinois City,</p>
									</div>
								</div>
							</a>
							<a href="#!">
								<div class="list-mig-like-com">
									<div class="list-mig-lc-img"> <img src="images/listing/2.jpg" alt="" /> <span class="home-list-pop-rat list-mi-pr">$420</span> </div>
									<div class="list-mig-lc-con">
										<div class="list-rat-ch list-room-rati"> <span>3.0</span> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
										<h5>InterContinental</h5>
										<p>Illinois City,</p>
									</div>
								</div>
							</a>
							<a href="#!">
								<div class="list-mig-like-com">
									<div class="list-mig-lc-img"> <img src="images/listing/3.jpg" alt="" /> <span class="home-list-pop-rat list-mi-pr">$380</span> </div>
									<div class="list-mig-lc-con">
										<div class="list-rat-ch list-room-rati"> <span>5.0</span> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </div>
										<h5>Staybridger Suites</h5>
										<p>Illinois City,</p>
									</div>
								</div>
							</a>
						</div>
						<!--END LISTING DETAILS: LEFT PART 10-->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--MOBILE APP-->



@endsection
