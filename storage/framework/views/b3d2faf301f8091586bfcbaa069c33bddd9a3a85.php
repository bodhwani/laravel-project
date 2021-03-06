<?php $__env->startSection('title'); ?>
    Welcome !!
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('includes.message-block', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="row">
        <div class="col-md-6">
            <h3>Sign Up</h3>
            <form action="<?php echo e(route('signup')); ?>" method="post">
                <div class="form-group <?php echo e($errors->has('email') ? 'has-error':''); ?>">
                    <label for="email">Your E-Mail</label>
                    <input class="form-control" name="email" id="email"  type="text" value="<?php echo e(Request :: old('email')); ?>"/>
                </div>

                <div class="form-group <?php echo e($errors->has('first_name') ? 'has-error':''); ?>">
                    <label for="first_name">Your First Name</label>
                    <input class="form-control" name="first_name" id="first_name"  type="text" value="<?php echo e(Request::old('first_name')); ?>"/>
                </div>

                <div class="form-group <?php echo e($errors->has('password') ? 'has-error':''); ?>">
                    <label for="password">Your Password</label>
                    <input class="form-control" name="password" id="password"  type="password" value="<?php echo e(Request::old('password')); ?>"/>
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
                <input type="hidden" name="_token" value="<?php echo e(Session :: token()); ?>" />
            </form>
        </div>
        <div class="col-md-6">
            <h3>Sign In</h3>
            <form action="<?php echo e(route('signin')); ?>" method="post">
                <div class="form-group <?php echo e($errors->has('email') ? 'has-error':''); ?>">
                    <label for="email">Your E-Mail</label>
                    <input class="form-control" name="email" id="email"  type="text" value="<?php echo e(Request :: old('email')); ?>"/>
                    <div class="form-group <?php echo e($errors->has('password') ? 'has-error':''); ?>" >
                        <label for="password">Your Password</label>
                        <input class="form-control" name="password" id="password"  type="password" value="<?php echo e(Request::old('password')); ?>"/>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                    <input type="hidden" name="_token" value="<?php echo e(Session :: token()); ?>" />
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>