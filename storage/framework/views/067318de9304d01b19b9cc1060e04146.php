

<?php $__env->startSection('title', 'کارتابل وظایف'); ?>

<?php $__env->startPush('styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/css/task-inbox.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="sky-inbox-page">
    <section class="sky-inbox-header">
        <div>
            <div class="sky-page-eyebrow">SkyTask / فضای کاری</div>
            <h1>کارتابل وظایف</h1>
            <p>تمام وظایف و پیگیری‌های تیم را یک‌جا مدیریت کن.</p>
        </div>
        <a href="<?php echo e(url('/tasks/create')); ?>" class="btn sky-inbox-primary">+ ایجاد وظیفه جدید</a>
    </section>

    <section class="sky-inbox-stats">
        <div class="sky-inbox-stat"><span class="sky-inbox-stat-icon stat-blue">▤</span><div><small>کل وظایف</small><strong>۱۲۸</strong><em>وظیفه ثبت‌شده</em></div></div>
        <div class="sky-inbox-stat"><span class="sky-inbox-stat-icon stat-green">✓</span><div><small>تکمیل‌شده</small><strong>۷۴</strong><em>به پایان رسیده</em></div></div>
        <div class="sky-inbox-stat"><span class="sky-inbox-stat-icon stat-orange">◷</span><div><small>در حال انجام</small><strong>۳۶</strong><em>در جریان کار</em></div></div>
        <div class="sky-inbox-stat"><span class="sky-inbox-stat-icon stat-red">!</span><div><small>معوق‌شده</small><strong>۱۸</strong><em>نیازمند پیگیری</em></div></div>
    </section>

    <section class="sky-inbox-toolbar">
        <div class="sky-inbox-tabs" role="tablist" aria-label="دسته‌بندی وظایف">
            <button class="sky-inbox-tab is-active" type="button" data-status="all">همه <b>۱۲۸</b></button>
            <button class="sky-inbox-tab" type="button" data-status="assigned">ارجاع‌شده</button>
            <button class="sky-inbox-tab" type="button" data-status="unscheduled">زمان‌بندی‌نشده</button>
            <button class="sky-inbox-tab" type="button" data-status="scheduled">زمان‌بندی‌شده</button>
            <button class="sky-inbox-tab" type="button" data-status="urgent">فوری</button>
            <button class="sky-inbox-tab" type="button" data-status="progress">در حال انجام</button>
            <button class="sky-inbox-tab" type="button" data-status="paused">متوقف‌شده</button>
            <button class="sky-inbox-tab" type="button" data-status="approval">در انتظار تأیید</button>
            <button class="sky-inbox-tab" type="button" data-status="done">تکمیل‌شده</button>
            <button class="sky-inbox-tab" type="button" data-status="late">معوق‌شده</button>
        </div>

        <div class="sky-inbox-filters">
            <label class="sky-inbox-search"><span>⌕</span><input type="search" id="skyTaskSearch" placeholder="جستجو در عنوان وظایف..." aria-label="جستجو در وظایف"></label>
            <select id="skyProjectFilter" aria-label="فیلتر پروژه">
                <option value="">همه پروژه‌ها</option>
                <option value="شرکتی">وبسایت شرکتی</option>
                <option value="مدیریت">توسعه پنل مدیریت</option>
                <option value="فروشگاه">فروشگاه اینترنتی</option>
            </select>
            <select id="skyPriorityFilter" aria-label="فیلتر اولویت">
                <option value="">همه اولویت‌ها</option>
                <option value="فوری">فوری</option><option value="بالا">بالا</option><option value="متوسط">متوسط</option><option value="پایین">پایین</option>
            </select>
            <select id="skySortTasks" aria-label="مرتب‌سازی">
                <option value="default">مرتب‌سازی پیش‌فرض</option>
                <option value="title">عنوان وظیفه</option>
                <option value="date">مهلت انجام</option>
            </select>
            <button type="button" class="sky-inbox-reset" id="skyResetFilters">پاک‌کردن فیلترها</button>
        </div>
    </section>

    <section class="sky-inbox-layout">
        <div class="sky-inbox-list-column">
            <div class="sky-inbox-list-head">
                <div><h2>وظایف</h2><span id="skyTaskCount">۴ وظیفه نمایشی</span></div>
                <button type="button" class="sky-view-toggle is-selected" aria-label="نمایش فهرستی">☷</button>
            </div>

            <div class="sky-task-list" id="skyTaskList">
                <article class="sky-task-card is-selected" tabindex="0" role="button" data-task="1" data-status="progress" data-project="شرکتی" data-priority="بالا" data-title="طراحی صفحه ورود">
                    <div class="sky-task-card-main">
                        <span class="sky-task-check"></span>
                        <div class="sky-task-card-copy"><strong>طراحی صفحه ورود</strong><small>وبسایت شرکتی <i>·</i> ایجادکننده: علی رضایی</small></div>
                    </div>
                    <div class="sky-task-card-meta"><span class="sky-priority priority-high">بالا</span><span class="sky-status status-progress">در حال انجام</span><small>۱۴۰۵/۰۸/۲۵</small><button type="button" class="sky-task-more" aria-label="عملیات">•••</button></div>
                </article>

                <article class="sky-task-card" tabindex="0" role="button" data-task="2" data-status="approval" data-project="مدیریت" data-priority="فوری" data-title="پیاده‌سازی احراز هویت">
                    <div class="sky-task-card-main"><span class="sky-task-check"></span><div class="sky-task-card-copy"><strong>پیاده‌سازی احراز هویت</strong><small>توسعه پنل مدیریت <i>·</i> ایجادکننده: حامد شاکری</small></div></div>
                    <div class="sky-task-card-meta"><span class="sky-priority priority-urgent">فوری</span><span class="sky-status status-approval">در انتظار تأیید</span><small>۱۴۰۵/۰۸/۲۳</small><button type="button" class="sky-task-more" aria-label="عملیات">•••</button></div>
                </article>

                <article class="sky-task-card" tabindex="0" role="button" data-task="3" data-status="done" data-project="فروشگاه" data-priority="متوسط" data-title="بررسی رابط کاربری">
                    <div class="sky-task-card-main"><span class="sky-task-check"></span><div class="sky-task-card-copy"><strong>بررسی رابط کاربری</strong><small>فروشگاه اینترنتی <i>·</i> ایجادکننده: سارا محمدی</small></div></div>
                    <div class="sky-task-card-meta"><span class="sky-priority priority-medium">متوسط</span><span class="sky-status status-done">تکمیل‌شده</span><small>۱۴۰۵/۰۸/۲۱</small><button type="button" class="sky-task-more" aria-label="عملیات">•••</button></div>
                </article>

                <article class="sky-task-card" tabindex="0" role="button" data-task="4" data-status="late" data-project="شرکتی" data-priority="بالا" data-title="اصلاح مشکلات واکنش‌گرایی">
                    <div class="sky-task-card-main"><span class="sky-task-check"></span><div class="sky-task-card-copy"><strong>اصلاح مشکلات واکنش‌گرایی</strong><small>وبسایت شرکتی <i>·</i> ایجادکننده: محمد احمدی</small></div></div>
                    <div class="sky-task-card-meta"><span class="sky-priority priority-high">بالا</span><span class="sky-status status-late">معوق‌شده</span><small>۱۴۰۵/۰۸/۲۰</small><button type="button" class="sky-task-more" aria-label="عملیات">•••</button></div>
                </article>
            </div>

            <div class="sky-inbox-pagination"><span>نمایش ۱ تا ۴ از ۱۲۸ وظیفه</span><div><button type="button" disabled>‹</button><button type="button" class="current">۱</button><button type="button">۲</button><button type="button">۳</button><button type="button">›</button></div></div>

            <div class="sky-inbox-empty" id="skyTaskEmpty" hidden>
                <span class="sky-empty-icon">✓</span><h3>وظیفه‌ای در این کارتابل نیست</h3>
                <p>با تغییر فیلترها یا ایجاد یک وظیفه جدید، کارهایت را اینجا مشاهده می‌کنی.</p>
                <a href="<?php echo e(url('/tasks/create')); ?>" class="btn sky-inbox-primary">ایجاد اولین وظیفه</a>
            </div>

            <div class="sky-inbox-access">
                <div><strong>دسترسی بر اساس نقش</strong><p>اعضا وظایف مربوط به خودشان را می‌بینند. مدیران می‌توانند وظایف گروه و پروژه‌های تحت مدیریت خود را مشاهده و پیگیری کنند.</p></div>
                <div><strong>مدیریت و پیگیری</strong><p>برای هر وظیفه، مسئول، مهلت، اولویت و وضعیت مشخص است. تغییر وضعیت و تأیید نهایی بر اساس سطح دسترسی انجام می‌شود.</p></div>
            </div>
        </div>

        <aside class="sky-task-detail" id="skyTaskDetail">
            <div class="sky-detail-top"><span>جزئیات وظیفه <small id="skyDetailCode">TSK-0248</small></span><button type="button" id="skyCloseDetail" aria-label="بستن جزئیات">×</button></div>
            <div class="sky-detail-title-row"><h2 id="skyDetailTitle">طراحی صفحه ورود</h2><span class="sky-status status-progress" id="skyDetailStatus">در حال انجام</span></div>
            <p class="sky-detail-description" id="skyDetailDescription">طراحی رابط کاربری صفحه ورود با تمرکز بر سادگی، خوانایی و هماهنگی با هویت بصری SkyTask. نسخه واکنش‌گرا برای موبایل و دسکتاپ نیز باید آماده شود.</p>

            <div class="sky-detail-info">
                <div><small>پروژه</small><strong id="skyDetailProject">وبسایت شرکتی</strong></div>
                <div><small>اولویت</small><strong id="skyDetailPriority">بالا</strong></div>
                <div><small>مسئول انجام</small><strong id="skyDetailAssignee">علی رضایی</strong></div>
                <div><small>ارجاع‌دهنده</small><strong>حامد شاکری</strong></div>
                <div><small>تاریخ شروع</small><strong>۱۴۰۵/۰۸/۱۸</strong></div>
                <div><small>مهلت انجام</small><strong>۱۴۰۵/۰۸/۲۵</strong></div>
            </div>

            <div class="sky-detail-section"><div class="sky-detail-section-head"><strong>فایل‌های پیوست (۱)</strong><a href="#" class="sky-detail-link">مشاهده همه</a></div>
                <div class="sky-attachment"><span class="sky-file-icon">▧</span><div><strong>Login-design.fig</strong><small>۲.۴ مگابایت · فایل طراحی</small></div><button type="button" aria-label="دریافت فایل">↓</button></div>
            </div>

            <div class="sky-detail-section"><div class="sky-detail-section-head"><strong>پیگیری‌ها و توضیحات</strong><a href="#" class="sky-detail-link">افزودن پیگیری</a></div>
                <div class="sky-followup"><span class="sky-avatar sky-avatar-small">ع</span><div><strong>علی رضایی</strong><small>امروز · ۱۰:۳۰</small><p>نسخه اولیه طراحی آماده شد. لطفاً بررسی و نظر نهایی را اعلام کنید.</p></div></div>
            </div>

            <div class="sky-detail-section sky-history"><strong>تاریخچه تغییر وضعیت</strong><ul><li><i></i><span>در حال انجام <small>امروز · ۱۰:۳۰</small></span></li><li><i></i><span>ارجاع‌شده <small>۱۴۰۵/۰۸/۱۸</small></span></li></ul></div>
            <div class="sky-detail-actions"><button type="button" class="btn sky-detail-secondary">ویرایش وظیفه</button><button type="button" class="btn sky-detail-secondary">ثبت پیگیری</button><button type="button" class="btn sky-detail-complete" id="skyCompleteTask">✓ تسک تمام‌شده</button><small>ثبت نهایی ممکن است نیازمند تأیید مدیر باشد.</small></div>
        </aside>
    </section>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="<?php echo e(asset('assets/js/task-inbox.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\hamed\Desktop\SkyTask\resources\views/tasks/index.blade.php ENDPATH**/ ?>