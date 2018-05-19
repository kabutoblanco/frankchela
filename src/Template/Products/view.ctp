<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Product Types'), ['controller' => 'ProductTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product Type'), ['controller' => 'ProductTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Product Categories'), ['controller' => 'ProductCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product Category'), ['controller' => 'ProductCategories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Event Products'), ['controller' => 'EventProducts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event Product'), ['controller' => 'EventProducts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Menu Products'), ['controller' => 'MenuProducts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Menu Product'), ['controller' => 'MenuProducts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="products view large-9 medium-8 columns content">
    <h3><?= h($product->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Product Type') ?></th>
            <td><?= $product->has('product_type') ? $this->Html->link($product->product_type->name, ['controller' => 'ProductTypes', 'action' => 'view', $product->product_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Product Category') ?></th>
            <td><?= $product->has('product_category') ? $this->Html->link($product->product_category->name, ['controller' => 'ProductCategories', 'action' => 'view', $product->product_category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($product->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($product->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($product->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Stock') ?></th>
            <td><?= $this->Number->format($product->stock) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Size') ?></th>
            <td><?= $this->Number->format($product->size) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cost') ?></th>
            <td><?= $this->Number->format($product->cost) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $this->Number->format($product->active) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($product->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($product->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Event Products') ?></h4>
        <?php if (!empty($product->event_products)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Event Id') ?></th>
                <th scope="col"><?= __('Product Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($product->event_products as $eventProducts): ?>
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
    <div class="related">
        <h4><?= __('Related Menu Products') ?></h4>
        <?php if (!empty($product->menu_products)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Menu Id') ?></th>
                <th scope="col"><?= __('Product Id') ?></th>
                <th scope="col"><?= __('Product Total') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($product->menu_products as $menuProducts): ?>
            <tr>
                <td><?= h($menuProducts->menu_id) ?></td>
                <td><?= h($menuProducts->product_id) ?></td>
                <td><?= h($menuProducts->product_total) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'MenuProducts', 'action' => 'view', $menuProducts->menu_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'MenuProducts', 'action' => 'edit', $menuProducts->menu_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'MenuProducts', 'action' => 'delete', $menuProducts->menu_id], ['confirm' => __('Are you sure you want to delete # {0}?', $menuProducts->menu_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
