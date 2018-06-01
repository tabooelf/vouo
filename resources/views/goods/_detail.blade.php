<div class="ps-section pt-80 pb-80">
    <div class="container">
        <div class="ps-product--detail">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 ">
                    <div class="ps-product__thumbnail">
                        {{-- <div class="ps-badge"><span>50%</span></div> --}}

                        @if ($info['is_new'])
                            <div class="ps-badge ps-badge--new"><span>New</span></div>
                        @elseif($info['is_hot'])
                            <div class="ps-badge ps-badge--hot"><span>Hot</span></div>
                        @endif

                        <div class="owl-slider primary" data-owl-auto="true" data-owl-loop="false" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="false" data-owl-animate-in="" data-owl-animate-out="" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-nav-left="&lt;i class=&quot;fa fa-angle-left&quot;&gt;&lt;/i&gt;" data-owl-nav-right="&lt;i class=&quot;fa fa-angle-right&quot;&gt;&lt;/i&gt;">
                            <div class="ps-product__image"><img src="{{ asset('uploads/' . $info['img'] ) }}" alt=""></div>
{{--                             <div class="ps-product__image"><img src="images/cake/img-cake-11.jpg" alt=""></div>
                            <div class="ps-product__image"><img src="images/cake/img-cake-10.jpg" alt=""></div>
                            <div class="ps-product__image"><img src="images/cake/img-cake-6.jpg" alt=""></div>
                            <div class="ps-product__image"><img src="images/cake/img-cake-5.jpg" alt=""></div> --}}
                        </div>
{{--                         <div class="owl-slider second mb-30" data-owl-auto="true" data-owl-loop="false" data-owl-speed="10000" data-owl-gap="20" data-owl-nav="false" data-owl-dots="false" data-owl-animate-in="" data-owl-animate-out="" data-owl-item="4" data-owl-item-xs="2" data-owl-item-sm="3" data-owl-item-md="4" data-owl-item-lg="4" data-owl-nav-left="&lt;i class=&quot;fa fa-angle-left&quot;&gt;&lt;/i&gt;" data-owl-nav-right="&lt;i class=&quot;fa fa-angle-right&quot;&gt;&lt;/i&gt;"><img src="images/cake/img-cake-12.jpg" alt=""><img src="images/cake/img-cake-11.jpg" alt=""><img src="images/cake/img-cake-10.jpg" alt=""><img src="images/cake/img-cake-6.jpg" alt=""><img src="images/cake/img-cake-5.jpg" alt=""></div> --}}
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 ">
                    <header>
                        <h3 class="ps-product__name">{{ $info['name'] }}</h3>
                        <select class="ps-rating">
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
                            <option value="1">4</option>
                            <option value="5">5</option>
                        </select>
                        <p class="ps-product__price">¥{{ $info['price'] }}
                            <del>¥{{ $info['price'] * 10 / 8 }}</del>
                        </p><a class="ps-product__quickview popup-modal" href="#quickview-modal" data-effect="mfp-zoom-out">为优美焙烤- VOUO</a>
                        <div class="ps-product__meta">
                            <p><span> 销售情况 - </span>
                                @if(!$info['is_sale'])
                                    停止销售
                                @else
                                    销售中
                                @endif
                            </p>
                            <p class="category"><span>商品分类 - </span><a href="{{ route('categories.show', $info['category_id']) }}"> {{ $info['category']['name'] }}</a></p>
                        </div>
                        <div class="ps-product__description">
                            {!! $info['description'] !!}
                        </div>
                    </header>
                    <footer>
                        <div class="row">
                            <div class="col-lg-6 col-md-5 col-sm-6 col-xs-12 "><a class="ps-btn--fullwidth ps-btn" href="{{ route('index') }}">返回首页<i class="fa fa-angle-right"></i></a>
                            </div>
{{--                             <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12 ">
                                <p class="ps-product__sharing">Share with:<a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-google-plus"></i></a><a href="#"><i class="fa fa-twitter"></i></a></p>
                            </div> --}}
                        </div>
                    </footer>
                </div>
            </div>

        </div>
    </div>
</div>