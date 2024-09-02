@php
    $popularCategories = json_decode($popularCategory->value, true);
    // dd($popularCategories)
@endphp
<section id="wsus__monthly_top" class="wsus__monthly_top_2">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                @if ($homepage_secion_banner_one->banner_one->status == 1)
                <div class="wsus__monthly_top_banner">
                    <a href="{{$homepage_secion_banner_one->banner_one->banner_url}}">
                        <img class="img-fluid" src="{{asset($homepage_secion_banner_one->banner_one->banner_image)}}" alt="">
                    </a>
                </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="wsus__section_header for_md">
                    <h3>Popular Categories</h3>
                    <div class="monthly_top_filter">

                        @php
                            $products = [];
                        @endphp
                        @foreach ($popularCategories as $key => $popularCategory)
                        @php
                            $lastKey = [];

                            foreach($popularCategory as $key => $category){
                                if($category === null ){
                                    break;
                                }
                                $lastKey = [$key => $category];
                            }

                            if(array_keys($lastKey)[0] === 'category'){
                                $category = \App\Models\Category::find($lastKey['category']);
                                $products[] = \App\Models\Product::withAvg('reviews', 'rating')
                                ->with(['variants', 'category', 'productImageGalleries'])
                                ->where('category_id', $category->id)->orderBy('id', 'DESC')->take(12)->get();
                            }elseif(array_keys($lastKey)[0] === 'sub_category'){
                                $category = \App\Models\SubCategory::find($lastKey['sub_category']);
                                $products[] = \App\Models\Product::withAvg('reviews', 'rating')
                                ->with(['variants', 'category', 'productImageGalleries'])
                                ->where('sub_category_id', $category->id)->orderBy('id', 'DESC')->take(12)->get();

                            }else {
                                $category = \App\Models\ChildCategory::find($lastKey['child_category']);
                                $products[] = \App\Models\Product::withAvg('reviews', 'rating')
                                ->with(['variants', 'category', 'productImageGalleries'])
                                ->where('child_category_id', $category->id)->orderBy('id', 'DESC')->take(12)->get();

                            }

                        @endphp
                        <button class="{{ $loop->index === 0 ? 'auto_click active' : ''}}" data-filter=".category-{{$loop->index}}">{{$category->name}}</button>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="row grid">
                    @foreach ($products as $key => $product)
                        @foreach ($product as $item)



                        <div class="card product-item"  >
                            <a>   <img class="card-img-top" href="{{route('product-detail', $item->slug)}}" src="{{asset($item->thumb_image)}}" alt="Card image"> </a>
                                <div class="card-body">
                                    <p class="text-center" >  {{ \Illuminate\Support\Str::words($item->name, 4, '...') }}</p>
                                    
                                
                                    <div class="text-center" style="font-size:medium; display:flex; flex-wrap:wrap; justify-content:center; gap:10px;">
                                    <span class="price" style="font-size: 14px; font-style: bold; font-weight: 900; color: #002E45;">
                                        Tk {{ number_format($item->price, 0, '.', '') }}
                                    </span>
                                    {{-- <del style="font-size: 12px; font-style: bold; font-weight: 600; color: red;">
                                        Tk {{ number_format($item->old_price, 0, '.', '') }}
                                    </del> --}}
                                </div>
                                    <a href="{{route('product-detail', $item->slug)}}" style="background: #002D44 !important; width:100%; justify-content:center; align-item:center; " class="btn cardButton text-white mt-2 pt-5" > অর্ডার করুন </a> 
                                </div>
                            </div> 



                            {{-- <div class="col-xl-2 col-6 col-sm-6 col-md-4 col-lg-3  category-{{$key}}">
                                <a class="wsus__hot_deals__single" href="{{route('product-detail', $item->slug)}}">
                                    <div class="wsus__hot_deals__single_img">
                                        <img src="{{asset($item->thumb_image)}}" alt="bag" class="img-fluid w-100">
                                    </div>
                                    <div class="wsus__hot_deals__single_text">
                                        <h5>{!!limitText($item->name, )!!}</h5>
                                        <p class="wsus__rating">
                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($i <= $item->reviews_avg_rating)
                                                <i class="fas fa-star"></i>
                                                @else
                                                <i class="far fa-star"></i>
                                                @endif
                                            @endfor

                                        </p>
                                        @if (checkDiscount($item))
                                            <p class="wsus__tk">{{$settings->currency_icon}}{{$item->offer_price}} <del>{{$settings->currency_icon}}{{$item->price}}</del></p>
                                        @else
                                            <p class="wsus__tk">{{$settings->currency_icon}}{{$item->price}}</p>
                                        @endif
                                    </div>
                                </a>
                            </div> --}}
                        @endforeach
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
