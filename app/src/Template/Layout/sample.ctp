<!DOCTYPE html>
<html lang="ja">
<head>
<title><?= h($this->fetch('title')) ?></title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<?php
echo $this->Html->css('sample.css');
echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');
?>
</head>
<body>
<!-- <div id="header"><?= _($header) ?></div>
 
<?= $this->fetch('content') ?>
 
<div id="footer"><?= _($footer) ?></div> -->
<div class="container">
	<div class="header"><h3><?= __('アカウント') ?></h3></div>
	<nav class="large-3 medium-4 columns" id="actions-sidebar">
	    <ul class="side-nav">
	        <li class="heading"><?= __('サイドメニュー') ?></li>
	        <li><?= $this->Html->link(__('新規追加'), ['action' => 'add']) ?></li>
	    </ul>
	</nav>
	<div class="sample index large-9 medium-8 columns content">
	    <table cellpadding="0" cellspacing="0">
	        <thead>
	            <tr>
	                <th scope="col"><?= $this->Paginator->sort('アカウント番号') ?></th>
	                <th scope="col"><?= $this->Paginator->sort('アカウント名') ?></th>
	                <th scope="col" class="actions"><?= __('詳細') ?></th>
	            </tr>
	        </thead>
	        <tbody>
	            <?php foreach ($sample as $sample): ?>
	            <tr>
	                <td><?= $this->Number->format($sample->ID) ?></td>
	                <td><?= $this->Number->format($sample->score) ?></td>
	                <td class="actions">
	                    <?= $this->Html->link(__('詳細'), ['action' => 'view', $sample->ID]) ?>
	                    <?= $this->Html->link(__('編集'), ['action' => 'edit', $sample->ID]) ?>
	                    <?= $this->Form->postLink(__('削除'), ['action' => 'delete', $sample->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $sample->ID)]) ?>
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
</div>
</body>
</html>