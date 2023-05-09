@extends('admin.app')
@section('main-content')
	<!-- Page Wrapper -->
<div class="page-wrapper">
			
            <div class="content container-fluid">
                
                          <!-- Page Header -->

                            @include('admin.page_header')

                          <!-- /Page Header -->
                <div class="row">
						<div class="col-md-7">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">All Permision</h4>
								</div>
								<div class="card-body">


                                @include('validate.success-main')

                                    <table class="table table-striped">
                                        <thead> 
                                                <tr>
                                                <td>#</td>
                                                <td>Name</td>
                                                <td>Slug</td>
                                                <td>Created at</td>
                                                <td>Action</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                     
                                         
                                         <tr>
                                           
                                          
                                       </tr>
                                         
                                         
                                  
                                 
                                        </tbody>
                                    </table>
								
								</div>
							</div>
						</div>
						<div class="col-md-5">
                             <div class="card">
								<div class="card-header">
									<h4 class="card-title">Add new permission</h4>
								</div>
								<div class="card-body">

                                @if( $errors -> any())
                                <p class="alert alert-danger">{{$errors -> first()}} <button class="close" data-dismiss="alert">&times;</button></p>

                                 @endif
                                 @if(Session::has('success'))
                                <p class="alert alert-success">{{Session::get('success')}} <button class="close" data-dismiss="alert">&times;</button></p>

                                 @endif

									<form action="{{route('product_cat.store')}}" method="POST">
                                        @csrf
										<div class="form-group">
											<label>Permission Name</label>
											<input name="name" type="text" class="form-control">
										</div>
									
										<div class="text-right">
											<button type="submit" class="btn btn-primary">Submit</button>
										</div>
									</form>
								</div>
							
                        
						</div>
					</div>

               
                
            </div>			
        </div>
        
	<!-- /Page Wrapper -->

@endsection