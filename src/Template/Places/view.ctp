<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Place $place
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Place'), ['action' => 'edit', $place->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Place'), ['action' => 'delete', $place->id], ['confirm' => __('Are you sure you want to delete # {0}?', $place->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Places'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Place'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Place Reservations'), ['controller' => 'PlaceReservations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Place Reservation'), ['controller' => 'PlaceReservations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="places view large-9 medium-8 columns content">
    <h3><?= h($place->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($place->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($place->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($place->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Size') ?></th>
            <td><?= $this->Number->format($place->size) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $this->Number->format($place->active) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($place->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($place->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Time Open') ?></th>
            <td><?= h($place->time_open) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Time Close') ?></th>
            <td><?= h($place->time_close) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Place Reservations') ?></h4>
        <?php if (!empty($place->place_reservations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Place Id') ?></th>
                <th scope="col"><?= __('Active') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Started') ?></th>
                <th scope="col"><?= __('Ended') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($place->place_reservations as $placeReservations): ?>
            <tr>
                <td><?= h($placeReservations->id) ?></td>
                <td><?= h($placeReservations->place_id) ?></td>
                <td><?= h($placeReservations->active) ?></td>
                <td><?= h($placeReservations->created) ?></td>
                <td><?= h($placeReservations->modified) ?></td>
                <td><?= h($placeReservations->started) ?></td>
                <td><?= h($placeReservations->ended) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'PlaceReservations', 'action' => 'view', $placeReservations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'PlaceReservations', 'action' => 'edit', $placeReservations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'PlaceReservations', 'action' => 'delete', $placeReservations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $placeReservations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
