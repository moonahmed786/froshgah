<?php if(session()->has('msg')): ?>
    <div class="alert alert-<?php echo e(session('type')); ?>">
        <?php echo purify_html(session('msg')); ?>

    </div>
<?php endif; ?>
<?php /**PATH /home/u363353642/domains/froshgah.store/public_html/@core/resources/views/backend/partials/message.blade.php ENDPATH**/ ?>