

@extends('admin.app')


@section('main-content')

	<!-- Page Wrapper -->
   
        <div class="page-wrapper">
			
            <div class="content container-fluid">
                
                          <!-- Page Header -->

                          @include('admin.page_header')

                          <!-- /Page Header -->
                <div class="row">
                    <div class="col-md-3"></div>
                 
                    <div class="col-md-6 ">
                             
                                    <div class="card">
                                        <div class="card-header">
                                            <h2 style="font-size:18px;" class="card-title">Send Email Notification to {{$order->email}}</h2>
                                        </div>
                                        <div class="card-body">

                                        @if( $errors -> any())
                                        <p class="alert alert-danger">{{$errors -> first()}} <button class="close" data-dismiss="alert">&times;</button></p>

                                        @endif
                                        @if(Session::has('success'))
                                        <p class="alert alert-success">{{Session::get('success')}} <button class="close" data-dismiss="alert">&times;</button></p>

                                        @endif

                                            <form action="{{ url('emailnote', $order->id) }}" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <label>Email Greeting</label>
                                                    <input name="greeting" type="text" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Email Heading</label>
                                                    <input name="heading" type="text" min="0" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Email Body</label><br>
                                                    <textarea id="" name="body" type="text" rows="3" cols="67"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Email Button</label>
                                                    <input name="button" type="text" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Url</label>
                                                    <input name="url" type="text" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Email Footer</label>
                                                    <input name="footer" type="text" class="form-control">
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