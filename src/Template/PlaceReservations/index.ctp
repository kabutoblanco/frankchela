<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PlaceReservation[]|\Cake\Collection\CollectionInterface $placeReservations
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Place Reservation'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Places'), ['controller' => 'Places', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Place'), ['controller' => 'Places', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="placeReservations index large-9 medium-8 columns content">
    <h3><?= __('Place Reservations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('place_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('started') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ended') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($placeReservations as $placeReservation): ?>
            <tr>
                <td><?= $this->Number->format($placeReservation->id) ?></td>
                <td><?= $placeReservation->has('place') ? $this->Html->link($placeReservation->place->name, ['controller' => 'Places', 'action' => 'view', $placeReservation->place->id]) : '' ?></td>
                <td><?= $this->Number->format($placeReservation->active) ?></td>
                <td><?= h($placeReservation->created) ?></td>
                <td><?= h($placeReservation->modified) ?></td>
                <td><?= h($placeReservation->started) ?></td>
                <td><?= h($placeReservation->ended) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $placeReservation->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $placeReservation->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $placeReservation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $placeReservation->id)]) ?>
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
