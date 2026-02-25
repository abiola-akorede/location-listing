
 
			<div class="sb2-1">
				<!--== USER INFO ==-->
				<div class="sb2-12">
					<br><br>
					<ul>
						<li><img src="{{ asset('images/users/2.png') }}" alt=""> </li>
						<li>
							<h5> {{ Auth::user()->name }} </h5> </li>
						<li></li>
					</ul>
				</div>
				<!--== LEFT MENU ==-->
				<div class="sb2-13">
					<ul class="collapsible" data-collapsible="accordion">
						<li><a href="{{ route('admin.dashboard') }}" class="menu-active"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a> </li>
						<li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-list-ul" aria-hidden="true"></i> Project Management</a>
							<div class="collapsible-body left-sub-menu">
								<ul>
									<li><a href="{{ route('get_all_project') }}">All Project</a> </li>
									<li><a href="admin-list-add.html">Add New listing</a> </li>
									<li><a href="admin-listing-category.html">All listing Categories</a> </li>
									<li><a href="admin-list-category-add.html">Add listing Categories</a> </li>
								</ul>
							</div>
						</li>
						<li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-user" aria-hidden="true"></i> Users Management</a>
							<div class="collapsible-body left-sub-menu">
								<ul>
									<li><a href="admin-all-users.html">All Users</a> </li>
									<li><a href="admin-list-users-add.html">Add New user</a> </li>
								</ul>
							</div>
						</li>
						<li><a href="admin-analytics.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> Project Management </a> </li>
						<li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-buysellads" aria-hidden="true"></i>Project Management</a>
							<div class="collapsible-body left-sub-menu">
								<ul>
									<li><a href="admin-ads.html"> View All Project </a> </li>
									<li><a href="admin-ads-create.html"> Completed Project</a> </li>
									<li><a href="admin-ads-create.html"> Ongoing Project</a> </li>
								</ul>
							</div>
						</li>
						<li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-bar-chart" aria-hidden="true"></i>Investment Management</a>
							<div class="collapsible-body left-sub-menu">
								<ul>
									<li><a href="admin-ads.html"> Track Project Updates  </a> </li>
									<li><a href="admin-ads-create.html"> All Contributions </a> </li>
									<li><a href="admin-ads-create.html"> Return in Investment (Payout)</a> </li>
								</ul>
							</div>
						</li>
						<li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-usd" aria-hidden="true"></i> Payouts and Withdrawal Request </a>
							<div class="collapsible-body left-sub-menu">
								<ul>
									<li><a href="admin-ads.html"> View Withdrawal Request  </a> </li>
									<li><a href="admin-ads-create.html"> View Payout History  </a> </li>
									<li><a href="admin-ads-create.html"> Payout Approvals )</a> </li>
								</ul>
							</div>
						</li>
						<li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-usd" aria-hidden="true"></i> Marketer Management </a>
							<div class="collapsible-body left-sub-menu">
								<ul>
									<li><a href="admin-ads.html"> Create Marketers  </a> </li>
									<li><a href="admin-ads-create.html"> View Marketers  </a> </li>
									<li><a href="admin-ads-create.html"> View referral code </a> </li>
								</ul>
							</div>
						</li>
						<li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-bell-o" aria-hidden="true"></i>Notifications</a>
							<div class="collapsible-body left-sub-menu">
								<ul>
									<li><a href="#">All Notifications</a> </li>
									<li><a href="#">User Notifications</a> </li>
									
								</ul>
							</div>
						</li>

						<li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-bell-o" aria-hidden="true"></i>Reports </a>
							<div class="collapsible-body left-sub-menu">
								<ul>
									<li><a href="#">Investment Reports</a> </li>
									<li><a href="#">Project Reports</a> </li>
									<li><a href="#">ROI Payout Report</a> </li>
									<li><a href="#">Utility Bill Report</a> </li>
									<li><a href="#">Marketer Commission Report</a> </li>
								</ul>
							</div>
						</li>
					
						<li><a href="#"><i class="fa fa-cogs" aria-hidden="true"></i> Setting</a> </li>
						
						<li><a href="#" target="_blank"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout</a> </li>
					</ul>
				</div>
			</div>
			<!--== BODY INNER CONTAINER ==-->