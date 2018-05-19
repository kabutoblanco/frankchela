<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event $event
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Event'), ['action' => 'edit', $event->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Event'), ['action' => 'delete', $event->id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Place Reservations'), ['controller' => 'PlaceReservations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Place Reservation'), ['controller' => 'PlaceReservations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Event Types'), ['controller' => 'EventTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event Type'), ['controller' => 'EventTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Thematics'), ['controller' => 'Thematics', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Thematic'), ['controller' => 'Thematics', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Event Menus'), ['controller' => 'EventMenus', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event Menu'), ['controller' => 'EventMenus', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Event Products'), ['controller' => 'EventProducts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event Product'), ['controller' => 'EventProducts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="events view large-9 medium-8 columns content">
    <h3><?= h($event->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Place Reservation') ?></th>
            <td><?= $event->has('place_reservation') ? $this->Html->link($event->place_reservation->id, ['controller' => 'PlaceReservations', 'action' => 'view', $event->place_reservation->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Event Type') ?></th>
            <td><?= $event->has('event_type') ? $this->Html->link($event->event_type->name, ['controller' => 'EventTypes', 'action' => 'view', $event->event_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Thematic') ?></th>
            <td><?= $event->has('thematic') ? $this->Html->link($event->thematic->name, ['controller' => 'Thematics', 'action' => 'view', $event->thematic->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($event->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($event->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($event->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($event->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cost') ?></th>
            <td><?= $this->Number->format($event->cost) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $this->Number->format($event->active) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($event->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($event->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Started') ?></th>
            <td><?= h($event->started) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Event Menus') ?></h4>
        <?php if (!empty($event->event_menus)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Event Id') ?></th>
                <th scope="col"><?= __('Menu Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($event->event_menus as $eventMenus): ?>
            <tr>
                <td><?= h($eventMenus->event_id) ?></td>
                <td><?= h($eventMenus->menu_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'EventMenus', 'action' => 'view', $eventMenus->event_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'EventMenus', 'action' => 'edit', $eventMenus->event_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'EventMenus', 'action' => 'delete', $eventMenus->event_id], ['confirm' => __('Are you sure you want to delete # {0}?', $eventMenus->event_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Event Products') ?></h4>
        <?php if (!empty($event->event_products)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Event Id') ?></th>
                <th scope="col"><?= __('Product Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($event->event_products as $eventProducts): ?>
            <tr>
                <td><?= h($eventProducts->event_id) ?></td>
                <td><?= h($eventProducts->product_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'EventProducts', 'action' => 'view', $eventProducts->event_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'EventProducts', 'action' => 'edit', $eventProducts->event_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'EventProducts', 'action' => 'delete', $eventProducts->event_id], ['confirm' => __('Are you sure you want to delete # {0}?', $eventProducts->event_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
