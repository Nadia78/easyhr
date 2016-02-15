<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Entreprise'), ['action' => 'edit', $entreprise->Id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Entreprise'), ['action' => 'delete', $entreprise->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $entreprise->Id)]) ?> </li>
        <li><?= $this->Html->link(__('List Entreprises'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Entreprise'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="entreprises view large-9 medium-8 columns content">
    <h3><?= h($entreprise->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($entreprise->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Address') ?></th>
            <td><?= h($entreprise->address) ?></td>
        </tr>
        <tr>
            <th><?= __('Zipcode') ?></th>
            <td><?= h($entreprise->zipcode) ?></td>
        </tr>
        <tr>
            <th><?= __('City') ?></th>
            <td><?= h($entreprise->city) ?></td>
        </tr>
        <tr>
            <th><?= __('Country') ?></th>
            <td><?= h($entreprise->country) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($entreprise->Id) ?></td>
        </tr>
        <tr>
            <th><?= __('SIRET') ?></th>
            <td><?= $this->Number->format($entreprise->SIRET) ?></td>
        </tr>
    </table>
</div>
