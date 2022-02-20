<?php
  include "./navbar.php";
?>
<!-- breadcumb -->
<section class="breadcumb" aria-label="breadcumb" style="background-image: url('img/breadcumb3.jpg');">
  <div class="container-fluid">
   <div class="row">
    <div class="col-12">
      <div class="main">
        <div class="bread">
          <div class="img-icon">
             <img src="img/breadcumb-icon.png" alt="#">
          </div>
          <div class="bread-title">Gallery</div>
          <div class="bread-subtitle">
            <a href="index.html">Home</a> 
              <span class="spacebread"></span> 
            <span>Gallery</span>
          </div>
        </div>
      </div>
    </div>
   </div>
 </div>
</section>
<!-- breadcumb end -->


<!-- section gallery -->
<section aria-label="section" class="no-bottom">
 <div class="container-fluid">
   <div class="row p-3-vh">
    
    <div class="col-12 text-center pb-5">
      <div class="main-content">
        <div class="heading">
          <div class="title l-1">
            Discover Our Menu
          </div>
        </div>
        <div class="desc m-auto">
            Everyone has taste, even if they don't realize it. Even if you're not a great chef, there's nothing
to stop you understanding the difference between what tastes good and what doesn't.
        </div>
      </div>
    </div>

   </div>

 </div>


   <div class="container-fluid s-img-1" style="background-image: url('img/wallrepeat.png');">

    <div class="row p-3-vh fly-gallery">

          <!-- filter project -->
          <div class="col-md-12 text-center">
            <ul id="filter-porto">
              <li class="filt-projects-w selected" data-project="*">All
              </li>
              <li class="filt-projects-w" data-project=".lunch">Lunch
              </li>
              <li class="filt-projects-w" data-project=".dinner">Dinner
              </li>
              <li class="filt-projects-w" data-project=".dessert">Dessert
              </li>
              <li class="filt-projects-w" data-project=".main">Main
              </li>
            </ul>
          </div>
          <!-- filter project end -->

          <!-- project -->
          <div class="col-md-12 px-md-0">
          <div id="w-gallery-column-4" class="w-gallery-container">

              <a class="w-gallery lunch dinner" href="img/gallery/1.jpg">
              <img src="img/gallery/1.jpg" alt="" class="w-gallery-image">
                <div class="content-gallery">
                  <span class="ti-plus"></span>
                </div>
              </a>
              <a class="w-gallery dessert dinner" href="img/gallery/2.jpg">
                <img src="img/gallery/2.jpg" alt="" class="w-gallery-image">
                <div class="content-gallery">
                  <span class="ti-plus"></span>
                </div>
              </a>
              <a class="w-gallery lunch main video" href="img/gallery/3.jpg">
                  <img src="img/gallery/3.jpg" alt="" class="w-gallery-image">
                  <div class="content-gallery">
                      <span class="ti-plus"></span>
                    </div>
                  </a>
              <a class="w-gallery lunch" href="img/gallery/4.jpg">
                  <img src="img/gallery/4.jpg" alt="" class="w-gallery-image">
                   <div class="content-gallery">
                      <span class="ti-plus"></span>
                    </div>
                  </a>
              <a class="w-gallery dinner main" href="img/gallery/5.jpg">
                  <img src="img/gallery/5.jpg" alt="" class="w-gallery-image">
                  <div class="content-gallery">
                      <span class="ti-plus"></span>
                    </div>
                  </a>
              <a class="w-gallery dessert dinner main" href="img/gallery/6.jpg">
                  <img src="img/gallery/6.jpg" alt="" class="w-gallery-image">
                  <div class="content-gallery">
                      <span class="ti-plus"></span>
                    </div>
                  </a>
              <a class="w-gallery lunch" href="img/gallery/7.jpg">
                  <img src="img/gallery/7.jpg" alt="" class="w-gallery-image">
                   <div class="content-gallery">
                      <span class="ti-plus"></span>
                    </div>
                  </a>
              <a class="w-gallery dinner main" href="img/gallery/8.jpg">
                  <img src="img/gallery/8.jpg" alt="" class="w-gallery-image">
                  <div class="content-gallery">
                      <span class="ti-plus"></span>
                    </div>
                  </a>
              <a class="w-gallery dessert dinner main" href="img/gallery/9.jpg">
                  <img src="img/gallery/9.jpg" alt="" class="w-gallery-image">
                  <div class="content-gallery">
                      <span class="ti-plus"></span>
                    </div>
                  </a>
              <a class="w-gallery lunch" href="img/gallery/4.jpg">
                  <img src="img/gallery/4.jpg" alt="" class="w-gallery-image">
                   <div class="content-gallery">
                      <span class="ti-plus"></span>
                    </div>
                  </a>
              <a class="w-gallery dinner main" href="img/gallery/5.jpg">
                  <img src="img/gallery/5.jpg" alt="" class="w-gallery-image">
                  <div class="content-gallery">
                      <span class="ti-plus"></span>
                    </div>
                  </a>
              <a class="w-gallery dessert dinner main" href="img/gallery/6.jpg">
                  <img src="img/gallery/6.jpg" alt="" class="w-gallery-image">
                  <div class="content-gallery">
                      <span class="ti-plus"></span>
                    </div>
                  </a>
              
          </div>
          </div>
          <!-- project end -->

    </div>
     
   </div>
</section>
<!-- section gallery end -->

<?php include "./footer.php" ?>