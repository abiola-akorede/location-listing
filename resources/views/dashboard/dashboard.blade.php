@extends('layout.provider')
@section('content')
<div class="sb2-2-2">
    <ul>
        <li><a href="index-1.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a> </li>
        <li class="active-bre"><a href="#"> Vendor Dashboard</a> </li>
        <li class="page-back"><a href="#"><i class="fa fa-backward" aria-hidden="true"></i> Back</a> </li>
    </ul>
</div>
<div class="tz-2 tz-2-admin" style="width: 90%;">
    <div class="tz-2-com tz-2-main">
        <h4>Manage Booking</h4>
        <div class="tz-2-main-com bot-sp-20">
            {{-- <h5>Vendor Dashboard</h5> --}}
            
            <div class="tz-2-main-1 tz-3-main-admin">
                <div class="tz-2-main-2"> 
                    {{-- <img src="images/icon/d4.png" alt=""> --}}
                    <span>All Listed Project</span>
                    {{-- <p>All the Lorem Ipsum generators on the</p> --}}
                    <h2>{{ $number_of_project }}</h2> </div>
            </div>
            <div class="tz-2-main-1 tz-3-main-admin">
                <div class="tz-2-main-2"> 
                    {{-- <img src="images/icon/d3.png" alt=""> --}}
                    <span>Reviews</span>
                    {{-- <p>All the Lorem Ipsum generators on the</p> --}}
                    <h2>0</h2> </div>
            </div>
            <div class="tz-2-main-1 tz-3-main-admin">
                <div class="tz-2-main-2"> 
                    {{-- <img src="images/icon/d2.png" alt=""> --}}
                    <span>Messages</span>
                    {{-- <p>All the Lorem Ipsum generators on the</p> --}}
                    <h2>0</h2> </div>
            </div>
        </div>
        <div class="split-row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title" style="border: 1px solid; background: purple;">
                        <h4> List of Projects </h4>
                        <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p> <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-list"><i class="material-icons">more_vert</i></a>
                        <ul id="dr-list" class="dropdown-content">
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
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Category</th>
                                        {{-- <th>Country</th> --}}
                                        <th>Payment</th>
                                        <th>Listing Type</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($my_project as $project)
                                        
                                    
                                    <tr>
                                        {{-- <td><span class="list-img"><img src="images/icon/dbr1.jpg" alt=""></span> </td> --}}
                                        <td> {{ $project->id }} </td>
                                        <td><a href="#"><span class="list-enq-name"> {{ $project->project_title }} </span><span class="list-enq-city"> {{ $project->address }} </span></a> </td>
                                        <td> {{ number_format($project->price, 2) }} </td>
                                        <td> {{ $project->category }} </td>
                                        {{-- <td>Australia</td> --}}
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
        {{-- <div class="split-row">
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
                                    <tr>
                                        <td><span class="txt-dark weight-500">Cuba</span> </td>
                                        <td>Felix</td>
                                        <td><span class="txt-success"><i class="fa fa-angle-up" aria-hidden="true"></i><span>1.43%</span></span>
                                        </td>
                                        <td> <span class="txt-dark weight-500">$951</span> </td>
                                        <td> <span class="label label-danger">Closed</span> </td>
                                    </tr>
                                    <tr>
                                        <td><span class="txt-dark weight-500">France</span> </td>
                                        <td>Cannibus</td>
                                        <td><span class="txt-danger"><i class="fa fa-angle-up" aria-hidden="true"></i><span>-8.43%</span></span>
                                        </td>
                                        <td> <span class="txt-dark weight-500">$632</span> </td>
                                        <td> <span class="label label-default">Hold</span> </td>
                                    </tr>
                                    <tr>
                                        <td><span class="txt-dark weight-500">Norway</span> </td>
                                        <td>Neosoft</td>
                                        <td><span class="txt-success"><i class="fa fa-angle-up" aria-hidden="true"></i><span>7.43%</span></span>
                                        </td>
                                        <td> <span class="txt-dark weight-500">$325</span> </td>
                                        <td> <span class="label label-default">Hold</span> </td>
                                    </tr>
                                    <tr>
                                        <td><span class="txt-dark weight-500">South Africa</span> </td>
                                        <td>Hencework</td>
                                        <td><span class="txt-success"><i class="fa fa-angle-up" aria-hidden="true"></i><span>9.43%</span></span>
                                        </td>
                                        <td> <span>$258</span> </td>
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
                                    <tr>
                                        <td><span class="txt-dark weight-500">Florida</span> </td>
                                        <td>Felix</td>
                                        <td><span class="txt-success"><i class="fa fa-angle-up" aria-hidden="true"></i><span>1.43%</span></span>
                                        </td>
                                        <td> <span class="txt-dark weight-500">$951</span> </td>
                                        <td> <span class="label label-danger">Closed</span> </td>
                                    </tr>
                                    <tr>
                                        <td><span class="txt-dark weight-500">Hawaii</span> </td>
                                        <td>Cannibus</td>
                                        <td><span class="txt-danger"><i class="fa fa-angle-up" aria-hidden="true"></i><span>-8.43%</span></span>
                                        </td>
                                        <td> <span class="txt-dark weight-500">$632</span> </td>
                                        <td> <span class="label label-default">Hold</span> </td>
                                    </tr>
                                    <tr>
                                        <td><span class="txt-dark weight-500">Alaska</span> </td>
                                        <td>Neosoft</td>
                                        <td><span class="txt-success"><i class="fa fa-angle-up" aria-hidden="true"></i><span>7.43%</span></span>
                                        </td>
                                        <td> <span class="txt-dark weight-500">$325</span> </td>
                                        <td> <span class="label label-default">Hold</span> </td>
                                    </tr>
                                    <tr>
                                        <td><span class="txt-dark weight-500">New Jersey</span> </td>
                                        <td>Hencework</td>
                                        <td><span class="txt-success"><i class="fa fa-angle-up" aria-hidden="true"></i><span>9.43%</span></span>
                                        </td>
                                        <td> <span>$258</span> </td>
                                        <td> <span class="label label-success">Active</span> </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        
        
        
    </div>
</div>
@endsection
