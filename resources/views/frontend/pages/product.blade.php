@extends('frontend.layouts.master')

@section('title')
{{$settings->site_name}} || Product Details
@endsection

@section('content')
        <!--============================
        BREADCRUMB START
    ==============================-->
    {{-- <section id="wsus__breadcrumb">
        <div class="wsus_breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4>products</h4>
                        <ul>
                            <li><a href="#">home</a></li>
                            <li><a href="#">peoduct</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--============================
        BREADCRUMB END
    ==============================-->


    <!--============================
        PRODUCT PAGE START
    ==============================-->
    <section id="wsus__product_page">
        <div class="container">
            <div class="row">
                {{-- <div class="col-xl-12">
                    <div class="wsus__pro_page_bammer">
                        @if ($productpage_banner_section->banner_one->status == 1)
                        <a href="{{$productpage_banner_section->banner_one->banner_url}}">
                            <img class="img-gluid" src="{{asset($productpage_banner_section->banner_one->banner_image)}}" alt="">
                        </a>
                        @endif
                    </div>
                </div> --}}
                <div class="col-xl-3 col-lg-4">
                    <div class="wsus__sidebar_filter ">
                        <p>filter</p>
                        <span class="wsus__filter_icon">
                            <i class="far fa-minus" id="minus"></i>
                            <i class="far fa-plus" id="plus"></i>
                        </span>
                    </div>
                    <div class="wsus__product_sidebar" id="sticky_sidebar">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        All Categories
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul>
                                            @foreach ($categories as $category)

                                            <li><a href="{{route('products.index', ['category' => $category->slug])}}">{{$category->name}}</a></li>
                                            @endforeach

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Price
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse show"
                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="price_ranger">
                                            <form action="{{url()->current()}}">
                                                @foreach (request()->query() as $key => $value)
                                                @if($key != 'range')
                                                    <input type="hidden" name="{{$key}}" value="{{$value}}" />
                                                @endif
                                                @endforeach
                                                <input type="hidden" id="slider_range" name="range" class="flat-slider" />
                                                <button type="submit" class="common_btn">filter</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree3">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree3" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        brand
                                    </button>
                                </h2>
                                <div id="collapseThree3" class="accordion-collapse collapse show"
                                    aria-labelledby="headingThree3" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul>
                                            @foreach ($brands  as $brand)

                                            <li><a href="{{route('products.index', ['brand' => $brand->slug])}}">{{$brand->name}}</a></li>
                                            @endforeach

                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>









                <style>
                    .img-container {
                        width: 100%;
                        height: 200px; /* Fixed height */
                        overflow: hidden;
                    }
                
                    .card-img-top {
                        width: 100%;
                        height: 100%;
                        object-fit: cover; /* Ensures image covers the entire area without distortion */
                        transition: transform 0.3s ease-in-out;
                    }
                
                    .card-img-top:hover {
                        transform: scale(1.1); /* Increase scale on hover */
                    }
                
                    .product-name {
                        height: 48px; /* Adjust height as needed */
                        overflow: hidden;
                        text-overflow: ellipsis;
                        display: -webkit-box;
                        -webkit-line-clamp: 2; /* Number of lines to show */
                        -webkit-box-orient: vertical;
                    }
                
                    .cardButton {
                        font-weight: bold;
                        height: 37px !important;
                        width: 100% !important;
                        padding: 6px !important;
                        background-color: #002D44 !important;
                    }
                
                    .product-item {
                        border: 3px solid #F4F5F6;
                        border-radius: 10px;
                        padding: 5px;
                    }
                </style>
                
             





                <style>
                    .mainDiv1 {
                        display: grid;
                        gap: 10px;
                        justify-content: center;
                    }
                
                    .img-container {
                        width: 100%;
                        height: 200px; /* Fixed height */
                        overflow: hidden;
                    }
                
                    .card-img-top {
                        width: 100%;
                        height: 100%;
                        object-fit: cover; /* Ensures image covers the entire area without distortion */
                        transition: transform 0.3s ease-in-out;
                    }
                
                    .card-img-top:hover {
                        transform: scale(1.1); /* Increase scale on hover */
                    }
                
                    .cardButton {
                        font-weight: bold;
                        height: 37px !important;
                        width: 100% !important;
                        padding: 6px !important;
                        background-color: #002D44 !important;
                    }
                
                    .product-item {
                        border: 3px solid #F4F5F6;
                        border-radius: 10px;
                        padding: 5px;
                    }
                
                    body {
                        background-color: #F5F6F7;
                    }
                
                    /* Grid for different screen sizes */
                    @media (max-width: 576px) {
                        .mainDiv1 {
                            grid-template-columns: repeat(2, 1fr); /* 2 items on mobile devices */
                        }
                    }
                
                    @media (min-width: 577px) and (max-width: 992px) {
                        .mainDiv1 {
                            grid-template-columns: repeat(3, 1fr); /* 3 items on tablets and small desktops */
                        }
                    }
                
                    @media (min-width: 993px) {
                        .mainDiv1 {
                            grid-template-columns: repeat(4, 1fr); /* 5 items on large desktops */
                        }
                    }
                
                    .loader {
                        position: fixed;
                        z-index: 9999;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background-color: #fff;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                    }
                
                    .loader > div {
                        width: 60px;
                        height: 60px;
                        margin: 0 auto;
                        position: relative;
                        border: 3px solid transparent;
                        border-top-color: #3498db;
                        border-radius: 50%;
                        animation: spin 2s linear infinite;
                    }
                
                    @keyframes spin {
                        0% {
                            transform: rotate(0deg);
                        }
                        100% {
                            transform: rotate(360deg);
                        }
                    }
                </style>



















                <div class="col-xl-9 col-lg-8">
                    <div class="row mt-2">
                       
                    <div class="container">
                         <div class="mainDiv1">
                            @foreach ($products as $product)





   
                            <div class="card product-item">
                                <a href="{{ route('product-detail', $product->slug) }}">
                                    <div class="img-container">
                                        <img class="card-img-top" src="{{ asset($product->thumb_image) }}" alt="Card image">
                                    </div>
                                </a>
                                <div class="card-body">
                                    <a class="wsus__pro_name" href="{{route('product-detail', $product->slug)}}">{{limitText($product->name, 32)}}</a>
                                    <div class="text-cente r" style="font-size: medium; display: flex; flex-wrap: wrap; justify-content: center; gap: 10px;">
                                        <p class="wsus__pro_rating">
                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($i <= $product->reviews_avg_rating)
                                                <i class="fas fa-star"></i>
                                                @else
                                                <i class="far fa-star"></i>
                                                @endif
                                            @endfor
                                            <span>({{$product->reviews_count}} review)</span>
                                        </p>
                                        @if(checkDiscount($product))
                                           <h5 class="wsus__price mt-2">{{$settings->currency_icon}}{{$product->offer_price}} <del style="color: red; !important">{{$settings->currency_icon}}{{$product->price}}</del></h5>
                                        @else
                                            <h5 class=" mt-2"> <small  >{{$settings->currency_icon}}{{$product->price}}</small></h5>
                                        @endif
                                    </div>
                                    <a href="{{ route('product-detail', $product->slug) }}" class="btn cardButton text-white mt-2 pt-5">অর্ডার করুন</a>
                                </div>
                            </div>

                            @endforeach
                        </div>
                    </div>
                    </div>
                    @if (count($products) === 0)
                    <div class="text-center mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h2>Product not found!</h2>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>

                <div class="col-xl-12 text-center">
                    <div class="mt-5" style="display:flex; justify-content:center">
                        @if ($products->hasPages())
                            {{$products->withQueryString()->links()}}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
        PRODUCT PAGE END
    ==============================-->
@endsection

@push('scripts')
    <script>
        $(document).ready(function(){
            $('.list-view').on('click', function(){
                let style = $(this).data('id');

                $.ajax({
                    method: 'GET',
                    url: "{{route('change-product-list-view')}}",
                    data: {style: style},
                    success: function(data){

                    }
                })
            })
        })
        @php
            if(request()->has('range') && request()->range !=  ''){
                $price = explode(';', request()->range);
                $from = $price[0];
                $to = $price[1];
            }else {
                $from = 0;
                $to = 8000;
            }
        @endphp
        jQuery(function () {
        jQuery("#slider_range").flatslider({
            min: 0, max: 10000,
            step: 100,
            values: [{{$from}}, {{$to}}],
            range: true,
            einheit: '{{$settings->currency_icon}}'
        });
    });
    </script>
@endpush
