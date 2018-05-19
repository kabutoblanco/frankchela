<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PlaceReservation $placeReservation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Place Reservations'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Places'), ['controller' => 'Places', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Place'), ['controller' => 'Places', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="placeReservations form large-9 medium-8 columns content">
    <?= $this->Form->create($placeReservation) ?>
    <fieldset>
        <legend><?= __('Add Place Reservation') ?></legend>
        <?php
            echo $this->Form->control('place_id', ['options' => $places]);
            echo $this->Form->control('active');
            echo $this->Form->control('started');
            echo $this->Form->control('ended');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
