 <?php if(!empty(get_static_option('preloader_status'))): ?>
    <?php echo $__env->make('frontend.partials.preloader.preloader-default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?><?php /**PATH /home/u363353642/domains/froshgah.store/public_html/@core/resources/views/frontend/partials/preloader.blade.php ENDPATH**/ ?>