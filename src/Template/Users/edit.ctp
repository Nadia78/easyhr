<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Entreprises'), ['controller' => 'Entreprises', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Entreprise'), ['controller' => 'Entreprises', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <?php
            echo $this->Form->input('role');
            echo $this->Form->input('name');
            echo $this->Form->input('firstname');
            echo $this->Form->input('email');
            echo $this->Form->input('password');
            echo $this->Form->input('poste');
            echo $this->Form->input('numberSS');
            echo $this->Form->input('numberFisc');
            echo $this->Form->input('entreprises_id', ['options' => $entreprises]);
            echo $this->Form->input('profil_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
