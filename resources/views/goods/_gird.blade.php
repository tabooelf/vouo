<style>
    .order .current a{
        background: #776565;
        color: #fff;
        border-color: #776565;
    }
    .order .current a:hover{
        background: #826f6f;
        border-color: #826f6f;
        color: #fff;
    }
</style>
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 col-lg-push-3 col-md-push-3">
    <div class="ps-shop-grid pt-70" id="shop">
        <div class="ps-shop-features">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 "><img class="mb-30" src="images/product-banner/012x.jpg" alt="">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 "><img class="mb-30" src="images/product-banner/022x.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="ps-shop-filter">
            <div class="row">
                <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12 ">
                    <div class="form-group">
                        <label>排序</label>
                        <ul class="ps-shop-switch order pull-left" style="float:left">
                            <li {{ if_query('order', '')  ? "class=current" : ''}}>
                                <a href="{{url()->current()}}?order=" style="border-right:none;line-height: 50px;text-align: center;">默认</a>
                            </li>
                            <li {{ if_query('order', 'new')  ? "class=current" : ''}}>
                                <a href="{{url()->current()}}?order=new" style="border-right:none;line-height: 50px;text-align: center;">新品</a>
                            </li>
                            <li  {{ if_query('order', 'hot')  ? "class=current" : ''}}>
                                <a href="{{url()->current()}}?order=hot" style="border-right:none;line-height: 50px;text-align: center;">热门</a>
                            </li>
                            <li  {{ if_query('order', 'up')  ? "class=current" : ''}}>
                                <a href="{{url()->current()}}?order=up" style="border-right:none;line-height: 50px;text-align: center;">价格↑</a>
                            </li>
                            <li  {{ if_query('order', 'down')  ? "class=current" : ''}}>
                                <a href="?order=down" style="line-height: 50px;text-align: center;">价格↓</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12 ">
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 ">
                    <ul class="ps-shop-switch">
                        <li class="active"><a href="#"><i class="fa fa-th"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="ps-shop ps-col-tiny">
            <div class="row">
               @foreach ($goods as $v)
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                    <div class="ps-product">
                        <div class="ps-product__thumbnail">
                            @if ($v['is_new'])
                                <div class="ps-badge ps-badge--new"><span>New</span></div>
                            @elseif($v['is_hot'])
                                <div class="ps-badge ps-badge--hot"><span>Hot</span></div>
                            @endif

                            <a class="ps-product__overlay" href="{{ route('goods.show', $v['id']) }}"></a><img src="/uploads/{{ $v['img'] }}" alt="">

                        </div>
                        <div class="ps-product__content"><a class="ps-product__title" href="{{ route('goods.show', $v['id']) }}">{{ $v['name'] }}</a>
                            <div class="ps-product__category">
                                <a class="ps-product__category" href="{{ route('goods.show', $v->id) }}">{{ $v['category']['name'] }}</a>
                            </div>
                            <select class="ps-rating">
                                <option value="1">1</option>
                                <option value="1">2</option>
                                <option value="1">3</option>
                                <option value="1">4</option>
                                <option value="5">5</option>
                            </select>
                            <div class="ps-product__price" data-price-id="7371951" style="color: #e4383b;margin-right:5px;">¥{{ $v['price'] }}.00</div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            {!! $goods->render('pagination._default') !!}
        </div>
    </div>
</div>