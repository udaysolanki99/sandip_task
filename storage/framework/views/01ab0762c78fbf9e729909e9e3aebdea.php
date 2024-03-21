<?php ($title = 'Login'); ?>
<?php $__env->startSection('content'); ?>
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-basic px-2">
                    <div class="auth-inner my-2">
                        <!-- Login basic -->
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="index.html" class="brand-logo">
                                    <h2 class="brand-text text-primary ms-1">Employee Login</h2>
                                </a>

                                <h4 class="card-title mb-1">Welcome! 👋</h4>

                                <form class="mt-2" action="<?php echo e(route('admin.auth.login')); ?>"
                                      method="POST" id="loginForm">
                                    <?php echo csrf_field(); ?>
                                    <div class="mb-1">
                                        <label for="login-email" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="email" name="email"
                                               placeholder="Enter email"
                                               tabindex="1"
                                               autofocus/>
                                    </div>

                                    <div class="mb-1">
                                        <label for="login-email" class="form-label">Password</label>
                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input type="password" class="form-control form-control-merge" id="password"
                                                   name="password" tabindex="2"
                                                   placeholder="Enter password"
                                                   aria-describedby="login-password"/>
                                            <span class="input-group-text cursor-pointer"><i
                                                    data-feather="eye"></i></span>
                                        </div>
                                    </div>
                                    <div class="mb-1">
                                        <h3> <a href="<?php echo e(route('admin.auth.register-form')); ?>">
                                                Sign Up
                                            </a></h3>
                                    </div>
                                    <button class="btn btn-primary w-100" tabindex="4">Sign in</button>
                                </form>
                            </div>
                        </div>
                        <!-- /Login basic -->
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin_guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp-2\htdocs\com-task\resources\views/admin/auth/login.blade.php ENDPATH**/ ?>