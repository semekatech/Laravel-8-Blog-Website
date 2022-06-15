@extends('layouts.admin')
     @section('content')
                <div class="content">
                    <div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title"> Edit Category</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">Category </a>
                                        </li>
                                        <li class="active">
                                            Edit Category
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
                                    
                        		


<div class="row">
<div class="col-sm-6">  
<!---Success Message--->  

<!---<div class="alert alert-success" role="alert">
<strong>Well done!</strong> 
</div>--->


<!---Error Message--->

<!---<div class="alert alert-danger" role="alert">
<strong>Oh snap!</strong> </div>--->



</div>
</div>





                        			<div class="row">
                        				<div class="col-md-6">
                        					<form class="form-horizontal" name="category"  action="{{ route('categories.update', $category->id) }}" method="post">
                                             @csrf 
                                              @method('PUT')
	                                            <div class="form-group">
	                                                <label class="col-md-2 control-label">Category</label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" value="{{ $category->category}}" name="category" required>
	                                                </div>
	                                            </div>
	                                     

        <div class="form-group">
                                                    <label class="col-md-2 control-label">&nbsp;</label>
                                                    <div class="col-md-10">
                                                  
                                                <button type="submit" class="btn btn-custom waves-effect waves-light btn-md" name="submit">
                                                    Submit
                                                </button>
                                                    </div>
                                                </div>

	                                        </form>
                        				</div>


                        			</div>


                        			




           
                       


                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                    </div> <!-- container -->

                </div> <!-- content -->
@endsection