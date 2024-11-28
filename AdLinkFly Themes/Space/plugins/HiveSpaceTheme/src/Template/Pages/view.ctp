<?php
$this->assign('title', ($page->meta_title) ?: $page->title);
$this->assign('description', $page->meta_description);
$this->assign('content_title', $page->title);

?>

<!-- Header -->
 <div class="effectiv">
			       </div>
</header>
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
    <div class="container">
        
        <div class="col-md-12">
        	<h2 class="title"><?= h($page->title) ?></h2>
        </div>
    </div>
    <section id="services">
    
    <div class="container">
        
        <?= $page->content ?>
    </div>
</section>
    </section>


