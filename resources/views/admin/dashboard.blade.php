@extends('layout.admin')
@section('content')

<div class="sb2-2">
				<!--== breadcrumbs ==-->
				<div class="sb2-2-2">
					<ul>
						<li><a href="index-1.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a> </li>
						<li class="active-bre"><a href="#"> Dashboard</a> </li>
						<li class="page-back"><a href="#"><i class="fa fa-backward" aria-hidden="true"></i> Back</a> </li>
					</ul>
				</div>
				<div class="tz-2 tz-2-admin">
    <div class="tz-2-com tz-2-main">
        <h4>Active Statistics</h4>
        <div class="tz-2-main-com bot-sp-20">
            <div class="tz-2-main-1 tz-2-main-admin">
                <div class="tz-2-main-2"> <span> Active Vendors </span>
                    <p> Number of active vendors on the platform </p>
                    <h2>{{ $numberOfVendor }}</h2> </div>
            </div>
            <div class="tz-2-main-1 tz-2-main-admin">
                <div class="tz-2-main-2"><span>Active Project</span>
                    <p> Number of active and ongoing projects </p>
                    <h2>{{ $numberOfProject }}</h2> </div>
            </div>
            <div class="tz-2-main-1 tz-2-main-admin">
                <div class="tz-2-main-2"><span>Active Investor</span>
                    <p>Number of active investors </p>
                    <h2>{{ $numberOfInvestor }}</h2> </div>
            </div>
            <div class="tz-2-main-1 tz-2-main-admin">
                <div class="tz-2-main-2"><span>Active Customers</span>
                    <p>Number of active customers</p>
                    <h2>{{ $numberOfClient }}</h2> </div>
            </div>
        </div>
        <div class="split-row">
            <!--== Country Campaigns ==-->
            <div class="col-md-6">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Country Campaigns</h4>
                        <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p> <a class="dropdown-button drop-down-meta" href="#" data-activates="dropdown1"><i class="material-icons">more_vert</i></a>
                        <ul id="dropdown1" class="dropdown-content">
                            <li><a href="#!">Add New</a> </li>
                            <li><a href="#!">Edit</a> </li>
                            <li><a href="#!">Update</a> </li>
                            <li class="divider"></li>
                            <li><a href="#!"><i class="material-icons">delete</i>Delete</a> </li>
                            <li><a href="#!"><i class="material-icons">subject</i>View All</a> </li>
                            <li><a href="#!"><i class="material-icons">play_for_work</i>Download</a> </li>
                        </ul>
                        <!-- Dropdown Structure -->
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Country</th>
                                        <th>Client</th>
                                        <th>Changes</th>
                                        <th>Budget</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="txt-dark weight-500">Australia</span> </td>
                                        <td>Beavis</td>
                                        <td><span class="txt-success"><i class="fa fa-angle-up" aria-hidden="true"></i><span>2.43%</span></span>
                                        </td>
                                        <td> <span class="txt-dark weight-500">$1478</span> </td>
                                        <td> <span class="label label-success">Active</span> </td>
                                    </tr>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--== Country Campaigns ==-->
            <div class="col-md-6">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>City Campaigns</h4>
                        <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p> <a class="dropdown-button drop-down-meta" href="#" data-activates="dropdown2"><i class="material-icons">more_vert</i></a>
                        <ul id="dropdown2" class="dropdown-content">
                            <li><a href="#!">Add New</a> </li>
                            <li><a href="#!">Edit</a> </li>
                            <li><a href="#!">Update</a> </li>
                            <li class="divider"></li>
                            <li><a href="#!"><i class="material-icons">delete</i>Delete</a> </li>
                            <li><a href="#!"><i class="material-icons">subject</i>View All</a> </li>
                            <li><a href="#!"><i class="material-icons">play_for_work</i>Download</a> </li>
                        </ul>
                        <!-- Dropdown Structure -->
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>State</th>
                                        <th>Client</th>
                                        <th>Changes</th>
                                        <th>Budget</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="txt-dark weight-500">California</span> </td>
                                        <td>Beavis</td>
                                        <td><span class="txt-success"><i class="fa fa-angle-up" aria-hidden="true"></i><span>2.43%</span></span>
                                        </td>
                                        <td> <span class="txt-dark weight-500">$1478</span> </td>
                                        <td> <span class="label label-success">Active</span> </td>
                                    </tr>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="split-row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>New Listing Details</h4>
                        <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p> <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-list"><i class="material-icons">more_vert</i></a>
                        {{-- <ul id="dr-list" class="dropdown-content">
                            <li><a href="#!">Add New</a> </li>
                            <li><a href="#!">Edit</a> </li>
                            <li><a href="#!">Update</a> </li>
                            <li class="divider"></li>
                            <li><a href="#!"><i class="material-icons">delete</i>Delete</a> </li>
                            <li><a href="#!"><i class="material-icons">subject</i>View All</a> </li>
                            <li><a href="#!"><i class="material-icons">play_for_work</i>Download</a> </li>
                        </ul> --}}
                        <!-- Dropdown Structure -->
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                                                      
                                        <tr>
                                            <th>Listing</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Exp Date</th>
                                            <th>Country</th>
                                            <th>Payment</th>
                                            <th>Listing Type</th>
                                            <th>Status</th>
                                        </tr>
                                    
                                </thead>
                                <tbody>
                                    @foreach ($allProject as $project)  
                                    <tr>
                                        <td><span class="list-img"><img src="{{ asset('images/' . $project->cover_image) }}" alt=""></span> 
                                            {{-- <div class="col-md-3"> <img src="{{ asset('images/' . $project->cover_image) }}" alt="" /> </div> --}}
                                        </td>
                                        <td><a href="#"><span class="list-enq-name">{{ $project->project_title }}</span><span class="list-enq-city"> {{ $project->address }} </span></a> </td>
                                        <td> {{ $project->phone }} </td>
                                        <td>24 Dec 2017</td>
                                        <td>Australia</td>
                                        <td> <span class="label label-primary">Pending</span> </td>
                                        <td> <span class="label label-danger">Premium</span> </td>
                                        <td> <span class="label label-primary">Pending</span> </td>
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="split-row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>New Leads</h4>
                        <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p> <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-list-ad"><i class="material-icons">more_vert</i></a>
                        <ul id="dr-list-ad" class="dropdown-content">
                            <li><a href="#!">Add New</a> </li>
                            <li><a href="#!">Edit</a> </li>
                            <li><a href="#!">Update</a> </li>
                            <li class="divider"></li>
                            <li><a href="#!"><i class="material-icons">delete</i>Delete</a> </li>
                            <li><a href="#!"><i class="material-icons">subject</i>View All</a> </li>
                            <li><a href="#!"><i class="material-icons">play_for_work</i>Download</a> </li>
                        </ul>
                        <!-- Dropdown Structure -->
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>User</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Category</th>
                                        <th>Status</th>
                                        <th>View</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="list-img"><img src="images/users/1.png" alt=""></span> </td>
                                        <td><a href="#"><span class="list-enq-name">Kimberly</span><span class="list-enq-city">Illunois, United States</span></a> </td>
                                        <td>+01 3214 6522</td>
                                        <td>chadengle@dummy.com</td>
                                        <td>Hotel</td>
                                        <td> <span class="label label-primary">Un Read</span> </td>
                                        <td> <span class="label label-primary">View</span> </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="split-row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>New User Details</h4>
                        <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p> <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-users"><i class="material-icons">more_vert</i></a>
                        <ul id="dr-users" class="dropdown-content">
                            <li><a href="#!">Add New</a> </li>
                            <li><a href="#!">Edit</a> </li>
                            <li><a href="#!">Update</a> </li>
                            <li class="divider"></li>
                            <li><a href="#!"><i class="material-icons">delete</i>Delete</a> </li>
                            <li><a href="#!"><i class="material-icons">subject</i>View All</a> </li>
                            <li><a href="#!"><i class="material-icons">play_for_work</i>Download</a> </li>
                        </ul>
                        <!-- Dropdown Structure -->
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>User</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Country</th>
                                        <th>Listings</th>
                                        <th>Enquiry</th>
                                        <th>Bookings</th>
                                        <th>Reviews</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="list-img"><img src="images/users/1.png" alt=""></span> </td>
                                        <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span class="list-enq-city">Illunois, United States</span></a> </td>
                                        <td>+01 3214 6522</td>
                                        <td>chadengle@dummy.com</td>
                                        <td>Australia</td>
                                        <td> <span class="label label-primary">02</span> </td>
                                        <td> <span class="label label-danger">12</span> </td>
                                        <td> <span class="label label-success">24</span> </td>
                                        <td> <span class="label label-info">36</span> </td>
                                    </tr>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
			</div>


    
@endsection