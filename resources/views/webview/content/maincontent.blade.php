@extends('webview.master')

@section('maincontent')
@section('title')
    {{ env('APP_NAME') }}-Best online shop in Bangladesh
@endsection

@section('meta')
    <meta name="description"
        content="Online shopping in Bangladesh for beauty products, men, women, kids, fashion items, clothes, electronics, home appliances, gadgets, watch, many more.">
    <meta name="keywords"
        content="{{ env('APP_NAME') }}, online store bd, online shop bd, Organic fruits, Thai, UK, Korea, China, cosmetics, Jewellery, bags, dress, mobile, accessories, automation Products,">


    <meta itemprop="name" content="Best Online Shopping in Bangladesh | {{ env('APP_NAME') }}">
    <meta itemprop="description"
        content="Best online shopping in Bangladesh for beauty products, men, women, kids, fashion items, clothes, electronics, home appliances, gadgets, watch, many more.">
    <meta itemprop="image" content="{{ env('APP_URL') }}public/rankone1.png">

    <meta property="og:url" content="{{ env('APP_URL') }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Best Online Shopping in Bangladesh | {{ env('APP_NAME') }}">
    <meta property="og:description"
        content="Online shopping in BD for beauty products, men, women, kids, fashion items, clothes, electronics, home appliances, gadgets, watch, many more.">
    <meta property="og:image" content="{{ env('APP_URL') }}public/rankone1.png">
    <meta property="image" content="{{ env('APP_URL') }}public/rankone1.png" />
    <meta property="url" content="{{ env('APP_URL') }}">
    <meta itemprop="image" content="{{ env('APP_URL') }}public/rankone1.png">
    <meta property="twitter:card" content="{{ env('APP_URL') }}public/rankone1.png" />
    <meta property="twitter:title" content="Best Online Shopping in Bangladesh | {{ env('APP_NAME') }}" />
    <meta property="twitter:url" content="{{ env('APP_URL') }}">
    <meta name="twitter:image" content="{{ env('APP_URL') }}public/rankone1.png">
@endsection
<style>
    .product {
        margin-top: 4px !important;

    }

    #featureimagess {
        width: 100%;
        padding: 0px;
        padding-top: 0;
        /*max-height:200px;*/
    }

    #checked {
        color: orange;
    }

    .star {
        font-size: 8px !important;
    }
</style>


<div class="p-0 mt-2 row">
    <div class="col-12 col-lg-9">
        <div class="owl-carousel owl-theme" id="slider">
            @forelse ($sliders as $slider)
                <div class="item" style="margin:0 !important;">
                    <a href="{{ $slider->slider_btn_link }}">
                        <img src="{{ asset($slider->slider_image) }}">
                    </a>
                </div>
            @empty
            @endforelse
        </div>

    </div>
    <div class="col-lg-3" id="d-sm-none">
        @php
            $ad = App\Models\Addbanner::where('id', 5)
                ->select('id', 'add_link', 'add_image')
                ->where('status', 'Active')
                ->first();
            $ad2 = App\Models\Addbanner::where('id', 6)
                ->select('id', 'add_link', 'add_image')
                ->where('status', 'Active')
                ->first();
        @endphp
        <div class="media-banner">
            <a href="{{ $ad?->add_link }}" target="_blank" class="banner-container">
                <img src="{{ asset($ad?->add_image) }}" class="img-fluid mb-lg-3">
            </a>
            <a href="{{ $ad2?->add_link }}" target="_blank" class="banner-container">
                <img src="{{ asset($ad2?->add_image) }}" class="img-fluid">
            </a>
        </div>
    </div>
</div>




<div class="container p-0 mt-4 mb-2 mt-lg-4 pt-lg-4">
    <div class="row">
        @forelse ($categories as $category)
            <div class="col-lg-2 col-4">
                <a href="{{ url('products/category/' . $category->slug) }}">
                    <div id="cath">
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset($category->category_icon) }}" id="catimg">
                        </div>

                        <p id="catp" style="font-weight:bold;color: black;">{{ $category->category_name }}</p>
                    </div>
                </a>
            </div>
        @empty
        @endforelse
    </div>
</div>


<!-- Promotional Products -->
<div class="container p-0 pb-2 ">
    @if (count($topproducts) > 0)
        <div class="pb-2 bg-white row" style="background:#efefef !important;">
            <div class="col-12"
                style="border-bottom: 1px solid #120d3f;padding-left: 0;display: flex;justify-content: space-between;">
                <div class="px-2 pt-0 p-md-3 d-flex justify-content-between"
                    style="padding-bottom:4px !important;padding-top: 8px !important;">
                    <h4 class="m-0"><b>Promotional Offers</b></h4>
                </div>
                <a href="{{ url('promotional/products') }}" class="mb-0 btn btn-sm"
                    style="padding: 4px;height: 26px;color: white;font-weight: bold;margin-top:9px;font-size:12px; background:#120d3f;">VIEW
                    ALL</a>
            </div>
            <div class="col-12">
                <div class="owl-carousel " id="promotionalofferSlide">
                    @forelse ($topproducts as $promotional)
                        @php
                            $firstpro = App\Models\Product::with([
                                'sizes' => function ($query) {
                                    $query
                                        ->select('id', 'product_id', 'Discount', 'RegularPrice', 'SalePrice')
                                        ->take(1);
                                },
                            ])
                                ->where('id', json_decode($promotional->RelatedProductIds)[0]->productID)
                                ->select('id', 'ProductName')
                                ->first();

                        @endphp
                        @if (isset($firstpro))
                            <div class="item" id="featuredproduct">
                                <div class="products best-product">
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col-12">
                                                    <div class="product-image" style="position: relative;">
                                                        <div class="text-center image">
                                                            <a
                                                                href="{{ url('view-product/' . $promotional->ProductSlug) }}">
                                                                <img src="{{ asset($promotional->ProductImage) }}">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col-12">
                                                    <div class="p-2 infofe p-md-2"
                                                        style="padding-bottom: 4px !important;background: white;">
                                                        <div class="product-info">
                                                            <h2 class="name text-truncate" id="f_name"><a
                                                                    href="{{ url('view-product/' . $promotional->ProductSlug) }}"
                                                                    id="f_pro_name">{{ $promotional->ProductName }}</a>
                                                            </h2>
                                                        </div>


                                                        <div class="d-flex" style="justify-content:space-between">
                                                            <div class="star" style="padding-top: 5px;">
                                                                <span
                                                                    style="font-weight: bold;color:black;font-size:10px">({{ App\Models\Review::where('product_id', $promotional->id)->get()->count() }})</span>

                                                                <span class="fas fa-star" id="checked"></span>
                                                                <span class="fas fa-star" id="checked"></span>
                                                                <span class="fas fa-star" id="checked"></span>
                                                                <span class="fas fa-star" id="checked"></span>
                                                                <span class="fas fa-star" id="checked"></span>

                                                            </div>

                                                        </div>

                                                        <div class="price-box">
                                                            <del class="old-product-price strong-400"
                                                                style="color:red">৳
                                                                {{ round($firstpro->sizes[0]->RegularPrice) }}</del>
                                                            <span class="product-price strong-600"
                                                                style="color:black">৳
                                                                {{ round($firstpro->sizes[0]->SalePrice) }}</span>
                                                        </div>

                                                    </div>
                                                    <a href="{{ url('view-product/' . $promotional->ProductSlug) }}">
                                                        <button class="mb-0 btn btn-danger btn-sm btn-block"
                                                            style="width: 100%;border-radius: 0%;"
                                                            id="purcheseBtn">অর্ডার করুন</button>
                                                    </a>

                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                </div>
                            </div>
                        @endif
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    @else
    @endif

    <div class="row gutters-10">
        @if (count($adds) == '2')
            @forelse ($adds as $add)
                <div class="col-lg-6 col-6 ps-lg-0">
                    <div class="mb-1 media-banner mb-lg-0">
                        <a href="{{ $add->add_link }}" target="_blank" class="banner-container">
                            <img src="{{ asset($add->add_image) }}" alt="{{ env('APP_NAME') }}"
                                class="img-fluid ls-is-cached lazyloaded">
                        </a>
                    </div>
                </div>
            @empty
            @endforelse
        @else
            @forelse ($adds as $add)
                <div class="col-lg-12 col-12 ps-0">
                    <div class="mb-1 media-banner mb-lg-0">
                        <a href="{{ $add->add_link }}" target="_blank" class="banner-container">
                            <img src="{{ asset($add->add_image) }}" alt="{{ env('APP_NAME') }}"
                                class="img-fluid ls-is-cached lazyloaded">
                        </a>
                    </div>
                </div>
            @empty
            @endforelse
        @endif
    </div>

    @forelse ($categoryproducts as $key=>$categoryproduct)
        @if (count($categoryproduct->mainproducts) > 0)
            <div class="pb-0 bg-white row" style="background:#efefef !important;">
                <div class="col-12"
                    style="border-bottom: 1px solid #120d3f;padding-left: 0;display: flex;justify-content: space-between;">
                    <div class="px-2 pt-0 p-md-3 d-flex justify-content-between"
                        style="padding-bottom:4px !important;padding-top: 8px !important;">
                        <h4 class="m-0"><b>{{ $categoryproduct->category_name }}</b></h4>
                    </div>
                    <a href="{{ url('products/category/' . $categoryproduct->slug) }}"
                        class="mb-0 btn btn-danger btn-sm"
                        style="padding: 4px;height: 26px;color: white;font-weight: bold;margin-top:9px;font-size:12px;background: #120d3f;border: 1px solid #120d3f;">VIEW
                        ALL</a>
                </div>


                @forelse ($categoryproduct->mainproducts as $product)
                   @php
                        $relatedProducts = json_decode($product->RelatedProductIds);
                        $firstcatepro = null;
                    
                        if (is_array($relatedProducts) && isset($relatedProducts[0]->productID)) {
                            $firstcatepro = App\Models\Product::with([
                                'sizes' => function ($query) {
                                    $query->select('id', 'product_id', 'Discount', 'RegularPrice', 'SalePrice')->take(1);
                                },
                            ])
                            ->where('id', $relatedProducts[0]->productID)
                            ->select('id', 'ProductName')
                            ->first();
                        }
                    @endphp

                    @if (isset($firstcatepro))
                        <div class="mb-2 col-6 col-md-4 col-lg-2">
                            <div class="product">
                                <div class="product-micro">
                                    <div class="row product-micro-row">
                                        <div class="col-12">
                                            <div class="product-image" style="position: relative;">
                                                <div class="text-center image">
                                                    <a href="{{ url('view-product/' . $product->ProductSlug) }}">
                                                        <img src="{{ asset($product->ProductImage) }}">
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- /.product-image -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-12">
                                            <div class="p-2 infofe p-md-2" style="border-top:none;background: white;">
                                                <div class="product-info">
                                                    <h2 class="name text-truncate" id="f_name"><a
                                                            href="{{ url('view-product/' . $product->ProductSlug) }}"
                                                            id="f_pro_name">{{ $firstcatepro->ProductName }}</a>
                                                    </h2>
                                                </div>

                                                <div class="d-flex" style="justify-content:space-between">
                                                    <div class="star" style="padding-top: 5px;">
                                                        <span
                                                            style="font-weight: bold;color:black;font-size:10px">({{ App\Models\Review::where('product_id', $firstcatepro->id)->select('id')->get()->count() }})</span>

                                                        <span class="fas fa-star" id="checked"></span>
                                                        <span class="fas fa-star" id="checked"></span>
                                                        <span class="fas fa-star" id="checked"></span>
                                                        <span class="fas fa-star" id="checked"></span>
                                                        <span class="fas fa-star" id="checked"></span>

                                                    </div>

                                                </div>

                                                <div class="price-box">
                                                    <del class="old-product-price strong-400" style="color:red">৳
                                                        {{ round($firstcatepro->sizes[0]->RegularPrice) }}</del>
                                                    <span class="product-price strong-600" style="color:black">৳
                                                        {{ round($firstcatepro->sizes[0]->SalePrice) }}</span>
                                                </div>

                                            </div>

                                            <a href="{{ url('view-product/' . $product->ProductSlug) }}">
                                                <button class="mb-0 btn btn-danger btn-sm btn-block"
                                                    style="width: 100%;border-radius: 0%;" id="purcheseBtn">অর্ডার
                                                    করুন</button>
                                            </a>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.product-micro-row -->
                                </div>

                                <!-- /.product-micro -->

                            </div>
                        </div>
                    @endif
                @empty
                @endforelse


            </div>
        @else
        @endif

    @empty
    @endforelse

    <div class="row gutters-10">
        @if (count($addbottoms) == '2')
            @forelse ($addbottoms as $add)
                <div class="col-lg-6 col-6 ps-lg-0">
                    <div class="mb-1 media-banner mb-lg-0">
                        <a href="{{ $add->add_link }}" target="_blank" class="banner-container">
                            <img src="{{ asset($add->add_image) }}" alt="{{ env('APP_NAME') }}"
                                class="img-fluid ls-is-cached lazyloaded">
                        </a>
                    </div>
                </div>
            @empty
            @endforelse
        @else
            @forelse ($addbottoms as $add)
                <div class="col-lg-12 col-12 pr-lg-0">
                    <div class="mb-1 media-banner mb-lg-0">
                        <a href="{{ $add->add_link }}" target="_blank" class="banner-container">
                            <img src="{{ asset($add->add_image) }}" alt="{{ env('APP_NAME') }}"
                                class="img-fluid ls-is-cached lazyloaded">
                        </a>
                    </div>
                </div>
            @empty
            @endforelse
        @endif


        <!--@if (App\Models\Menu::where('status', 'Active')->count() > 0)-->
        <!--    <div class="mt-4 col-12 col-lg-12">-->
        <!--        <div class="px-2 pt-0 p-md-3" style="padding-bottom:4px !important;padding-top: 8px !important;">-->
        <!--            <a href="{{ url('multimedia') }}">-->
        <!--                <h4 class="m-0" style="text-align: center;padding-bottom: 12px;font-size: 30px;"><b>-->
        <!--                        Multimedia</b></h4>-->
        <!--            </a>-->
        <!--        </div>-->
        <!--        <div class="owl-carousel owl-theme" id="youtube">-->
        <!--            @forelse (App\Models\Menu::where('status','Active')->get() as $yout)-->
        <!--                <div class="item" style="margin:0 !important;">-->
        <!--                    <iframe width="100%" src="https://www.youtube.com/embed/{{ $yout->menu_banner }}">-->
        <!--                    </iframe>-->
        <!--                </div>-->
        <!--            @empty-->
        <!--            @endforelse-->
        <!--        </div>-->
        <!--    </div>-->
        <!--@endif-->
    </div>

</div>


@if (Auth::id())
    <input type="hidden" name="user_id" id="user_id" value="{{ Auth::id() }}">
@else
    <input type="hidden" name="user_id" id="user_id">
@endif

@if (Auth::id())
    <input type="hidden" name="user_id" id="user_id" value="{{ Auth::id() }}">
@else
    <input type="hidden" name="user_id" id="user_id">
@endif

<script>
    function givereactlike(id) {
        $.ajax({
            type: 'GET',
            url: '{{ url('give/react/') }}' + '/like',
            data: {
                'user_id': $('#user_id').val(),
                'product_id': id,
            },

            success: function(data) {
                if (data.sigment == 'like') {
                    $('#promotionalofferSlide #likereactof' + id).text(data.total);
                    $('#promotionalofferSlide #likereactdone' + id).css('color', 'green');
                    $('#propro #likereactof' + id).text(data.total);
                    $('#propro #likereactdone' + id).css('color', 'green');
                } else if (data.sigment == 'unlike') {
                    $('#promotionalofferSlide #likereactof' + id).text(data.total);
                    $('#promotionalofferSlide #likereactdone' + id).css('color', 'black');
                    $('#propro #likereactof' + id).text(data.total);
                    $('#propro #likereactdone' + id).css('color', 'black');
                } else {

                }
            },
            error: function(error) {
                console.log('error');
            }
        });
    }

    function givereactlove(id) {
        $.ajax({
            type: 'GET',
            url: '{{ url('give/react/') }}' + '/love',
            data: {
                'user_id': $('#user_id').val(),
                'product_id': id,
            },

            success: function(data) {
                if (data.sigment == 'love') {
                    $('#promotionalofferSlide #lovereactof' + id).text(data.total);
                    $('#promotionalofferSlide #lovereactdone' + id).css('color', 'red');
                    $('#propro #lovereactof' + id).text(data.total);
                    $('#propro #lovereactdone' + id).css('color', 'red');
                } else {
                    $('#promotionalofferSlide #lovereactof' + id).text(data.total);
                    $('#promotionalofferSlide #lovereactdone' + id).css('color', 'black');
                    $('#propro #lovereactof' + id).text(data.total);
                    $('#propro #lovereactdone' + id).css('color', 'black');
                }
            },
            error: function(error) {
                console.log('error');
            }
        });
    }
</script>
@endsection
