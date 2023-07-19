{{-- <div class="container">
    <h2 class="title justify-content-center ls-normal mb-4 mt-10 pt-1 appear-animate">Popular Departments
    </h2>
    <div class="tab tab-nav-boxed tab-nav-outline appear-animate">
        <ul class="nav nav-tabs justify-content-center" role="tablist">
            <li class="nav-item mr-2 mb-2">
                <a class="nav-link br-sm font-size-md ls-normal active" href="#tab1-1">New arrivals</a>
            </li>
            @foreach ($cat as $cat)
                <li class="nav-item mr-2 mb-2">
                    <a class="nav-link br-sm font-size-md ls-normal" href="#{{ $cat->slug }}">{{ $cat->name }}</a>
                </li>
            @endforeach

        </ul>
    </div>
    <!-- End of Tab -->
    <div class="tab-content product-wrapper appear-animate">

        <!-- End of Tab Pane -->
        @foreach ($product as $goods)
        <div class="tab-pane active pt-4" id="tab1-1">
            <div class="row cols-xl-5 cols-md-4 cols-sm-3 cols-2">
                    <div class="product-wrap">
                        <div class="product text-center">
                            <a href="{{ url('/singleproduct', $goods->id) }}"> <img style="height:230px;"
                                    src="{{ url('/img/product/' . $goods->image) }}" alt="Product" width="300"
                                    height="338" /></a>
                            <div class="product-details">
                                <h4 class="product-name"><a
                                        href="{{ url('/singleproduct', $goods->id) }}">{{ $goods->title }}</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="{{ url('/singleproduct', $goods->id) }}" class="rating-reviews">(8
                                        reviews)</a>
                                </div>
                                <div class="product-price">

                                    @if ($goods->dis_price != null)
                                        <h6><del
                                                class="new-price">${{ $goods->dis_price }}</del><s>${{ $goods->price }}</s>
                                        </h6>
                                    @else
                                        <h6 class="new-price">${{ $goods->price }}</h6>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
               
            </div>
        </div>
        @endforeach



        <!-- End of Tab Pane -->
    </div>
    <!-- End of Tab Content -->

</div> --}}
<!--End of Catainer -->
<div class="container">
    <h2 class="title justify-content-center ls-normal mb-4 mt-10 pt-1 appear-animate fadeIn appear-animation-visible"
        style="animation-duration: 1.2s;">Popular Departments
    </h2>
    <div class="tab tab-nav-boxed tab-nav-outline appear-animate fadeIn appear-animation-visible"
        style="animation-duration: 1.2s;">
        <ul class="nav nav-tabs justify-content-center" role="tablist">
            <li class="nav-item mr-2 mb-2">
                <a class="nav-link br-sm font-size-md ls-normal active" href="#tab1-1">All</a>
            </li>
            @foreach ($cat as $item)
                <li class="nav-item mr-2 mb-2">
                    <a class="nav-link br-sm font-size-md ls-normal" href="#{{ $item->slug }}">{{ $item->name }}</a>
                </li>
            @endforeach
        </ul>
    </div>
    <!-- End of Tab -->
    <div class="tab-content product-wrapper appear-animate fadeIn appear-animation-visible"
        style="animation-duration: 1.2s;">
        @foreach ($cat as $item)
            <div class="tab-pane pt-4" id="{{ $item->slug }}">
                <div class="row cols-xl-5 cols-md-4 cols-sm-3 cols-2">
                    @foreach ($product as $goods)
                        @if ($goods->ProductCats->slug == $item->slug)
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <a href="{{ url('/singleproduct', $goods->id) }}"> <img style="height:230px;"
                                            src="{{ url('/img/product/' . $goods->image) }}" alt="Product" width="300"
                                            height="338" /></a>
                                    <div class="product-details">
                                        <h4 class="product-name"><a
                                                href="{{ url('/singleproduct', $goods->id) }}">{{ $goods->title }}</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="{{ url('/singleproduct', $goods->id) }}"
                                                class="rating-reviews">(8 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            @if ($goods->dis_price != null)
                                                <h6><del class="new-price">${{ $goods->dis_price }}</del><s>${{ $goods->price }}</s>
                                                </h6>
                                            @else
                                                <h6 class="new-price">${{ $goods->price }}</h6>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                      
                        @endif
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
    <!-- End of Tab Pane -->
</div>

<!-- End of Tab Content -->

