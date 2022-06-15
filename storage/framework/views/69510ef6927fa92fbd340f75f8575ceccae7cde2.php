
<?php $__env->startSection('content'); ?>
<!-- ##### Post Details Area Start ##### -->
 <div class="post-details-title-area bg-overlay clearfix" style="background-image: url(<?php echo e(asset('images/blogimages/' . $blog->image)); ?>)"> 
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-lg-8">
                    <!-- Post Content -->
                    <div class="post-content">
                        <p class="tag"><span><?php echo e($blog->category); ?></span></p>
                        <p class="post-title"><?php echo e($blog->title); ?></p>
                        <div class="d-flex align-items-center">
                            <span class="post-date mr-30"><?php echo e(date('M d, Y',strtotime($blog->created_at))); ?></span>
                            <span class="post-date"><i class="fa fa-eye"></i> <?php echo e($blog->views); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="post-news-area section-padding-100-0 mb-70">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Post Details Content Area -->
                <div class="col-12 col-lg-8">
                    <div class="post-details-content mb-100">
                        <p><?php echo $blog->description; ?></p>
                         </div>

                    <!-- Comment Area Start -->
                    <div class="comment_area clearfix mb-100">
                        <h4 class="mb-50">Comments</h4>

                        <ol>
                        <?php if($comments->count()> 0): ?>
<?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <!-- Single Comment Area -->
                            <li class="single_comment_area">
                                <!-- Comment Content -->
                                <div class="comment-content d-flex">
                                    <!-- Comment Author -->
                                   
                                    <!-- Comment Meta -->
                                    
                                    <div class="comment-meta">
                                        <div class="d-flex">
                                            <a href="#" class="post-author"><?php echo e($value->name); ?></a>
                                            <a href="#" class="post-date"><?php echo e($value->created_at); ?></a>
                                            
                                        </div>
                                        <p><?php echo e($value->message); ?></p>
                                    </div>
                                   
                                </div>
                                            </li>  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            	<?php else: ?>
			 <p>No comments</p>
			<?php endif; ?>
                        </ol>
                    </div>

                    <div class="post-a-comment-area mb-30 clearfix">
                        <h4 class="mb-50">Leave a reply</h4>

                        <!-- Reply Form -->
                        <div class="contact-form-area">
                            <form action="<?php echo e(route('post-details.store')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <input type="text" class="form-control" name="name" placeholder="Name*">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input type="email" class="form-control" name="email" placeholder="Email*">
                                    </div>
                                    <div class="col-12">
                                        <input type="hidden" name="slug" class="form-control" id="subject" value="<?php echo e($blog->slug); ?>">
                                    </div>
                                    <div class="col-12">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn newsbox-btn mt-30" type="submit">Submit Comment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Widget -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <div class="sidebar-area">

                     

                       
                        <!-- Latest News Widget -->
                        <div class="single-widget-area news-widget mb-30">
                            <h4>Latest News</h4>
 <?php $__currentLoopData = $topblogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <!-- Single News Area -->
                            <div class="single-blog-post d-flex style-4 mb-30">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail">
                                    <a href="#"><img src="<?php echo e(asset('images/blogimages/' . $value->image)); ?>" alt=""></a>
                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date"><?php echo e(date('M d, Y',strtotime($value->created_at))); ?></span>
                                    <a href="/post-details/<?php echo e($value->slug); ?>" class="post-title"><?php echo e($value->title); ?></a>
                                </div>
                            </div>

                            <!-- Single News Area -->
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           
                           
                        </div>

                 

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Add Area End ##### -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\larablog\resources\views/post-details.blade.php ENDPATH**/ ?>