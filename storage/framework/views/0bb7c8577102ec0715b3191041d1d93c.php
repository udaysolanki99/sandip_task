<?php $__env->startSection('title', 'Permissions'); ?>

<?php $__env->startSection('breadcrumb'); ?>
    
    
<?php $__env->stopSection(); ?>

<?php $__env->startPush('top_css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/app-assets/vendors/css/vendors.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/app-assets/vendors/css/tables/datatable/buttons.bootstrap5.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/app-assets/css/core/menu/menu-types/vertical-menu.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/app-assets/css/plugins/forms/form-validation.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admin/app-assets/css/plugins/forms/pickers/form-flat-pickr.css')); ?>">

<?php $__env->stopPush(); ?>

<!-- Page content --->
<?php $__env->startSection('content'); ?>
    <!-- Ajax Sourced Server-side -->
    <section id="ajax-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h4 class="card-title">Ajax Sourced Server-side</h4>
                        <a href="<?php echo e(route('admin.permission.create')); ?>" class="btn btn-primary mb-1">Add New Permission</a>
                    </div>

                    <div class="card-datatable">
                        <table class="datatables-ajax table table-responsive">
                            <thead>
                                <tr>
                                    <th>Full name</th>
                                    <th>Email</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--/ Ajax Sourced Server-side -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('top_js'); ?>
    <script src="<?php echo e(asset('admin/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/app-assets/vendors/js/tables/datatable/responsive.bootstrap5.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/app-assets/vendors/js/tables/datatable/buttons.bootstrap5.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/app-assets/vendors/js/forms/validation/jquery.validate.min.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js'); ?>
    <script src="<?php echo e(asset('admin/app-assets/js/scripts/pages/modal-add-role.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/app-assets/js/scripts/pages/app-access-roles.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/app-assets/js/scripts/tables/table-datatables-advanced.js')); ?>"></script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp-2\htdocs\printing\resources\views/admin/permissions/index.blade.php ENDPATH**/ ?>