<?php
$this->assign('title', (get_option('site_meta_title')) ?: get_option('site_name'));
$this->assign('description', get_option('description'));
$this->assign('content_title', get_option('site_name'));
?>

<!-- Header -->
<section id="home" class="banner-area">
        <div class="banner-shape-1">
            <img src="assets/images/shape/shape-2.png" alt="Shape">
        </div>
        <div class="banner-shape-2">
            <img src="assets/images/shape/shape-1.png" alt="Shape">
        </div>
        <div class="banner-shape-3">
            <img src="assets/images/shape/dots.png" alt="Shape">
        </div>

        <div class="banner-content-wrapper">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <section class="shorten blog-block inner-section-padding blog-page" id="shorten">
                        <div class="container">
               <div class="row">
                  <div class="col-lg-12 text-center wow animated fadeInUp" data-wow-delay="0.1s">
                     <h1 class="text-black">Shorten <strong>Share</strong> Earn Money</h1>
                     <div class="lead mb-5 text-black">Earn up to 5$ / 1000 views</div>
						<div class="row wow fadeInUp">
							<div class="col-md-8 mx-auto">
<?php if (get_option('home_shortening') == 'yes') : ?>
                        <?= $this->element('shorten'); ?>
                    <?php endif; ?>
                    <?php
                if (null !== $this->request->session()->read('Auth.User.id')) {
                    ?>
								<p class="mb-0">
							<button type="button" class="btn btn-light btn-lg"><a href="<?= build_main_domain_url('/member/dashboard'); ?>">Dashboard</a></button> &nbsp; 
							<button type="button" class="btn btn-outline-light btn-lg"><a href="<?= build_main_domain_url('/member/users/profile'); ?>">Profile</a></button>
</p>
                    <?php
                } else {
                    ?>
											<p class="mb-0">
												                                   		<button type="button" class="btn btn-light btn-lg"><a href="/auth/signin">Login</a></button> &nbsp; 
							<button type="button" class="btn btn-outline-light btn-lg"><a href="/auth/signup">Sign Up</a></button>
							</p>
                    <?php
                }
                ?>
							</div>
						</div>
            	   </div>
               </div>
            </div>
             </section>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner-image wow fadeInRightBig" data-wow-duration="1.3s" data-wow-delay="0.8s">
                            <div class="image">
                                <img src="assets/images/home/short-links-and-earn.png" alt="App">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="banner-counter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="counter-title text-center">
                            <h6 class="title">Numbers Speaks Everything</h6>
                        </div>
                    </div>
                </div>
                <div class="counter-wrapper">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-counter">
                                <span class="count-content"><strong class="count"><?= $totalClicks ?></strong><span>/</span> Total Clicks</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-counter">
                                <span class="count-content"><strong class="count"><?= $totalLinks ?></strong><span>/</span> Total URLs</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-counter">
                                <span class="count-content"><strong class="count"><?= $totalUsers ?></strong><span>/</span> Registered users</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-counter">
                                <span class="count-content"><strong class="count">3266</strong><span>/</span> Sites</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Banner Ends ======-->
    
    <!--====== How It Works ======-->

    <section id="features" class="features-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                
                        <h2 class="title">How It Works</h2>
                        <p class="sub-title"><?= __('  {0}', h(get_option('site_name'))) ?> is a completely free tool where you can create short links, which apart from being free, you get paid!</p>
                    </div>
                </div>
            </div>
            
            <div class="features-wrapper">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-features features-1 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.2s">
                            <span class="features-number">01</span>
                            <div class="features-icon">
                                <i class="fa fa-user-plus"></i>
                            </div>
                            <div class="features-content">
                                <h4 class="features-title"><a href="#">CREATE AN ACCOUNT</a></h4>
                                <p>In order to get started with <?= __('  {0}', h(get_option('site_name'))) ?>, at first all you need is <?= __('  {0}', h(get_option('site_name'))) ?> Account & you can create it by sign-up option.</p>
                            </div>
                            <div class="features-btn">
                                <a href="#"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-features features-2 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.5s">
                            <span class="features-number">02</span>
                            <div class="features-icon">
                                <i class="fa fa-link"></i>
                            </div>
                            <div class="features-content">
                                <h4 class="features-title"><a href="#">SHORTEN YOUR LINKS & SHARE</a></h4>
                                <p>Shorten that links with <?= __('  {0}', h(get_option('site_name'))) ?> & copy them and start sharing on any platform e.g: YouTube, Telegram, Website etc.</p>
                            </div>
                            <div class="features-btn">
                                <a href="#"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="single-features features-3 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.8s">
                            <span class="features-number">03</span>
                            <div class="features-icon">
                                <i class="fa fa-dollar"></i>
                            </div>
                            <div class="features-content">
                                <h4 class="features-title"><a href="#">EARN MONEY</a></h4>
                                <p>Here you Go, since you've shared your Shorten links and got views on it, So that you're getting paid for every view you get.check our CPM rates at Payout Rates Page.</p>
                            </div>
                            <div class="features-btn">
                                <a href="#"><i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <!--====== Earn Money with AdLinkFly ======-->

    <section id="powerful" class="powerful-tools-area">
        <div class="powerful-shape shape-1"></div>
        <div class="powerful-shape shape-2">
            <img src="assets/images/shape/shape-5.png" alt="">
        </div>

        <div class="container">
            <div class="powerful-tools-wrapper">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="powerful-image mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.3s">
                            <div class="image">
                                <img src="assets/images/home/hive-space-theme-power.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="powerful-tools-content mt-50">
                            <div class="section-title">
                                <p class="sub-title">Providing Best Services</p>
                                <h2 class="title">Earn Money with <?= __('  {0}', h(get_option('site_name'))) ?></h2>
                            </div>
                            <div class="powerful-content-wrapper">
                                <p>Turn your traffic into profit.</p>
                                <ul class="content-list">
                                    <li><i class="fas fa-check"></i> Highest Rates : Make the most out of your traffic with our always increasing rates. </li>
                                    <li><i class="fas fa-check"></i> 20% Referral bonus</li>
                                    <li><i class="fas fa-check"></i> Low Minimum Payout</li>
                                </ul>
                                <a href="#" class="main-btn main-btn-2">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Earn Money with AdLinkFly ======-->
    
    
    
    
    <!--====== Our Features List ======-->

    <section id="pricing" class="pricing-area">
        <div class="pricing-shape shape-1">
            <img src="assets/images/shape/dots-3.png" alt="">
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <p class="sub-title">Here's the peak of <?= __('  {0}', h(get_option('site_name'))) ?> features</p>
                        <h2 class="title">Our Features List</h2>
                    </div>
                </div>
            </div>
            <div class="pricing-wrapper">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-pricing pricing-1 text-center wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.4s">
                            <div class="pricing-icon">
                                <i class="flaticon-training"></i>
                            </div>
                            <div class="pricing-price">
                                <h5 class="sub-title">
FEATURED ADMIN PANEL WITH DETAILED STATS</h5>
                                
                            </div>
                            <div class="pricing-body">
                                <ul class="pricing-list">
                                    <li><i class="fas fa-check"></i> Control all of the features from the administration panel with a click of a button.</li>
                                    <li><i class="fas fa-check"></i> Know your audience. Analyse in detail what brings you the most income and what strategies you should adapt.</li>
                                    
                                </ul>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-pricing pricing-2 text-center wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.4s">
                            <div class="pricing-icon">
                                <i class="flaticon-shuttle"></i>
                            </div>
                            <div class="pricing-price">
                                <h5 class="sub-title">LOW MINIMUM PAYOUT & HIGH CPM RATES</h5>
                                
                            </div>
                            <div class="pricing-body">
                                <ul class="pricing-list">
                                    <li><i class="fas fa-check"></i> You are required to earn only $5 minimum threshold before you will be paid. We can pay all users via their prefered payment method.</li>
                                    <li><i class="fas fa-check"></i>Make the most out of your traffic with our always increasing rates.</li>
                                    
                                </ul><!-- Made by Hive-Store -->
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-pricing pricing-3 text-center wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.4s">
                            <div class="pricing-icon">
                                <i class="flaticon-smartphone"></i>
                            </div>
                            <div class="pricing-price">
                                <h5 class="sub-title">API & SUPPORT</h5>
                                
                            </div>
                            <div class="pricing-body">
                                <ul class="pricing-list">
                                    <li><i class="fas fa-check"></i> Shorten links more quickly with easy to use API and bring your creative and advanced ideas.</li>
                                    <li><i class="fas fa-check"></i> A dedicated support team is ready to help with any questions you may have.</li>
                                    
                                </ul>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Our Features List ======-->
  <!--====== What they are saying ======-->

    <section id="testimonial" class="testimonial-area bg_cover" style="background-image: url(assets/images/testimonial-bg.jpg);">
        <div class="testimonial-shape shape-1"></div>
        <div class="testimonial-shape shape-2"></div>

        <div class="testimonial-wrapper">
            <div class="author-1">
                <img src="assets/images/author-h1.png" alt="">
            </div>
            <div class="author-2">
                <img src="assets/images/author-h2.png" alt="">
            </div>
            <div class="author-3">
                <img src="assets/images/author-h5.png" alt="">
            </div>
            <div class="author-4">
                <img src="assets/images/author-h3.png" alt="">
            </div>

            <div class="author-5">
                <img src="assets/images/author-h3.png" alt="">
            </div>
            <div class="author-6">
                <img src="assets/images/author-h5.png" alt="">
            </div>
            <div class="author-7">
                <img src="assets/images/author-h1.png" alt="">
            </div>
            <div class="author-8">
                <img src="assets/images/author-h2.png" alt="">
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <p class="sub-title">Check Our Client Feedbacks</p>
                        <h2 class="title">What they are saying</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="testimonial-bg">
                        <div class="testimonial-active swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide single-testimonial text-center">
                                    <p>
              <?= __('To be honest, I have never seen or found any better website than {0} I feel like I get double paid for the same job in other websites.', h(get_option('site_name'))) ?>
            </p>
                                    <h5 class="author-name">Shirley Smith</h5>
                                </div>
                                <div class="swiper-slide single-testimonial text-center">
                                    <p>
              <?= __('The good thing about {0} is that fastest payments and highest Payout rate.', h(get_option('site_name'))) ?>
            </p>
                                    <h5 class="author-name">Jon Smith</h5>
                                </div>
                                <div class="swiper-slide single-testimonial text-center">
                                    <p>The best website ever; I can shorten, track my links and earn money at the same time. Amazing!
            </p>
                                    <h5 class="author-name">Rose Smith</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== What they are saying ======-->
   
    
    <!--====== FAQ's Start ======-->

    <section id="faq" class="faq-area">
        <div class="faq-shape shape-1 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.6s">
            <img src="assets/images/shape/shape-6.png" alt="">
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="faq-content-left mt-45">
                        <div class="section-title">
                            <p class="sub-title">Frequently Asked Question</p>
                            <h2 class="title">Do you’ve any questions?</h2>
                        </div>
                        
<!--Made by Hive-Store.com -->
                        <img src="assets/images/home/hive-space-theme.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="faq-accordion mt-50">
                        <div class="accordion" id="accordionFaq">
                            <div class="card">
                                <div class="card-header">
                                    <a href="" data-toggle="collapse" data-target="#collapseOne">
                                        <?= __(' What is {0}?', h(get_option('site_name'))) ?>
                                        </a>                                
                                </div>
                          
                                <div id="collapseOne" class="collapse show" data-parent="#accordionFaq">
                                    <div class="card-body">
                                        <p>A URL shortener, also known as a link shortener, seems like a simple tool, but it is a service that can have a dramatic impact on your earning efforts.by sharing the links you can earn money. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseTwo">Benefits of <?= __('  {0}', h(get_option('site_name'))) ?></a>                                
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordionFaq">
                                    <div class="card-body">
                                        <p>A short URL is also easier to incorporate into your collateral – whether you’re looking to engage with your users. its easy to earn with us. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseThree">Features of <?= __('  {0}', h(get_option('site_name'))) ?> URL Shortner</a>                                
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordionFaq">
                                    <div class="card-body">
                                        <p>High CPM,Low Minimum Payout,You are required to earn only $5 minimum threshold before you will be paid. We can pay all users via their prefered payment method. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseFour">Why Choose <?= __('  {0}', h(get_option('site_name'))) ?></a>                                
                                </div>
                                <div id="collapseFour" class="collapse" data-parent="#accordionFaq">
                                    <div class="card-body">
                                        <p>Whether you’re sharing one link or millions, our platform was built to help you make every point of connection between your content and your audience ignite action.

That’s why the most recognized brands in the world love our platform. </p>
                                    </div>
                                </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== FAQ's Ends ======-->
    
    
    
   

