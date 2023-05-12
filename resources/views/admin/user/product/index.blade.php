@extends('admin.app')
@section('main-content')
	<!-- Page Wrapper -->
        <div class="page-wrapper">
			
            <div class="content container-fluid">
                
                          <!-- Page Header -->

                          @include('admin.page_header')

                          <!-- /Page Header -->
                <div class="row">
						<div class="col-md-8">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">All Product</h4>
								</div>
								<div class="card-body">


                                @include('validate.success-main')

                                    <table class="table table-striped">
                                        <thead> 
                                                <tr>
                                                <td>#</td>
                                                <td>Title</td>
                                                <td>Deccription</td>
                                                <td>Created at</td>
                                                <td>Action</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         @forelse($all_data as $item)
                                         
                                         <tr>
                                            <td>{{$loop ->index + 1}}</td>
                                            <td>{{$item -> title}}</td>
                                            <td>{{$item -> description}}</td>
                                            <td>{{$item -> created_at -> diffForHumans()}}</td>
                                            <td>
                                                <!----<a class="btn btn-sm btn-info" href="#"><i class="fe fe-eye"></i></a>-->
                                                <a class="btn btn-sm btn-warning" href="{{ route('product.edit', $item -> id ) }}"><i class="fe fe-edit"></i></a>
                                                <form onclick="return confirm('Are you sure to delete this')" action="{{ route('product.destroy', $item -> id ) }}" class="d-inline delete-form" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                    <button class="btn btn-sm btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </td>
                                       </tr>
                                         
                                         
                                         @empty
                                         <tr>
                                            <td colspan="6" class="text-center">
                                                <p>No Permision Found</p>
                                            </td>
                                        </tr>
                                         @endforelse  
                                 
                                        </tbody>
                                    </table>
								
								</div>
							</div>
						</div>
						<div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Add new product</h4>
                                    </div>
                                    <div class="card-body">

                                    @if( $errors -> any())
                                    <p class="alert alert-danger">{{$errors -> first()}} <button class="close" data-dismiss="alert">&times;</button></p>

                                    @endif
                                    @if(Session::has('success'))
                                    <p class="alert alert-success">{{Session::get('success')}} <button class="close" data-dismiss="alert">&times;</button></p>

                                    @endif

                                        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label>Tittle</label>
                                                <input name="title" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Desccription</label>
                                                <input name="desc" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Quantity</label>
                                                <input name="quantity" type="number" min="0" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Price</label>
                                                <input name="price" type="number" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Discount Price</label>
                                                <input name="dis_price" type="number" min="number" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Catergory</label>
                                              <select name="cat" id="">
                                                <option value="" selected="">Select one</option>
                                                @foreach ($category as $cat )
                                                 <option value="{{$cat-> name}}">{{$cat-> name}}</option> 
                                                @endforeach
                                              </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Image</label>
                                                <input name="photo" type="file" class="form-control">
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
        </div>
        
	<!-- /Page Wrapper -->

@endsection