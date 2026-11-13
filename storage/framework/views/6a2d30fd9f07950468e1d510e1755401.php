<header class="sky-topbar">
    <div class="sky-topbar-right">
        <button type="button" class="sky-icon-button sky-menu-toggle" id="skyMenuToggle" aria-label="باز کردن منو">☰</button>
        <div class="sky-topbar-page-title">داشبورد</div>
        <span class="sky-breadcrumb">فضای کاری /</span>
    </div>

    <div class="sky-search-wrap">
        <span class="sky-search-icon">⌕</span>
        <input type="search" class="sky-search" placeholder="جستجو در پروژه‌ها و وظایف..." aria-label="جستجو">
    </div>

    <div class="sky-topbar-left">
        <button type="button" class="sky-icon-button sky-help-button" aria-label="راهنما">؟</button>
        <button type="button" class="sky-icon-button sky-notification-button" aria-label="اعلان‌ها">
            ♧<span class="sky-notification-dot"></span>
        </button>
        <div class="sky-topbar-user">
            <span><?php echo e(auth()->check() ? auth()->user()->name : 'حامد شاکری'); ?></span>
            <div class="sky-avatar sky-avatar-photo">ح</div>
        </div>
    </div>
</header>
<?php /**PATH C:\Users\hamed\Desktop\SkyTask\resources\views/components/topbar.blade.php ENDPATH**/ ?>