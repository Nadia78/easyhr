<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Profil'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="profil index large-9 medium-8 columns content">
    <h3><?= __('Profil') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('urlSS') ?></th>
                <th><?= $this->Paginator->sort('urlFiscalite') ?></th>
                <th><?= $this->Paginator->sort('urlAttestation') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($profil as $profil): ?>
            <tr>
                <td><?= $this->Number->format($profil->id) ?></td>
                <td><?= h($profil->urlSS) ?></td>
                <td><?= h($profil->urlFiscalite) ?></td>
                <td><?= h($profil->urlAttestation) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $profil->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $profil->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $profil->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profil->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
