@extends('layouts.admin')
     @section('content')
                               <div class="content">
                    <div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Manage Categories</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">Category </a>
                                        </li>
                                        <li class="active">
                                           Manage Categories
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->


 <!-- <div class="row">
<div class="col-sm-6">  
 

<div class="alert alert-success" role="alert">
<strong>Well done!</strong> 
</div>



<div class="alert alert-danger" role="alert">
<strong>Oh snap!</strong> </div>



</div>-->
                                 
                                 
                                    


                                   


                                    <div class="row">
										<div class="col-md-12">
											<div class="demo-box m-t-20">
<div class="m-b-30">
<a href="{{ route('categories.create') }}">
<button id="addToTable" class="btn btn-success waves-effect waves-light">Add <i class="mdi mdi-plus-circle-outline" ></i></button>
</a>
 </div>

												<div class="table-responsive">
                                                    <table class="table m-0 table-colored-bordered table-bordered-primary">
                                                        <thead>
                                                            <tr>
                                                               
                                                                <th> Category</th>
                                                               
                                                                <th> Date Created</th>
                                                                  <th>Last updation Date</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
@if($categories->count()> 0)                                                        <tbody>
@foreach($categories as $value)
 <tr>

<td>{{ $value->category }}</td>

<td>{{ $value->created_at }}</td>
<td>{{ $value->updated_at }}</td>

<td><a href="/admin/categories/{{ $value->id }}/edit"><i class="fa fa-pencil" title="Edit"></i></a> 

	&nbsp;
     <form id="delete-frm" class="" action="{{ route('categories.destroy', $value->id) }}" method="POST">
   	{{ csrf_field() }}
								{{ method_field('DELETE') }}
                                <button style="background: none; border:none;"><i class="fa fa-trash-o" style="color: #f05050"></i></button>
                               
</form>
     </td>
</tr>
@endforeach
@else
			<p>No data</p>
			@endif
</tbody>
                                                  
                                                    </table>
                                                </div>




											</div>

										</div>

							
									</div>
                                    <!--- end row -->


                    </div> <!-- container -->

                </div> <!-- content -->

            </div>
@endsection