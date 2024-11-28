<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Link $link
 */
?>
<?php
$this->assign('title', __('Dashboard'));
$this->assign('description', '');
$this->assign('content_title', __('Dashboard'));
?>



<div class="row">

      <div class="col-md-6 col-lg-3 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="d-flex align-items-center justify-content-md-center">
        <i class="mdi mdi-cash-usd icon-lg text-warning">
        </i>
        <div class="ml-3">
          <p class="mb-0"><?= __('Owner Earnings') ?></p>
          <h6><?= display_price_currency($owner_earnings); ?></h6>
        </div>
      </div>
    </div>
  </div>
 </div>
    
     <div class="col-md-6 col-lg-3 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="d-flex align-items-center justify-content-md-center">
        <i class="mdi mdi-account-multiple-outline icon-lg text-success">
        </i>
        <div class="ml-3">
          <p class="mb-0"><?= __('Publisher Earnings') ?></p>
          <h6><?= display_price_currency($publisher_earnings); ?></h6>
        </div>
      </div>
    </div>
  </div>
 </div>
   

        <div class="col-md-6 col-lg-3 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="d-flex align-items-center justify-content-md-center">
        <i class="mdi mdi-account-switch icon-lg text-info">
        </i>
        <div class="ml-3">
          <p class="mb-0"><?= __('Referral Earnings') ?></p>
          <h6><?= display_price_currency($referral_earnings); ?></h6>
        </div>
      </div>
    </div>
  </div>
 </div>
   
        <div class="col-md-6 col-lg-3 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="d-flex align-items-center justify-content-md-center">
        <i class="mdi mdi-chart-areaspline icon-lg text-success">
        </i>
        <div class="ml-3">
          <p class="mb-0"><?= __('Total Views') ?></p>
          <h6><?= $total_views ?></h6>
        </div>
      </div>
    </div>
  </div>
 </div>

</div>

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><?= __('Statistics') ?></h3>
    </div>
    <div class="box-body no-padding">
        <div id="chart_div" style="position: relative; height: 300px; width: 100%;"></div>
        <div class="small text-right" style="padding-right: 10px;">
            <?= __('Data is reported in {0} timezone', get_option('timezone', 'UTC')) ?>
        </div>
</div></div>

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
                <?php foreach ($CurrentMonthDays as $key => $value): ?>
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


<div class="text-center">
    <div style="display: inline-block;">
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
            'style' => 'width: 300px;',
        ]);
        ?>

        <?= $this->Form->button(__('Submit'), ['class' => 'hidden']); ?>

        <?= $this->Form->end(); ?>
    </div>
</div>

<?php
/*
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
*/
?>

<?php $this->start('scriptBottom'); ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/almasaeed2010/AdminLTE@v2.3.11/plugins/morris/morris.css">
<script src="https://cdn.jsdelivr.net/gh/DmitryBaranovskiy/raphael@v2.1.0/raphael-min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/almasaeed2010/AdminLTE@v2.3.11/plugins/morris/morris.min.js"
        type="text/javascript"></script>

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
      lineColors: ['#605ca8'],
      lineWidth: 2,
      hideHover: 'auto',
      smooth: false,
    });
  });
</script>

<?php $this->end(); ?>
