
@extends('layouts.auth')

@section('title', 'ثبت‌نام')

@section('content')

<div class="sky-auth-card">

    <div class="sky-auth-brand">
        <div class="sky-auth-logo">S</div>
        <h1>SkyTask</h1>
        <p>مدیریت هوشمند وظایف و پروژه‌ها</p>
    </div>

    <div class="sky-auth-heading">
        <h2>ساخت حساب کاربری</h2>
        <p>برای شروع، اطلاعات خود را وارد کنید.</p>
    </div>

    <form action="{{ route('register') }}" method="POST">
        @csrf

        <div class="sky-auth-row">

            <div class="sky-form-group">
                <label for="first_name">نام</label>
                <input
                    type="text"
                    id="first_name"
                    name="first_name"
                    value="{{ old('first_name') }}"
                    placeholder="نام خود را وارد کنید"
                    required
                >
                @error('first_name')
                    <span class="sky-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="sky-form-group">
                <label for="last_name">نام خانوادگی</label>
                <input
                    type="text"
                    id="last_name"
                    name="last_name"
                    value="{{ old('last_name') }}"
                    placeholder="نام خانوادگی"
                    required
                >
                @error('last_name')
                    <span class="sky-error">{{ $message }}</span>
                @enderror
            </div>

        </div>

        <div class="sky-form-group">
            <label for="email">آدرس ایمیل</label>
            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email') }}"
                placeholder="example@gmail.com"
                required
            >
            @error('email')
                <span class="sky-error">{{ $message }}</span>
            @enderror
        </div>

        <div class="sky-form-group">
            <label for="mobile">شماره موبایل</label>
            <input
                type="tel"
                id="mobile"
                name="mobile"
                value="{{ old('mobile') }}"
                placeholder="09123456789"
                dir="ltr"
                required
            >
            @error('mobile')
                <span class="sky-error">{{ $message }}</span>
            @enderror
        </div>

        <div class="sky-form-group">
            <label for="password">رمز عبور</label>
            <input
                type="password"
                id="password"
                name="password"
                placeholder="حداقل ۸ کاراکتر"
                required
            >
            @error('password')
                <span class="sky-error">{{ $message }}</span>
            @enderror
        </div>

        <div class="sky-form-group">
            <label for="password_confirmation">تکرار رمز عبور</label>
            <input
                type="password"
                id="password_confirmation"
                name="password_confirmation"
                placeholder="رمز عبور را مجدداً وارد کنید"
                required
            >
        </div>

        <button type="submit" class="sky-auth-button">
            ساخت حساب کاربری
        </button>

    </form>

    <div class="sky-auth-footer">
        قبلاً حساب ساخته‌اید؟
        <a href="{{ route('login') }}">وارد شوید</a>
    </div>

</div>

@endsection
