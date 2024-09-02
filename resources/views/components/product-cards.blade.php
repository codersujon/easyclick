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

