<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?></li>
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
<div class="products index large-9 medium-8 columns content">
    <h3><?= __('Products') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('product_type_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('product_category_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('stock') ?></th>
                <th scope="col"><?= $this->Paginator->sort('size') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cost') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $this->Number->format($product->id) ?></td>
                <td><?= $product->has('product_type') ? $this->Html->link($product->product_type->name, ['controller' => 'ProductTypes', 'action' => 'view', $product->product_type->id]) : '' ?></td>
                <td><?= $product->has('product_category') ? $this->Html->link($product->product_category->name, ['controller' => 'ProductCategories', 'action' => 'view', $product->product_category->id]) : '' ?></td>
                <td><?= h($product->name) ?></td>
                <td><?= $this->Number->format($product->stock) ?></td>
                <td><?= $this->Number->format($product->size) ?></td>
                <td><?= $this->Number->format($product->cost) ?></td>
                <td><?= h($product->description) ?></td>
                <td><?= $this->Number->format($product->active) ?></td>
                <td><?= h($product->created) ?></td>
                <td><?= h($product->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $product->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?>
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
