<header class="header-page">
    <div class="container">
        <div class="row">
            <div class="col-4 offset-8">
                <ul class="navigation-page clearfix">
                    <li><a href="{{ route('home') }}">Site</a></li>
                    <li class="@linkactive('admin')"><a href="{{ route('admin.index') }}">Home admin</a></li>
                    <li><a href="{{ route('auth.logout') }}">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
