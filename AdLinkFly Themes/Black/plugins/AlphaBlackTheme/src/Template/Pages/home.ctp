<?php
$this->assign('title', (get_option('site_meta_title')) ?: get_option('site_name'));
$this->assign('description', get_option('description'));
$this->assign('content_title', get_option('site_name'));
?>
<!-- Header -->
<div class="bg-animation"></div>
<header class="shorten">  
<div class="container"onmouseover = "home()">
    <div class="intro-1">
        
                    <h1 class="main-logo wow fadeInDown" ><?= h(get_option('site_name')) ?></h1>
   

      <div class="inlin wow fadeInDown">
        <?= __('Shorten, Share & Earn Money') ?>
      </div>
      <div class="inlin-1 wow fadeInUp">
        <?= __('Shorten, share and track every link with {0}, the best URL shortener in the world.', h(get_option('site_name'))) ?>
      </div>
      <div class="row wow fadeInUp">
        <div class="col-sm-8 col-sm-offset-2">
          <?php if (get_option('home_shortening') == 'yes') : ?>
          <?= $this->element('shorten'); ?>
          <?php endif; ?>
        </div>
      </div>
      
      <div class="wow fadeInUp">
      <?php
if (null !== $this->request->session()->read('Auth.User.id')) {
?><a href="/member/dashboard" class=""><button class="btn-mn ">Dashboard</button></a><?php
} else {
?><a href="/auth/signup" class=""><button class="btn-mn ">Register</button></a><?php
}?> </div>

    </div>
  </div>  
</header>


<section>
  <div class="container text-center" style="width:85%;">
    <div class="section-title ">
      <h2 class="section-heading lable-1 wow fadeInUp">Shorten & get paid in 3 easy steps!
      </h2>
      <h3 class="section-subheading wow fadeInDown">
        <?= __('{0} makes you shorten and track your links. In addition, it rewards you for every single link at the same time.', h(get_option('site_name'))) ?>
      </h3>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <div class="step step1 wow fadeInLeft">
          <div class="stepimg">
            <i class="ms-step1">
            </i>
          </div>
          <h4 class="stepheading">
            <?= __('1 - Create an account') ?>
          </h4>
          <div class="stepnum">
            <p>
              <?= __('Create your account in {0}, so you can get all the great features for free!', h(get_option('site_name'))) ?>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="step step2 wow fadeInUp">
          <div class="stepimg">
            <i class="ms-step2">
            </i>
          </div>
          <h4 class="stepheading">
            <?= __('2 - Shorten your link') ?>
          </h4>
          <div class="stepnum">
            <p>Now you can shorten your links using any tool you want.
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="step step3 wow fadeInDown">
          <div class="stepimg">
            <i class="ms-step3">
            </i>
          </div>
          <h4 class="stepheading">
            <?= __('3 - Earn money') ?>
          </h4>
          <div class="stepnum">
            <p>Share your short links with your friends, forums or websites and get paid for every click.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="dim">
  <div class="oline">
    <div class="ht">
      <div class="colm text-center">
        <h2 class="lable-1 wow fadeInUp">Why to choose us!
        </h2>
      </div>
      <div class="tools">
        <div class="flex">
          <div class="list wow fadeInLeft">
            <div class="icon">
              <i class="ms-sprite-f1">
              </i>
            </div>
            <div class="info1">
              <h6>Who are we?
              </h6>
              <p>
                AdLinkFly is a completely free tool where you can create short links, which apart from you get paid! So, now you can make money online while managing and protecting your links.              </p>
            </div>
          </div>
          <div class="list wow fadeInDown">
            <div class="icon">
              <i class="ms-sprite-f2">
              </i>
            </div>
            <div class="info1">
              <h6>Easy steps to start earning!
              </h6>
              <p>It is just 3 steps: create an account, create a link and post it - for every visit, you earn money. Just that easy!
              </p>
            </div>
          </div>
                    <div class="list wow fadeInLeft">
            <div class="icon">
              <i class="ms-sprite-f3">
              </i>
            </div>
            <div class="info1">
              <h6>
                20% Referral bonus              </h6>
              <p>
                AdLinkFly referral program is a great way to earn extra money by sharing AdLinkFly with your friedns! Refer new users and receive 20% of their earnings for life!              </p>
            </div>
          </div>
                    <div class="list wow fadeInDown">
            <div class="icon">
              <i class="ms-sprite-f4">
              </i>
            </div>
            <div class="info1">
              <h6>Featured administration panel
              </h6>
              <p>Control and track all of your links using the administration panel with a click of a button.
              </p>
            </div>
          </div>
          <div class="list wow fadeInLeft">
            <div class="icon">
              <i class="ms-sprite-f5">
              </i>
            </div>
            <div class="info1">
              <h6>Detailed stats
              </h6>
              <p>Know your audience. Analyse in detail what brings you the most income and what strategies you should adapt.
              </p>
            </div>
          </div>
          <div class="list wow fadeInDown">
            <div class="icon">
              <i class="ms-sprite-f6">
              </i>
            </div>
            <div class="info1">
              <h6>Low minimum payout
              </h6>
              <p>You are required to earn only $5.00 in order to request a payment!
              </p>
            </div>
          </div>
          <div class="list wow fadeInLeft">
            <div class="icon">
              <i class="ms-sprite-f7">
              </i>
            </div>
            <div class="info1">
              <h6>Highest rates
              </h6>
              <p>Make the highest profit from your traffic with our increasing rates.
              </p>
            </div>
          </div>
          <div class="list wow fadeInDown">
            <div class="icon">
              <i class="ms-sprite-f8">
              </i>
            </div>
            <div class="info1">
              <h6>API
              </h6>
              <p>Shorten links more quickly with API and bring your creative and advanced ideas.
              </p>
            </div>
          </div>
          <div class="list wow fadeInLeft">
            <div class="icon">
              <i class="ms-sprite-f9">
              </i>
            </div>
            <div class="info1">
              <h6>Support
              </h6>
              <p>A dedicated support team is ready to help 24/7.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>





<section class=" state">
   <div class="row app_service_info">
                    <div class="col-lg-3 col-sm-6">
                        <div class="app_service_item wow flipInY" style="visibility: visible; animation-name: flipInY;">
                            <i class="fa fa-line-chart app_icon three" aria-hidden="true"></i>
                            <h5 class="pp">Total Clicks</h5>
                            <h2 class="cc"><?= $totalClicks ?></h2>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="app_service_item wow flipInY" style="visibility: visible; animation-name: flipInY;">
                            <i class="fa fa-link app_icon three" aria-hidden="true"></i>
                            <h5 class="pp">Total Links</h5>
                            <h2 class="cc"><?= $totalLinks ?></h2>
                        </div>
                    </div> 
                    <div class="col-lg-3 col-sm-6">
                        <div class="app_service_item wow flipInY" style="visibility: visible; animation-name: flipInY;">
                        <i class="fa fa-user-o app_icon three" aria-hidden="true"></i>
                            <h5 class="pp">Registered users</h5>
                            <h2 class="cc"><?= $totalUsers ?></h2>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="app_service_item wow flipInY" style="visibility: visible; animation-name: flipInY;">
                        <i class="fa fa-money app_icon three" aria-hidden="true"></i>
                            <h5 class="pp">Total Withdraws</h5>
                            <h2 class="cc">$3,500+</h2>
                        </div>
                    </div>
                </div>
</section>



<section class="reviews">
  <div class="container-fluid">
    <div class="high-rop">
      <i class="material-icons">format_quote
      </i>
      <div class="col-md-12">
        <div class="flex">
          <div class="top wow fadeInLeft">
            <h2>Customers
              <strong> Testimonials
              </strong>
            </h2>
          </div>
          <div class="testim wow fadeInUp">
            <h5>
              <i class="material-icons">account_circle
              </i> Rafael	Spencer 
              <small>United States
              </small>
            </h5>
            <p>The best website ever; I can shorten, track my links and earn money at the same time. Amazing!
            </p>
          </div>
          <div class="testim wow fadeInUp">
            <h5>
              <i class="material-icons">account_circle
              </i> Nasser Hamdan
              <small>Saudi Arabia
              </small>
            </h5>
            <p>
              <?= __('To be honest, I have never seen or found any better website than {0} I feel like I get double paid for the same job in other websites.', h(get_option('site_name'))) ?>
            </p>
          </div>
          <div class="testim wow fadeInUp">
            <h5>
              <i class="material-icons">account_circle
              </i> Jana	Griffith 
              <small>Australia
              </small>
            </h5>
            <p>
              <?= __('The good thing about {0} is that you can shorten links that you want others to see while getting paid for it.', h(get_option('site_name'))) ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>





<div id="message2" class="container-fluid message-area normal-bg">
  <div class="container2">
    <div class="row">
      <div class="col-sm-12 col-md-6">
        <div class="text-other-color1">Are you ready?
        </div>
        <div class="text-other-color2">Get started in under a minute.
        </div>
      </div>
      <div class="col-sm-12 col-md-6">
        <div class="buttons-holder">
          <?php
if (null !== $this->request->session()->read('Auth.User.id')) {
?>
          <a href="<?= build_main_domain_url('/member/dashboard'); ?>" class="ybtn ybtn-accent-color">
            <?= __('Dashboard') ?>
          </a>
          <a href="#popup1" class="ybtn ybtn-white ybtn-shadow">Contact us
          </a>
          <?php
} else {
?>
          <a href="<?= build_main_domain_url('/auth/signup'); ?>" class="ybtn ybtn-accent-color">
            <?= __('Create Your Account') ?>
          </a>
          <a href="<?= build_main_domain_url('/auth/signin'); ?>" class="ybtn ybtn-white ybtn-shadow">
            <?= __('Login') ?>
          </a>
          <?php
}
?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="payment-methods">
            <div class="container text-center">
                 <div class="col-md-12">
                    <span> <img src="/alpha_black_theme/img/paypal.png" alt=""> </span>
                    <span> <img src="/alpha_black_theme/img/bitcoin.png" alt=""> </span>
                     <span> <img src="/alpha_black_theme/img/payeer.png" alt=""> </span>
                   
                     </div>
            </div>
        </div>


<div id="popup1" class="overlay">
  <div class="popup">
    <a class="close" href="#">&times;
    </a>
    <div id="contact">
      <?= $this->element('contact'); ?>
    </div>
  </div>
</div>
