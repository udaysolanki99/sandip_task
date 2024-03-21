<?php $__env->startSection('title', 'Employee Leave Record'); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item"><a href="<?php echo e(route('leave-record.index')); ?>">Leave</a></li>
    <li class="breadcrumb-item active">Create</li>
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
                        <h4 class="card-title">Add Leave Form</h4>
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
                                        <label class="form-label" for="first-name-vertical">Employee Code</label>
                                        <input type="text"
                                               value="<?php echo e(auth()->guard('admin')->user()->employee_code ?? ''); ?>"
                                               id="employee_code" class="form-control"
                                               name="employee_code" placeholder="Employee Code" readonly/>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-1">
                                        <div class="form-group">
                                            <label>From Date</label>
                                            <input type="date" class="form-control"
                                                   name="from_date"
                                                   placeholder="From Date">
                                            <div class="valid-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-1">
                                        <div class="form-group">
                                            <label>To Date</label>
                                            <input type="date" class="form-control"
                                                   name="to_date"
                                                   placeholder="To Date">
                                            <div class="valid-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="leave_type">Leave Type</label>
                                        <select id="leave_type" class="form-select" name="leave_type">
                                            <option value="">Select Leave Type</option>
                                            <?php $__currentLoopData = $leaveTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $types): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($types->id); ?>"><?php echo e($types->leaveType); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-vertical">Comment</label>
                                        <textarea class="form-control"
                                                  name="comment"
                                                  rows="3"
                                                  placeholder="Comment"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-outline-primary me-1">Submit</button>
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
        const form_url = 'leave-record';
        const redirect_url = 'leave-record';
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sandiptask\resources\views/admin/leave_record/create.blade.php ENDPATH**/ ?>