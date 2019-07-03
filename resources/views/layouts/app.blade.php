<div id="app">
    @if(!isset($fs))
    <header>
        <b-navbar
                toggleable="md"
                type="dark"
                variant="dark"
                sticky
        >
            <b-navbar-toggle target="nav_collapse"></b-navbar-toggle>
            <b-navbar-brand alt="DIF Reservation System">
                DIF-CRS
            </b-navbar-brand>
            <b-collapse is-nav id="nav_collapse">

                    <!-- LEFT ALIGNMENT NAV -->
                    <b-navbar-nav>
                        <!--
                        <b-nav-item href="#">About</b-nav-item>
                        <b-nav-item href="#">Map</b-nav-item>
                        -->
                        @guest
                            <!-- add guest only stuff here -->
                        @else
                            <b-nav-item href="{{route('home')}}">Dashboard</b-nav-item>
                            @if(auth()->user()->isAdmin())
                                <b-nav-item-dropdown text="Administration">
                                    <b-dropdown-item href="{{route('reservations')}}">Reservations</b-dropdown-item>
                                </b-nav-item-dropdown>
                            @endif
                        @endif
                    </b-navbar-nav>
                    <!-- RIGHT ALIGNMENT NAV -->
                    <b-navbar-nav class="ml-auto">
                        @guest
                        <b-nav-item href="{{route('login')}}">{{__('Login')}}</b-nav-item>
                        @if(env('REGISTRATION_ENABLED'))<b-nav-item href="{{route('register')}}">{{__('Register')}}</b-nav-item>@endif
                        @else
                            <b-nav-item-dropdown text="{{ auth()->user()->name }} {{ auth()->user()->isAdmin() ? '(admin)' : '' }}" right>
                                @if(auth()->user()->isAdmin())
                                    <b-dropdown-item>Settings</b-dropdown-item>
                                    @endif
                                <b-dropdown-item onclick="document.getElementById('logout-form').submit();">
                                    {{__('Logout')}}
                                </b-dropdown-item>
                                <b-form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                </b-form>
                            </b-nav-item-dropdown>
                        @endguest
                    </b-navbar-nav>

            </b-collapse>
        </b-navbar>
    </header>
    @endif
    <main id="main">
        <br>
        <b-container>
            @yield('content')
        </b-container>
    </main>
</div>