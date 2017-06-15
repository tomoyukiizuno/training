<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Account[]|\Cake\Collection\CollectionInterface $account
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Account'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="account index large-9 medium-8 columns content">
    <h3><?= __('Account') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('score') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($account as $account): ?>
            <tr>
                <td><?= $this->Number->format($account->ID) ?></td>
                <td><?= $this->Number->format($account->score) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $account->ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $account->ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $account->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $account->ID)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
