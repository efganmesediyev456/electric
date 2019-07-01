<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{ route('admin.dashboard') }}" class="site_title">
                <span>{{ config('app.name') }}</span>
            </a>
        </div>

        <div class="clearfix"></div>

        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="{{ auth()->user()->avatar }}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <h2>{{ auth()->user()->name }}</h2>
            </div>
        </div>

        <br/>

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>{{ __('views.backend.section.navigation.sub_header_0') }}</h3>
                <ul class="nav side-menu">
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            {{ __('views.backend.section.navigation.menu_0_1') }}
                        </a>
                    </li>
                </ul>
            </div>
            <div class="menu_section">
                <h3>{{ __('views.backend.section.navigation.sub_header_1') }}</h3>
                <ul class="nav side-menu">
                    <li>
                        <a href="{{ route('admin.users') }}">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            {{ __('views.backend.section.navigation.menu_1_1') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.users.restore') }}">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            {{ __('views.backend.section.navigation.menu_1_3') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.lngs.index') }}">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            Languages
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.menus.index') }}">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            Menular
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.news.index') }}">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            Xəbərlər
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.categories.index') }}">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            Kateqoriyalar
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.books.index') }}">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            Kitablar
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.sliders.index') }}">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            Sliderler
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.generals.index') }}">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            Site general
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.abouts.index') }}">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            Haqqimizda
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.socials.index') }}">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            Social linkler
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
