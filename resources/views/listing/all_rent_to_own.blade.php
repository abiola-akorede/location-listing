@extends('layout.app')
@section('content')

<section class="list-page-enq">
    <div class="container">
        <div class="row">
            <div class="lpe-com-main">
                
                
                    <h2 style="color: white; font-size: 79px; text-align: center;"> Rent to Own</h2>
                    
                </div>
                
            </div>
        </div>
    </div>
</section>
<!--END LISTING LEAD FORM-->
<section class="dir-alp-1 dir-pa-sp-top">
    <div class="container">
        <div class="row">
            <div class="dir-alp-con dir-alp-con-1">
                
                <div class="col-md-12 dir-alp-con-right">
                    <div class="dir-alp-con-right-1">
                        <div class="row">
                            <!--LISTINGS-->

                            @foreach ($listings as $listing)
                            <a href="{{ route('listing.details', ['id'=>$listing->id]) }}">
                            <div class="home-list-pop list-spac list-spac-1">
                                <!--LISTINGS IMAGE-->
                                <div class="col-md-3"> <img src="{{ asset('images/' . $listing->cover_image) }}" alt="" /> </div>
                                <!--LISTINGS: CONTENT-->
                                <div class="col-md-9 home-list-pop-desc inn-list-pop-desc"> <h3>{{ $listing->project_title }}</h3>
                                    <h4>Category: {{ $listing->category }}</h4>
                                    <p><b>Address:</b>  {{ $listing->address }} </p>
                                    <div class="list-number">
                                        <ul>
                                            <li> {{ $listing->phone }}</li>
                                            <li> {{ $listing->email }} </li>
                                        </ul>
                                    </div> <span class="home-list-pop-rat">$4,2340</span>
                                    <div class="list-enqu-btn">
                                        {{-- <ul>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i> Write Review</a> </li>
                                            <li><a href="#"><i class="fa fa-commenting-o" aria-hidden="true"></i> Send SMS</a> </li>
                                            <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i> Call Now</a> </li>
                                            <li><a href="#" data-dismiss="modal" data-toggle="modal" data-target="#list-quo"><i class="fa fa-usd" aria-hidden="true"></i> Get Quotes</a> </li>
                                        </ul> --}}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            </a>
                            <!--LISTINGS END-->
                            <!--LISTINGS-->

                            <!--LISTINGS END-->
                            <!--LISTINGS-->

                            <!--LISTINGS END-->
                        </div>
                        <div class="row">
                            <ul class="pagination list-pagenat">
                                <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a> </li>
                                <li class="active"><a href="#!">1</a> </li>
                                <li class="waves-effect"><a href="#!">2</a> </li>
                                <li class="waves-effect"><a href="#!">3</a> </li>
                                <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






{{-- @endforeach --}}
    <!--end page-content-->

   @endsection
