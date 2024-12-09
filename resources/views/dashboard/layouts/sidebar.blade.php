<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
    <div class="sidebar-brand"> <!--begin::Brand Link-->
         <a href="#" class="brand-link"> <!--begin::Brand Image--> 
            {{-- <img src="../../dist/assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image opacity-75 shadow"> <!--end::Brand Image--> <!--begin::Brand Text-->  --}}
            <span class="brand-text fw-light">Admin Panel</span> <!--end::Brand Text--> </a> <!--end::Brand Link--> </div> <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2"> <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                {{-- <li class="nav-item menu-open"> <a href="#" class="nav-link active"> <i class="nav-icon bi bi-speedometer"></i>
                        <p>
                            Dashboard
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"> <a href="./index.html" class="nav-link active"> <i class="nav-icon bi bi-circle"></i>
                                <p>Dashboard v1</p>
                            </a> </li>
                        <li class="nav-item"> <a href="./index2.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Dashboard v2</p>
                            </a> </li>
                        <li class="nav-item"> <a href="./index3.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Dashboard v3</p>
                            </a> </li>
                    </ul>
                </li> --}}
                {{-- USED --}}
                <li class="nav-item"> <a href="{{route('dashboard')}}" class="nav-link {{Request::is(['dashboard']) ? 'active' : ''}} "> <i class="nav-icon bi bi-speedometer"></i>
                        <p>Dashboard</p>
                    </a> 
                </li>
                <li class="nav-header">DATA</li>
                <li class="nav-item"> <a href="{{route('db.siswa')}}" class="nav-link {{Request::is(['dashboard/siswa*']) ? 'active' : ''}} "> <i class="nav-icon bi bi-people-fill"></i>
                        <p>Siswa</p>
                    </a> 
                </li>
                <li class="nav-item"> <a href="{{route('db.guru')}}" class="nav-link {{Request::is(['dashboard/guru*']) ? 'active' : ''}} "> <i class="nav-icon bi bi-person-bounding-box"></i>
                        <p>Guru</p>
                    </a> 
                </li>
                <li class="nav-item"> <a href="{{route('db.galeri')}}" class="nav-link {{Request::is(['dashboard/galeri*']) ? 'active' : ''}} "> <i class="nav-icon bi bi-image"></i>
                        <p>Galeri</p>
                    </a> 
                </li>
                <li class="nav-item"> <a href="{{route('db.ekstrakurikuler')}}" class="nav-link {{Request::is(['dashboard/ekstrakurikuler*']) ? 'active' : ''}} "> <i class="nav-icon bi bi-calendar-event"></i>
                        <p>Ekstrakurikuler</p>
                    </a> 
                </li>
                <li class="nav-item"> <a href="{{route('db.sertifikasi.guru')}}" class="nav-link {{Request::is(['dashboard/sertifikasi/guru*']) ? 'active' : ''}} "> <i class="nav-icon bi bi-patch-check"></i>
                        <p>Sertifikasi Guru</p>
                    </a> 
                </li>
                {{-- END USED --}}
            </ul> <!--end::Sidebar Menu-->
        </nav>
    </div> <!--end::Sidebar Wrapper-->
</aside>