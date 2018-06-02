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

<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=NW1Xw3sWyPZHVrQ1MRer5GbV7RMgFldQ"></script>
<script type="text/javascript">
    // 百度地图API功能
    var map = new BMap.Map("contact-map");
    var point_1 = new BMap.Point(116.283344,39.916468);
    map.centerAndZoom(point_1, 13);
    var marker_1 = new BMap.Marker(point_1);  // 创建标注
    map.addOverlay(marker_1);               // 将标注添加到地图中
    var label_1 = new BMap.Label("地址：复兴路69号华熙LIVE hi-up负一层",{offset:new BMap.Size(10,-30)});
    label_1.setStyle({ //给label设置样式，任意的CSS都是可以的
        position: "relative",
        color: "#c56420",
        border: "2px solid #c56420",
        padding: "5px 10px",
        fontSize: "16px",
        borderRadius: "5px",
        fontWeight: "bold",
        textAlign:"center", //文字水平居中显示
        lineHeight:"23px"//行高，文字垂直居中显示
    });
    //     });
    marker_1.setLabel(label_1);

    var point_2 = new BMap.Point(116.358958,39.916428);
    var marker_2 = new BMap.Marker(point_2);  // 创建标注
    map.addOverlay(marker_2);               // 将标注添加到地图中
    var label_2 = new BMap.Label("地址：南礼士路19号",{offset:new BMap.Size(10,15)});
    marker_2.setLabel(label_2);

    label_2.setStyle({ //给label设置样式，任意的CSS都是可以的
        position: "relative",
        color: "#c56420",
        border: "2px solid #c56420",
        padding: "5px 10px",
        fontSize: "16px",
        borderRadius: "5px",
        fontWeight: "bold",
        textAlign:"center", //文字水平居中显示
        lineHeight:"23px"//行高，文字垂直居中显示
    });

</script>
<style>

</style>