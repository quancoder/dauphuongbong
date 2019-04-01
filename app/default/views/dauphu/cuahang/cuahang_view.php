<link href="<?php echo base_url() . 'skins/' . $template_f . ltrim(URI_PATH . '/', '/'); ?>sumoselect.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo base_url() . 'js/' . $template_f . ltrim(URI_PATH . '/', '/'); ?>jquery.sumoselect.js"></script>
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
<div class="SECTION-MAP">
    <div id="main_map">
        <div id="box-filter" class="card">
            <div class="card-body p-5">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                        <select class="form-control" id="slcTinh">
                            <option value="4" class="banner-city">Hà Nội</option>
                            <option value="5" class="banner-city">TP HCM</option>
                            <option value="7" class="banner-city">Hải Phòng</option>
                            <option value="8" class="banner-city">Bắc Kạn</option>
                            <option value="9" class="banner-city">Bắc Giang </option>
                            <option value="10" class="banner-city">Bắc Ninh</option>
                            <option value="11" class="banner-city">Cao Bằng</option>
                            <option value="12" class="banner-city">Điện Biên</option>
                            <option value="13" class="banner-city">Hà Giang</option>
                            <option value="14" class="banner-city">Hà Nam</option>
                            <option value="15" class="banner-city">Hải Dương</option>
                            <option value="16" class="banner-city">Hòa Bình</option>
                            <option value="17" class="banner-city">Hưng Yên</option>
                            <option value="18" class="banner-city">Lai Châu</option>
                            <option value="19" class="banner-city">Lạng Sơn</option>
                        </select>
                    </div>
                    <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                        <select class="form-control" id="slcQuan">
                            <option value="4" class="banner-city">Hà Nội</option>
                            <option value="5" class="banner-city">TP HCM</option>
                            <option value="7" class="banner-city">Hải Phòng</option>
                            <option value="8" class="banner-city">Bắc Kạn</option>
                            <option value="9" class="banner-city">Bắc Giang </option>
                            <option value="10" class="banner-city">Bắc Ninh</option>
                            <option value="11" class="banner-city">Cao Bằng</option>
                            <option value="12" class="banner-city">Điện Biên</option>
                            <option value="13" class="banner-city">Hà Giang</option>
                            <option value="14" class="banner-city">Hà Nam</option>
                            <option value="15" class="banner-city">Hải Dương</option>
                        </select>
                    </div>
                    <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                        <input type="button" class="form-control btn-info" value="Tìm kiếm cửa hàng">
                    </div>
                </div>
            </div>
        </div>
        <div id="map">
            <div id="left-map"></div>
            <div id="right-map"></div>
        </div>
    </div>
</div>
<style>
    .SumoSelect {width: 100% !important}
</style>
<script>
    $(function () {
        $("#slcTinh").SumoSelect({
            selectAll: true,
            search: true,
            placeholder: 'Select website',
            csvDispCount: 5,
            noMatch : 'Không tìm thấy "{0}"'
        });
        $("#slcQuan").SumoSelect({
            selectAll: true,
            search: true,
            placeholder: 'Select website',
            csvDispCount: 5,
            noMatch : 'Không tìm thấy "{0}"'
        });
    })
</script>