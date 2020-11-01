<div class="breadcrumbs"> 
  <div class="container"> 
    <div class="row"> 
      <div class="col-sm-12"> 
        <ul> 
          <li>
            <a href="#">Trang chủ</a>
          </li> 
          <li class="active"><?=$infopage->title?></li> 
        </ul><!-- end breadcrumb --> 
      </div><!-- end col --> 
    </div><!-- end row --> 
  </div><!-- end container --> 
</div>

<section class="section white-backgorund"> 
  <div class="container"> 
    <div class="row"> 
      <div class="col-sm-9"> 
        <article class="blog"> 
          <div class="blog-title"> 
            <h1 class="thin"><?=$infopage->title?></h1> 
          </div><!-- end blog-title --> 
         
          <div class="blog-content"> 
            <!-- end blog-meta --> 
            <div class="blog-description">  

                <p> <?=$infopage->description?></p>

                </div><!-- end blog description --> 

              </div><!-- end blog-content --> </article><!-- end blog -->



            </div><!-- end col --><!-- start sidebar -->


<?Php $this->load->view("site/right.php")?>
  <!-- end col --> <!-- end sidebar --> </div><!-- end row --> </div><!-- end container --> </section>

	<?Php $this->load->view("site/content.php")?>