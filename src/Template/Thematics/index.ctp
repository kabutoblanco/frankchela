<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Thematic[]|\Cake\Collection\CollectionInterface $thematics
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Thematic'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="thematics index large-9 medium-8 columns content">
    <h3><?= __('Thematics') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($thematics as $thematic): ?>
            <tr>
                <td><?= $this->Number->format($thematic->id) ?></td>
                <td><?= h($thematic->name) ?></td>
                <td><?= h($thematic->description) ?></td>
                <td><?= $this->Number->format($thematic->active) ?></td>
                <td><?= h($thematic->created) ?></td>
                <td><?= h($thematic->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $thematic->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $thematic->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $thematic->id], ['confirm' => __('Are you sure you want to delete # {0}?', $thematic->id)]) ?>
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
