<link type="text/css" href="<?php echo public_url()?>/js/jquery/autocomplete/css/smoothness/jquery-ui-1.8.16.custom.css" rel="stylesheet" />  
<script type="text/javascript" src="<?php echo public_url()?>/js/jquery/autocomplete/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript">
    $(function() {
        $( "#text-search" ).autocomplete({
            source: "<?php echo site_url('product/search/1') ?>",
        });
    });
</script>
<section class="header-top">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 text-center">
                <a href="<?php echo base_url() ?>"><i class="fa fa-map-marker" aria-hidden="true"></i>　Bản Đồ</a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <a href="<?php echo base_url('cart')?>">
                        <strong class="title-my-cart">Giỏ hàng</strong>
                        <span class="count-item">
                            <b><?php echo $total_items ?> SP</b>
                        </span>
                        <span class="price">
                            <?php echo number_format($total) ?>đ        
                        </span>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <ul>
                        <li><a href="<?php echo base_url('dang-ky') ?>">Đăng Kí</a></li>
                        <li><a href="<?php echo base_url('dang-nhap') ?>">Đăng Nhập</a></li>
                    </ul>    
                </div>
            </div>
        </div>
    </div>
</section>



<section class="logo_search">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 text-center">
                <a href="<?php echo base_url() ?>">
                    <img width="150px" height="50px" class="sp-default-logo" src="<?php echo public_url('site/images/vietkas.png') ?>" alt="Mua Hàng OnLine | Shop đa thời trang cao cấp | Giảm ngay 30% khi mua sản phẩm">
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 hidden-xs text-center">
                <form class="form-search" name="searchForm" method="get" action="<?php echo base_url('product/search') ?>">
                    <input style="width: 250px;" type="text" placeholder="Nhập tên sản phẩm cần tìm" id="text-search" name="key-search" value="<?php echo isset($key) ? $key : "" ?>">
                    <input class="button btn" type="submit" value="Go">
                </form>
            </div>
        </div>
    </div>
</section>


<section class="menu">
    <div class="row">
        <div id="sp-main-menu" class="col-xs-3 col-sm-1 col-md-12">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">WebSiteName</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?php echo base_url() ?>">Trang chủ</a></li>
                        <li><a href="<?php echo base_url('gioi-thieu') ?>">Giới Thiệu</a></li>
                        <li><a href="<?php echo base_url('san-pham') ?>">Sản Phẩm</a></li>
                        <li><a href="<?php echo base_url('tin-tuc') ?>">Tin Tức</a></li>
                        <li><a href="<?php echo base_url('lien-he') ?>">Liên Hệ</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</section>

