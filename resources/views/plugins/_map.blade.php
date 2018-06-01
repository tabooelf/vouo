<section class="ps-section ps-section--map" id="connact">
    <div id="contact-map" data-address="New York, NY" data-title="BAKERY LOCATION!" data-zoom="17"></div>
    <div class="ps-delivery">
        <div class="ps-delivery__header">
            <h3>联系我们</h3>
            <p>为优美烘焙 美食和沟通都是艺术的一部分</p>
        </div>
        <div class="ps-delivery__content">
            <form class="ps-delivery__form" action="{{ route('comments.store') }}" method="post" id="form">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>名字<span>*
                         {{ $errors->first('name') }}
                    </span></label>
                    <input class="form-control" type="text" name="name">
                </div>
                <div class="form-group">
                    <label>邮箱<span>*
                        {{ $errors->first('email') }}
                    </span></label>
                    <input class="form-control" type="email" name="email">
                </div>
                <div class="form-group">
                    <label>手机号码<span>*
                         {{ $errors->first('mobile') }}
                    </span></label>
                    <input class="form-control" type="text" name="mobile">
                </div>
                <div class="form-group">
                    <label>留言<span>*
                         {{ $errors->first('content') }}
                    </span></label>
                    <textarea class="form-control" name="content"></textarea>
                </div>

                <div class="form-group text-center">
                    @if (session('success'))
                        <p style="color:#93ec93"> 发送成功</p>
                    @endif
                    <button class="ps-btn" onclick="doSubmitForm()">go<i class="fa fa-angle-right"></i></button>
                </div>
                <script>
                    function doSubmitForm() {
                        var form = document.getElementById('form');
                        form.submit();
                    }
                </script>
            </form>
        </div>
    </div>
</section>