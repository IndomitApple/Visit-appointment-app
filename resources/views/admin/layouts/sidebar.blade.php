<div class="page-wrap">
    <div class="app-sidebar colored">
        <div class="sidebar-header">
            <a class="header-brand" href="dashboard">
                <div class="logo-img">
                    <img src="{{asset('template/src/img/hospital-svgrepo-com.svg')}}" class="header-brand-img" alt="lavalite">
                </div>
                <span class="text">TwójLekarz</span>
            </a>
            <button type="button" class="nav-toggle"><i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button>
            <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
        </div>

        <div class="sidebar-content">
            <div class="nav-container">
                <nav id="main-menu-navigation" class="navigation-main">
                    <div class="nav-lavel">Nawigacja</div>
                    <div class="nav-item active">
                        <a href="{{url('dashboard')}}">
                            <i class="ik ik-bar-chart-2"></i>
                            <span>Panel</span>
                        </a>
                    </div>
<!--                    <div class="nav-item">
                        <a href="pages/navbar.html"><i class="ik ik-menu"></i><span>Navigation</span> <span class="badge badge-success">New</span></a>
                    </div>-->
                    @if(auth()->check() && auth()->user()->role->name == 'admin')
                        <div class="nav-item has-sub">
                            <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Lekarze</span> <span class="badge badge-danger"></span></a>
                            <div class="submenu-content">
                                <a href="{{route('doctor.index')}}" class="menu-item">Lista</a>
                                <a href="{{route('doctor.create')}}" class="menu-item">Stwórz</a>
                            </div>
                        </div>
                    @endif
                    @if(auth()->check() && auth()->user()->role->name == 'doctor')
                        <div class="nav-item has-sub">
                            <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Harmonogram</span> <span class="badge badge-danger"></span></a>
                            <div class="submenu-content">
                                <a href="{{route('appointment.index')}}" class="menu-item">Lista</a>
                                <a href="{{route('appointment.create')}}" class="menu-item">Stwórz</a>
                            </div>
                        </div>
                    @endif
                    @if(auth()->check() && auth()->user()->role->name == 'doctor')
                        <div class="nav-item has-sub">
                            <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Wizyty</span> <span class="badge badge-danger"></span></a>
                            <div class="submenu-content">
                                <a href="{{route('patients.today')}}" class="menu-item">Zaplanowane</a>
                                <a href="{{route('prescribed.patients')}}" class="menu-item">Odbyte</a>
                            </div>
                        </div>
                    @endif
                    @if(auth()->check() && auth()->user()->role->name == 'admin')
                        <div class="nav-item has-sub">
                            <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Wizyty</span> <span class="badge badge-danger"></span></a>
                            <div class="submenu-content">
                                <a href="{{route('patient')}}" class="menu-item">Dzisiaj</a>
                                <a href="{{route('all.appointments')}}" class="menu-item">Wszystkie</a>
                            </div>
                        </div>
                    @endif
                    @if(auth()->check() && auth()->user()->role->name == 'admin')
                        <div class="nav-item has-sub">
                            <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Specjalizacje</span> <span class="badge badge-danger"></span></a>
                            <div class="submenu-content">
                                <a href="{{route('department.index')}}" class="menu-item">Wyświetl wszystkie</a>
                                <a href="{{route('department.create')}}" class="menu-item">Dodaj nową</a>
                            </div>
                        </div>
                    @endif
                    <div class="nav-item active">
                        <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="{{ route('logout') }}">
                            <i class="ik ik-power dropdown-icon"></i>
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </nav>
            </div>
        </div>
    </div>
