
<style type="text/css">
    body{font-family:Roboto, sans-serif; font-weight:normal; }
    h1{font-family:Roboto, sans-serif; font-weight:100; }
    #sp-header-top{ background-color:#ffffff; }
    #sp-breadcrumb-block{ background-image:url("/demo/senvietdeal/images/bg-bredum.png");background-color:#f6f6f6; }
    #sp-block-acymailling{ background-color:#ffffff; }
    #sp-block-bottom-2{ background-color:#ffffff; }
    #sp-footer{ background-color:#060d11; }
    div.mod_search35 input[type="search"]{ width:auto; }
</style> 

<section id="sp-breadcrumb-block">
    <div class="container">
        <div class="row">
            <div id="sp-breadcrumb" class="col-sm-12 col-md-12">
                <div class="sp-column ">
                    <div class="sp-module ">
                        <div class="sp-module-content">
                            <ol class="breadcrumb">
                                <li><a href="<?php echo base_url()?>" class="pathway">Home</a></li>
                                <li class="active"><?=$news->title?></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="sp-main-body">
    <div class="container">
        <div class="row">
            <div id="sp-component" class="col-sm-12 col-md-12">
                <div class="sp-column ">
                    <article class="item item-page" itemscope="" itemtype="http://schema.org/Article">
                        <meta itemprop="inLanguage" content="en-GB">
                        <div class="entry-image full-image"> 
                            <img src="<?php echo base_url('/upload/news/'.$news->image_link)?>" alt="<?=$news->title?>" title="<?=$news->title?>"> 
                        </div>
                        <div class="entry-header">
                            <h2 itemprop="name"><?=$news->title?></h2>
                        </div>
                        <div itemprop="articleBody">
                            <p><?=$news->content?></p>
                        </div>
                        <div class="jshop_list_product_related">
                            <div class="related_header">
                                <span>Sản Phẩm Khác</span>
                            </div>
                            <div class="list_related">
                                <?php foreach($news_list as $row) : ?>
                                <div class="jshop_related">
                                    <div class="product productitem_119">
                                        <div class="item-wrap">
                                            <div class="item-image">
                                            <a class="img" href="<?php echo base_url('news/view/'.$row->id)?>" title="<?=$row->title?>">
                                                <img  src="<?php echo base_url('/upload/news/'.$row->image_link)?>" alt="<?=$row->title?>" title="<?=$row->title?>">
                                            </a>
                                            
                                            </div>
                                                
                                            <div class="item-info">
                                            <h3 class="item-title">
                                                <a class="img" href="<?php echo base_url('news/view/'.$row->id)?>" title="<?=$row->title?>">
                                                <?=$row->title?>                     
                                                </a>
                                            </h3>
                                            
                                            <div class="extra_fields"></div>
                                                <div class="main-price">
                                                <div class = "item-price">
                                                    <span class="price">
                                                    <?php 
                                                        if(strlen($row->intro) < 20){
                                                            echo $row->intro;
                                                        }else{
                                                            echo mb_substr($row->intro,0,100,'utf8').'...';
                                                        }
                                                    ?>         
                                                    </span>
                                                </div>
                                            
                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                                <?php endforeach?>  
                            </div>
                        </div> 
                        <script type="text/javascript">
                            jQuery(document).ready(function($) {
                                jQuery(".list_related").owlCarousel({
                                autoPlay: 3000, //Set AutoPlay to 3 seconds
                                items : 1,
                                //Pagination
                                pagination : false,
                                paginationNumbers: false,
                                nav: true,
                                loop: false,
                                margin: 30,
                                responsive:{
                                767:{
                                    items: 2,
                                },
                                992:{
                                    items: 3,
                                },
                                1200:{
                                    items: 4,
                                },
                                }
                                });
                            });
                        </script>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>

<style type="text/css">
    .owl-prev{
        padding:10px;
        position:absolute;
        top:-50px;
        right:60px;
        background: #db6516;
        color:#fff;
        border-radius: 20px 5px 5px 20px;
    }
    .owl-next{
        padding:10px;
        position:absolute;
        color:#fff;
        top:-50px;
        right:0;
        background: #db6516;
        border-radius: 5px 20px 20px 5px;
    }
</style>








