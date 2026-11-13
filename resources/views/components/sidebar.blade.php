<aside class="sky-sidebar" id="skySidebar">
    <div class="sky-brand">
        <a href="{{ url('/dashboard') }}" class="sky-brand-link">
            <span class="sky-brand-name">SkyTask</span>
            <span class="sky-brand-mark" aria-hidden="true"><i></i><b></b></span>
        </a>
    </div>

    <div class="sky-sidebar-caption">فضای کاری تیم</div>

    <nav class="sky-nav" aria-label="منوی اصلی">
        <a href="{{ url('/dashboard') }}" class="sky-nav-link active">
            <span class="sky-nav-icon">▦</span><span>داشبورد</span>
        </a>
        <a href="{{ url('/tasks') }}" class="sky-nav-link">
            <span class="sky-nav-icon">▤</span><span>کارتابل وظایف</span>
            <span class="sky-nav-count">۱۲</span>
        </a>
        <a href="{{ url('/projects') }}" class="sky-nav-link">
            <span class="sky-nav-icon">▱</span><span>پروژه‌ها</span>
        </a>
        <a href="{{ url('/my-tasks') }}" class="sky-nav-link">
            <span class="sky-nav-icon">✓</span><span>وظایف من</span>
        </a>
        <a href="{{ url('/team-tasks') }}" class="sky-nav-link">
            <span class="sky-nav-icon">♧</span><span>وظایف تیم</span>
        </a>
        <a href="{{ url('/calendar') }}" class="sky-nav-link">
            <span class="sky-nav-icon">▦</span><span>تقویم کاری</span>
        </a>
        <a href="{{ url('/reports') }}" class="sky-nav-link">
            <span class="sky-nav-icon">▥</span><span>گزارش‌ها</span>
        </a>
        <a href="{{ url('/members') }}" class="sky-nav-link">
            <span class="sky-nav-icon">♙</span><span>اعضای تیم</span>
        </a>
    </nav>

    <div class="sky-sidebar-bottom">
        <a href="{{ url('/settings') }}" class="sky-nav-link">
            <span class="sky-nav-icon">⚙</span><span>تنظیمات</span>
        </a>
        <a href="{{ url('/help') }}" class="sky-nav-link">
            <span class="sky-nav-icon">?</span><span>راهنما و پشتیبانی</span>
        </a>

        <div class="sky-user-mini">
            <div class="sky-avatar sky-avatar-photo">ح</div>
            <div class="sky-user-mini-info">
                <strong>{{ auth()->check() ? auth()->user()->name : 'حامد شاکری' }}</strong>
                <small>مدیر پروژه</small>
            </div>
            <button type="button" class="sky-icon-button" aria-label="گزینه‌های حساب">•••</button>
        </div>
    </div>
</aside>
