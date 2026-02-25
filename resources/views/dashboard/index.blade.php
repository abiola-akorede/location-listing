@extends('layout.provider')
@section('content')

<div class="tz-2 tz-2-admin">
    <div class="tz-2-com tz-2-main">
        <h4>Add New Property / Project</h4> <a class="dropdown-button drop-down-meta drop-down-meta-inn" href="#" data-activates="dr-list"><i class="material-icons">more_vert</i></a>
     
        
        <!-- Dropdown Structure -->
        <div class="split-row">
            <div class="col-md-12">
                <div class="box-inn-sp ad-inn-page">
                    <div class="tab-inn ad-tab-inn">
        <div class="hom-cre-acc-left hom-cre-acc-right">

            {{-- <div class="tz-2">
				<div class="tz-2-com tz-2-main">
					<h4>Manage Listings</h4>
					<div class="db-list-com tz-db-table">
						<div class="ds-boar-title">
							<h2>Listings</h2>
							<p>All the Lorem Ipsum generators on the All the Lorem Ipsum generators on the</p>
						</div> --}}
						<table class="responsive-table bordered">
							<thead>
								<tr>
									<th>Project Title </th>
									
									<th>Price</th>
									<th>Category</th>
									<th>Status</th>
									<th>Edit</th>
									<th>Delete</th>
									<th>Preview</th>
                                    <th>Date Added</th>
								</tr>
							</thead>
							<tbody>
                                {{-- {{ $myProject }} --}}
                                @foreach ($myProject as $myProjects)                                                                    
                                    <tr>
                                        <td>{{ $myProjects->project_title }}</td>
                                        
                                        <td>{{ number_format($myProjects->price, 2) }}</td>
                                        <td>{{ $myProjects->category }}</td>
                                        <td><span class="db-list-ststus">Active</span></td>
                                        <td><a href="db-listing-edit.html" class="db-list-edit">Edit</a></td>
                                        <td><a href="db-listing-edit.html" class="db-list-edit">Delete</a></td>
                                        <td><a href="listing-details.html" class="db-list-edit" target="_blank"><i class="fa fa-eye"></i></a></td>
                                        <td> {{ $myProjects->created_at }} </td>
                                    </tr>
                                @endforeach
								
								
								
							</tbody>
						</table>
					{{-- </div>
				</div>
			</div> --}}
            <div class="">
               
            </div>
        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

{{-- <section class="list-page-enq">

    
    <div class="container">
        
        <div class="row">

            
           
        </div>
    </div>
</section> --}}

   @endsection
