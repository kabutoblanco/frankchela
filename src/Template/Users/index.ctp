<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
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
                    <?= $this->Html->link(__('Nuevo usuario'), ['action' => 'add']) ?>
                </div>
            </div>
        </div>
        <div class="dropdown p-b-10 p-l-5">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Secciones
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <div class="dropdown-item">
                    <?= $this->Html->link(__('Lugares'), ['controller' => 'places', 'action' => 'index']) ?>
                </div>
            </div>
        </div>
        </nav>
        <h3><?= __('Usuarios') ?></h3>
        <div class="table-responsive">
            <table  class="table table-dark">
                <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('id') ?></th>
                        <th><?= $this->Paginator->sort('role') ?></th>
                        <th><?= $this->Paginator->sort('first_name') ?></th>
                        <th><?= $this->Paginator->sort('last_name') ?></th>
                        <th><?= $this->Paginator->sort('username') ?></th>
                        <th><?= $this->Paginator->sort('phone') ?></th>
                        <th><?= $this->Paginator->sort('email') ?></th>
                        <th><?= $this->Paginator->sort('active') ?></th>
                        <th><?= $this->Paginator->sort('create') ?></th>
                        <th><?= $this->Paginator->sort('modified') ?></th>
                        <th class="actions"><?= __('Acciones') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= $this->Number->format($user->id) ?></td>
                        <td><?= $this->Number->format($user->role) ?></td>
                        <td><?= h($user->first_name) ?></td>
                        <td><?= h($user->last_name) ?></td>
                        <td><?= h($user->username) ?></td>
                        <td><?= h($user->phone) ?></td>
                        <td><?= h($user->email) ?></td>
                        <td><?= $this->Number->format($user->active) ?></td>
                        <td><?= h($user->created) ?></td>
                        <td><?= h($user->modified) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Ver'), ['action' => 'view', $user->id]) ?>
                            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id]) ?>
                            <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
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
