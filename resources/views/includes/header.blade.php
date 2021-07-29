@auth
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
                <div class="w-100 d-block">
                    <img class="sidebar-brand-icon d-block img-fluid" src="{{ asset('img/almansour.jpeg') }}" alt="">
                </div>
                <hr>
                <div class="sidebar-brand-text mx-3">Al-Mansour</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item {{ Route::currentRouteName() == 'posts.index' ? 'active' : '' }}">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                   aria-expanded="true" aria-controls="collapseTwo">
                    <i class="far fa-newspaper"></i>
                    <span>News Feed</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('posts.index') }}">News</a>
                        <a class="collapse-item" href="{{ route('posts.create') }}">Add New News</a>
                    </div>
                </div>
            </li>
            <li class="nav-item  {{ Route::currentRouteName() == 'categories.index' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('categories.index') }}">
                    <i class="fas fa-square"></i>
                    <span>Categories</span></a>
            </li>
            <li class="nav-item  {{ Route::currentRouteName() == 'services.index' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('services.index') }}">
                    <i class="fas fa-square"></i>
                    <span>Services</span></a>
            </li>
            <li class="nav-item  {{ Route::currentRouteName() == 'contacts.index' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('contacts.index') }}">
                    <i class="fas fa-phone-square-alt"></i>
                    <span>Contact</span></a>
            </li>
            <li class="nav-item  {{ Route::currentRouteName() == 'galleries.index' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('galleries.index') }}">
                    <i class="fas fa-phone-square-alt"></i>
                    <span>Gallery</span></a>
            </li>
{{--            <li class="nav-item  {{ Route::currentRouteName() == 'users.index' ? 'active' : '' }}">--}}
{{--                <a class="nav-link" href="{{ route('users.index') }}">--}}
{{--                    <i class="fas fa-users"></i>--}}
{{--                    <span>Users</span></a>--}}
{{--            </li>--}}
{{--            <li class="nav-item {{ Route::currentRouteName() == 'homes.edit' ? 'active' : '' }}">--}}
{{--                <a class="nav-link" href="{{ route('homes.edit', '1') }}">--}}
{{--                    <i class="fas fa-list-ul"></i>--}}
{{--                    <span>Home Page</span></a>--}}
{{--            </li>--}}
            <li class="nav-item {{ Route::currentRouteName() == 'abouts.edit' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('abouts.edit', '1') }}">
                    <i class="fas fa-list-ul"></i>
                    <span>About App</span></a>
            </li>
            <li class="nav-item {{ Route::currentRouteName() == 'infos.edit' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('infos.edit') }}">
                    <i class="fas fa-list-ul"></i>
                    <span>Site Information</span></a>
            </li>
{{--            <li class="nav-item {{ Route::currentRouteName() == 'terms.edit' ? 'active' : '' }}">--}}
{{--                <a class="nav-link" href="{{ route('terms.edit', '1') }}">--}}
{{--                    <i class="fas fa-list-ul"></i>--}}
{{--                    <span>Terms of Use </span></a>--}}
{{--            </li>--}}
{{--            <li class="nav-item {{ Route::currentRouteName() == 'privacies.edit' ? 'active' : '' }}">--}}
{{--                <a class="nav-link" href="{{ route('privacies.edit', '1') }}">--}}
{{--                    <i class="fas fa-list-ul"></i>--}}
{{--                    <span>Privacy Statement</span></a>--}}
{{--            </li>--}}
            <hr class="sidebar-divider d-none d-md-block">
        </ul>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <div
                        class="d-sm-inline-block form-inline mr-auto my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <strong>@yield('page-name')</strong>
                        </div>
                    </div>
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                {{ Auth::user()->name }}
                                </span>
                                <img class="img-profile rounded-circle"
                                     src="{{ asset('img/undraw_profile.svg') }}">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                 aria-labelledby="userDropdown">
                                <a onclick="event.preventDefault();document.getElementById('logout-form').submit()"
                                   class="dropdown-item" href="{{ route('login') }}" data-toggle="modal"
                                   data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                                <form action="{{ route('logout') }}" id="logout-form" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </nav>
@endauth
