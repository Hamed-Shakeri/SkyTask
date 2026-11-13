


<?php $__env->startSection('title', 'ثبت‌نام'); ?>

<?php $__env->startSection('content'); ?>

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

    <form action="<?php echo e(route('register')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <div class="sky-auth-row">

            <div class="sky-form-group">
                <label for="first_name">نام</label>
                <input
                    type="text"
                    id="first_name"
                    name="first_name"
                    value="<?php echo e(old('first_name')); ?>"
                    placeholder="نام خود را وارد کنید"
                    required
                >
                <?php $__errorArgs = ['first_name'];
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
                <label for="last_name">نام خانوادگی</label>
                <input
                    type="text"
                    id="last_name"
                    name="last_name"
                    value="<?php echo e(old('last_name')); ?>"
                    placeholder="نام خانوادگی"
                    required
                >
                <?php $__errorArgs = ['last_name'];
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

        </div>

        <div class="sky-form-group">
            <label for="email">آدرس ایمیل</label>
            <input
                type="email"
                id="email"
                name="email"
                value="<?php echo e(old('email')); ?>"
                placeholder="example@gmail.com"
                required
            >
            <?php $__errorArgs = ['email'];
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
            <label for="mobile">شماره موبایل</label>
            <input
                type="tel"
                id="mobile"
                name="mobile"
                value="<?php echo e(old('mobile')); ?>"
                placeholder="09123456789"
                dir="ltr"
                required
            >
            <?php $__errorArgs = ['mobile'];
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
                placeholder="حداقل ۸ کاراکتر"
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
        <a href="<?php echo e(route('login')); ?>">وارد شوید</a>
    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\hamed\Desktop\SkyTask\resources\views/auth/register.blade.php ENDPATH**/ ?>