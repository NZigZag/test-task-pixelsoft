<footer class="footer-page">
    <div class="container">
        <div class="row">
            <div class="col-4 footer-links">
                <ul>
                    <li>Links:</li>
                    <li><a class="@linkactive('/')" href="{{ route("home") }}">Home</a></li>
                    @guest
                        <li><a class="@linkactive('login')" href="{{ route('auth.loginForm') }}">Login</a></li>
                        <li><a class="@linkactive('register')" href="{{ route('auth.registerForm') }}">Registration</a></li>
                    @endguest
                    @admin
                        <li><a href="{{ route('admin.index') }}">Admin panel</a></li>
                    @endadmin
                    @auth
                        <li><a class="@linkactive('cabinet')" href="{{ route('user.cabinet') }}">Cabinet</a></li>
                    @endauth
                </ul>
            </div>
            <div class="col-8 footer-info">
                <ul>
                    <li>Info:</li>
                    <li>Pixelsoft Laravel Developer Exercise</li>
                    <li>&copy; {{ date('Y') }} by Ziginov Nikolay</li>
                </ul>
            </div>
        </div>
    </div>
</footer>
