

@extends('admin.app')


@section('main-content')

	<!-- Page Wrapper -->
   
        <div class="page-wrapper">
			
            <div class="content container-fluid">
                
                          <!-- Page Header -->

                          @include('admin.page_header')

                          <!-- /Page Header -->
                <div class="row">
					<div class="col-md-12">
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
                                                <td>Email</td>
                                                <td>Phone</td>
                                                <td>Address</td>
                                                <td>Quantity</td>
                                                <td>Price</td>
                                                <td>Photo</td>
                                                <td>Payment Status</td>
                                                <td>Delivery Status</td>
                                                <td>Created At</td>
                                                <td>Action</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         @forelse($order as $item)
                                         
                                         <tr>
                                            <td>{{$loop ->index + 1}}</td>
                                            <td>{{$item -> name}}</td>
                                            <td>{{$item -> email}}</td>
                                            <td>{{$item -> cell}}</td>
                                            <td>{{$item -> address}}</td>
                                            <td>{{$item -> quantity}}</td>
                                            <td>{{$item -> price}}</td>
                                            <td>
                                                <img style="width:45px;height:45px;object-fit:cover;" src="{{ url('img/product/' . $item -> image ) }}" alt="">
                                            </td>
                                            <td>{{$item -> payment_status}}</td>
                                            <td>{{$item -> delivery_status}}</td>
                                            <td>{{$item -> created_at -> diffForHumans()}}</td>
                                       </tr>
                                         
                                         
                                         @empty
                                         <tr>
                                            <td colspan="6" class="text-center">
                                                <p>No Order Found</p>
                                            </td>
                                        </tr>
                                         @endforelse  
                                 
                                        </tbody>
                                    </table>
								
								</div>
							</div>
					</div>
				</div>
            </div>			
        </div>
        
	<!-- /Page Wrapper -->

@endsection