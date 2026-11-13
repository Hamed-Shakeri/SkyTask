
@extends('layouts.auth')

@section('title', 'ورود')

@section('content')

<div class="sky-auth-card">

    <div class="sky-auth-brand">
        <div class="sky-auth-logo">S</div>
        <h1>SkyTask</h1>
        <p>مدیریت هوشمند وظایف و پروژه‌ها</p>
    </div>

    <div class="sky-auth-heading">
        <h2>خوش برگشتید!</h2>
        <p>برای ورود به حساب خود اطلاعات را وارد کنید.</p>
    </div>

    <form action="{{ route('login') }}" method="POST">
        @csrf

        <div class="sky-form-group">
            <label for="login">ایمیل یا شماره موبایل</label>
            <input
                type="text"
                id="login"
                name="login"
                value="{{ old('login') }}"
                placeholder="ایمیل یا شماره موبایل خود را وارد کنید"
                required
            >
            @error('login')
                <span class="sky-error">{{ $message }}</span>
            @enderror
        </div>

        <div class="sky-form-group">
            <label for="password">رمز عبور</label>
            <input
                type="password"
                id="password"
                name="password"
                placeholder="رمز عبور خود را وارد کنید"
                required
            >
            @error('password')
                <span class="sky-error">{{ $message }}</span>
            @enderror
        </div>

        <div class="sky-auth-options">
            <label class="sky-remember">
                <input type="checkbox" name="remember" value="1">
                مرا به خاطر بسپار
            </label>
        </div>

        <button type="submit" class="sky-auth-button">
            ورود به حساب کاربری
        </button>

    </form>

    <div class="sky-auth-footer">
        هنوز حساب کاربری ندارید؟
        <a href="{{ route('register') }}">ثبت‌نام کنید</a>
    </div>

</div>

@endsection
