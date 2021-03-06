<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Entreprises'), ['controller' => 'Entreprises', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Entreprise'), ['controller' => 'Entreprises', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th><?= __('Poste') ?></th>
            <td><?= h($user->poste) ?></td>
        </tr>
        <tr>
            <th><?= __('NumberSS') ?></th>
            <td><?= h($user->numberSS) ?></td>
        </tr>
        <tr>
            <th><?= __('NumberFisc') ?></th>
            <td><?= h($user->numberFisc) ?></td>
        </tr>
        <tr>
            <th><?= __('Entreprise') ?></th>
            <td><?= $user->has('entreprise') ? $this->Html->link($user->entreprise->name, ['controller' => 'Entreprises', 'action' => 'view', $user->entreprise->Id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Role') ?></th>
            <td><?= $this->Number->format($user->role) ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= $this->Number->format($user->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Firstname') ?></th>
            <td><?= $this->Number->format($user->firstname) ?></td>
        </tr>
        <tr>
            <th><?= __('Profil Id') ?></th>
            <td><?= $this->Number->format($user->profil_id) ?></td>
        </tr>
    </table>
</div>
