<!-- Navbar -->
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
data-scroll="true">
<div class="container-fluid py-1 px-3">
    <nav aria-label="breadcrumb">
    </nav>
    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                </div>
            </a>
        </div>
        @auth
        <ul class="navbar-nav justify-content-end">
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="text-center me-2 d-flex align-items-center">
                        <div class="avatar avatar-xs">

                            <img src="{{ asset('r34l/assets/img/team-5.jpg') }}" alt="kal" class="border-radius-lg shadow ">
                        </div>
                        <span class="d-inline text-sm z-index-1 font-weight-bold p-2">{{ Auth::user()->username }}</span>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="dropdownMenuButton">
                    {{-- <li class="text-center d-flex align-items-center justify-content-center">
                        <a class="dropdown-item border-radius-md" href="#">
                            <i class="fa fa-cog me-1"></i>
                                <p class="d-inline text-sm z-index-1 font-weight-bold"
                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    title="Sign off your account">Profile Settings</p>
                        </a>
                    </li> --}}
                    <div class="dropdown-divider"></div>

                    <li class="text-center d-flex align-items-center justify-content-center">
                        <a class="dropdown-item border-radius-md" href="#"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out me-1"></i>
                            <p class="d-inline text-sm z-index-1 font-weight-bold"
                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                title="Sign off your account">Logout</p>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>

                </ul>
            </li>
        </ul>
        @endauth
    </div>
</div>
</nav>
<!-- End Navbar -->
