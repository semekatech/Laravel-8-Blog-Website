
     <?php $__env->startSection('content'); ?>
                <div class="content">
                    <div class="container">
                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Dashboard</h4>
                                    <ol class="breadcrumb p-0 m-0">
									 <li>
                                            <a href="" target="_blank">Trendnews</a>
                                        </li>
                                        <li>
                                            <a  href="" target="_blank">Portal</a>
                                        </li>
                                        <li>
                                            <a  href="" target="_blank">Admin</a>
                                        </li>
                                        <li class="active">
                                            Dashboard
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->

                        <div class="row">
<a href="manage-categories.php">
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="card-box widget-box-one">
                                    <i class="mdi mdi-chart-areaspline widget-one-icon"></i>
                                    <div class="wigdet-one-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">Categories Listed</p>


                                        <h2><?php echo e(\App\Models\Category::count()); ?><small></small></h2>
                                    
                                    </div>
                                </div>
                            </div></a><!-- end col -->
<a href="<?php echo e(route('categories.index')); ?><?php echo e(route('categories.index')); ?><?php echo e(route('categories.index')); ?>">
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="card-box widget-box-one">
                                    <i class="mdi mdi-layers widget-one-icon"></i>
                                    <div class="wigdet-one-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">Breaking News</p>

                                        <h2><?php echo e(\App\Models\BreakingNew::count()); ?> <small></small></h2>
                              
                                    </div>
                                </div>
                            </div><!-- end col -->
</a>

     <a href="manage-posts.php">                       
        <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="card-box widget-box-one">
                                    <i class="mdi mdi-layers widget-one-icon"></i>
                                    <div class="wigdet-one-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">Live News</p>

                                        <h2><?php echo e(\App\Models\Blog::count()); ?><small></small></h2>
                                         
                              
                                    </div>
                                </div>
                            </div><!-- end col -->
</a>
                
                  
                        </div>
                        <!-- end row -->
   
   

                    </div> <!-- container -->

                </div> <!-- content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\larablog\resources\views/Admin/dashboard.blade.php ENDPATH**/ ?>