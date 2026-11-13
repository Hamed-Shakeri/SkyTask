<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo $__env->yieldContent('title', 'داشبورد'); ?> | SkyTask</title>

    
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/dashboard.css')); ?>">
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<body class="sky-body">
    <div class="sky-app">
        <?php echo $__env->make('components.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <div class="sky-main">
            <?php echo $__env->make('components.topbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

            <main class="sky-page-content">
                <?php echo $__env->yieldContent('content'); ?>
            </main>
        </div>
    </div>

    <div class="sky-sidebar-overlay" id="skySidebarOverlay"></div>

    <script src="<?php echo e(asset('assets/js/dashboard.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH C:\Users\hamed\Desktop\SkyTask\resources\views/layouts/app.blade.php ENDPATH**/ ?>