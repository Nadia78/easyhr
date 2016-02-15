<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $profil->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $profil->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Profil'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="profil form large-9 medium-8 columns content">
    <?= $this->Form->create($profil) ?>
    <fieldset>
        <legend><?= __('Edit Profil') ?></legend>
        <?php
            echo $this->Form->input('urlSS');
            echo $this->Form->input('urlFiscalite');
            echo $this->Form->input('urlAttestation');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
