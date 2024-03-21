<?php $__env->startSection('title', 'Employee Leave Record'); ?>

<?php $__env->startSection('breadcrumb'); ?>
    
    
<?php $__env->stopSection(); ?>

<?php $__env->startPush('top_css'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startPush('css'); ?>


<?php $__env->stopPush(); ?>

<!-- Page content --->
<?php $__env->startSection('content'); ?>
    <!-- Ajax Sourced Server-side -->
    <section id="column-search-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h4 class="card-title">Leave Data</h4>
                        <a href="<?php echo e(route('leave-balance.create')); ?>" class="btn btn-primary mb-1">Add Leave Balance</a>
                    </div>

                    <div class="card-datatable">
                        <table class="table dataTable" id="permission-table">
                            <thead>
                            <tr>
                                <th>No.</th>
                                <th>Leave Type</th>
                                <th>Leave Balance</th>
                                <th data-search="false">Action</th>
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

<?php $__env->stopPush(); ?>

<?php $__env->startPush('js'); ?>
    <script>
        const sweetalert_delete_title = "Delete Leave Balance?";
        const form_url = '/leave-balance';
        datatable_url = '/getDatatableLeaveBalance';
        $(document).ready(function () {
            $('#permission-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '<?php echo route('getDatatableLeaveBalance'); ?>',
                columns: [
                    {data: 'id', name: 'leave_balance.id'},
                    {data: 'leave_type_name', name: 'leave_master.leaveType'},
                    {data: 'leave_balance', name: 'leave_balance.leave_balance'},
                    {data: 'action', name: 'action', orderable: false},
                ],
                order: [[0, 'DESC']],
            });
        });

    </script>
    <script src="<?php echo e(asset('admin/app-assets/js/core/datatable.js')); ?>?v=<?php echo e(time()); ?>"></script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp-2\htdocs\com-task\resources\views/admin/leave_balance/index.blade.php ENDPATH**/ ?>