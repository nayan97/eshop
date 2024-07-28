

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
									<h4 class="card-title">All Product Category</h4>
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
                                         @forelse($posts as $item)
                                         
                                         <tr>
                                            <td>{{$loop ->index + 1}}</td>
                                            <td>{{$item -> name}}</td>
                                            <td>{{$item -> slug}}</td>
                                            <td>{{$item -> created_at -> diffForHumans()}}</td>
                                            <td>
                                                <!----<a class="btn btn-sm btn-info" href="#"><i class="fe fe-eye"></i></a>-->
                                                <a class="btn btn-sm btn-warning" href="{{ route('product_cat.edit', $item -> id ) }}"><i class="fe fe-edit"></i></a>
                                                <form onclick="return confirm('Are you sure to delete this')" action="{{ route('product_cat.destroy', $item -> id ) }}" class="d-inline delete-form" method="POST">
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
						<div class="col-md-5">
                            @if ($form == 'create') 
                            <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Add new Post</h4>
                                    </div>
                                    <div class="card-body">
                                    @if( $errors -> any())
                                    <p class="alert alert-danger">{{$errors -> first()}} <button class="close" data-dismiss="alert">&times;</button></p>

                                    @endif
                                    @if(Session::has('success'))
                                    <p class="alert alert-success">{{Session::get('success')}} <button class="close" data-dismiss="alert">&times;</button></p>

                                    @endif
                                    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Title</label>
                                    <input name="title" type="text" value="{{ old('title') }}" class="form-control">
                                </div> 

                                <div class="form-group">
                                    <label>Post Type</label>
                                    <hr>
                                    <select class="form-control" name="type" id="post-type-selector">
                                        <option value="Standard">Standard</option>
                                        <option value="Gallery">Gallery</option> 
                                        <option value="Video">Video</option>
                                        <option value="Audio">Audio</option>
                                        <option value="Quote">Quote</option>
                                    </select>
                                    
                                </div> 

                                <div class="form-group post-standard">
                                    <label>Featured Photo</label>
                                    <br>
                                    <img style="max-width:100%;" id="slider-photo-preview" src="" alt="">
                                    <br>
                                    <input style="display:none;" name="standard" type="file" class="form-control" id="slider-photo">
                                    <label for="slider-photo">
                                        <img style="width:100px; cursor:pointer;" src="https://icon-library.com/images/image-icon/image-icon-2.jpg" alt="">
                                    </label>
                                </div>
                                <hr>

                                <div class="form-group post-gallery">
                                    <label>Gallery Photos</label>
                                    <br>
                                    <div class="port-gall">

                                    </div>
                                    <input style="display:none;" name="gallery[]" multiple type="file" class="form-control" id="portfolio-gallery">
                                    <label for="portfolio-gallery">
                                        <img style="width:100px; cursor:pointer;" src="https://icon-library.com/images/image-icon/image-icon-2.jpg" alt="">
                                    </label>
                                </div>

                                <div class="form-group post-video">
                                    <label>video Post</label>
                                    <input name="video" type="text" value="{{ old('video') }}" class="form-control">
                                </div> 

                                <div class="form-group post-audio">
                                    <label>Audio Post</label>
                                    <input name="audio" type="text" value="{{ old('audio') }}" class="form-control">
                                </div> 

                                <div class="form-group post-quote">
                                    <label>Quote</label>
                                    <textarea class="form-control" name="quote" id="" cols="30" rows="4"></textarea>
                                </div>
                                

                                <div class="form-group">
                                    <label>Post Content</label>                        
                                    <textarea name="content" id="portfolio-desc"></textarea>
                                </div>
                                
                                <div class="form-group">
                                    <label>Categories</label>                        
                                    <ul class="comet-list">
                           
                                        
                                    </ul>
                                </div>

                                <div class="form-group">
                                    <label>Tags</label>
                                    <select class="form-control comet-select-2" name="tag[]" id="" multiple>
                                     
                                    </select>
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
                                        <h4 class="card-title">Add new product category</h4>
                                    </div>
                                    <div class="card-body">

                                    @if( $errors -> any())
                                    <p class="alert alert-danger">{{$errors -> first()}} <button class="close" data-dismiss="alert">&times;</button></p>

                                    @endif
                                    @if(Session::has('success'))
                                    <p class="alert alert-success">{{Session::get('success')}} <button class="close" data-dismiss="alert">&times;</button></p>

                                    @endif

                                        <form action="{{ route('product_cat.store')}}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label>Category Name</label>
                                                <input name="name" type="text" class="form-control">
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