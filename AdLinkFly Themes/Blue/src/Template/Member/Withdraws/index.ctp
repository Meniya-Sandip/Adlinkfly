<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Withdraw[]|\Cake\Collection\CollectionInterface $withdraws
 * @var \App\Model\Entity\User $user
 */
$this->assign('title', __('Withdraw Funds'));
$this->assign('description', '');
$this->assign('content_title', __('Withdraw Funds'));
?>

<?php
$statuses = [
    1 => __('Approved'),
    2 => __('Pending'),
    3 => __('Complete'),
    4 => __('Cancelled'),
    5 => __('Returned'),
];

$withdrawal_methods = array_column_polyfill(get_withdrawal_methods(), 'name', 'id');
?>

<div class="row">
    
<!-- ! -->
<div class="col-sm-4 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="d-flex align-items-center justify-content-md-center">
        <i class="mdi mdi-cash-usd icon-lg text-success">
        </i>
        <div class="ml-3">
          <p class="mb-0"><?= __('Available Balance') ?></p>
          <h6><?= display_price_currency($user->publisher_earnings + $user->referral_earnings); ?></h6>
          </h6>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-sm-4 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="d-flex align-items-center justify-content-md-center">
        <i class="mdi mdi-alert-octagram icon-lg text-warning">
        </i>
        <div class="ml-3">
          <p class="mb-0"><?= __('Pending Withdrawn') ?></p>
          <h6><?= display_price_currency($pending_withdrawn); ?></h6>
          </h6>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-sm-4 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="d-flex align-items-center justify-content-md-center">
        <i class="mdi mdi-approval icon-lg text-info">
        </i>
        <div class="ml-3">
         <p class="mb-0"><?= __('Total Withdraw') ?></p>
          <h6><?= display_price_currency($total_withdrawn); ?></h6>
          </h6>
        </div>
      </div>
    </div>
  </div>
</div>

</div> <!-- /row -->


<div class="box box-primary">
    <div class="box-body">
        <?php if ((bool)get_option('enable_withdraw', 1)) : ?>
            <div class="text-center">
                <?= $this->Form->postLink(
                    __('Withdraw'),
                    ['action' => 'request'],
                    ['confirm' => __('Are you sure?'), 'class' => 'btn btn-success btn-lg']
                ); ?>
            </div>

            <hr>

            <p>
                <?= __(
                    "When your account reaches the minimum amount or more, you may request your " .
                    "earnings by clicking the above button. The payment is then sent to your withdraw account during " .
                    "business days no longer than {0} days after requesting. Please do not contact us regarding " .
                    "payments before due dates.", get_option('withdraw_days', 4)
                ) ?>
            </p>

            <p>
                <?= __(
                    'In order to receive your payments you need to fill your payment method and payment ID ' .
                    '<a href="{0}">here</a> if you haven\'t done so. You are also requested to fill all the required ' .
                    'fields in the Account Details section with accurate data.',
                    $this->Url->build(['controller' => 'Users', 'action' => 'profile', 'prefix' => 'member'])
                ) ?>
            </p>

            <hr>
        <?php endif; ?>

        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id', __('ID')) ?></th>
                    <th><?= $this->Paginator->sort('created', __('Date')) ?></th>
                    <th><?= __('Status') ?></th>
                    <th><?= $this->Paginator->sort('publisher_earnings', __('Publisher Earnings')) ?></th>
                    <?php if ((bool)get_option('enable_referrals', 1)) : ?>
                        <th><?= $this->Paginator->sort('referral_earnings', __('Referral Earnings')) ?></th>
                    <?php endif; ?>
                    <th><?= __('Total Amount') ?></th>
                    <th><?= __('Withdrawal Method') ?></th>
                    <th><?= __('Withdrawal Account') ?></th>
                </tr>
                </thead>
                <?php foreach ($withdraws as $withdraw) : ?>
                    <tr>
                        <td><?= $withdraw->id ?></td>
                        <td><?= display_date_timezone($withdraw->created); ?></td>
                        <td><?= $statuses[$withdraw->status] ?></td>
                        <td><?= display_price_currency($withdraw->publisher_earnings); ?></td>
                        <?php if ((bool)get_option('enable_referrals', 1)) : ?>
                            <td><?= display_price_currency($withdraw->referral_earnings); ?></td>
                        <?php endif; ?>
                        <td><?= display_price_currency($withdraw->amount); ?></td>
                        <td><?= (isset($withdrawal_methods[$withdraw->method])) ?
                                $withdrawal_methods[$withdraw->method] : $withdraw->method ?></td>
                        <td><?= nl2br(h($withdraw->account)); ?></td>
                    </tr>
                <?php endforeach; ?>
                <?php unset($withdraw); ?>
            </table>
        </div>

        <hr>

        <ul>
            <li><?= __("Pending: The payment is being checked by our team.") ?></li>
            <li><?= __("Approved: The payment has been approved and is waiting to be sent.") ?></li>
            <li><?= __("Complete: The payment has been successfully sent to your payment account.") ?></li>
            <li><?= __("Cancelled: The payment has been cancelled.") ?></li>
            <li><?= __("Returned: The payment has been returned to your account.") ?></li>
        </ul>
    </div><!-- /.box-body -->

<ul class="pagination">
    <?php
    $this->Paginator->setTemplates([
        'ellipsis' => '<li><a href="javascript: void(0)">...</a></li>',
    ]);

    if ($this->Paginator->hasPrev()) {
        echo $this->Paginator->prev('«');
    }

    echo $this->Paginator->numbers([
        'modulus' => 4,
        'first' => 2,
        'last' => 2,
    ]);

    if ($this->Paginator->hasNext()) {
        echo $this->Paginator->next('»');
    }
    ?>
</ul>
