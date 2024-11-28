<?php
$this->assign('title', ($page->meta_title) ?: $page->title);
$this->assign('description', $page->meta_description);
$this->assign('content_title', $page->title);

?>

<!-- Header -->
 <div class="effectiv">
			<img src="/soft_theme/img/bg.svg" alt=""/>         </div>
</header>
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
