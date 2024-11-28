<?php
$this->assign('title', (get_option('site_meta_title')) ?: get_option('site_name'));
$this->assign('description', get_option('description'));
$this->assign('content_title', get_option('site_name'));
?>

<!-- Header -->

<section class="shorten blog-block inner-section-padding blog-page" id="shorten">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12 text-center wow animated fadeInUp" data-wow-delay="0.1s">
                     <h1 class="text-white">Best <strong>Shorten</strong> Urls and</h1>
                     <div class="lead mb-5 text-white">Earn up to 20$ / 1000 views</div>
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
     <div class="effectiv">
      <img src="/yuidea_softyu_theme/img/bg.svg" alt=""/>         </div>
</header>


<section class="bg-light-gray">
    <div class="container">
        <div class="section-title text-center wow animated zoomIn">
            <span class="badge badge-primary">Earn extra money</span>
            <h2 class="section-heading">Why join us?</h2>
      <span class="section-title-line"></span>
        </div>

    <div class="row">
      <div class="col-md-4 wow animated fadeInUp" data-wow-delay="0.1s">
        <div class="custom-card testimonials-item text-center">
          <div class="feature-img"><img src="/yuidea_softyu_theme/img/what.svg" alt=""/></div>
          <h6 class="mb-0 text-primary"><?= __('What is {0}?', h(get_option('site_name'))) ?></h6>
          <p class="mb-4"><?= __('{0} is a completely free tool where you can create short links, which apart from being free, you get paid! So, now you can make money from home, when managing and protecting your links.',
                            h(get_option('site_name'))) ?></p>
        </div>
      </div>

      <div class="col-md-4 wow animated fadeInUp" data-wow-delay="0.2s">
        <div class="custom-card testimonials-item text-center">
          <div class="feature-img"><img src="/yuidea_softyu_theme/img/much.svg" alt=""/></div>
          <h6 class="mb-0 text-primary"><?= __('How and how much do I earn?') ?></h6>
          <p class="mb-4"><?= __("How can you start making money with {0}? It's just 3 steps: create an account, create a link and post it - for every visit, you earn money. It's just that easy!",
                            h(get_option('site_name'))) ?></p>
        </div>
      </div>

              <div class="col-md-4 wow animated fadeInUp" data-wow-delay="0.3s">
          <div class="custom-card testimonials-item text-center">
            <div class="feature-img"><img src="/yuidea_softyu_theme/img/ref.svg" alt=""/></div>
            <h6 class="mb-0 text-primary"><?= __('{0}% Referral Bonus',
                                h(get_option('referral_percentage'))) ?></h6>
            <p class="mb-4"><?= __('The {0} referral program is a great way to spread the word of this great service and to earn even more money with your short links! Refer friends and receive {1}% of their earnings for life!',
                                [h(get_option('site_name')), h(get_option('referral_percentage'))]) ?></p>
          </div>
        </div>
            
    </div>  
      
    <div class="row mt-5">  
      <div class="col-md-4 wow animated fadeInUp" data-wow-delay="0.4s">
        <div class="custom-card testimonials-item text-center">
          <div class="feature-img"><img src="/yuidea_softyu_theme/img/dash.svg" alt=""/></div>
          <h6 class="mb-0 text-primary">Featured Administration Panel</h6>
          <p class="mb-4">Control all of the features from the administration panel with a click of a button.</p>
        </div>
      </div>

      <div class="col-md-4 wow animated fadeInUp" data-wow-delay="0.5s">
        <div class="custom-card testimonials-item text-center">
          <div class="feature-img"><img src="/yuidea_softyu_theme/img/stats.svg" alt=""/></div>
          <h6 class="mb-0 text-primary">Detailed Stats</h6>
          <p class="mb-4">Know your audience. Analyse in detail what brings you the most income and what strategies you should adapt.</p>
        </div>
      </div>

      <div class="col-md-4 wow animated fadeInUp" data-wow-delay="0.5s">
        <div class="custom-card testimonials-item text-center">
          <div class="feature-img"><img src="/yuidea_softyu_theme/img/payout.svg" alt=""/></div>
          <h6 class="mb-0 text-primary">Low Minimum Payout</h6>
          <p class="mb-4">You are required to earn only $5.000000 before you will be paid. We can pay all users via their PayPal.</p>
        </div>
      </div>
    </div>
    
    <div class="row mt-5">
      <div class="col-md-4 wow animated fadeInUp" data-wow-delay="0.5s">
        <div class="custom-card testimonials-item text-center">
          <div class="feature-img"><img src="/yuidea_softyu_theme/img/rate.svg" alt=""/></div>
          <h6 class="mb-0 text-primary">Highest Rates</h6>
          <p class="mb-4">Make the most out of your traffic with our always increasing rates.</p>
        </div>
      </div>

      <div class="col-md-4 wow animated fadeInUp" data-wow-delay="0.5s">
        <div class="custom-card testimonials-item text-center">
          <div class="feature-img"><img src="/yuidea_softyu_theme/img/api.svg" alt=""/></div>
          <h6 class="mb-0 text-primary">API</h6>
          <p class="mb-4">Shorten links more quickly with easy to use API and bring your creative and advanced ideas to life.</p>
        </div>
      </div>

      <div class="col-md-4 wow animated fadeInUp" data-wow-delay="0.5s">
        <div class="custom-card testimonials-item text-center">
          <div class="feature-img"><img src="/yuidea_softyu_theme/img/support.svg" alt=""/></div>
          <h6 class="mb-0 text-primary">Support</h6>
          <p class="mb-4">A dedicated support team is ready to help with any questions you may have.</p>
        </div>
      </div>
    </div>
    </div>
</section>

<?php if ((bool)get_option('display_home_stats', 1)) : ?>
<section class="why-us-block bg-primary" id="why-us">
    <div class="container">
    <div class="section-title text-center wow animated zoomIn">
       <span class="badge badge-white">Numbers speak for themselves</span>
       <h2 class="text-white">Fast Growing</h2>
       <span class="section-title-line section-title-line line-white"></span>
    </div>
        <div class="row">
            <div class="col-md-4 wow animated zoomIn" data-wow-delay="0.1s">
                <div class="why-us-item text-center text-white">
                    <i class="fa fa-usd"></i>
                    <h1 class="mb-0 mt-3 text-white"><?= $totalClicks ?></h1>&nbsp;
                    <p class="mb-0 text-white">Total Clicks</p>
                </div>
            </div>
            <div class="col-md-4 wow animated zoomIn" data-wow-delay="0.3s">
                <div class="why-us-item text-center text-white">
                    <i class="fa fa-link"></i>
                    <h1 class="mb-0 mt-3 text-white"><?= $totalLinks ?></h1>&nbsp;
                    <p class="mb-0 text-white">Total URLs</p>
                </div>
            </div>
            <div class="col-md-4 wow animated zoomIn" data-wow-delay="0.5s">
                <div class="why-us-item text-center text-white">
                    <i class="fa fa-users"></i>
                    <h1 class="mb-0 mt-3 text-white"><?= $totalUsers ?></h1>&nbsp;
                    <p class="mb-0 text-white">Registered users</p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?=
$this->cell('Testimonial', [], [
    'cache' => [
        'config' => '1day',
        'key' => 'home_testimonials_' . locale_get_default(),
    ],
])
?>
<section class="features-block" id="features">
    <div class="container">
        <div class="section-title text-center wow animated fadeInUp" data-wow-delay="0.1s">
            <span class="badge badge-primary">It's just three steps</span>
            <h2 class="section-heading">Start?</h2>
      <span class="section-title-line"></span>
        </div>

        <div class="row wow fadeInUp">
      <div class="col-md-6">
                  <div class="amazing-dashboard-left wow animated fadeInLeft" data-wow-delay="0.7s">
                     <h2 class="mb-2">How You Start?</h2>
                     <span class="section-title-line mb-4"></span>
                     <p class="mb-5">How can you start making money  It's just 3 steps. It's just that easy!..</p>
                     <h5>1. Create an account</h5>
                     <p class="mb-5">Firstly create an account with us so you can get great features, all for free of charge.</p>
                     <h5>2. Shorten your link</h5>
                     <p class="mb-5">Shorten or hide your link to an unique and small one in one easy step and for free.</p>
                     <h5>3. Earn Money</h5>
                     <p class="mb-0">Share your shorten links with your friends, forums or websites and get paid for every click.</p>
                  </div>
               </div>
               <div class="col-md-6">
                   <div class="amazing-dashboard-right text-right wow animated fadeInRight" data-wow-delay="0.12s">
            <div class="amazing-dashboard"><img src="/yuidea_softyu_theme/img/bg-Start.png" alt=""/></div>
                  </div>
               </div>
    </div>
    </div>
</section>

<!-- Contact Section -->
<section class="trial-block" id="contact">
    <div class="container">
        <div class="section-title text-center wow animated zoomIn">
               <span class="badge badge-info">Contact Us</span>
               <h2>Let's Make it Happen?</h2>
               <span class="section-title-line section-title-line"></span>
            </div>

        <?= $this->element('contact'); ?>

    </div>
</section>
<section id="clients" class="section clients clients-carousel bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="carousel carousel-dots owl-carousel" data-slide="5" data-slide-res="2" data-autoplay="true" data-nav="false" data-dots="false" data-space="30" data-loop="true" data-speed="800">

                    <!-- payment #2 -->
                    <div class="client">
                        <img src="/yuidea_softyu_theme/img/paytm.png" alt=""/>                    </div>

                    <!-- payment #3 -->
                    <div class="client">
                        <img src="/yuidea_softyu_theme/img/gpay.png" alt=""/>                    </div>

                    <!-- payment #4 -->
                    <div class="client">
                        <img src="/yuidea_softyu_theme/img/UPI.png" alt=""/>                    </div>

                    <!-- payment #5 -->
                    <div class="client">
                        <img src="/yuidea_softyu_theme/img/phonepe.png" alt=""/>                    </div>
                    <!-- payment #1 -->
                    <div class="client">
                        <img src="/yuidea_softyu_theme/img/paypal.png" alt=""/>                    </div>

                </div>
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>

