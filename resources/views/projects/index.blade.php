@extends('layouts.app')

@section('title', 'مدیریت پروژه‌ها')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/projects.css') }}">
@endpush

@section('content')
<div class="sky-projects-page">
    <section class="sky-projects-header">
        <div>
            <div class="sky-projects-eyebrow">SkyTask / فضای کاری</div>
            <h1>مدیریت پروژه‌ها</h1>
            <p>پروژه‌های گروه‌های کاری را ایجاد، سازمان‌دهی و پیگیری کن.</p>
        </div>
        <div class="sky-projects-header-actions">
            <a href="{{ url('/projects/create') }}" class="btn sky-project-primary">+ ایجاد پروژه جدید</a>
            <button type="button" class="btn sky-project-outline" id="skyShowArchived">پروژه‌های بایگانی‌شده</button>
        </div>
    </section>

    <section class="sky-project-stats">
        <div class="sky-project-stat"><span class="sky-project-stat-icon project-icon-blue">▦</span><div><small>کل پروژه‌ها</small><strong>۲۴</strong><em>تمام پروژه‌های ثبت‌شده</em></div></div>
        <div class="sky-project-stat"><span class="sky-project-stat-icon project-icon-green">✓</span><div><small>پروژه‌های فعال</small><strong>۱۲</strong><em>در حال اجرا</em></div></div>
        <div class="sky-project-stat"><span class="sky-project-stat-icon project-icon-purple">◷</span><div><small>تکمیل‌شده</small><strong>۸</strong><em>به پایان رسیده</em></div></div>
        <div class="sky-project-stat"><span class="sky-project-stat-icon project-icon-orange">Ⅱ</span><div><small>متوقف‌شده</small><strong>۴</strong><em>نیازمند بررسی</em></div></div>
    </section>

    <section class="sky-project-toolbar">
        <div class="sky-project-tabs">
            <button type="button" class="sky-project-tab is-active" data-project-status="all">همه پروژه‌ها <b>۲۴</b></button>
            <button type="button" class="sky-project-tab" data-project-status="active">فعال</button>
            <button type="button" class="sky-project-tab" data-project-status="completed">تکمیل‌شده</button>
            <button type="button" class="sky-project-tab" data-project-status="paused">متوقف‌شده</button>
            <button type="button" class="sky-project-tab" data-project-status="archived">بایگانی‌شده</button>
        </div>
        <div class="sky-project-filters">
            <label class="sky-project-search"><span>⌕</span><input type="search" id="skyProjectSearch" placeholder="جستجوی نام پروژه..." aria-label="جستجوی پروژه"></label>
            <select id="skyProjectGroup" aria-label="فیلتر گروه کاری">
                <option value="">همه گروه‌های کاری</option>
                <option value="فنی">تیم فنی</option>
                <option value="طراحی">تیم طراحی</option>
                <option value="بازاریابی">تیم بازاریابی</option>
            </select>
            <select id="skyProjectManager" aria-label="فیلتر مدیر پروژه">
                <option value="">همه مدیران</option>
                <option value="حامد شاکری">حامد شاکری</option>
                <option value="علی رضایی">علی رضایی</option>
                <option value="سارا محمدی">سارا محمدی</option>
            </select>
            <select id="skyProjectSort" aria-label="مرتب‌سازی پروژه‌ها">
                <option value="default">مرتب‌سازی پیش‌فرض</option>
                <option value="name">نام پروژه</option>
                <option value="progress">میزان پیشرفت</option>
            </select>
            <div class="sky-project-view-switch" role="group" aria-label="نوع نمایش">
                <button type="button" class="is-active" data-project-view="grid" aria-label="نمایش کارت‌ها">▦</button>
                <button type="button" data-project-view="list" aria-label="نمایش فهرستی">☷</button>
            </div>
        </div>
    </section>

    <section class="sky-projects-content">
        <div class="sky-projects-main">
            <div class="sky-projects-result-head"><h2>پروژه‌های فضای کاری</h2><span id="skyProjectCount">۴ پروژه نمایشی</span></div>
            <div class="sky-project-grid" id="skyProjectGrid">
                <article class="sky-project-card is-selected" tabindex="0" role="button" data-project-id="1" data-status="active" data-group="فنی" data-manager="حامد شاکری" data-name="طراحی وبسایت شرکتی" data-progress="75">
                    <div class="sky-project-card-top"><span class="sky-project-color project-color-blue"></span><span class="sky-project-status project-status-active">فعال</span><button type="button" class="sky-project-more" aria-label="عملیات پروژه">•••</button></div>
                    <h3>طراحی وبسایت شرکتی</h3><p>طراحی و توسعه وبسایت رسمی مجموعه با پنل مدیریت اختصاصی.</p>
                    <div class="sky-project-card-meta"><span>تیم فنی</span><span>۵ عضو</span><span>مهلت: ۲۸ آبان</span></div>
                    <div class="sky-project-progress-head"><span>پیشرفت پروژه</span><strong>۷۵٪</strong></div><div class="sky-progress-track"><span style="width:75%"></span></div>
                    <div class="sky-project-card-bottom"><div class="sky-project-avatars"><span>ح</span><span>ع</span><span>س</span><i>+۲</i></div><small>شروع: ۱۴۰۵/۰۷/۰۱</small></div>
                </article>

                <article class="sky-project-card" tabindex="0" role="button" data-project-id="2" data-status="active" data-group="فنی" data-manager="علی رضایی" data-name="توسعه پنل مدیریت" data-progress="45">
                    <div class="sky-project-card-top"><span class="sky-project-color project-color-purple"></span><span class="sky-project-status project-status-active">فعال</span><button type="button" class="sky-project-more" aria-label="عملیات پروژه">•••</button></div>
                    <h3>توسعه پنل مدیریت</h3><p>پیاده‌سازی بخش مدیریت کاربران، نقش‌ها و دسترسی‌های سامانه.</p>
                    <div class="sky-project-card-meta"><span>تیم فنی</span><span>۴ عضو</span><span>مهلت: ۳۰ آبان</span></div>
                    <div class="sky-project-progress-head"><span>پیشرفت پروژه</span><strong>۴۵٪</strong></div><div class="sky-progress-track"><span style="width:45%"></span></div>
                    <div class="sky-project-card-bottom"><div class="sky-project-avatars"><span>ع</span><span>ح</span><span>م</span><i>+۱</i></div><small>شروع: ۱۴۰۵/۰۷/۱۲</small></div>
                </article>

                <article class="sky-project-card" tabindex="0" role="button" data-project-id="3" data-status="completed" data-group="طراحی" data-manager="سارا محمدی" data-name="بازطراحی فروشگاه اینترنتی" data-progress="100">
                    <div class="sky-project-card-top"><span class="sky-project-color project-color-green"></span><span class="sky-project-status project-status-completed">تکمیل‌شده</span><button type="button" class="sky-project-more" aria-label="عملیات پروژه">•••</button></div>
                    <h3>بازطراحی فروشگاه اینترنتی</h3><p>بهبود تجربه کاربری، طراحی صفحات محصول و بهینه‌سازی مسیر خرید.</p>
                    <div class="sky-project-card-meta"><span>تیم طراحی</span><span>۶ عضو</span><span>تکمیل: ۲۶ آبان</span></div>
                    <div class="sky-project-progress-head"><span>پیشرفت پروژه</span><strong>۱۰۰٪</strong></div><div class="sky-progress-track progress-green"><span style="width:100%"></span></div>
                    <div class="sky-project-card-bottom"><div class="sky-project-avatars"><span>س</span><span>ن</span><span>ع</span><i>+۳</i></div><small>شروع: ۱۴۰۵/۰۶/۲۰</small></div>
                </article>

                <article class="sky-project-card" tabindex="0" role="button" data-project-id="4" data-status="paused" data-group="بازاریابی" data-manager="علی رضایی" data-name="کمپین معرفی محصول" data-progress="20">
                    <div class="sky-project-card-top"><span class="sky-project-color project-color-orange"></span><span class="sky-project-status project-status-paused">متوقف‌شده</span><button type="button" class="sky-project-more" aria-label="عملیات پروژه">•••</button></div>
                    <h3>کمپین معرفی محصول</h3><p>برنامه‌ریزی و اجرای کمپین محتوایی برای معرفی نسخه جدید محصول.</p>
                    <div class="sky-project-card-meta"><span>تیم بازاریابی</span><span>۳ عضو</span><span>مهلت: ۱۰ آذر</span></div>
                    <div class="sky-project-progress-head"><span>پیشرفت پروژه</span><strong>۲۰٪</strong></div><div class="sky-progress-track progress-orange"><span style="width:20%"></span></div>
                    <div class="sky-project-card-bottom"><div class="sky-project-avatars"><span>ع</span><span>م</span><span>ر</span></div><small>شروع: ۱۴۰۵/۰۸/۰۱</small></div>
                </article>
            </div>
            <div class="sky-project-empty" id="skyProjectEmpty" hidden><span>▦</span><h3>پروژه‌ای پیدا نشد</h3><p>فیلترها را تغییر بده یا پروژه جدیدی ایجاد کن.</p></div>
            <div class="sky-project-pagination"><span>نمایش ۱ تا ۴ از ۲۴ پروژه</span><div><button type="button" disabled>‹</button><button type="button" class="current">۱</button><button type="button">۲</button><button type="button">۳</button><button type="button">›</button></div></div>
        </div>

        <aside class="sky-project-detail" id="skyProjectDetail">
            <div class="sky-project-detail-head"><strong>نمای کلی پروژه</strong><button type="button" id="skyCloseProjectDetail" aria-label="بستن جزئیات">×</button></div>
            <span class="sky-project-detail-status project-status-active" id="skyDetailProjectStatus">فعال</span>
            <h2 id="skyDetailProjectName">طراحی وبسایت شرکتی</h2>
            <p id="skyDetailProjectDescription">طراحی و توسعه وبسایت رسمی مجموعه با پنل مدیریت اختصاصی و رابط کاربری واکنش‌گرا.</p>
            <div class="sky-detail-progress"><div><strong>میزان پیشرفت</strong><b id="skyDetailProgressText">۷۵٪</b></div><div class="sky-progress-track"><span id="skyDetailProgressBar" style="width:75%"></span></div></div>
            <div class="sky-project-detail-info">
                <div><small>گروه کاری</small><strong id="skyDetailGroup">تیم فنی</strong></div>
                <div><small>مدیر پروژه</small><strong id="skyDetailManager">حامد شاکری</strong></div>
                <div><small>تعداد اعضا</small><strong id="skyDetailMembers">۵ نفر</strong></div>
                <div><small>تاریخ شروع</small><strong>۱۴۰۵/۰۷/۰۱</strong></div>
                <div><small>مهلت پایان</small><strong>۱۴۰۵/۰۸/۲۸</strong></div>
                <div><small>تعداد وظایف</small><strong>۲۸ وظیفه</strong></div>
            </div>
            <div class="sky-project-detail-section"><div class="sky-project-detail-section-head"><strong>اعضای پروژه</strong><a href="#">مشاهده همه</a></div><div class="sky-project-member"><span>ح</span><div><strong>حامد شاکری</strong><small>مدیر پروژه</small></div></div><div class="sky-project-member"><span>ع</span><div><strong>علی رضایی</strong><small>توسعه‌دهنده</small></div></div><div class="sky-project-member"><span>س</span><div><strong>سارا محمدی</strong><small>طراح رابط کاربری</small></div></div></div>
            <div class="sky-project-detail-actions"><a href="{{ url('/projects/1') }}" class="btn sky-project-primary">مشاهده جزئیات پروژه</a><a href="{{ url('/projects/create') }}" class="btn sky-project-outline">ویرایش پروژه</a></div>
        </aside>
    </section>
</div>
@endsection

@push('scripts')
<script src="{{ asset('assets/js/projects.js') }}"></script>
@endpush
