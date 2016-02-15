<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Entreprise'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="entreprises index large-9 medium-8 columns content">
    <h3><?= __('Entreprises') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('address') ?></th>
                <th><?= $this->Paginator->sort('zipcode') ?></th>
                <th><?= $this->Paginator->sort('city') ?></th>
                <th><?= $this->Paginator->sort('country') ?></th>
                <th><?= $this->Paginator->sort('SIRET') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($entreprises as $entreprise): ?>
            <tr>
                <td><?= $this->Number->format($entreprise->Id) ?></td>
                <td><?= h($entreprise->name) ?></td>
                <td><?= h($entreprise->address) ?></td>
                <td><?= h($entreprise->zipcode) ?></td>
                <td><?= h($entreprise->city) ?></td>
                <td><?= h($entreprise->country) ?></td>
                <td><?= $this->Number->format($entreprise->SIRET) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $entreprise->Id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $entreprise->Id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $entreprise->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $entreprise->Id)]) ?>
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
