<?php $__env->startSection('title', 'Permissions'); ?>

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
                        <h4 class="card-title">Permission Data</h4>
                        <a href="<?php echo e(route('permission.create')); ?>" class="btn btn-primary mb-1">Add New
                            Permission</a>
                    </div>

                    <div class="card-datatable">
                                                <table class="dt-column-search table dataTable" id="permission-table">

                            <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Guard Name</th>
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
        const sweetalert_delete_title = "Delete Permission?";
        const form_url = '/permission';
        datatable_url = '/getDataTablePermission';
        $(document).ready(function () {
            $('#permission-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '<?php echo route('getDataTablePermission'); ?>',
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'guard_name', name: 'guard_name'},
                    {data: 'action', name: 'action', orderable: false},
                ],
                order: [[0, 'DESC']],
            });
        });

    </script>
    <script src="<?php echo e(asset('admin/app-assets/js/core/datatable.js')); ?>?v=<?php echo e(time()); ?>"></script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp-2\htdocs\com-task\resources\views/admin/permissions/index.blade.php ENDPATH**/ ?>