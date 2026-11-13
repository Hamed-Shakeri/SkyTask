
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $__env->yieldContent('title', 'ورود و ثبت‌نام'); ?> | SkyTask</title>

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/auth.css')); ?>">
</head>
<body>

    <main class="sky-auth-wrapper">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <?php echo $__env->yieldPushContent('scripts'); ?>

</body>
</html>
<?php /**PATH C:\Users\hamed\Desktop\SkyTask\resources\views/layouts/auth.blade.php ENDPATH**/ ?>