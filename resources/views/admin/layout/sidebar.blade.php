<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li class="menu-title ion ion-md-menu"> Menu</li>
                <li>
                    <a href="{{ url('admin/') }}" class="waves-effect">
                        <i class="dripicons-home"></i><span class="badge badge-info badge-pill float-right"></span> <span> Dashboard </span>
                    </a>
                </li>
               
                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-menu"></i><span> Gallery <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href="{{ url('admin/foto') }}">Foto</a></li >
                        <li><a href="{{ url('admin/video') }}">Video</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ url('admin/vtour') }}" class="waves-effect">
                        <i class="dripicons-location"></i><span class="badge badge-info badge-pill float-right"></span> <span> V-Tour</span>
                    </a>
                </li>
                <!-- <li>
                    <a href="{{ url('admin/tempat') }}" class="waves-effect">
                        <i class="dripicons-location"></i><span class="badge badge-info badge-pill float-right"></span> <span> Tempat</span>
                    </a>
                </li> -->
                <li>
                    <a href="{{ url('admin/admin') }}" class="waves-effect">
                        <i class="dripicons-user"></i><span class="badge badge-info badge-pill float-right"></span> <span> Admin</span>
                    </a>
                </li>
                <li>
                    <a onclick="return confirm('Apakah Anda Yakin Ingin Keluar?')" href="{{ url('logout') }}" class="waves-effect">
                        <i class="dripicons-exit"></i><span class="badge badge-info badge-pill float-right"></span> <span>Logout</span>
                    </a>
                </li>
              
              
                
    
       
            </ul>

        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>