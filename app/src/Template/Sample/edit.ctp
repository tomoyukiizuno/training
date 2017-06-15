<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sample->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sample->ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Sample'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="sample form large-9 medium-8 columns content">
    <?= $this->Form->create($sample) ?>
    <fieldset>
        <legend><?= __('Edit Sample') ?></legend>
        <?php
            echo $this->Form->control('score');
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
