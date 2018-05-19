<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event $event
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $event->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Events'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Place Reservations'), ['controller' => 'PlaceReservations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Place Reservation'), ['controller' => 'PlaceReservations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Event Types'), ['controller' => 'EventTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event Type'), ['controller' => 'EventTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Thematics'), ['controller' => 'Thematics', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Thematic'), ['controller' => 'Thematics', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Event Menus'), ['controller' => 'EventMenus', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event Menu'), ['controller' => 'EventMenus', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Event Products'), ['controller' => 'EventProducts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event Product'), ['controller' => 'EventProducts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="events form large-9 medium-8 columns content">
    <?= $this->Form->create($event) ?>
    <fieldset>
        <legend><?= __('Edit Event') ?></legend>
        <?php
            echo $this->Form->control('place_reservation_id', ['options' => $placeReservations]);
            echo $this->Form->control('event_type_id', ['options' => $eventTypes]);
            echo $this->Form->control('thematic_id', ['options' => $thematics]);
            echo $this->Form->control('name');
            echo $this->Form->control('phone');
            echo $this->Form->control('email');
            echo $this->Form->control('cost');
            echo $this->Form->control('active');
            echo $this->Form->control('started');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
