<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Profil'), ['action' => 'edit', $profil->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Profil'), ['action' => 'delete', $profil->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profil->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Profil'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Profil'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="profil view large-9 medium-8 columns content">
    <h3><?= h($profil->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('UrlSS') ?></th>
            <td><?= h($profil->urlSS) ?></td>
        </tr>
        <tr>
            <th><?= __('UrlFiscalite') ?></th>
            <td><?= h($profil->urlFiscalite) ?></td>
        </tr>
        <tr>
            <th><?= __('UrlAttestation') ?></th>
            <td><?= h($profil->urlAttestation) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($profil->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($profil->users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Role') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Firstname') ?></th>
                <th><?= __('Email') ?></th>
                <th><?= __('Password') ?></th>
                <th><?= __('Poste') ?></th>
                <th><?= __('NumberSS') ?></th>
                <th><?= __('NumberFisc') ?></th>
                <th><?= __('Entreprises Id') ?></th>
                <th><?= __('Profil Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($profil->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->role) ?></td>
                <td><?= h($users->name) ?></td>
                <td><?= h($users->firstname) ?></td>
                <td><?= h($users->email) ?></td>
                <td><?= h($users->password) ?></td>
                <td><?= h($users->poste) ?></td>
                <td><?= h($users->numberSS) ?></td>
                <td><?= h($users->numberFisc) ?></td>
                <td><?= h($users->entreprises_id) ?></td>
                <td><?= h($users->profil_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
