            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                        	<li class="menu-title">Navigation</li>

                            <li class="has_sub">
                                <a href="/Admin/dashboard" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Dashboard </span> </a>
                         
                            </li>



               


                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Category </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                	<li><a href="<?php echo e(route('categories.create')); ?>">Add Category</a></li>
                                    <li><a href="<?php echo e(route('categories.index')); ?>">Manage Category</a></li>
                                </ul>
                            </li>

    <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span>Breaking News </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo e(route('news.create')); ?>">Add Breaking News</a></li>
                                    <li><a href="<?php echo e(route('news.index')); ?>">Manage Breaking News</a></li>
                                </ul>
                            </li>               
  <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Posts </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo e(route('blogs.create')); ?>">Add Posts</a></li>
                                    <li><a href="<?php echo e(route('blogs.index')); ?>">Manage Posts</a></li>
                                     
                                </ul>
                            </li>    

                        </ul>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                    <div class="help-box">
                        <h5 class="text-muted m-t-0">For Help ?</h5>
                        <p class=""><span class="text-custom">Email:</span> <br/>georgemuemah@gmail.com</p>
                    </div>

                </div>
                <!-- Sidebar -left -->

            </div><?php /**PATH C:\xampp\htdocs\larablog\resources\views/components/leftsidebar.blade.php ENDPATH**/ ?>