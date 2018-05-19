<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Thematic $thematic
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $thematic->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $thematic->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Thematics'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="thematics form large-9 medium-8 columns content">
    <?= $this->Form->create($thematic) ?>
    <fieldset>
        <legend><?= __('Edit Thematic') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('description');
            echo $this->Form->control('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
