<header class="header-page">
    <div class="container">
        <div class="row">
            <div class="col-4 offset-8">
                <ul class="navigation-page clearfix">
                    <li class="@linkactive('/')"><a href="{{ route('home') }}">Home</a></li>
                    @guest
                        <li class="@linkactive('login')"><a href="{{ route('auth.loginForm') }}">Login</a></li>
                        <li class="@linkactive('register')"><a href="{{ route('auth.registerForm') }}">Registration</a></li>
                    @endguest
                    @admin
                        <li><a href="{{ route('admin.index') }}">Admin panel</a></li>
                    @endadmin
                    @auth
                        <li class="@linkactive('cabinet')"><a href="{{ route('user.cabinet') }}">Cabinet</a></li>
                        <li><a href="{{ route('auth.logout') }}">Logout</a></li>
                    @endauth
                </ul>
            </div>
        </div>
    </div>
</header>
