<div id="SECTION346" class="widget-section ladi-drop ui-droppable" lp-type="widget_section" lp-widget="widget"
     lp-lang="SECTION" lp-display="block" style="height: 340px; background-position: center; background-image: url('images/Header-Product.jpg');">
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
             lp-lang="HEADLINE" lp-display="block"><h2 class="widget-content" lp-node="h2">KHÁM PHÁ MÓN NGON</h2>
        </div>
        <div id="HEADLINE298" class="widget-element widget-snap" lp-type="textinline" lp-editor="true"
             lp-lang="HEADLINE" lp-display="block"><h2 class="widget-content" lp-node="h2">
            <span color="" style="color: rgb(245, 245, 245);"><span
                        style="font-weight: normal; color: rgb(245, 245, 245);"
                        color="">Các món ngon từ Đậu</span></span></h2></div>

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
                <li><a href="" style="color: #6ab008;">Đậu ngon</a></li>
                <li><a href="<?= site_url('') ?>">Out Story</a></li>
                <li><a href="<?= site_url('cua-hang.html') ?>">Mua đậu ở đâu ?</a></li>
            </ul>
        </div>
    </div>
</div>

<div id="SECTION23" style="height: auto" class="widget-section ladi-drop ui-droppable collection_head bg-white" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
    <div class="container-fluid">
        <div class="boxSortHead mb-4">
            <div class="page_head">
                <h1 class="collection_title ins_title">
                    Sản phẩm
                </h1>
                <p class="countPd">(0 sản phẩm)</p>
            </div>
        </div>
        
        <div class="row">
            <?php foreach ($arr_product as $item){ ?>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3">
                <div class="post-module">
                    <div class="thumbnail">
                        <img src="<?php echo base_url(). "upload/". $item['image']; ?>">
                    </div>
                    <div class="post-content">
                        
                        <h1 class="title"><?php echo $item['name'] ?></h1>
                        <p class="description" style="display: none; height: 100px; opacity: 1;">
                            <?php echo $item['short_desc'] ?>
                        </p>
                        <p class="btn-cart">
                            <button type="button" class="btn btn-sm btn-success">Xem thêm</button>
                        </p>
                    </div>
                </div>
            </div>
            <?php } ?>
            
            
            
            
        </div>
    </div> 

</div>
<script>
    $(function(){
        $('.post-module').hover(function() {
            $(this).find('.description').stop().animate({
              height: "toggle",
              opacity: "toggle"
            }, 200);
          });
    });

</script>


