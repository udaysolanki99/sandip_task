<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item"><a href="#">Role</a></li>
    <li class="breadcrumb-item active">create</li>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('top_css'); ?>
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('css'); ?>
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu.css">
<?php $__env->stopPush(); ?>

<!-- Page content --->
<?php $__env->startSection('content'); ?>

    <!-- Basic Inputs start -->
    <section id="basic-input">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Basic Inputs</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-4 col-md-6 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="basicInput">Basic Input</label>
                                    <input type="text" class="form-control" id="basicInput" placeholder="Enter email" />
                                </div>
                            </div>

                            <div class="card-header">
                                <h4 class="card-title">Basic Checkboxes</h4>
                            </div>
                            <div class="card-body">
                                <div class="demo-inline-spacing">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="checked" checked />
                                        <label class="form-check-label" for="inlineCheckbox1">Checked</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="unchecked" />
                                        <label class="form-check-label" for="inlineCheckbox2">Unchecked</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="checked-disabled" checked disabled />
                                        <label class="form-check-label" for="inlineCheckbox3">Checked disabled</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="unchecked-disabled" disabled />
                                        <label class="form-check-label" for="inlineCheckbox4">Unchecked disabled</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Basic Inputs end -->

    <!-- Basic Checkbox start -->
    
    <!-- Basic Checkbox end -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('top_js'); ?>
    
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js'); ?>
    
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/project/printing/resources/views/admin/roles/create.blade.php ENDPATH**/ ?>