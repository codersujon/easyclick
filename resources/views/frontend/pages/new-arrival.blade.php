@extends('frontend.layouts.master')

@section('title')
{{$settings->site_name}} || New Arrival
@endsection

@section('content')
   


    <!--============================
            DAILY DEALS DETAILS START
        ==============================-->
    <section id="wsus__daily_deals">
        <div class="container">
            <div class="wsus__offer_details_area">
                <div class="row mt-3 ">
                    <div class="row mb-2 mt-5">
                        <div class="col-xl-12">
                            <div class="wsus__section_header rounded-0">
                                <h3>{{ $title }}</h3>
                            </div>
                        </div>
                    </div>

                    <div class="container mt-2">
                         <div class="mainDiv ">
                            @foreach ($products as $product)
                                <x-product-cards :product="$product" />
                            @endforeach
                        </div>
                       <div style="margin: auto !important;">{{$products->links()}}</div> 
                    </div>
                    {{-- @foreach ($products as $product)
                        <x-product-card :product="$product" />
                    @endforeach --}}
                </div>
                {{-- <div class="mt-5">
                    @if ($flashSaleItems->hasPages())
                        {{$flashSaleItems->links()}}
                    @endif
                </div> --}}
            </div>
        </div>
    </section>
    <!--============================
            DAILY DEALS DETAILS END
        ==============================-->

@endsection

@push('scripts')

@endpush
