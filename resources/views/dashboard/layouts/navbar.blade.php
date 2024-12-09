<nav class="app-header navbar navbar-expand bg-body"> <!--begin::Container-->
    <div class="container-fluid"> <!--begin::Start Navbar Links-->
        <ul class="navbar-nav">
            <li class="nav-item"> <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button"> <i class="bi bi-list"></i> </a> </li>
            {{-- <li class="nav-item d-none d-md-block"> <a href="#" class="nav-link">Home</a> </li>
            <li class="nav-item d-none d-md-block"> <a href="#" class="nav-link">Contact</a> </li> --}}
        </ul> <!--end::Start Navbar Links--> <!--begin::End Navbar Links-->
        <ul class="navbar-nav ms-auto"> <!--begin::Navbar Search-->
            <li class="nav-item dropdown user-menu"> <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"> 
                <img src="{{asset('db-assets/assets/img/user2-160x160.jpg')}}" class="user-image rounded-circle shadow" alt="User Image"> 
                <span class="d-none d-md-inline">{{Auth::user()->name}}</span> </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end"> <!--begin::User Image-->
                    <li class="user-header text-bg-primary"> 
                        {{-- <img src="../../dist/assets/img/user2-160x160.jpg" class="rounded-circle shadow" alt="User Image"> --}}
                        <p>
                            {{Auth::user()->name}}
                        </p>
                    </li> <!--end::User Image--> <!--begin::Menu Body-->
                    <li class="user-footer"> 
                        <a href="{{route('logout')}}" class="btn btn-primary form-control">Keluar</a> 
                    </li> <!--end::Menu Footer-->
                </ul>
            </li> <!--end::User Menu Dropdown-->
        </ul> <!--end::End Navbar Links-->
    </div> <!--end::Container-->
</nav>