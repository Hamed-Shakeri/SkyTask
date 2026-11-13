


<?php $__env->startSection('title', 'ورود'); ?>

<?php $__env->startSection('content'); ?>

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

    <form action="<?php echo e(route('login')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <div class="sky-form-group">
            <label for="login">ایمیل یا شماره موبایل</label>
            <input
                type="text"
                id="login"
                name="login"
                value="<?php echo e(old('login')); ?>"
                placeholder="ایمیل یا شماره موبایل خود را وارد کنید"
                required
            >
            <?php $__errorArgs = ['login'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="sky-error"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="sky-error"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
        <a href="<?php echo e(route('register')); ?>">ثبت‌نام کنید</a>
    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\hamed\Desktop\SkyTask\resources\views/auth/login.blade.php ENDPATH**/ ?>