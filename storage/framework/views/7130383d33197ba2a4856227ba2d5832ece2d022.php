<?php $__env->startSection('content'); ?>


    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" action="<?php echo e(route('login.post')); ?>" method="POST"class="signup-form">
					 <?php echo csrf_field(); ?>
                    <h2 style="color:black; text-align:center;"><b><span style="color: green;">ADMIN</span><span style="color: red;">LOGIN</span></b></h2>
 
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="username" placeholder="username" required=""/>
							<?php if($errors->has('username')): ?>

                                      <span class="text-danger"><?php echo e($errors->first('email')); ?></span>

                                  <?php endif; ?>
                        </div>
                              <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="password" required=""/>
							<?php if($errors->has('password')): ?>

                                      <span class="text-danger"><?php echo e($errors->first('password')); ?></span>

                                  <?php endif; ?>
                        </div>
                       
                        
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="LOGIN"/>
                        </div>
                       
                    </form>
                </div>
            </div>
        </section>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\larablog\resources\views/auth/login.blade.php ENDPATH**/ ?>