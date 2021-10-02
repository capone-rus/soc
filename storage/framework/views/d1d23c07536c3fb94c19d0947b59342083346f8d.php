<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Подтвердите Свой Адрес Электронной Почты')); ?></div>

                <div class="card-body">
                    <?php if(session('resent')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(__('На ваш адрес электронной почты была отправлена новая ссылка для подтверждения.')); ?>

                        </div>
                    <?php endif; ?>

                    <?php echo e(__('Прежде чем продолжить, пожалуйста, проверьте свою электронную почту на наличие ссылки для подтверждения.')); ?>

                    <?php echo e(__('Если вы не получили электронное письмо')); ?>,
                    <form class="d-inline" method="POST" action="<?php echo e(route('verification.resend')); ?>">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline"><?php echo e(__('нажмите здесь, чтобы запросить другой')); ?></button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OpenServer\domains\example-app\resources\views/auth/verify.blade.php ENDPATH**/ ?>