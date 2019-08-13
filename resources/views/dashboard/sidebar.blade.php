<div class="pcoded-main-container">
        <div class="pcoded-wrapper">
                <nav class="pcoded-navbar" >
                        <div class="sidebar_toggle">
                            {{--  <a href="{{URL::to('/da')}}"></a>  --}}
                            <router-link tag="li" to="/">
                                <a>
                                        <i class="icon-close icons"></i>
                                </a>

                            </router-link>
                        </div>
                        <div class="pcoded-inner-navbar main-menu">

                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation"  >Navigation</div>
                            <ul class="pcoded-item pcoded-left-item">
                                    <router-link tag="li" to="/" exact>
                                        <a>
                                            <span class="pcoded-micon"><i class="ti-home"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                            <span class="pcoded-mcaret"></span> 
                                        </a>
                                    </router-link>
                                    <router-link tag="li" to="/users">
                                        <a>
                                                <span class="pcoded-micon"><i class="ti-user"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.page_layout.main">Users</span>
                                                <span class="pcoded-mcaret"></span>
                                        </a>
                                    </router-link>
                               

                            </ul>
                        </div>
                </nav>

                @include('dashboard.content')

        </div>

    </div>
    