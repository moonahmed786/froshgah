<?php if(session()->has('msg')): ?>
    <div class="alert alert-<?php echo e(session('type')); ?>">
        <?php echo Purifier::clean(session('msg')); ?>

    </div>
<?php endif; ?>
<?php /**PATH /home/u363353642/domains/froshgah.store/public_html/@core/resources/views/components/msg/success.blade.php ENDPATH**/ ?>