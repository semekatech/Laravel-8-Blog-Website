
     <?php $__env->startSection('content'); ?>
                               <div class="content">
                    <div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Manage Posts </h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">Posts</a>
                                        </li>
                                        <li class="active">
                                            Manage Post  
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->




                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                         

                                    <div class="table-responsive">
<table class="table table-colored table-centered table-inverse m-0">
<thead>
<tr>                                      
<th>Title</th>
<th>Category</th>
<th>Created_at</th>
<th>updated_at</th>
<th>Action</th>
</tr>
</thead>
<tbody>

<?php if($blog->count()> 0): ?>
<?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <tr>
 
<td><b><?php echo e($value->title); ?></b></td>
<td><?php echo e($value->category); ?></td>
<td><?php echo e($value->created_at); ?></td>
<td><?php echo e($value->updated_at); ?></td>

<td><a href="/admin/blogs/<?php echo e($value->id); ?>/edit"><i class="fa fa-pencil" title="Edit"></i></a> 

	&nbsp;
     <form id="delete-frm" class="" action="<?php echo e(route('blogs.destroy', $value->id)); ?>" method="POST">
   	<?php echo e(csrf_field()); ?>

								<?php echo e(method_field('DELETE')); ?>

                                <button style="background: none; border:none;"><i class="fa fa-trash-o" style="color: #f05050"></i></button>
                               
</form>
     </td>
 </tr>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 <?php else: ?>
			<p>No data</p>
			<?php endif; ?>
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div> <!-- container -->

                </div> <!-- content -->

    

            </div>

            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\larablog\resources\views/Admin/blogs/index.blade.php ENDPATH**/ ?>