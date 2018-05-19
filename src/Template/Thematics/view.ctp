<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Thematic $thematic
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Thematic'), ['action' => 'edit', $thematic->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Thematic'), ['action' => 'delete', $thematic->id], ['confirm' => __('Are you sure you want to delete # {0}?', $thematic->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Thematics'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Thematic'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="thematics view large-9 medium-8 columns content">
    <h3><?= h($thematic->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($thematic->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($thematic->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($thematic->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $this->Number->format($thematic->active) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($thematic->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($thematic->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Events') ?></h4>
        <?php if (!empty($thematic->events)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Place Reservation Id') ?></th>
                <th scope="col"><?= __('Event Type Id') ?></th>
                <th scope="col"><?= __('Thematic Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Phone') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Cost') ?></th>
                <th scope="col"><?= __('Active') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Started') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($thematic->events as $events): ?>
            <tr>
                <td><?= h($events->id) ?></td>
                <td><?= h($events->place_reservation_id) ?></td>
                <td><?= h($events->event_type_id) ?></td>
                <td><?= h($events->thematic_id) ?></td>
                <td><?= h($events->name) ?></td>
                <td><?= h($events->phone) ?></td>
                <td><?= h($events->email) ?></td>
                <td><?= h($events->cost) ?></td>
                <td><?= h($events->active) ?></td>
                <td><?= h($events->created) ?></td>
                <td><?= h($events->modified) ?></td>
                <td><?= h($events->started) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Events', 'action' => 'view', $events->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Events', 'action' => 'edit', $events->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Events', 'action' => 'delete', $events->id], ['confirm' => __('Are you sure you want to delete # {0}?', $events->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
