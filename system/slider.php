
<section id="slider" class="slider-element slider-parallax swiper_wrapper full-screen clearfix" <?php if($name=="Accueil"){ ?>data-autoplay="5000" data-speed="1100" data-loop="true" <?php } ?>>

<div class="slider-parallax-inner">

    <div class="swiper-container swiper-parent">
        <div class="swiper-wrapper">
            <?php if($name=="Accueil"){ ?>
                <div class="swiper-slide dark" style="background-image: url('images/Page 1/header-1.1.jpg');">
                    <div class="container clearfix">
                        <div class="slider-caption slider-caption-center">
                            <h2 data-animate="fadeInUp">Du pain et des viennoiseries livrés sur votre lieu de travail, vous en avez rêvé ?</h2>
                            <!--<p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200"></p>-->
                        </div>
                    </div>
                </div>
                <div class="swiper-slide dark" style="background-image: url('images/Page 1/header-1.2.jpg');">
                    <div class="container clearfix">
                        <div class="slider-caption slider-caption-center">
                            <h2 data-animate="fadeInUp">Du pain et des viennoiseries livrés sur votre lieu de travail, vous en avez rêvé ?</h2>
                            <p class="d-none d-sm-block"></p>
                        </div>
                    </div>
                </div>
                <!--<div class="swiper-slide dark" style="background-image: url('images/sliders/header-1.3.jpg');">
                    <div class="container clearfix">
                        <div class="slider-caption slider-caption-center">
                            <h2></h2>
                            <p class="d-none d-sm-block"></p>
                        </div>
                    </div>
                </div>-->
                <!--<div class="swiper-slide dark" style="background-image: url('images/sliders/header-1.4.jpg');">
                    <div class="container clearfix">
                        <div class="slider-caption slider-caption-center">
                            <h2></h2>
                            <p class="d-none d-sm-block"></p>
                        </div>
                    </div>
                </div>-->
            </div>
            <div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
            <div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
            <div class="slide-number"><div class="slide-number-current"></div><span>/</span><div class="slide-number-total"></div></div>
            <?php } ?>
          </div>
</div>

</section>
