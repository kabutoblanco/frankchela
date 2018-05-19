<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $product->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Product Types'), ['controller' => 'ProductTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product Type'), ['controller' => 'ProductTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Product Categories'), ['controller' => 'ProductCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product Category'), ['controller' => 'ProductCategories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Event Products'), ['controller' => 'EventProducts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event Product'), ['controller' => 'EventProducts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Menu Products'), ['controller' => 'MenuProducts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Menu Product'), ['controller' => 'MenuProducts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="products form large-9 medium-8 columns content">
    <?= $this->Form->create($product) ?>
    <fieldset>
        <legend><?= __('Edit Product') ?></legend>
        <?php
            echo $this->Form->control('product_type_id', ['options' => $productTypes]);
            echo $this->Form->control('product_category_id', ['options' => $productCategories]);
            echo $this->Form->control('name');
            echo $this->Form->control('stock');
            echo $this->Form->control('size');
            echo $this->Form->control('cost');
            echo $this->Form->control('description');
            echo $this->Form->control('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
