<div class="container">
    <div class="banner-ads">
        <!-- <img src="<?php echo base_url() ?>/assets/img/img-800x650.jpg" alt=""> -->
        <div id="myCarousel" class="carousel slide">
            <!-- Carousel items -->
            <div class="carousel-inner">
                <div class="active item">
                    <img src="<?php echo base_url() ?>/assets/img/img-banner-1.jpg" alt="">
                </div>
                <div class="item">
                    <img src="<?php echo base_url() ?>/assets/img/img-banner-2.jpg" alt="">
                </div>
            </div>
            <!-- Carousel nav -->
            <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
            <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
        </div>
    </div>
    <div class="section-title">
        <h2>Produk Pilihan</h2>
    </div>
    <ul class="product-list row clearfix">
        <?php foreach ($featured_products as $product): ?>
            <li class="span3">
                <a href="<?php echo site_url('product/detail/' . $product->id) ?>">
                    <div class="image">
                        <img src="<?php echo $product->image_url() ?>" alt="" height="194" width="194">
                        <span class="price"><?php echo rupiah($product->price) ?></span>
                    </div>
                    <div class="description">
                        <p><?php echo $product->name ?></p>
                    </div>
                </a>
            </li>
        <?php endforeach ?>
    </ul>
    <div class="section-title">
        <h2>Produk Terbaru</h2>
    </div>
    <ul class="product-list row clearfix">
        <?php foreach ($latest_products as $product): ?>
            <li class="span3">
                <a href="<?php echo site_url('product/detail/' . $product->id) ?>">
                    <div class="image">
                        <img src="<?php echo $product->image_url() ?>" alt="" height="194" width="194">
                        <span class="price"><?php echo rupiah($product->price) ?></span>
                    </div>
                    <div class="description">
                        <p><?php echo $product->name ?></p>
                    </div>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
<!-- container -->
<div class="push"></div>