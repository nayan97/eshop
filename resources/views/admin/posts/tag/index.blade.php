

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
									<h4 class="card-title">All Post Tag</h4>
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
                                         @forelse($tags as $item)
                                         
                                         <tr>
                                            <td>{{$loop ->index + 1}}</td>
                                            <td>{{$item -> name}}</td>
                                            <td>{{$item -> slug}}</td>
                                            <td>{{$item -> created_at -> diffForHumans()}}</td>
                                            <td>
                                                <!----<a class="btn btn-sm btn-info" href="#"><i class="fe fe-eye"></i></a>-->
                                                <a class="btn btn-sm btn-warning" href="{{ route('tag.edit', $item -> id ) }}"><i class="fe fe-edit"></i></a>
                                                <form onclick="return confirm('Are you sure to delete this')" action="{{ route('tag.destroy', $item -> id ) }}" class="d-inline delete-form" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                    <button class="btn btn-sm btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </td>
                                       </tr>
                                         
                                         
                                         @empty
                                         <tr>
                                            <td colspan="6" class="text-center">
                                                <p>No Tags Found</p>
                                            </td>
                                        </tr>
                                         @endforelse  
                                 
                                        </tbody>
                                    </table>
								
								</div>
							</div>
						</div>
						<div class="col-md-5">
                            @if ($form == 'create') 
                            <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Add new product category</h4>
                                    </div>
                                    <div class="card-body">

                                    @if( $errors -> any())
                                    <p class="alert alert-danger">{{$errors -> first()}} <button class="close" data-dismiss="alert">&times;</button></p>

                                    @endif
                                    @if(Session::has('success'))
                                    <p class="alert alert-success">{{Session::get('success')}} <button class="close" data-dismiss="alert">&times;</button></p>

                                    @endif

                                        <form action="{{ route('tag.store')}}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label>Tag Name</label>
                                                <input name="name" type="text" class="form-control">
                                            </div>
                                        
                                            <div class="text-right">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div> 
                            @endif

                            @if ($form == 'edit') 
                             <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Edit Tag</h4>
                                        <span style="padding:0px">
                                            <a class="btn btn-primary float-right" href="{{ url('tag')}}">Back</a>
                                        </span>
                                    </div>
                                    <div class="card-body">

                                    @if( $errors -> any())
                                    <p class="alert alert-danger">{{$errors -> first()}} <button class="close" data-dismiss="alert">&times;</button></p>

                                    @endif
                                    @if(Session::has('success'))
                                    <p class="alert alert-success">{{Session::get('success')}} <button class="close" data-dismiss="alert">&times;</button></p>

                                    @endif

                                        <form action="{{ route('tag.update', $edit -> id)}}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label>Category Name</label>
                                                <input  value="{{ $edit -> name}}" name="name" type="text" class="form-control">
                                            </div>
                                        
                                            <div class="text-right">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div> 
                            @endif

                            
                               
                         
                      
						</div>
					</div>

               
                
            </div>			
        </div>
        
	<!-- /Page Wrapper -->

@endsection