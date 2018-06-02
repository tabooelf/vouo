<section class="ps-section ps-section--map" id="connact">
    <div id="contact-map" data-address="New York, NY" data-title="BAKERY LOCATION!" data-zoom="17"></div>
</section>

<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=NW1Xw3sWyPZHVrQ1MRer5GbV7RMgFldQ"></script>
<script type="text/javascript">
    // 百度地图API功能
    var map = new BMap.Map("contact-map");
    var point_1 = new BMap.Point(116.283344,39.916468);
    var point_2 = new BMap.Point(116.358958,39.916428);
    map.centerAndZoom(point_2, 13);
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