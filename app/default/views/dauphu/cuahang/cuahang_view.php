<link href="<?php echo base_url() . 'skins/' . $template_f . ltrim(URI_PATH . '/', '/'); ?>sumoselect.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo base_url() . 'js/' . $template_f . ltrim(URI_PATH . '/', '/'); ?>jquery.sumoselect.js"></script>
<script type="text/javascript" src="<?php echo base_url() . 'js/' . $template_f . ltrim(URI_PATH . '/', '/'); ?>jquery.slimscroll.js"></script>
<div id="SECTION346" class="widget-section ladi-drop ui-droppable" lp-type="widget_section" lp-widget="widget"
     lp-lang="SECTION" lp-display="block" style="height: 340px; background-position: center; background-image: url('images/maps_hero4_2x.jpg');">
    <div class="navmenu-wrap-mobile">
        <i class="fa fa-bars" aria-hidden="true"></i>
    </div>
    <div class="container">
        <div id="IMAGE297" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE"
             lp-display="block">
            <div class="widget-content">
                <div class="lp-show-image" alt="https://static.ladipage.net/57b167c9ca57d39c18a1c57c/12.png"></div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
        <div id="HEADLINE354" class="widget-element widget-snap" lp-type="textinline" lp-editor="true"
             lp-lang="HEADLINE" lp-display="block"><h2 class="widget-content" lp-node="h2">HỆ THỐNG CỬA HÀNG</h2>
        </div>
        <div id="HEADLINE298" class="widget-element widget-snap" lp-type="textinline" lp-editor="true"
             lp-lang="HEADLINE" lp-display="block"><h2 class="widget-content" lp-node="h2">
            <span color="" style="color: rgb(245, 245, 245);"><span
                        style="font-weight: normal; color: rgb(245, 245, 245);"
                        color="">Tìm cửa hàng bán Đậu</span></span></h2></div>

        <div id="IMAGE353" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE"
             lp-display="block">
            <div class="widget-content">
                <div class="lp-show-image"
                     alt="https://static.ladipage.net/59eaa147fad86747bdf5b343/logo-ongbong-1528177613.png"></div>
            </div>
            <div class="ladi-widget-overlay"></div>
        </div>
    </div>
    <div class="ladi-widget-overlay" style="background-color: rgba(21, 5, 0, 0.7) !important;"></div>

    <div class="navmenu-wrap">
        <div class="navmenu-inner">
            <ul class="navmenu-centent">
                <li><a href="<?= site_url('dau-ngon.html') ?>">Đậu ngon</a></li>
                <li><a href="<?= site_url('') ?>">Out Story</a></li>
                <li><a href="" style="color: #6ab008;">Mua đậu ở đâu ?</a></li>
            </ul>
        </div>
    </div>
</div>
<div id="SECTION-MAP" class="widget-section ladi-drop ui-droppable mt-2 mb-2" style="height: auto !important;">
    <div class="container-fluid">
        <div id="box-filter" class="card bg-success">
            <div class="card-body pt-3 pb-0">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 mb-3">
                        <label class="text-white font-weight-bold">Tỉnh/Thành Phố</label>
                        <select class="form-control" id="slcProvince">
                            <option value="4" class="banner-city">Hà Nội</option>
                            <option value="5" class="banner-city">Bắc Ninh</option>
                        </select>
                    </div>
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 mb-3">
                        <label class="text-white font-weight-bold">Quận/Huyện</label>
                        <select class="form-control" id="slcCounty">
                            <option value="4" class="banner-city">Hà Nội</option>
                            <option value="5" class="banner-city">Bắc Ninh</option>
                        </select>
                    </div>
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 mb-3">
                        <label>&nbsp</label>
                        <input type="button" class="form-control btn-warning text-white" value="Tìm kiếm">
                    </div>

                </div>
            </div>
        </div>
        <div id="main-map">
            <div class="card mt-1">
                <div class="card-body p-2">
                    <div class="row p-0">
                        <div id="left-map" class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-3 pr-0 mb-3">
                            <p class="title-result-map mb-2">Cửa hàng tìm thấy</p>
                            <div id="box-result">
                                <div class="list-result-map">
                                    <div class="row title">
                                        <div class="col-1 pb-1"><i class="fa fa-globe" aria-hidden="true"></i></div>
                                        <div class="col-10 p-0 pb-1"><span >Cửa hàng Giảng Võ</span></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                        <div class="col-10 p-0">Số 100, Đường Giảng Võ, Quận Ba Đình, Thành phố Hà Nội</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                        <div class="col-10 p-0">Điện thoại: 02471066866</div>
                                    </div>
                                </div>
                                <div class="list-result-map">
                                    <div class="row title">
                                        <div class="col-1 pb-1"><i class="fa fa-globe" aria-hidden="true"></i></div>
                                        <div class="col-10 p-0 pb-1"><span class="">Cửa hàng Giảng Võ</span></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                        <div class="col-10 p-0">Số 100, Đường Giảng Võ, Quận Ba Đình, Thành phố Hà Nội</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                        <div class="col-10 p-0">Điện thoại: 02471066866</div>
                                    </div>
                                </div>
                                <div class="list-result-map">
                                    <div class="row title" >
                                        <div class="col-1 pb-1"><i class="fa fa-globe" aria-hidden="true"></i></div>
                                        <div class="col-10 p-0 pb-1"><span class="">Cửa hàng Giảng Võ</span></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                        <div class="col-10 p-0">Số 100, Đường Giảng Võ, Quận Ba Đình, Thành phố Hà Nội</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                        <div class="col-10 p-0">Điện thoại: 02471066866</div>
                                    </div>
                                </div>
                                <div class="list-result-map">
                                    <div class="row title" >
                                        <div class="col-1 pb-1"><i class="fa fa-globe" aria-hidden="true"></i></div>
                                        <div class="col-10 p-0 pb-1"><span class="">Cửa hàng Giảng Võ</span></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                        <div class="col-10 p-0">Số 100, Đường Giảng Võ, Quận Ba Đình, Thành phố Hà Nội</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                        <div class="col-10 p-0">Điện thoại: 02471066866</div>
                                    </div>
                                </div>
                                <div class="list-result-map">
                                    <div class="row title" >
                                        <div class="col-1 pb-1"><i class="fa fa-globe" aria-hidden="true"></i></div>
                                        <div class="col-10 p-0 pb-1"><span class="">Cửa hàng Giảng Võ</span></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                        <div class="col-10 p-0">Số 100, Đường Giảng Võ, Quận Ba Đình, Thành phố Hà Nội</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                        <div class="col-10 p-0">Điện thoại: 02471066866</div>
                                    </div>
                                </div>
                                <div class="list-result-map">
                                    <div class="row title" >
                                        <div class="col-1 pb-1"><i class="fa fa-globe" aria-hidden="true"></i></div>
                                        <div class="col-10 p-0 pb-1"><span class="">Cửa hàng Giảng Võ</span></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                        <div class="col-10 p-0">Số 100, Đường Giảng Võ, Quận Ba Đình, Thành phố Hà Nội</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                        <div class="col-10 p-0">Điện thoại: 02471066866</div>
                                    </div>
                                </div>
                                <div class="list-result-map">
                                    <div class="row title" >
                                        <div class="col-1 pb-1"><i class="fa fa-globe" aria-hidden="true"></i></div>
                                        <div class="col-10 p-0 pb-1"><span class="">Cửa hàng Giảng Võ</span></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                        <div class="col-10 p-0">Số 100, Đường Giảng Võ, Quận Ba Đình, Thành phố Hà Nội</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                        <div class="col-10 p-0">Điện thoại: 02471066866</div>
                                    </div>
                                </div>
                                <div class="list-result-map">
                                    <div class="row title" >
                                        <div class="col-1 pb-1"><i class="fa fa-globe" aria-hidden="true"></i></div>
                                        <div class="col-10 p-0 pb-1"><span class="">Cửa hàng Giảng Võ</span></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                        <div class="col-10 p-0">Số 100, Đường Giảng Võ, Quận Ba Đình, Thành phố Hà Nội</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-1"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                        <div class="col-10 p-0">Điện thoại: 02471066866</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="right-map" class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-9 mb-3">
                            <div id="map" style="max-width: 100%; min-height: 600px;"></div>
                            <script>
                                var map;
                                function initMap() {
                                    map = new google.maps.Map(document.getElementById('map'), {
                                        center: {lat: 21.0227788, lng: 105.8194541},
                                        zoom: 11
                                    });

                                    //call marker function
                                    addMarker({lat:21.0127788,lng:105.799939});
                                    addMarker({lat:21.0227788,lng:105.799939});
                                    addMarker({lat:21.0327788,lng:105.799939});
                                    addMarker({lat:21.0427788,lng:105.799939});

                                    addMarker({lat:21.0127788,lng:105.719939});
                                    addMarker({lat:21.0227788,lng:105.729939});
                                    addMarker({lat:21.0327788,lng:105.739939});
                                    addMarker({lat:21.0427788,lng:105.749939});

                                    addMarker({lat:21.0117788,lng:105.700939});
                                    addMarker({lat:21.0227788,lng:105.710939});
                                    addMarker({lat:21.0337788,lng:105.720939});
                                    addMarker({lat:21.0447788,lng:105.730939});

                                    //add marker function
                                    function addMarker(coords){
                                        var marker = new google.maps.Marker({
                                            position:coords,
                                            map:map,
                                            icon:'images/shoppingcart_pinlet-2-medium.png',
                                        });
                                    }
                                }
                            </script>
                            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDg945v29-ecA_WktGp3cXxK8e6Y34if3Y&callback=initMap" async defer></script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .SumoSelect {width: 100% !important}
</style>
<script>
    $(function () {
        $("#slcProvince").SumoSelect({
            selectAll: true,
            search: true,
            placeholder: 'Select website',
            searchText:'Tìm tỉnh, thành phố',
            csvDispCount: 5,
            noMatch : 'Không tìm thấy "{0}"'
        });
        $("#slcCounty").SumoSelect({
            selectAll: true,
            search: true,
            searchText:'Tìm quận, huyện',
            csvDispCount: 5,
            noMatch : 'Không tìm thấy "{0}"'
        });

        $('#box-result').slimScroll({
            position: 'right',
            color: '#28a745',
            size: '5px',
            wheelStep: 10,
            railVisible: true,
            alwaysVisible: true,
            height: '550px',
            width:'100%'
        });
    })
</script>