<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/colorpicker.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/dropzone.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/media-uploader.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Color Settings')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-12 mt-5">
                <?php echo $__env->make('backend.partials.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title"><?php echo e(__("Color Settings")); ?></h4>
                        <form action="<?php echo e(route('admin.general.color.settings')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>

                            <div class="tab-content margin-top-30" id="nav-tabContent">
                            </div>

                            <div class="form-group">
                                <label for="site_color"><?php echo e(__('Site Main Color Settings')); ?></label>
                                <input type="text" name="site_color" style="background-color: <?php echo e(get_static_option('site_color')); ?>;color: #fff;" class="form-control" value="<?php echo e(get_static_option('site_color')); ?>" id="site_color">
                                <small><?php echo e(__('you change site main color from here, it will replace website main color')); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="site_main_color_two"><?php echo e(__('Site Main Color Two Settings')); ?></label>
                                <input type="text" name="site_main_color_two" style="background-color: <?php echo e(get_static_option('site_main_color_two')); ?>;color: #fff;" class="form-control" value="<?php echo e(get_static_option('site_main_color_two')); ?>" id="site_main_color_two">
                                <small><?php echo e(__('you change site base color two color from here, it will replace website site base color two color')); ?></small>
                            </div>

                            <div class="form-group">
                                <label for="site_main_color_three"><?php echo e(__('Site Main Color Three Settings')); ?></label>
                                <input type="text" name="site_main_color_three" style="background-color: <?php echo e(get_static_option('site_main_color_three')); ?>;color: #FF805D;" class="form-control" value="<?php echo e(get_static_option('site_main_color_three')); ?>" >
                                <small><?php echo e(__('you change site base color two color from here, it will replace website site base color three color')); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="site_main_color_four"><?php echo e(__('Site Main Color Four Settings')); ?></label>
                                <input type="text" name="site_main_color_four" style="background-color: <?php echo e(get_static_option('site_main_color_four')); ?>;color: #FF4343;" class="form-control" value="<?php echo e(get_static_option('site_main_color_four')); ?>">
                                <small><?php echo e(__('you change site base color two color from here, it will replace website site base color four color')); ?></small>
                            </div>


                            <div class="form-group">
                                <label for="site_secondary_color"><?php echo e(__('Site Secondary Color Settings')); ?></label>
                                <input type="text" name="site_secondary_color" style="background-color: <?php echo e(get_static_option('site_secondary_color')); ?>;color: #fff;" class="form-control" value="<?php echo e(get_static_option('site_secondary_color')); ?>" id="site_secondary_color">
                                <small><?php echo e(__('you change site secondary color from here, it will replace website secondary color')); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="site_heading_color_one"><?php echo e(__('Site Heading Color One')); ?></label>
                                <input type="text" name="site_heading_color_one" style="background-color: <?php echo e(get_static_option('site_heading_color_one')); ?>;color: #fff;" class="form-control" value="<?php echo e(get_static_option('site_heading_color_one')); ?>" id="site_heading_color_one">
                                <small><?php echo e(__('you can change site heading color from there , when you chnage this color it will reflect the color in all the heading like (h1,h2,h3,h4.h5.h6)')); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="site_heading_color_two"><?php echo e(__('Site Heading Color Two')); ?></label>
                                <input type="text" name="site_heading_color_two" style="background-color: <?php echo e(get_static_option('site_heading_color_two')); ?>;color: #fff;" class="form-control" value="<?php echo e(get_static_option('site_heading_color_two')); ?>" id="site_heading_color_two">
                                <small><?php echo e(__('you can change site heading color from there , when you chnage this color it will reflect the color in all the heading like (h1,h2,h3,h4.h5.h6)')); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="site_hover_color_one"><?php echo e(__('Site Hover Color One')); ?></label>
                                <input type="text" name="site_hover_color_one" style="background-color: <?php echo e(get_static_option('site_hover_color_one')); ?>;color: #fff;" class="form-control" value="<?php echo e(get_static_option('site_hover_color_one')); ?>" id="site_hover_color_one">
                                <small><?php echo e(__('you can change site heading color from there , when you chnage this color it will reflect the color in all the heading like (h1,h2,h3,h4.h5.h6)')); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="site_hover_color_two"><?php echo e(__('Site Hover Color Two')); ?></label>
                                <input type="text" name="site_hover_color_two" style="background-color: <?php echo e(get_static_option('site_hover_color_two')); ?>;color: #fff;" class="form-control" value="<?php echo e(get_static_option('site_hover_color_two')); ?>" id="site_hover_color_two">
                                <small><?php echo e(__('you can change site heading color from there , when you chnage this color it will reflect the color in all the heading like (h1,h2,h3,h4.h5.h6)')); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="site_paragraph_color"><?php echo e(__('Site Paragraph Color')); ?></label>
                                <input type="text" name="site_paragraph_color" style="background-color: <?php echo e(get_static_option('site_paragraph_color')); ?>;color: #fff;" class="form-control" value="<?php echo e(get_static_option('site_paragraph_color')); ?>" id="site_paragraph_color">
                                <small><?php echo e(__('you can change site paragraph color from there')); ?></small>
                            </div>
                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4"><?php echo e(__('Update Changes')); ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.media.markup','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('media.markup'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('assets/backend/js/colorpicker.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/backend/js/dropzone.js')); ?>"></script>
   <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.media.js','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('media.js'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <script>
        (function($){
            "use strict";
            $(document).ready(function(){

                initColorPicker('#site_color');
                initColorPicker('#site_secondary_color');
                initColorPicker('#site_main_color_two');
                initColorPicker('#site_heading_color');
                initColorPicker('#site_paragraph_color');
                initColorPicker('input[name="portfolio_home_color"');
                initColorPicker('input[name="logistics_home_color"');
                initColorPicker('input[name="site_main_color_three"');
                initColorPicker('input[name="site_main_color_four"');

                function initColorPicker(selector){
                    $(selector).ColorPicker({
                        color: '#852aff',
                        onShow: function (colpkr) {
                            $(colpkr).fadeIn(500);
                            return false;
                        },
                        onHide: function (colpkr) {
                            $(colpkr).fadeOut(500);
                            return false;
                        },
                        onChange: function (hsb, hex, rgb) {
                            $(selector).css('background-color', '#' + hex);
                            $(selector).val('#' + hex);
                        }
                    });
                }
            });
        }(jQuery));
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u363353642/domains/froshgah.store/public_html/@core/resources/views/backend/general-settings/color-settings.blade.php ENDPATH**/ ?>