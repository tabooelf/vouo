<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col-lg-pull-9 col-md-pull-9">
    <div class="ps-sidebar">
        <aside class="ps-widget ps-widget--sidebar ps-widget--category">
            <div class="ps-widget__header">
                <h3 class="ps-widget__title">商品分类</h3>
            </div>
            <div class="ps-widget__content">
                <ul class="ps-list--circle">
                    <li {{ if_route('categories.all') ? "class=current" : ''}}>
                        <a href="{{ route('categories.all') }}"><span class="circle"></span>所有商品
                            {{ if_route('categories.all') ? '('. $goods->total() . ')': ''}}
                        </a>
                    </li>
                    @foreach ($categories as $category)
                        <li {{ if_route('categories.show') && if_route_param('category', $category['id']) ? "class=current" : ''}}>
                            {{ if_route_param('categories.show', $category['id']) }}
                            <a href="{{ route('categories.show', $category['id']) }}"><span class="circle"></span>
                                 {{ $category['name'] }}
                                 {{ if_route('categories.show') && if_route_param('category', $category['id']) ? '('. $goods->total() . ')': ''}}
                            </a>
                        </li>
                    @endforeach

                </ul>
            </div>
        </aside>
        <aside class="ps-widget ps-widget--sidebar ps-widget--best-seller">
            <div class="ps-widget__header">
                <h3 class="ps-widget__title">热售中</h3>
            </div>
            <div class="ps-widget__content">
                {{-- 热销 --}}
                @foreach ($best as $e)
                <div class="ps-product--sidebar">
                    <div class="ps-product__thumbnail">
                        <a class="ps-product__overlay" href=""></a><img src="{{ asset('uploads/' . $e['img']) }}" alt=""></div>
                    <div class="ps-product__content">
                        <h4 class="ps-product__title">
                            <a href="{{ route('goods.show', $e['id']) }}">{{ $e['name'] }}</a>
                            <span style="font-style: italic;">{{ $e['category']['name'] }}</span>
                        </h4>
                        <p class="ps-product__price">
                            <del>¥{{ $e['price'] * 10 / 8 }}</del>¥{{ $e['price'] }}
                        </p><a class="ps-btn ps-btn--xs" href="{{ route('goods.show', $e['id']) }}">查看详情</a>
                    </div>
                </div>
                @endforeach

            </div>
        </aside>
        <aside class="ps-widget ps-widget--sidebar ps-widget--tags">
            <div class="ps-widget__header">
                <h3 class="ps-widget__title">TAGS</h3>
            </div>
            <div class="ps-widget__content">
                <ul class="ps-tags">
                    @foreach ($tags as $k => $v)
                        <li><a href="{{ route('goods.show', $k) }}">{{ $v }}</a></li>
                    @endforeach
                </ul>
            </div>
        </aside>
    </div>
</div>