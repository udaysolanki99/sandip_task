<?php $__env->startSection('title', 'Dashboard'); ?>
<?php $__env->startSection('breadcrumb'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('top_css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/app-assets/vendors/css/vendors.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/app-assets/vendors/css/charts/apexcharts.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/app-assets/vendors/css/extensions/toastr.min.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('css'); ?>
    <link rel="stylesheet" type="text/css"
          href="<?php echo e(asset('admin/app-assets/css/core/menu/menu-types/vertical-menu.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/app-assets/css/pages/dashboard-ecommerce.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/app-assets/css/plugins/charts/chart-apex.css')); ?>">
    <link rel="stylesheet" type="text/css"
          href="<?php echo e(asset('admin/app-assets/css/plugins/extensions/ext-component-toastr.css')); ?>">
<?php $__env->stopPush(); ?>

<!-- Page content --->
<?php $__env->startSection('content'); ?>
    <div class="content-body">
        <!-- Dashboard Ecommerce Starts -->
        <section id="dashboard-ecommerce">
            <div class="row match-height">
                <!-- Medal Card -->
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="card card-congratulation-medal">
                        <div class="card-body">
                            <h3>Total Use Leave</h3>
                            <h3 class="mb-75 mt-2 pt-50">
                                <h1><a href="<?php echo e(route('leave-record.index')); ?>"><?php echo e($total_use_leave_balance); ?></a></h1>
                            </h3>
                            <img src="<?php echo e(asset('admin/app-assets/images/illustration/badge.svg')); ?>"
                                 class="congratulation-medal" alt="Medal Pic"/>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="card card-congratulation-medal">
                        <div class="card-body">
                            <h3>Total Available Leave</h3>
                            <h3 class="mb-75 mt-2 pt-50">
                                <h1><a href="<?php echo e(route('leave-record.index')); ?>"><?php echo e($total_available_leave_balance); ?></a></h1>
                            </h3>
                            <img src="<?php echo e(asset('admin/app-assets/images/illustration/badge.svg')); ?>"
                                 class="congratulation-medal" alt="Medal Pic"/>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="card card-congratulation-medal">
                        <div class="card-body">
                            <h3>Total Leave</h3>
                            <h3 class="mb-75 mt-2 pt-50">
                                <h1><a href="<?php echo e(route('leave-balance.index')); ?>"><?php echo e($total_leave); ?></a></h1>
                            </h3>
                            <img src="<?php echo e(asset('admin/app-assets/images/illustration/badge.svg')); ?>"
                                 class="congratulation-medal" alt="Medal Pic"/>
                        </div>
                    </div>
                </div>
                <!--/ Medal Card -->

                <!-- Statistics Card -->
                <div class="col-xl-12 col-md-6 col-12">
                    <div class="card card-statistics">
                        <div class="card-header">
                            <h4 class="card-title">Total Leave Data</h4>
                        </div>
                        <div class="card-body statistics-body">
                            <div class="row">
                                <?php $__currentLoopData = $get_total_leave_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $leave_lis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                        <div class="d-flex flex-row">
                                            <div class="avatar bg-light-primary me-2">
                                                <div class="avatar-content">
                                                    <i data-feather="trending-up" class="avatar-icon"></i>
                                                </div>
                                            </div>
                                            <div class="my-auto">
                                                <h4 class="fw-bolder mb-0"><?php echo e($leave_lis->leaveType); ?></h4>
                                                <p class="card-text font-small-4 mb-0"><?php echo e($leave_lis->leave_balance); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Statistics Card -->
    </div>
    </section>
    <!-- Dashboard Ecommerce ends -->
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('top_js'); ?>
    
    <script src="<?php echo e(asset('admin/app-assets/vendors/js/charts/apexcharts.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/app-assets/vendors/js/extensions/toastr.min.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js'); ?>
    
    <script src="<?php echo e(asset('admin/app-assets/js/scripts/pages/dashboard-ecommerce.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp-2\htdocs\com-task\resources\views/admin/dashboard/dashboard.blade.php ENDPATH**/ ?>