<?php ($title = 'Register'); ?>
<?php $__env->startSection('content'); ?>
    <div class="app-content content" style="background-color: black;">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-basic px-2">
                    <div class="auth-inner my-2">
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="#" class="brand-logo">
                                    <h2 class="brand-text text-primary ms-1">Employee Register</h2>
                                </a>
                                <form method="POST" id="registerForm"
                                      class="form form-vertical"
                                      role="form">
                                    <?php echo csrf_field(); ?>
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-vertical">Employee Name</label>
                                        <input type="text" id="employee_name" class="form-control"
                                               name="employee_name" placeholder="Employee Name"/>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-vertical">Employee Code</label>
                                        <input type="text" id="employee_code" class="form-control"
                                               name="employee_code" placeholder="Employee Code"/>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-vertical">First Name</label>
                                        <input type="text" id="first_name" class="form-control"
                                               name="first_name" placeholder="First Name"/>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-vertical">Last Name</label>
                                        <input type="text" id="last_name" class="form-control"
                                               name="last_name" placeholder="Last Name"/>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-vertical">Username</label>
                                        <input type="text" id="username" class="form-control"
                                               name="username" placeholder="Username"/>
                                    </div>
                                    <div class="mb-1">
                                        <label for="login-email" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="email" name="email"
                                               placeholder="admin@example.com" aria-describedby="login-email"
                                               tabindex="1"
                                               autofocus/>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-vertical">Phone</label>
                                        <input type="number" id="phone" class="form-control"
                                               name="phone" placeholder="Phone"/>
                                    </div>
                                    <div class="mb-1">
                                        <div class="d-flex justify-content-between">
                                            <label class="form-label">Password</label>
                                        </div>
                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input type="password" class="form-control form-control-merge" id="password"
                                                   name="password" tabindex="2" required/>
                                            <span class="input-group-text cursor-pointer"><i
                                                    data-feather="eye"></i></span>
                                        </div>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-vertical">Address</label>
                                        <textarea class="form-control"
                                                  name="address"
                                                  rows="3"
                                                  placeholder="Address"></textarea>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="country">Country</label>
                                        <select id="country" class="form-select" name="country">
                                            <option value="">Select Country</option>
                                            <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($country->id); ?>"><?php echo e($country->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="state">State</label>
                                        <select id="state" class="form-select" name="state">
                                            <option value="">Select State</option>
                                        </select>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="city">City</label>
                                        <select id="city" class="form-select" name="city">
                                            <option value="">Select City</option>
                                        </select>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="first-name-vertical">Zip</label>
                                        <input type="number" id="zip" class="form-control"
                                               name="zip" placeholder="Zip"/>
                                    </div>
                                    <button class="btn btn-primary w-100" tabindex="4">Sign Up</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin_guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sandiptask\resources\views/admin/auth/register.blade.php ENDPATH**/ ?>