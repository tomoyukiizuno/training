<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Sample $sample
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('サイドメニュー') ?></li>
        <li><?= $this->Html->link(__('編集'), ['action' => 'edit', $sample->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('削除'), ['action' => 'delete', $sample->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $sample->ID)]) ?> </li>
        <li><?= $this->Html->link(__('ホーム'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('新規追加'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sample view large-9 medium-8 columns content">
    <h3><?= h($sample->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($sample->ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Score') ?></th>
            <td><?= $this->Number->format($sample->score) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($sample->name)); ?>
    </div>
</div>
