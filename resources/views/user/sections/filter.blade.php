            @php
                $products = App\Models\Product::latest() -> take(8) -> get();
            @endphp
<div class="container">
                <h2 class="title justify-content-center ls-normal mb-4 mt-10 pt-1 appear-animate">Popular Departments
                </h2>
                <div class="tab tab-nav-boxed tab-nav-outline appear-animate">
                    <ul class="nav nav-tabs justify-content-center" role="tablist">
                        <li class="nav-item mr-2 mb-2">
                            <a class="nav-link active br-sm font-size-md ls-normal" href="#tab1-1">New arrivals</a>
                        </li>
                        <li class="nav-item mr-2 mb-2">
                            <a class="nav-link br-sm font-size-md ls-normal" href="#tab1-2">Best seller</a>
                        </li>
                        <li class="nav-item mr-2 mb-2">
                            <a class="nav-link br-sm font-size-md ls-normal" href="#tab1-3">most popular</a>
                        </li>
                        <li class="nav-item mr-0 mb-2">
                            <a class="nav-link br-sm font-size-md ls-normal" href="#tab1-4">Featured</a>
                        </li>
                    </ul>
                </div>
                <!-- End of Tab -->
                <div class="tab-content product-wrapper appear-animate">

                    <!-- End of Tab Pane -->
                    
                    <div class="tab-pane active pt-4" id="tab1-2">
                        <div class="row cols-xl-5 cols-md-4 cols-sm-3 cols-2">
                        @foreach ($products as $goods)
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <a href="{{ url('/singleproduct',$goods->id)}}"> <img style="height:230px;" src="{{ url('/img/product/'. $goods ->image)}}" alt="Product"
                                                width="300" height="338" /></a>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="{{ url('/singleproduct',$goods->id)}}">{{$goods -> title}}</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="{{ url('/singleproduct',$goods->id)}}" class="rating-reviews">(8 reviews)</a>
                                        </div>
                                        <div class="product-price">

                                           @if($goods->dis_price!=NULL)
                                           <h6><del class="new-price">${{$goods ->dis_price}}</del><s>${{$goods ->price}}</s></h6>
                                           @else
                                           <h6 class="new-price">${{$goods ->price}}</h6>
                                           @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                        
                   
            
                    <!-- End of Tab Pane -->
                </div>
                <!-- End of Tab Content -->

</div>
            <!--End of Catainer -->