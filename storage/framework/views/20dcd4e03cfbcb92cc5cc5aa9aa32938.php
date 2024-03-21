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
                        <a href="<?php echo e(route('leave-record.create')); ?>" class="btn btn-success mb-1">Add Leave</a>
                    </div>

                    <div class="card-datatable">
                        <table class="table dataTable" id="permission-table">
                            <thead>
                            <tr>
                                <th>Id.</th>
                                <th>Leave Type</th>
                                <th>Employee Code</th>
                                <th>From Date</th>
                                <th>To Date</th>
                                <th>Total Days</th>
                                <th>Comment</th>
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
        const sweetalert_delete_title = "Delete Leave?";
        const form_url = '/leave-record';
        datatable_url = '/getDatatableLeaveRecord';
        $(document).ready(function () {
            $('#permission-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '<?php echo route('getDatatableLeaveRecord'); ?>',
                columns: [
                    {data: 'id', name: 'employee_leave_master.id'},
                    {data: 'leave_type_name', name: 'leave_master.leaveType'},
                    {data: 'employee_code', name: 'employee_leave_master.employee_code'},
                    {data: 'from_date', name: 'employee_leave_master.from_date'},
                    {data: 'to_date', name: 'employee_leave_master.to_date'},
                    {data: 'number_of_days', name: 'employee_leave_master.number_of_days'},
                    {data: 'comment', name: 'employee_leave_master.comment'},
                    {data: 'action', name: 'action', orderable: false},
                ],
                order: [[0, 'DESC']],
            });
        });

    </script>
    <script src="<?php echo e(asset('admin/app-assets/js/core/datatable.js')); ?>?v=<?php echo e(time()); ?>"></script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sandip_task\sandip_task\resources\views/admin/leave_record/index.blade.php ENDPATH**/ ?>