<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Account $account
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Account'), ['action' => 'edit', $account->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Account'), ['action' => 'delete', $account->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $account->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Account'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Account'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="account view large-9 medium-8 columns content">
    <h3><?= h($account->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($account->ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Score') ?></th>
            <td><?= $this->Number->format($account->score) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($account->name)); ?>
    </div>
</div>
