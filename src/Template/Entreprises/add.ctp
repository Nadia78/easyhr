<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Entreprises'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="entreprises form large-9 medium-8 columns content">
    <?= $this->Form->create($entreprise) ?>
    <fieldset>
        <legend><?= __('Add Entreprise') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('address');
            echo $this->Form->input('zipcode');
            echo $this->Form->input('city');
            echo $this->Form->input('country');
            echo $this->Form->input('SIRET');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
