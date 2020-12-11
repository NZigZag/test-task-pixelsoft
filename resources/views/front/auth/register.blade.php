@extends('front.layouts.layout')
@section('title')Register @parent @endsection

@section('content')
<section class="wrapper-register-page">
    <div class="container">
        <div class="row">
            <div class="register-form col-12">
                <form method="POST" action="{{ route('auth.register') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input id="name"
                               type="text"
                               class="@error('name') is-invalid @enderror"
                               name="name"
                               value="{{ old('name') }}"
                               required
                               autocomplete="name"
                               autofocus
                        >
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input id="email"
                               type="email"
                               class="@error('email') is-invalid @enderror"
                               name="email"
                               value="{{ old('email') }}"
                               required
                               autocomplete="email"
                        >
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input id="password"
                               type="password"
                               class="@error('password') is-invalid @enderror"
                               name="password"
                               required
                               autocomplete="new-password"
                        >
                    </div>
                    <div class="form-group">
                        <label for="password-confirm">Confirm password:</label>
                        <input id="password-confirm"
                               type="password"
                               name="password_confirmation"
                               required
                               autocomplete="new-password"
                        >
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn-register">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
