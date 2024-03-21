<?php $__env->startSection('title', 'Permission'); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item"><a href="<?php echo e(route('permission.index')); ?>">Permission</a></li>
    <li class="breadcrumb-item active">create</li>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('top_css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<!-- Page content --->
<?php $__env->startSection('content'); ?>
    <!-- Basic Vertical form layout section start -->
    <section id="basic-vertical-layouts">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Permission Form</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" data-parsley-validate="" id="addEditForm" class="form form-vertical"
                              role="form">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="edit_value" value="0">
                            <input type="hidden" id="form-method" value="add">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-vertical">Permission Name</label>
                                        <input type="text" id="permission_name" class="form-control"
                                               name="permission_name" placeholder="Permission Name"/>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicSelect">Select Guard</label>
                                        <select class="form-select" name="guard_name" id="basicSelect">
                                            <option>-- SELECT GUARD --</option>
                                            <option value="Admin">Admin</option>
                                            <option value="Web">Web</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary me-1">Submit</button>
                                    <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Basic Vertical form layout section end -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('top_js'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startPush('js'); ?>
    <script>
        const form_url = 'permission';
        const redirect_url = 'permission';
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp-2\htdocs\com-task\resources\views/admin/permissions/create.blade.php ENDPATH**/ ?>