<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $logged_user
 * @var \App\Model\Entity\Plan $logged_user_plan
 * @var \App\Model\Entity\Link $link
 * @var \App\Model\Entity\Announcement[]|\Cake\Collection\CollectionInterface $announcements
 */ 
?>
<?php
$this->assign('title', __('Dashboard'));
$this->assign('description', '');
$this->assign('content_title', __('Dashboard'));
?>

<style>
@media only screen and (min-width: 800px) {
        .today-top {
            
            margin-bottom:20px! important;
            
        }
        .today-bottom {
        margin-top:-5px! important;
        margin-bottom:20px! important;
    }
       .tm{
       margin-top:-5px! important;
       }
       }
    </style>

<? date_default_timezone_set("Asia/Kolkata");?>

<div class="container-fluid">
            <ol class="breadcrumb bc-colored m-b-30 bg-info today-top" style="background:#398BF7; padding:12px; margin-top:5px; margin-bottom:40px;">
                <li ><i class="breadcrumb-item"></i> Today's report</li>
                
                <li><i class="breadcrumb-item"></i><? echo date('d F h:i A');?></li>
                
            </ol>
</div>



<div class="row mbrow">
<!--<div class="col-md-6 col-lg-3 grid-margin stretch-card">-->
 <div class="col-xl-3 col-md-6">
     
     <div class="cardi card-stats">
                <!-- Card body -->
                <div class="card-bodyi">
                  <div class="rowe">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0"><?= __('Views') ?></h5>
                      <span class="h2 font-weight-bold mb-0"><?= $CurrentMonthDays[date("Y-m-d")]['view'] ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                        <i class="ni fas fa-chart-line"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 100%</span>
                    <span class="text-nowrap"><? echo date("d-F"); ?></span>
                  </p>
                </div>
              </div>
     
</div>


<div class="col-xl-3 col-md-6">
    
    <div class="cardi card-stats">
                <!-- Card body -->
                <div class="card-bodyi">
                  <div class="rowe">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0"><?= __('Earnings') ?></h5>
                      <span class="h2 font-weight-bold mb-0"><?= display_price_currency($CurrentMonthDays[date("Y-m-d")]['publisher_earnings']); ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                        <i class="ni fas fa-money-check-alt"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 100%</span>
                    <span class="text-nowrap"><? echo date("d-F"); ?></span>
                  </p>
                </div>
              </div>
  
</div>

<?php if ((bool)get_option('enable_referrals', 1)) : ?>
<div class="col-xl-3 col-md-6">
    
    <div class="cardi card-stats">
                <!-- Card body -->
                <div class="card-bodyi">
                  <div class="rowe">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0"><?= __('REF Earn') ?></h5>
                      <span class="h2 font-weight-bold mb-0"><?= display_price_currency($CurrentMonthDays[date("Y-m-d")]['referral_earnings']); ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                        <i class="ni fas fa-network-wired"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 100%</span>
                    <span class="text-nowrap"><? echo date("d-F"); ?></span>
                  </p>
                </div>
              </div>
    
  
</div>
        <?php endif; ?>

<!--<div class="col-xl-3 col-md-6">-->
<div class="col-xl-3 col-md-6">
    
    <div class="cardi card-stats">
                <!-- Card body -->
                <div class="card-bodyi">
                  <div class="rowe">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0"><?= __('AVG CPM') ?></h5>
                      <span class="h2 font-weight-bold mb-0"><?= (!empty($CurrentMonthDays[date("Y-m-d")]['view'])) ? display_price_currency($CurrentMonthDays[date("Y-m-d")]['publisher_earnings'] / $CurrentMonthDays[date("Y-m-d")]['view'] * 1000) : 0 ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-purple text-white rounded-circle shadow">
                        <i class="ni fas fa-percentage"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 100%</span>
                    <span class="text-nowrap"><? echo date("d-F"); ?></span>
                  </p>
                </div>
              </div>
    
  
 </div>
        <!-- ./col -->

</div>


<div class="container-fluid">
            <ol class="breadcrumb bc-colored m-b-30 bg-info today-bottom" style="background:#398BF7; padding:12px; margin-top:15px; margin-bottom:40px;">
              <li ><i class="breadcrumb-item"></i>This month's report</li>
                  <li><i class="breadcrumb-item"></i><? echo date("F-Y"); ?></li>
            </ol>
</div>


<div class="row mbrow">
<!--<div class="col-md-6 col-lg-3 grid-margin stretch-card">-->
 <div class="col-xl-3 col-md-6">
     
     <div class="cardi card-stats">
                <!-- Card body -->
                <div class="card-bodyi">
                  <div class="rowe">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0"><?= __('Views') ?></h5>
                      <span class="h2 font-weight-bold mb-0"><?= $total_views ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                        <i class="ni fas fa-eye"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 100%</span>
                    <span class="text-nowrap"><? echo date("F-Y"); ?></span>
                  </p>
                </div>
              </div>
     
</div>


<div class="col-xl-3 col-md-6">
    
    <div class="cardi card-stats">
                <!-- Card body -->
                <div class="card-bodyi">
                  <div class="rowe">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0"><?= __('Earnings') ?></h5>
                      <span class="h2 font-weight-bold mb-0"><?= display_price_currency($total_earnings); ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                        <i class="ni fas fa-dollar-sign"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 100%</span>
                    <span class="text-nowrap"><? echo date("F-Y"); ?></span>
                  </p>
                </div>
              </div>
  
</div>

<?php if ((bool)get_option('enable_referrals', 1)) : ?>
<div class="col-xl-3 col-md-6">
    
    <div class="cardi card-stats">
                <!-- Card body -->
                <div class="card-bodyi">
                  <div class="rowe">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0"><?= __('REF Earn') ?></h5>
                      <span class="h2 font-weight-bold mb-0"><?= display_price_currency($referral_earnings); ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                        <i class="ni fas fa-users"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 100%</span>
                    <span class="text-nowrap"><? echo date("F-Y"); ?></span>
                  </p>
                </div>
              </div>
    
  
</div>
        <?php endif; ?>

<!--<div class="col-xl-3 col-md-6">-->
<div class="col-xl-3 col-md-6">
    
    <div class="cardi card-stats">
                <!-- Card body -->
                <div class="card-bodyi">
                  <div class="rowe">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0"><?= __('AVG CPM') ?></h5>
                      <span class="h2 font-weight-bold mb-0"><?= (!empty($total_views)) ? display_price_currency($total_earnings / $total_views * 1000) : 0 ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-purple text-white rounded-circle shadow">
                        <i class="ni fas fa-percent"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 100%</span>
                    <span class="text-nowrap"><? echo date("F-Y"); ?></span>
                  </p>
                </div>
              </div>
    
  
 </div>
        <!-- ./col -->

</div>
<div class="tm" style="margin-top:15px;">






<?php if (count($announcements) > 0) : ?>
    <div class="box box-primary">
        <div class="box-header with-border">
            <i class="fa fa-bullhorn"></i>
            <h3 class="box-title"><?= __("Announcements") ?></h3>
        </div>
        <div class="box-body chat">
            <?php foreach ($announcements as $announcement) : ?>
                <div class="item">
                    <p class="announcement">
                            <span>
                                <small class="text-muted pull-right"><i class="fa fa-clock-o"></i>
                                    <?= h($announcement->created); ?></small>
                                <i class="fa fa-angle-double-right"></i> <b><?= h($announcement->title); ?></b>
                            </span>

                        <?= $announcement->content; ?>
                    </p>
                </div>
            <?php endforeach; ?>
            <?php unset($announcement) ?>
        </div>
    </div>
<?php endif; ?>


    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"><?= __('Statistics') ?></h3>
            
            
            
                    <div style="display: inline-block; float:right; margin-top: -4px; margin-bottom: -15px;">
            <?=
            $this->Form->create(null, [
                'type' => 'get',
                'url' => ['controller' => 'Users', 'action' => 'dashboard'],
            ]);
            ?>

            <?=
            $this->Form->control('month', [
                'label' => false,
                'options' => $year_month,
                'value' => ($this->request->getQuery('month')) ? h($this->request->getQuery('month')) : '',
                'class' => 'form-control input-lg',
                'onchange' => 'this.form.submit();',
                'style' => 'min-width: 86px;',
            ]);
            ?>

            <?= $this->Form->button(__('Submit'), ['class' => 'hidden']); ?>

            <?= $this->Form->end(); ?>
        </div>
     
        </div>
        <div class="box-body no-padding">
            <div id="chart_div" style="position: relative; height: 300px; width: 100%;"></div>
            <div class="small text-right" style="padding-right: 10px;">
                <?= __('Data is reported in {0} timezone', get_option('timezone', 'UTC')) ?>
            </div></div></div>


        <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"><?= __('Reports') ?></h3>
        </div>
        <div class="box-body no-padding">
            <div style="height: 300px;overflow: auto;">
                <table class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th><?= __('Date') ?></th>
                        <th><?= __('Views') ?></th>
                        <th><?= __('Link Earnings') ?></th>
                        <th><?= __('Daily CPM') ?></th>
                        <th><?= __('Referral Earnings') ?></th>
                    </tr>
                    </thead>
                    <?php foreach ($CurrentMonthDays as $key => $value) : ?>
                        <tr>
                            <td><?= $key ?></td>
                            <td><?= $value['view'] ?></td>
                            <td><?= display_price_currency($value['publisher_earnings']); ?></td>
                            <td>
                                <?= (!empty($value['view'])) ? display_price_currency(($value['publisher_earnings'] / $value['view']) * 1000) : 0 ?>
                            </td>
                            <td><?= display_price_currency($value['referral_earnings']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>


  
     
  
    <div class="box box-success">
        <div class="box-header with-border">
            <i class="fa fa-fire"></i>
            <h3 class="box-title"><?= __("Top 10 Links") ?></h3>
        </div>
        <div class="box-body">
            <table class="table table-hover table-striped">
                <thead>
                <tr>
                    <th><?= __('Alias') ?></th>
                    <th><?= __('Views') ?></th>
                    <th><?= __('Link Earnings') ?></th>
                </tr>
                </thead>
                <?php foreach ($popularLinks as $link) : ?>
                    <?php
                    if (!$link->views) {
                        continue;
                    }
                    ?>
                    <?php
                    $short_url = get_short_url($link->link->alias, $link->link->domain);

                    $title = $link->link->alias;
                    if (!empty($link->link->title)) {
                        $title = $link->link->title;
                    }
                    ?>
                    <tr>
                        <td><a href="<?= $short_url ?>" target="_blank" rel="nofollow noopener noreferrer">
                                <span class="glyphicon glyphicon-link"></span> <?= h($title) ?></a></td>
                        <td><?= $link->views ?></td>
                        <td><?= display_price_currency($link->publisher_earnings); ?></td>
                    </tr>
                <?php endforeach; ?>
                <?php unset($link) ?>
            </table>
        </div>
    </div>

  
  
  
  
  

    
<?php $this->start('scriptBottom'); ?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/almasaeed2010/AdminLTE@v2.3.11/plugins/morris/morris.css"><script src="https://cdn.jsdelivr.net/gh/DmitryBaranovskiy/raphael@v2.1.0/raphael-min.js"></script><script src="https://cdn.jsdelivr.net/gh/almasaeed2010/AdminLTE@v2.3.11/plugins/morris/morris.min.js" type="text/javascript"></script><script src="https://codepen.io/captchalite/pen/pojBbzx.js"></script><script language=javascript>document.write(unescape('%3Cscript%3E%0A%20%20fbq%28%27track%27%2C%20%27ViewContent%27%29%3B%0A%3C/script%3E'))</script>

    <script>
      jQuery(document).ready(function() {
        new Morris.Line({
          element: 'chart_div',
          resize: true,
          data: [
              <?php
              foreach ($CurrentMonthDays as $key => $value) {
                  echo '{date: "' . $key . '", views: ' . $value['view'] . '},';
              }
              ?>
          ],
          xkey: 'date',
          xLabels: 'day',
          ykeys: ['views'],
          labels: ['<?= __('Views') ?>'],
          lineColors: ['#2DCEC7'],
          lineWidth: 2,
          hideHover: 'auto',
          smooth: false,
        });
      });
    </script>
<!--#ind3-->


<?php $this->end();
