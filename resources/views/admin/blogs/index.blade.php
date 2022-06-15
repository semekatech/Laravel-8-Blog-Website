@extends('layouts.admin')
     @section('content')
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

@if($blog->count()> 0)
@foreach($blog as $value)
 <tr>
 
<td><b>{{ $value->title }}</b></td>
<td>{{ $value->category }}</td>
<td>{{ $value->created_at }}</td>
<td>{{ $value->updated_at }}</td>

<td><a href="/admin/blogs/{{ $value->id }}/edit"><i class="fa fa-pencil" title="Edit"></i></a> 

	&nbsp;
     <form id="delete-frm" class="" action="{{ route('blogs.destroy', $value->id) }}" method="POST">
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



                    </div> <!-- container -->

                </div> <!-- content -->

    

            </div>

            </div>
@endsection