@extends('front.layouts.layout')
@section('title')Login @parent @endsection

@section('content')
<section class="wrapper-login-page">
    <div class="container">
        <div class="row">
            <div class="login-form col-12">
                <form method="POST" action="{{ route('auth.login') }}">
                    @csrf

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input id="email"
                               type="email"
                               class="@error('email') is-invalid @enderror"
                               name="email"
                               value="{{ old('email') }}"
                               required
                               autocomplete="email"
                               autofocus
                        >
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input id="password"
                               type="password"
                               class="@error('password') is-invalid @enderror"
                               name="password"
                               required
                               autocomplete="current-password"
                        >
                    </div>
                    <div class="form-group clearfix">
                            <input type="checkbox"
                                   name="remember"
                                   id="remember"
                                    {{ old('remember') ? 'checked' : '' }}
                            >
                            <label for="remember">Remember me</label>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn-login">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
