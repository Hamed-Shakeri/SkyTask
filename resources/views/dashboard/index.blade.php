@extends('layouts.app')

@section('title', 'داشبورد')

@section('content')
<section class="sky-welcome">
    <div>
        <h1>سلام، حامد عزیز <span class="sky-wave">👋</span></h1>
        <p>به داشبورد مدیریت وظایف خودت خوش آمدی. اینجا می‌تونی وضعیت فعالیت‌ها و پروژه‌های تیم‌ت رو بررسی کنی.</p>
    </div>
    <div class="sky-welcome-actions">
        <a href="{{ url('/projects') }}" class="btn sky-btn sky-btn-light">مشاهده پروژه‌ها</a>
        <a href="{{ url('/tasks/create') }}" class="btn sky-btn sky-btn-primary">+ ایجاد وظیفه جدید</a>
    </div>
</section>

<section class="sky-stats-grid">
    <article class="sky-stat-card">
        <div class="sky-stat-icon blue">▤</div>
        <div class="sky-stat-label">کل وظایف</div>
        <div class="sky-stat-number">۱۲۸</div>
        <div class="sky-stat-note">مجموع وظایف ثبت‌شده</div>
    </article>
    <article class="sky-stat-card">
        <div class="sky-stat-icon blue-soft">◷</div>
        <div class="sky-stat-label">در حال انجام</div>
        <div class="sky-stat-number">۳۶</div>
        <div class="sky-stat-note">وظایف فعال تیم</div>
    </article>
    <article class="sky-stat-card">
        <div class="sky-stat-icon green">✓</div>
        <div class="sky-stat-label">تکمیل‌شده</div>
        <div class="sky-stat-number">۷۴</div>
        <div class="sky-stat-note">وظایف به پایان رسیده</div>
    </article>
    <article class="sky-stat-card">
        <div class="sky-stat-icon orange">⚠</div>
        <div class="sky-stat-label">معوق‌شده</div>
        <div class="sky-stat-number">۱۸</div>
        <div class="sky-stat-note">وظایف دارای تأخیر</div>
    </article>
</section>

<section class="sky-overview-grid">
    <article class="sky-panel sky-project-panel">
        <div class="sky-panel-heading">
            <h2>پروژه‌های فعال</h2>
            <div class="sky-panel-actions">
                <a href="{{ url('/projects') }}" class="sky-text-link">مشاهده همه</a>
                <a href="{{ url('/projects/create') }}" class="btn sky-btn sky-btn-small">+ پروژه جدید</a>
            </div>
        </div>
        <div class="sky-project-row">
            <div class="sky-project-main">
                <strong>طراحی وبسایت شرکتی</strong>
                <span class="sky-project-meta"><span class="sky-avatar sky-avatar-small">ع</span> علی رضایی · ۵ نفر</span>
            </div>
            <div class="sky-project-progress">
                <div class="sky-progress-info"><span>۷۵٪</span><small>تحویل: ۲۸ آبان</small></div>
                <div class="sky-progress"><span style="width:75%"></span></div>
            </div>
        </div>
        <div class="sky-project-row">
            <div class="sky-project-main">
                <strong>توسعه پنل مدیریت</strong>
                <span class="sky-project-meta"><span class="sky-avatar sky-avatar-small">ح</span> حامد شاکری · ۴ نفر</span>
            </div>
            <div class="sky-project-progress">
                <div class="sky-progress-info"><span>۴۵٪</span><small>تحویل: ۳۰ آبان</small></div>
                <div class="sky-progress"><span style="width:45%"></span></div>
            </div>
        </div>
        <div class="sky-project-row">
            <div class="sky-project-main">
                <strong>بازطراحی فروشگاه اینترنتی</strong>
                <span class="sky-project-meta"><span class="sky-avatar sky-avatar-small">م</span> محمد احمدی · ۶ نفر</span>
            </div>
            <div class="sky-project-progress">
                <div class="sky-progress-info"><span class="sky-progress-green-text">۹۰٪</span><small>تحویل: ۲۶ آبان</small></div>
                <div class="sky-progress green-progress"><span style="width:90%"></span></div>
            </div>
        </div>
    </article>

    <article class="sky-panel sky-chart-panel">
        <div class="sky-panel-heading">
            <h2>وضعیت وظایف</h2>
            <span class="sky-muted">این هفته</span>
        </div>
        <div class="sky-chart-content">
            <div class="sky-donut" role="img" aria-label="نمودار وضعیت وظایف">
                <div class="sky-donut-center"><strong>۱۲۸</strong><span>کل وظایف</span></div>
            </div>
            <ul class="sky-legend">
                <li><i class="dot dot-green"></i><span>تکمیل‌شده</span><b>۷۴</b></li>
                <li><i class="dot dot-blue"></i><span>در حال انجام</span><b>۳۶</b></li>
                <li><i class="dot dot-orange"></i><span>در انتظار</span><b>۱۰</b></li>
                <li><i class="dot dot-red"></i><span>معوق‌شده</span><b>۸</b></li>
            </ul>
        </div>
    </article>
</section>

<section class="sky-panel sky-tasks-panel">
    <div class="sky-panel-heading sky-tasks-heading">
        <h2>آخرین وظایف</h2>
        <div class="sky-panel-actions">
            <button type="button" class="sky-filter-button" id="skyTaskFilter">☷ <span>فیلتر</span></button>
            <a href="{{ url('/tasks') }}" class="sky-text-link">مشاهده همه</a>
        </div>
    </div>
    <div class="sky-table-responsive">
        <table class="table sky-table">
            <thead>
                <tr>
                    <th>عنوان وظیفه</th><th>پروژه</th><th>مسئول انجام</th><th>اولویت</th><th>وضعیت</th><th>مهلت انجام</th><th>عملیات</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="sky-table-title">طراحی صفحه ورود</td><td>طراحی وبسایت شرکتی</td>
                    <td><span class="sky-person"><span class="sky-avatar sky-avatar-small">ع</span> علی رضایی</span></td>
                    <td><span class="sky-pill priority-high">بالا</span></td><td><span class="sky-pill status-progress">در حال انجام</span></td><td>۱۴۰۵/۰۸/۲۵</td><td><button class="sky-more" type="button">•••</button></td>
                </tr>
                <tr>
                    <td class="sky-table-title">پیاده‌سازی احراز هویت</td><td>توسعه پنل مدیریت</td>
                    <td><span class="sky-person"><span class="sky-avatar sky-avatar-small">ح</span> حامد شاکری</span></td>
                    <td><span class="sky-pill priority-urgent">فوری</span></td><td><span class="sky-pill status-waiting">در انتظار تأیید</span></td><td>۱۴۰۵/۰۸/۲۳</td><td><button class="sky-more" type="button">•••</button></td>
                </tr>
                <tr>
                    <td class="sky-table-title">بررسی رابط کاربری</td><td>بازطراحی فروشگاه اینترنتی</td>
                    <td><span class="sky-person"><span class="sky-avatar sky-avatar-small">س</span> سارا محمدی</span></td>
                    <td><span class="sky-pill priority-medium">متوسط</span></td><td><span class="sky-pill status-done">تکمیل‌شده</span></td><td>۱۴۰۵/۰۸/۲۱</td><td><button class="sky-more" type="button">•••</button></td>
                </tr>
                <tr>
                    <td class="sky-table-title">اصلاح مشکلات واکنش‌گرایی</td><td>طراحی وبسایت شرکتی</td>
                    <td><span class="sky-person"><span class="sky-avatar sky-avatar-small">م</span> محمد احمدی</span></td>
                    <td><span class="sky-pill priority-high">بالا</span></td><td><span class="sky-pill status-late">معوق‌شده</span></td><td>۱۴۰۵/۰۸/۲۰</td><td><button class="sky-more" type="button">•••</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<section class="sky-bottom-grid">
    <article class="sky-panel sky-deadlines">
        <div class="sky-panel-heading"><h2>نزدیک‌ترین مهلت‌ها</h2><span class="sky-panel-symbol">▦</span></div>
        <div class="sky-deadline-item deadline-red"><div><strong>طراحی صفحه ورود</strong><small>وبسایت شرکتی</small></div><span>امروز · ۱۵:۰۰</span></div>
        <div class="sky-deadline-item deadline-orange"><div><strong>تکمیل API کاربران</strong><small>توسعه پنل مدیریت</small></div><span>فردا · ۱۲:۰۰</span></div>
        <div class="sky-deadline-item deadline-blue"><div><strong>بررسی گزارش پروژه</strong><small>بازطراحی فروشگاه</small></div><span>دو روز دیگر · ۱۷:۰۰</span></div>
    </article>

    <article class="sky-panel sky-activity">
        <div class="sky-panel-heading"><h2>فعالیت‌های اخیر</h2><span class="sky-muted">امروز</span></div>
        <div class="sky-activity-item"><span class="sky-avatar sky-avatar-small">ع</span><p><strong>علی رضایی</strong> یک وظیفه جدید ایجاد کرد.<small>۵ دقیقه پیش</small></p></div>
        <div class="sky-activity-item"><span class="sky-avatar sky-avatar-small">س</span><p><strong>سارا محمدی</strong> وظیفه «بررسی رابط کاربری» را تکمیل کرد.<small>۲۰ دقیقه پیش</small></p></div>
        <div class="sky-activity-item"><span class="sky-avatar sky-avatar-small">ح</span><p><strong>حامد شاکری</strong> وضعیت پروژه را به‌روزرسانی کرد.<small>۴۵ دقیقه پیش</small></p></div>
        <div class="sky-activity-item"><span class="sky-avatar sky-avatar-small">م</span><p><strong>محمد احمدی</strong> یک فایل به پروژه اضافه کرد.<small>۱ ساعت پیش</small></p></div>
    </article>
</section>
@endsection
