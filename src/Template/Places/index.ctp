<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Place[]|\Cake\Collection\CollectionInterface $places
 */
?>
<section class="section-reservation bg1-pattern p-t-180 p-b-113">
    <div class="container">
        <nav class="nav">
            <div class="dropdown p-b-10">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Acciones
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-item">
                        <?= $this->Html->link(__('Nuevo lugar'), ['action' => 'add']) ?>
                    </div>
                </div>
            </div>
            <div class="dropdown p-b-10 p-l-5">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Secciones
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-item">
                        <?= $this->Html->link(__('Usuarios'), ['controller' => 'users', 'action' => 'index']) ?>
                    </div>
                </div>
            </div>
        </nav>
        <h3><?= __('Lugares') ?></h3>
        <div class="table-responsive">
            <table  class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('size') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('time_open') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('time_close') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($places as $place): ?>
                    <tr>
                        <td><?= $this->Number->format($place->id) ?></td>
                        <td><?= h($place->name) ?></td>
                        <td><?= h($place->address) ?></td>
                        <td><?= $this->Number->format($place->size) ?></td>
                        <td><?= $this->Number->format($place->active) ?></td>
                        <td><?= h($place->created) ?></td>
                        <td><?= h($place->modified) ?></td>
                        <td><?= h($place->time_open) ?></td>
                        <td><?= h($place->time_close) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $place->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $place->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $place->id], ['confirm' => __('Are you sure you want to delete # {0}?', $place->id)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
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
</section>
