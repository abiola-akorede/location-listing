<div class="sb2-13" >
    <ul class="collapsible" data-collapsible="accordion">
        <li><a href="{{ route('my_dashboard') }}" class="menu-active"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a> </li>
        {{-- <li><a href="javascript:void(0)" class="collapsible-header"> Project / Properties</a>
            <div class="collapsible-body left-sub-menu">
                <ul>
                    
                    
                    
                </ul>
            </div>
        </li> --}}
        
        <li><a href="{{ route('user_profile') }}"><i class="fa fa-list-ul" aria-hidden="true"></i>Profile </a> </li>
        <li><a href="{{ route('myProject') }}"><i class="fa fa-list-ul" aria-hidden="true"></i>All Projects </a> </li>
        <li><a href="{{ route('listing.create') }}"><i class="fa fa-list-ul" aria-hidden="true"></i>Add New Project</a> </li>
        <li><a href="#"><i class="fa fa-usd" aria-hidden="true"></i> Investment Managements</a> </li>
        {{-- <li><a href="#"><i class="fa fa-usd" aria-hidden="true"></i> Investment Managements</a> </li> --}}
        
        <li><a href="#"><i class="fa fa-usd" aria-hidden="true"></i> Payout Request</a> </li>
        <li><a href="#"><i class="fa fa-money" aria-hidden="true"></i> Manage Project</a> </li>
        <li><a href="#" class="collapsible-header"><i class="fa fa-bell-o" aria-hidden="true"></i>Notifications</a>
            <div class="collapsible-body left-sub-menu">
                <ul>
                    <li><a href="#">All Notifications</a> </li>
                    <li><a href="#">User Notifications</a> </li>
                    <li><a href="#">Push Notifications</a> </li>
                </ul>
            </div>
        </li>
        
        <li><a href="#"><i class="fa fa-cogs" aria-hidden="true"></i> Setting</a> </li>
        
        {{-- <li><a href="{{ route('logout') }}"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout</a> </li> --}}
    </ul>
</div>