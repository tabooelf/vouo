<section class="ps-section ps-section--best-seller pt-40 pb-100">
    <div class="container">
        <div class="ps-section__header text-center mb-50">
            <h4 class="ps-section__top">product category</h4>
            <h3 class="ps-section__title ps-section__title--full">产品分类</h3>
        </div>
        <div class="ps-section__content">
            <div class="owl-slider owl-slider--best-seller" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30" data-owl-nav="true" data-owl-dots="false" data-owl-animate-in="" data-owl-animate-out="" data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-nav-left="&lt;i class=&quot;ps-icon--back&quot;&gt;&lt;/i&gt;" data-owl-nav-right="&lt;i class=&quot;ps-icon--next&quot;&gt;&lt;/i&gt;">

                @foreach ($best as $e)
                <div class="ps-product">
                    <div class="ps-product__thumbnail">
                        {{-- <div class="ps-badge"><span>-50%</span></div> --}}
                        @if ($e['is_new'])
                            <div class="ps-badge ps-badge--new"><span>New</span></div>
                        @elseif($e['is_hot'])
                            <div class="ps-badge ps-badge--hot"><span>Hot</span></div>
                        @endif

                        <a class="ps-product__overlay" href="{{ route('goods.show', $e['id']) }}"></a><img src="{{ asset('/uploads/' . $e['img']) }}" alt="">
                    </div>
                    <div class="ps-product__content"><a class="ps-product__title" href="{{ route('goods.show', $e['id']) }}">{{ $e['name'] }}</a>
                        <div class="ps-product__category"><a class="ps-product__category" href="{{ route('categories.show', $e['category']['id']) }}">{{ $e['category']['name'] }}</a>
                        </div>
                        <select class="ps-rating">
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
                            <option value="1">4</option>
                            <option value="5">5</option>
                        </select>
                        <p class="ps-product__price" style="margin-right:5px;"> ¥{{ $e['price'] }} </p>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>