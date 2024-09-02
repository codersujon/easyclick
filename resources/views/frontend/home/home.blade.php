@extends('frontend.layouts.master')
@section('title')
{{$settings->site_name}} || hasna glow 
@endsection

@section('content')

    <!--============================
        BANNER PART 2 START
    ==============================-->
    @include('frontend.home.sections.banner-slider')
    <!--============================
        BANNER PART 2 END
    ==============================-->
@if(isset($typeBaseProducts['featured_product']) && count($typeBaseProducts['featured_product']) > 0)
    <div class="container mt-5">
        <h2 class="navbar-link text-center" style="font-family: 'Poppins', sans-serif; font-weight: 600; font-style: normal;">Featured Product</h2>
        <div class="mainDiv mt-5">
            @foreach ($typeBaseProducts['featured_product'] as $product)
                <x-product-cards :product="$product" />
            @endforeach
        </div>
    </div>
@endif

  <!--============================
        FLASH SELL START
    ==============================-->
    @include('frontend.home.sections.flash-sale')
    <!--============================
        FLASH SELL END
    ==============================-->



@if(isset($typeBaseProducts['best_product']) && count($typeBaseProducts['best_product']) > 0)
    <div class="container mt-5">
        <h2 class="navbar-link text-center" style="font-family: 'Poppins', sans-serif; font-weight: 600; font-style: normal;">Best Product</h2>
        <div class="mainDiv mt-5">
            @foreach ($typeBaseProducts['best_product'] as $product)
                <x-product-cards :product="$product" />
            @endforeach
        </div>
    </div>
@endif

  <!--============================
        SINGLE BANNER START
    ==============================-->
    @include('frontend.home.sections.single-banner')
    <!--============================
        SINGLE BANNER END
    ==============================-->

    
@if(isset($typeBaseProducts['new_arrival']) && count($typeBaseProducts['new_arrival']) > 0)
    <div class="container mt-5">
        <h2 class="navbar-link text-center" style="font-family: 'Poppins', sans-serif; font-weight: 600; font-style: normal;">New Arrival</h2>
        <div class="mainDiv mt-5">
            @foreach ($typeBaseProducts['new_arrival'] as $product)
                <x-product-cards :product="$product" />
            @endforeach
        </div>
    </div>
@endif


        <!--============================
        LARGE BANNER  START
    ==============================-->
    {{-- @include('frontend.home.sections.large-banner') --}}

    <!--============================
        LARGE BANNER  END
    ==============================-->




    


    @if($typeBaseProducts['top_product'] && count($typeBaseProducts['top_product']) > 0)
        <div class="container mt-5">
            <h2 class="navbar-link text-center" style="font-family: 'Poppins', sans-serif; font-weight: 600; font-style: normal;">Top Product</h2>
            <div class="mainDiv mt-5">
                @foreach ($typeBaseProducts['top_product'] as $product)
                    <x-product-cards :product="$product" />
                @endforeach
            </div>
        </div>
    @endif
    



    <!--============================
       MONTHLY TOP PRODUCT START
    ==============================-->
    {{-- @include('frontend.home.sections.top-category-product') --}}
    <!--============================
       MONTHLY TOP PRODUCT END
    ==============================-->
   



    {{-- <!--============================
        BRAND SLIDER START
    ==============================-->
    @include('frontend.home.sections.brand-slider')
    <!--============================
        BRAND SLIDER END
    ==============================--> --}}


  


    <!--============================
        HOT DEALS START
    ==============================-->
    {{-- @include('frontend.home.sections.hot-deals') --}}
    <!--============================
        HOT DEALS END
    ==============================-->


    <!--============================
        ELECTRONIC PART START
    ==============================-->
    {{-- @include('frontend.home.sections.category-product-slider-one') --}}
    <!--============================
        ELECTRONIC PART END
    ==============================-->


    <!--============================
        ELECTRONIC PART START
    ==============================-->
    {{-- @include('frontend.home.sections.category-product-slider-two') --}}

    <!--============================
        ELECTRONIC PART END
    ==============================-->





    <!--============================
        WEEKLY BEST ITEM START
    ==============================-->
    {{-- @include('frontend.home.sections.weekly-best-item') --}}
    <!--============================
        WEEKLY BEST ITEM END
    ==============================-->


    <!--============================
      HOME SERVICES START
    ==============================-->
    {{-- @include('frontend.home.sections.services') --}}
    <!--============================
        HOME SERVICES END
    ==============================-->


    <!--============================
        HOME BLOGS START
    ==============================-->
    {{-- @include('frontend.home.sections.blog') --}}
    <!--============================
        HOME BLOGS END
    ==============================-->

@endsection
